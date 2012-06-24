<?php

	class page_forgot_password extends nSmarty implements IPage
	{
		private $user;
		
		public final function __Construct()
		{
			parent::__Construct();
			
			$this->CheckLogin(false, 'me');
			
			$this->SetCaching(false);
		}
		
		public final function Initialize()
		{
			$this->InitParams();
			
			if (isset($_GET['confirm']))
			{
				return;
			}
			
			if (isset($_GET['sendmail'], $_POST['page'], $_POST['emailAddress']))
			{
				$_SESSION['forgot_password'] = $_POST['emailAddress'];
				
				if (!UserManager::ValidEmail($_POST['emailAddress'], $email))
				{
					Core::Redirect($_POST['page']);
				}
				
				$result = Core::$DB->prepare('SELECT * FROM `characters` WHERE `email` = ? LIMIT 1')->bind_param($email)->execute();
				if ($result->num_rows < 1)
				{
					Core::Redirect($_POST['page']);
				}
				
				$user = new User($result->next_record());
				$securekey = sha1($user->email.time());
				
				$result = Core::$DB->prepare('SELECT null FROM `cms_characters_emailkeys` WHERE `character_email` = ? AND `type` = "forgot_password" LIMIT 1')->bind_param($user->email)->execute();
				if ($result->num_rows < 1)
				{
					Core::$DB->prepare('INSERT INTO `cms_characters_emailkeys` (character_email, securekey, type) VALUES
					(?, ?, "forgot_password")')->bind_param($user->email, $securekey)->execute();
				}
				else
				{
					Core::$DB->prepare('UPDATE `cms_characters_emailkeys` SET `securekey` = ? WHERE `character_email` = ? AND `type` = "forgot_password" LIMIT 1')->bind_param($securekey, $user->email)->execute();
				}
				
				$stmp = new STMP();
				$this->Assign('email', $user->email);
				$this->Assign('securekey', $securekey);
				$stmp->SendMail($user->email, 'Change your password', $this->Fetch('email-forgot-password.tpl'));
			
				Core::Redirect($_POST['page']);
			}
			
			$result = Core::$DB->prepare('SELECT `characters`.* 
			FROM `cms_characters_emailkeys` 
			INNER JOIN `characters` 
			ON `characters`.`email` = `cms_characters_emailkeys`.`character_email`
			WHERE `cms_characters_emailkeys`.`securekey` = ?')->bind_param($_GET['securekey'])->execute();
			
			if ($result->num_rows < 1)
			{
				Core::Redirect(URL);
			}
			
			$names = array();
			while ($row = $result->next_record())
			{
				if (!isset($this->user))
				{
					$this->user = new User($row);
				}
				
				$names[] = $row['username'];
			}
			
			$this->Assign('email', $this->user->email);
			$this->Assign('securekey', $_GET['securekey']);
			$this->Assign('names', $names);
			
			$this->Assign('iserror', false);
			$this->Assign('errormessage', '');
		}
		
		public final function OnCreate()
		{
			if (isset($_GET['confirm']))
			{
				$this->Display('page-identity-reset-identity-confirmation.tpl');
				
				return;
			}
			
			$this->Display('page-identity-reset-identity.tpl');
		}
		
		public final function OnSubmit()
		{
			if (!isset($_POST['password'], $_POST['retypedPassword'], $_POST['token'], $_GET['securekey']))
			{
				trigger_error('Can\'t find the needed post variables in the request!', E_USER_ERROR);
			}
			
			if ($_GET['securekey'] != $_POST['token'])
			{
				$this->Assign('iserror', true);
				$this->Assign('errormessage', 'Did you cheat or what!?');
			}
			else if (empty($_POST['password']) || empty($_POST['retypedPassword']))
			{
				$this->Assign('iserror', true);
				$this->Assign('errormessage', 'Please enter your new password');
			}
			else if ($_POST['password'] != $_POST['retypedPassword'])
			{
				$this->Assign('iserror', true);
				$this->Assign('errormessage', 'The passwords do not match');
			}
			else if (strlen($_POST['password']) < 7)
			{
				$this->Assign('iserror', true);
				$this->Assign('errormessage', 'Your password needs be at least 6 characters long');
			}
			else if (!preg_match('/^[a-zA-Z0-9]+$/', $_POST['password']))
			{
				$this->Assign('iserror', true);
				$this->Assign('errormessage', 'Your password must include letters and numbers');
			}
			else if (!preg_match('/[0-9]/', $_POST['password']))
			{
				$this->Assign('iserror', true);
				$this->Assign('errormessage', 'Your password must also include numbers');
			}
			else if (!preg_match('/[a-zA-Z]/', $_POST['password']))
			{
				$this->Assign('iserror', true);
				$this->Assign('errormessage', 'Your password must also include letters');
			}
			else
			{
				$password = Core::Hash($_POST['password']);
				
				UserManager::MassUpdate('password', $password, $this->user->email);
				
				Core::$DB->prepare('DELETE FROM `cms_characters_emailkeys` WHERE `character_email` = ? AND `securekey` = ? AND `type` = "forgot_password" LIMIT 1')->bind_param($this->user->email, $_POST['token'])->execute();
			
				Core::Redirect(URL.'/account/password/resetConfirmation');
			}
		}
	}

?>