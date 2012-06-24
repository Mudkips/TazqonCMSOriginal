<?php
	class UserManager
	{
		private $users = array();
		private $ids = array();
		
		private $active_user = 0;
	
		public $valid = false;
	
		public function __Construct($email, $password, $cache = false)
		{
			if ($cache && self::IsLoggedIn())
			{
				$this->ids = $_SESSION['user']['manager']['ids'];
				$this->active_user = $_SESSION['user']['manager']['active_user'];
				
				foreach ($this->ids as $key => $id)
				{
					$this->users[$key] = new user($id);
				}
			}
			else
			{
				$result = Core::$DB->prepare('SELECT * FROM `characters` WHERE `email` = ? AND `password` = ?')->bind_param($email, $password)->execute();
			
				if ($result->num_rows < 1)
				{
					return;
				}
				
				$last_seen = 0;
				
				while ($data = $result->next_record())
				{
					$user = new User($data);
					
					if ($this->active_user === 0 || $last_seen < $user->last_seen)
					{
						$this->active_user = $user->id;
						
						$last_seen = $user->last_seen;
					}
					
					$this->ids[] = $user->id;
					
					$this->users[] = $user;
				}
			}
			
			$_SESSION['user']['manager']['active_user'] =& $this->active_user;
			$_SESSION['user']['manager']['ids'] =& $this->ids;
			$_SESSION['user']['email'] = $email;
			$_SESSION['user']['password'] = $password;
			
			$this->valid = true;
		}
		
		public static function IsLoggedIn()
		{
			return isset($_SESSION['user']['manager']['ids']);
		}
		
		public static function EmailExists($email)
		{
			return Core::$DB->prepare('SELECT null FROM `characters` WHERE `email` = ? LIMIT 1')->bind_param($email)->execute()->num_rows > 0;
		}
		
		public static function ValidName($username)
		{
			return preg_match('/^[a-zA-Z0-9._:,-]+$/i', $username) && !preg_match('/mod-/i', $username);
		}
		
		public static function NameTaken($username)
		{
			return Core::$DB->prepare('SELECT null FROM `characters` WHERE `username` = ? LIMIT 1')->bind_params($username)->execute()->num_rows > 0;
		}
		
		public static function ValidEmail($email, &$out = null)
		{
			return ($out = filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE)) != null;
		}
		
		public static function AddNewUser($password, $email, $figure, $gender, $dob, $username = null)
		{
			if ($username == null)
			{
				$username = substr($email, 0, strpos($email, '@')).rand(5, 100);
			}

			return Core::$DB->prepare('INSERT INTO `characters` (username, password, email, figure, registered_stamp, dob, gender) VALUES
			(?, ?, ?, ?, ?, ?, ?)')->bind_param($username, $password, $email, $figure, time(), $dob, $gender)->execute()->insert_id;
		}
		
		public static function RemoveUser($id)
		{
			Core::$DB->prepare('DELETE FROM `characters` WHERE `id` = ? LIMIT 1')->bind_param($id)->execute();
			Core::$DB->prepare('DELETE FROM `cms_character_info` WHERE `character_id` = ? LIMIT 1')->bind_param($id)->execute();
			Core::$DB->prepare('DELETE FROM `character_friends` WHERE `character_id` = ? OR `friend_id` = ?')->bind_param($id, $id)->execute();
			Core::$DB->prepare('DELETE FROM `charcter_ignores` WHERE `character_id` = ?')->bind_param($id)->execute();
			Core::$DB->prepare('DELETE FROM `charcter_messenger_groups` WHERE `character_id` = ?')->bind_param($id)->execute();
			Core::$DB->prepare('DELETE FROM `charcter_messenger_group_members` WHERE `character_id` = ?')->bind_param($id)->execute();
		}
		
		public static function GenerateFigure($club = null, $gender = null, $amount = 1){
			//generateFigure function
			//Generates a valid Habbo figure
			//Copyright (R) 2009 - Yifan Lu (www.yifanlu.com)
			//Edited by Joopie for better preformens
			//Please do not remove this :-)
			if($gender == null){ if(rand(0,1) == 0){ $gender = "M"; }else{ $gender = "F"; } }
			if($club == null){ $club = (bool) rand(0,1); }
			$xml = simplexml_load_file(URL.'/gamedata/figuredata');
			$figure = "";
			$figures = array();
			
			$sets = array();
			foreach($xml->sets->settype as $settype){
				if((string) $settype['mandatory'] == "1" || rand(0,1) == 1){
					$item['settype'] = $settype['type'];
					$palette = (int) $settype['paletteid'];
					$possible = array();
					
					foreach($settype->set as $xset){
						if($xset['gender'] != "U" && $xset['gender'] != $gender){ $fail = true; }
						if($xset['selectable'] == "0"){ $fail = true; }
						if($xset['colorable'] == "0"){ $color = false; }else{ $color = true; }
						if($xset['club'] == "1" && $club == false){ $fail = true; }
						if($fail != true){ $possible[] = array($xset['id'],$color); }
						$fail = false; $color = false;
					}
					
					$sets[] = $possible;
				}
			}
			
			$count = count($possible);
			for ($i = 1; $i <= $amount; $i++)
			{
				$num = rand(0,$count-1);
				$item['color'] = $possible[$num];
				
				foreach($sets as $set)
				{
					$count = count($set);
					$num = rand(0,$count-1);
					$item['set'] = $set[$num][0];
					if($set[$num][1] == false){ $item['color'] = ""; }else{
						$set = array();
						foreach($xml->colors->palette[$palette-1]->color as $color){
							if($color['club'] == "1" && $club == false){ $fail = true; }
							if($color['selectable'] == "0"){ $fail = true; }
							if($fail != true){ $set[] = $color['id']; }
							$fail = false;
						}
						$count = count($set);
                    	$num = rand(0,$count-1);
                    	$item['color'] = $set[$num];
					}
				
					$figure .= $item['settype']."-".$item['set']."-".$item['color'].".";
				}
				
				$figures[] = array($figure,$gender);
			}
			
			return $figures;
		}
		
		public function &GetUser()
		{
			$key = array_search($this->active_user, $this->ids);
			
			if (!isset($this->users[$key]))
			{
				return false;
			}
			
			return $this->users[$key];
		}
		
		public function MassUpdate($key, $value, $email = null)
		{
			if (empty($email))
			{
				$email = $this->GetUser()->email;
				
				foreach ($this->users as $user)
				{
					$user->OnlyCache()->$key = $value;
				}
			}
			
			Core::$DB->prepare('UPDATE `characters` SET `'.$key.'` = ? WHERE `email` = ?')->bind_param($value, $email)->execute();
		}
		
		public function AddAvatar($username, $figure, $gender)
		{
			$user = $this->GetUser();
			
			$userid = self::AddNewUser($user->password, $user->email, $figure, $gender, $username); 
			
			$temp = new User($userid, false);
			$temp->email_activated = (string)1;
			
			$this->ids[] = $temp->id;
			$this->users[] = $temp;
		}
		
		public function SwitchUser($id)
		{
			$check = array_search($id, $this->ids);
			
			if ($check === false)
			{
				return false;
			}
			
			$this->active_user = $id;
			$this->last_cms_login = time();
			
			return true;
		}
		
		public function Logout()
		{
			setcookie('secure_user', 0);
			setcookie('secure_pass', 0);
			
			session_destroy();
		}
	}

?>