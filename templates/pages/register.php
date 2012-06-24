<?php

	class page_register extends nSmarty implements IPage
	{
		private $page;
		private $next_page;
		
		private $months = array(
			1 => 'January',
			'February',
			'March',
			'April',
			'May',
			'June',
			'July',
			'August',
			'September',
			'October',
			'November',
			'December'
		);
		
		public final function __Construct()
		{
			parent::__Construct();
			
			$this->SetCaching(false);
			
			$this->CheckLogin(false, 'me');
			
			if ($_GET['step'] == 'start')
			{
				unset($_SESSION['register']);
			}
		}
		
		public final function Initialize()
		{
			$this->InitParams();
			
			$this->Assign('iserror', false);
			$this->Assign('errormessage', '');
			
			//page selection
			if ($_GET['step'] == 'start' || $_GET['step'] == 'age_gate' || $_GET['step'] == 'age_gate_submit' || $_GET['step'] == 'back')
			{
				$this->page = 'age_gate';
				$this->next_page = 'email_password';
				
				$this->Assign('amount_months', $this->months);
				$this->Assign('amount_days', range(1, date('t')));
				$year = date('Y');
				$this->Assign('amount_years', range($year - 8, $year - 100));
				
				if (!@Request::CheckData(array('bean_month', 'bean_day', 'bean_year', 'bean_gender'), $_SESSION['register']))
				{
					$this->Assign('value_month', 0);
					$this->Assign('value_day', '');
					$this->Assign('value_year', '');
					$this->Assign('value_gender', 'male');
				}
				else
				{
					$this->Assign('value_month', $_SESSION['register']['bean_month']);
					$this->Assign('value_day', $_SESSION['register']['bean_day']);
					$this->Assign('value_year', $_SESSION['register']['bean_year']);
					$this->Assign('value_gender', $_SESSION['register']['bean_gender']);
				}
			}
			else if ($_GET['step'] == 'age_limit')
			{
				$this->page = 'age_limit';
			}
			else if (($_GET['step'] == 'email_password' || $_GET['step'] == 'email_password_submit' || $_GET['step'] == 'backToAccountDetails') && @Request::CheckData(array('bean_month', 'bean_day', 'bean_year', 'bean_gender'), $_SESSION['register']))
			{
				$this->page = 'email_password';
				$this->next_page = 'captcha';
				
				$this->Assign('gender', $_SESSION['register']['bean_gender']);
				$this->Assign('error_email', false);
				$this->Assign('error_retypedEmail', false);
				$this->Assign('error_password', false);
				$this->Assign('error_toss', false);
				
				if (!@Request::CheckData(array('bean_email', 'bean_retypedEmail', 'bean_password', 'bean_termsOfServiceSelection', 'bean_marketing'), $_SESSION['register']))
				{
					$this->Assign('value_email', '');
					$this->Assign('value_retypedEmail', '');
					$this->Assign('value_password', '');
					$this->Assign('value_toss', false);
					$this->Assign('value_marketing', true);
				}
				else
				{
					$this->Assign('value_email', $_SESSION['register']['bean_email']);
					$this->Assign('value_retypedEmail', $_SESSION['register']['bean_retypedEmail']);
					$this->Assign('value_password', $_SESSION['register']['bean_password']);
					$this->Assign('value_toss', $_SESSION['register']['bean_termsOfServiceSelection']);
					$this->Assign('value_marketing', $_SESSION['register']['bean_marketing']);
				}
			}
			else if ($_GET['step'] == 'duplicateEmailLogin' && @Request::CheckData(array('bean_email'), $_SESSION['register']))
			{
				$this->page = 'duplicateEmailLogin';
				
				$this->Assign('email', $_SESSION['register']['bean_email']);
				
				$this->Assign('next', '/me');
				if (isset($_SESSION['register']['next']))
				{
					$this->Assign('next', $_SESSION['register']['next']);
				}
			}
			else if (($_GET['step'] == 'captcha' || $_GET['step'] == 'captcha_submit') && @Request::CheckData(array('bean_email', 'bean_retypedEmail', 'bean_password', 'bean_termsOfServiceSelection', 'bean_marketing'), $_SESSION['register']))
			{
				$this->page = 'captcha';
				
				$this->Assign('publickey', Core::$Config['captcha']['publickey']);
				
				$avatars = array();
				$figures = UserManager::GenerateFigure(false, ($_SESSION['register']['bean_gender'] == 'male') ? 'M' : 'F', 6);
				foreach ($figures as $figure)
				{
					$avatars[] = current($figure);
				}
				
				$this->Assign('avatars', $avatars);
				$this->Assign('random_avatars', $this->Fetch('page-register-captcha-avatar-refresh.tpl'));
			}
			else if ($_GET['step'] == 'refresh_avatars' && @Request::CheckData(array('bean_gender'), $_SESSION['register']))
			{
				$this->page = 'refresh_avatars';
				
				$avatars = array();
				$figures = UserManager::GenerateFigure(false, ($_SESSION['register']['bean_gender'] == 'male') ? 'M' : 'F', 6);
				foreach ($figures as $figure)
				{
					$avatars[] = current($figure);
				}
				$this->Assign('avatars', $avatars);
			}
		}
		
		public final function OnCreate()
		{
			switch ($this->page)
			{
				default:
				case 'age_gate': $this->Display('page-register-age-gate.tpl'); break;
				case 'age_limit': $this->Display('page-register-age-limit.tpl'); break;
				case 'email_password': $this->Display('page-register-email-password.tpl'); break;
				case 'duplicateEmailLogin': $this->Display('page-register-duplicate-email-login.tpl'); break;
				case 'captcha': $this->Display('page-register-captcha.tpl'); break;
				case 'refresh_avatars': $this->Display('page-register-captcha-avatar-refresh.tpl'); break;
			}
		}
		
		public final function OnSubmit()
		{
			if (!method_exists('page_register', $this->page))
			{
				exit($this->page);
				
				Core::Redirect(URL.'/app/oeps');
			}
			
			if (call_user_func(array($this, $this->page)))
			{
				Core::Redirect(URL.'/quickregister/'.$this->next_page);
			}
		}
		
		//submit functions...
		
		private final function age_gate()
		{
			if (!Request::CheckData(array('bean_month', 'bean_day', 'bean_year', 'bean_gender'), $_POST))
			{
				trigger_error('Can\'t find the needed post variables in the request!', E_USER_ERROR);
			}
			
			$this->Assign('value_month', $_POST['bean_month']);
			$this->Assign('value_day', $_POST['bean_day']);
			$this->Assign('value_year', $_POST['bean_year']);
			$this->Assign('value_gender', $_POST['bean_gender']);
			
			if (empty($_POST['bean_month']) || empty($_POST['bean_day']) || empty($_POST['bean_year']))
			{
				$this->Assign('iserror', true);
				$this->Assign('errormessage', 'Please supply a valid birthdate');
				
				return false;
			}
			
			if ($_POST['bean_year'] > date('Y') - 11)
			{
				Core::Redirect(URL.'/quickregister/age_limit');
			}
			
			$_SESSION['register']['bean_gender'] = $_POST['bean_gender'];
			$_SESSION['register']['bean_day'] = $_POST['bean_day'];
			$_SESSION['register']['bean_month'] = $_POST['bean_month'];
			$_SESSION['register']['bean_year'] = $_POST['bean_year'];
			$_SESSION['register']['bean_dob'] = strtotime($_POST['bean_day'].' '.$this->months[$_POST['bean_month']].' '.$_POST['bean_year']);
			
			return true;
		}
		
		private final function email_password()
		{
			if (!Request::CheckData(array('bean_email', 'bean_retypedEmail', 'bean_password'), $_POST))
			{
				trigger_error('Can\'t find the needed post variables in the request!', E_USER_ERROR);
			}
			
			$this->Assign('value_email', $_POST['bean_email']);
			$this->Assign('value_retypedEmail', $_POST['bean_retypedEmail']);
			$this->Assign('value_password', $_POST['bean_password']);
			
			$error = array();
			
			if (empty($_POST['bean_email']))
			{
				$error[] = 'Please fill in avalid email';
				
				$this->Assign('error_email', true);
			}
			
			if (empty($_POST['bean_retypedEmail']))
			{
				$error[] = 'Please retype your email';
				
				$this->Assign('error_retypedEmail', true);
			}
			
			$email = $_POST['bean_email'];
			
			if (!empty($email) && !empty($_POST['bean_retypedEmail']))
			{
				if ($email != $_POST['bean_retypedEmail'])
				{
					$error[] = 'Emails don\'t match';
					
					$this->Assign('error_email', true);
					$this->Assign('error_retypedEmail', true);
				}
				else if (UserManager::EmailExists($email))
				{
					$_SESSION['register']['bean_email'] = $_POST['bean_email'];
					$_SESSION['register']['next'] = '/identity/add_avatar';
					
					Core::Redirect(URL.'/quickregister/duplicateEmailLogin');
					
					return false;
				}
				else if (!UserManager::ValidEmail($email, $email))
				{
					$error[] = 'The entered email isn\'t valid';
					
					$this->Assign('error_email', true);
				}
			}
			
			if (empty($_POST['bean_password']))
			{
				$error[] = 'Please fill in a password';
				
				$this->Assign('error_password', true);
			}
			else if (strlen($_POST['bean_password']) < 7)
			{
				$error[] = 'Your password needs be at least 6 characters long';
				
				$this->Assign('error_password', true);
			}
			else if (!preg_match('/^[a-zA-Z0-9]+$/', $_POST['bean_password']))
			{
				$error[] = 'Your password must include letters and numbers';
				
				$this->Assign('error_password', true);
			}
			else if (!preg_match('/[0-9]/', $_POST['bean_password']))
			{
				$error[] = 'Your password must also include numbers';
				
				$this->Assign('error_password', true);
			}
			else if (!preg_match('/[a-zA-Z]/', $_POST['bean_password']))
			{
				$error[] = 'Your password must also include letters';
				
				$this->Assign('error_password', true);
			}
			
			$toss = true;
			if (!isset($_POST['bean_termsOfServiceSelection']))
			{
				$toss = false;
				
				$error[] = 'Please accept the terms of service';
				
				$this->Assign('error_toss', true);
			}
			
			$marketing = true;
			if (!isset($_POST['bean_marketing']))
			{
				$marketing = false;
			}
			
			$this->Assign('value_toss', $toss);
			$this->Assign('value_marketing', $marketing);
			
			if (!empty($error))
			{
				$this->Assign('iserror', true);
				$this->Assign('errormessage', implode('<br/>', $error));
				
				return false;
			}
			
			$_SESSION['register']['bean_email'] = $email;
			$_SESSION['register']['bean_retypedEmail'] = $email;
			$_SESSION['register']['bean_password'] = $_POST['bean_password'];
			$_SESSION['register']['bean_marketing'] = $marketing;
			$_SESSION['register']['bean_termsOfServiceSelection'] = $toss;
			
			return true;
		}
		
		private final function captcha()
		{
			if (!Request::CheckData(array('bean_figure', 'captchaResponse', 'recaptcha_challenge_field'), $_POST))
			{
				trigger_error('Can\'t find the needed post variables in the request!', E_USER_ERROR);
			}
			
			$response = recaptcha_check_answer(Core::$Config['captcha']['privatekey'], USER_IP, $_POST['recaptcha_challenge_field'], $_POST['captchaResponse']);
			
			if (!$response->is_valid)
			{
				$this->Assign('iserror', true);
				$this->Assign('errormessage', 'The security code was invalid, please try again.');
				
				return false;
			}

			//INSERT THE NEW USER


			$password = Core::Hash($_SESSION['register']['bean_password']);
			if (UserManager::AddNewUser($password, $_SESSION['register']['bean_email'], $_POST['bean_figure'], ($_SESSION['register']['bean_gender'] == 'male') ? 'M' : 'F', $_SESSION['register']['bean_dob']) == 0)
			{
				trigger_error('Something is going wrong with creating your account!', E_USER_ERROR);
			}
			
			Core::$Users = new UserManager($_SESSION['register']['bean_email'], $password);
			
			unset($_SESSION['register']);
			
			//ALTER TABLE  `characters` ADD  `dob` VARCHAR( 100 ) NOT NULL AFTER  `last_seen`
			//ALTER TABLE  `characters` ADD  `email_activated` BOOL NOT NULL DEFAULT  '0' AFTER  `allow_new_friends`
			$user = Core::$Users->GetUser();
			$securekey = sha1($user->email.time());
			
			Core::$DB->prepare('INSERT INTO `cms_characters_emailkeys` (character_email, securekey, type) VALUES
			(?, ?, "email_activate")')->bind_param($user->email, $securekey)->execute();
			
			$stmp = new STMP();
			$this->Assign('email', $user->email);
			$this->Assign('id', $user->email);
			$this->Assign('securekey', $securekey);
			$stmp->SendMail($user->email, 'Welcoming you to the world of Habbo', $this->Fetch('email-register.tpl'));
			
			Core::Redirect(URL.'/me');
			
			return true;
		}
	}

?>