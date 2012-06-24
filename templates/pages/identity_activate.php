<?php

	class page_identity_activate extends nSmarty implements IPage
	{
		private $user;
		private $a;
		private $b;
		private $c;
		
		private $type;
		
		public final function __Construct()
		{
			parent::__Construct();
			
			$this->SetCaching(false);
		}
		
		public final function Initialize()
		{
			$this->type = 11;
			
			$this->InitParams();
			
			if (!(isset($_GET['a'], $_GET['b']) || !isset($_POST['a'], $_POST['b'], $_POST['c'])))
			{
				Core::Redirect(URL);
			}
			
			if (isset($_POST['a'], $_POST['b'], $_POST['c']))
			{
				$this->a = $_POST['a'];
				$this->b = $_POST['b'];
				$this->type = $this->c = $_POST['c'];
			}
			
			if (isset($_GET['a'], $_GET['b']))
			{
				$this->a = $_GET['a'];
				$this->b = $_GET['b'];
			}
			
			$result = Core::$DB->prepare('SELECT `characters`.*, `emailkeys`.`securekey` 
			FROM `cms_characters_emailkeys` `emailkeys` 
			INNER JOIN `characters`
			ON `characters`.`email` = `emailkeys`.`character_email` 
			WHERE `emailkeys`.`character_email` = ? 
			AND `emailkeys`.`securekey` = ? 
			AND `emailkeys`.`type` = "email_activate"
			LIMIT 1')->bind_param($this->a, $this->b)->execute();
			
			if ($result->num_rows < 1)
			{
				Core::Redirect(URL);
			}
			
			$user = $this->user = new User($result->next_record());
			
			$this->Assign('Username', $user->username);
			$this->Assign('Userid', $user->id);
			$this->Assign('figure', $user->figure);
			$this->Assign('email', $user->email);
			$this->Assign('securekey', $_GET['b']);
			$this->Assign('dob', date('M j, Y', $user->dob));
		}
		
		public final function OnCreate()
		{
			switch ($this->type)
			{
				default:
				case 11: $this->Display('page-identity-activate.tpl'); break;
				case 15: $this->Display('page-identity-activate-email.tpl'); break;
			}
		}
		
		public final function OnSubmit()
		{	
			$user = $this->user;

			Core::$DB->prepare('DELETE FROM `cms_characters_emailkeys` WHERE `character_email` = ? AND `securekey` = ? AND `type` = "email_activate" LIMIT 1')->bind_param($this->a, $this->b)->execute();

			UserManager::MassUpdate('email_activated', (string)1, $user->email);

			if ($this->c == 15)
			{
				Core::$DB->prepare('INSERT INTO `cms_email_deny` (email) VALUES (?)')->bind_param($user->email)->execute();
				
				UserManager::MassUpdate('email_changed', (string)1, $user->email);
				
				//Do relog: fix for if you already been logged in:
				Core::$Users = new UserManager($user->email, $user->password);
			}
			
			//Do relog: fix for if you already been logged in:
			Core::$Users = new UserManager($user->email, $user->password);
			
			if ($this->c != 15)
			{
				Core::Redirect(URL);
			}
		}
	}

?>