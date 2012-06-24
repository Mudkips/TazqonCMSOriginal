<?php

	class User extends UserPermissions
	{
		private $data = array();
		
		public $id = 0;	
		public $valid = false;
		
		private $onlycache = false;
		
		public final function __Construct($data, $cache = true)
		{
			if (!is_array($data))
			{
				$this->id = $data;
			
				if ($cache && self::IsCached())
				{
					$data = $_SESSION['user'][$this->id]['temp'];
				}
				else
				{
			
					$data = Core::$DB->prepare('SELECT * FROM `characters` WHERE `id` = ? LIMIT 1')->bind_param($this->id)->execute();
			
					if ($data->num_rows < 1)
					{
						return;
					}
								
					$data = $data->next_record();
				}
			}
			else
			{
				$this->id = $data['id'];
			}
			
			$this->data = $data;
			$this->valid = true;
			
			parent::__Construct($this->rank);
			
			$_SESSION['user'][$this->id]['temp'] =& $this->data;
		}
		
		public final function IsCached()
		{
			return isset($_SESSION['user'][$this->id]['temp']);
		}
		
		public final static function GetUserVar($id, $key)
		{
			$result = Core::$DB->prepare('SELECT `'.$key.'` FROM `characters` WHERE `id` = ? LIMIT 1')->bind_param($id)->execute();
			
			if ($result->num_rows < 1)
			{
				return false;
			}
			
			return $result->result();
		}
		
		public final static function SetUserVar($id, $key, $value)
		{
			Core::$DB->prepare('UPDATE `characters` SET `'.$key.'` = ? WHERE `id` = ? LIMIT 1')->bind_param($value, $id)->execute();
		}
		
		public final function RenderHabboImage($id, $size = 'b', $dir = 3, $head_dir = 3, $action = 'std', $gesture = 'sml')
		{
			if ($id == null)
			{
				$look = $this->figure;
			}
			else
			{
				$look = self::GetUserVar($id, 'figure');
			}
			
			return 'http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=' . $look . '&size=' . $size . '&action=' . $action . ',&gesture=' . $gesture . '&direction=' . $dir . '&head_direction=' . $head_dir;
		}
		
		public final function OnlyCache()
		{
			$this->onlycache = true;
			
			return $this;
		}
		
		public final function __Get($key)
		{
			if (!isset($this->data[$key]))
			{
				return '';
			}
			
			return $this->data[$key];
		}
		
		public final function __Set($key, $value)
		{
			if (!isset($this->data[$key]))
			{
				return;
			}
			
			$this->data[$key] = $value;
			
			if (!$this->onlycache)
			{
				self::SetUserVar($this->id, $key, $value);
			}
			
			$this->onlycache = false;
		}
		
		public final function __Tostring()
		{
			return $this->username;
		}
	}

?>