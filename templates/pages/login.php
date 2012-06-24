<?php

	class page_login extends nSmarty implements IPage
	{
		public final function __Construct()
		{
			parent::__Construct();
			
			$this->CheckLogin(false, 'me');
			
			$this->SetCaching(false);
		}
		
		public final function Initialize()
		{
			$this->InitParams();
			
			if (isset($_GET['changePwd'], $_SESSION['forgot_password']))
			{
				$email = $_SESSION['forgot_password'];
				
				unset($_SESSION['forgot_password']);
				
				$this->Assign('changepwd', true);
				$this->Assign('email', $email);
			}
			else
			{
				$this->Assign('changepwd', false);
				$this->Assign('email', '');
			}
			
			$this->Assign('forcedemail', false);
			$this->Assign('emailchanged', false);
			$this->Assign('iserror', false);
			$this->Assign('loginvalue', '');
			$this->Assign('errormessage', '');
			$this->Assign('loginerror', false);
			$this->Assign('passworderror', false);
		}
		
		public final function OnCreate()
		{
			$this->Display('page-fp.tpl');
		}
		
		public final function OnSubmit()
		{
			if (!Request::CheckData(array('credentials_username', 'credentials_password'), $_POST))
			{
				trigger_error('Can\'t find the needed post variables in the request!', E_USER_ERROR);
			}
			
			$username = $_POST['credentials_username'];
			$password = $_POST['credentials_password'];
			$passhash = Core::Hash($password);

			if (Core::$Users == null && !UserManager::IsLoggedIn())
			{
				if (!UserManager::ValidEmail($username))
				{
					$result = Core::$DB->prepare('SELECT `email` FROM `characters` WHERE `username` = ? AND `password` = ? LIMIT 1')->bind_param($username, $passhash)->execute();
					if ($result->num_rows > 0)
					{
						$this->Assign('forcedemail', true);
						$this->Assign('email', $result->result());
						
						return;
					}
				}
				
				if (empty($username))
				{
					$this->Assign('iserror', true);
					$this->Assign('loginerror', true);
					$this->Assign('errormessage', 'You can\'t leave the login field blank');
		        	
		        	return;
				}
				
				if (empty($password))
				{
					$this->Assign('iserror', true);
					$this->Assign('loginvalue', Request::Clean($username));
					$this->Assign('passworderror', true);
					$this->Assign('errormessage', 'You can\'t leave the password field blank');
		        	
		        	return;
				}
				
				Core::$Users = new UserManager($username, $passhash);
				
				if (!Core::$Users->valid)
				{
					$this->Assign('iserror', true);
					$this->Assign('loginvalue', Request::Clean($username));
					$this->Assign('loginerror', true);
					$this->Assign('passworderror', true);
					$this->Assign('errormessage', 'Incorrect username and/or password, Please try again later.');

					return;
				}
				
				if (!Core::$Users->GetUser()->GetPermission(UserPermissions::PERM_LOGIN))
				{
					$this->Assign('iserror', true);
					$this->Assign('loginvalue', Request::Clean($username));
					$this->Assign('loginerror', true);
					$this->Assign('errormessage', 'You\'re not allowed to login.');

					return;
				}
			
				if (isset($_POST['_login_remember_me']))
				{
					$expire = time() + 864000; // + 10 days
					$cookie_pass = Core::Hash($passhash.$username);
					
					setcookie('secure_user', $username, $expire, '/');
					setcookie('secure_pass', $cookie_pass, $expire, '/');
				}
				
				if (Core::$Users->GetUser()->email_changed == 1)
				{
					$this->Assign('emailchanged', true);
					$this->Assign('email', $username);
					
					Core::$Users->MassUpdate('email_changed', (string)0);
					
					return;
				}
				
				Core::$Users->GetUser()->last_cms_login = time();
				
				if (isset($_SESSION['register']['next']))
				{
					Core::Redirect(URL.$_SESSION['register']['next']);
					
					unset($_SESSION['register']);
				}
			}
			
			Core::Redirect(URL.'/me');
		}
	}

?>