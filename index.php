<?php

	SESSION_START();

	define('DEBUG', microtime(false));

	define('DS', DIRECTORY_SEPARATOR);
	define('BASE', str_replace('\\', DS, dirname(__FILE__).DS));
	
	define('INC', BASE.'includes'.DS);
	define('TEMP', BASE.'templates'.DS);
	
	define('CACHE', INC.'cache'.DS);
	
	require_once INC.'class.cache.php';
	
	require_once INC.'class.mysqli.php';
	require_once INC.'class.permissions.php';
	require_once INC.'class.user.php';
	require_once INC.'class.user.manager.php';
	require_once INC.'class.request.php';
	require_once INC.'class.core.php';
	require_once INC.'class.xml.php';
	require_once INC.'class.socket.php';
	
	new Core();
	
	define('ORIGIN', Core::$Config['site']['origin']);
	define('URL', Core::$Config['site']['url']);
	
	new Request(ORIGIN, $IsSafe, $IsMobile, array(&$_GET, &$_POST, &$_COOKIE));
	
	if (!$IsSafe)
	{
		trigger_error('Unable to handle the request, We don\'t allow Crossdomain requests!', E_USER_ERROR);
	}
	
	if ($IsMobile)
	{
		
	}
	
	$page = 'login';
	if (UserManager::IsLoggedIn())
	{
		$email = $_SESSION['user']['email'];
		$password = $_SESSION['user']['password'];
		
		Core::$Users = new UserManager($email, $password, true);
		
		if (!Core::$Users->valid)
		{
			Core::$users->Logout();
			
			Core::Redirect(URL.'/logout');
		}
		
		//$page = 'me';
	}
	else if (isset($_COOKIE['secure_user'], $_COOKIE['secure_pass']))
	{	
		$result = Core::$DB->prepare('SELECT `email`, `password` FROM `characters` WHERE `email` = ? LIMIT 1')->bind_param($_COOKIE['secure_user'])->execute();
		
		if ($result->num_rows > 0)
		{
			$user = $result->next_record();
			
			$checkpass = Core::Hash($user['password'].$_COOKIE['secure_user']);
			
			if ($checkpass == $_COOKIE['secure_pass'])
			{
				Core::$Users = new UserManager($user['email'], $user['password']);
				
				//$page = 'me';
			}
		}
	}
	
	define('USER_IP', $_SERVER['REMOTE_ADDR']);
	if (isset(Core::$Users))
	{
		define('USER_ID', Core::$Users->GetUser()->id);
		define('USER_NAME', Core::$Users->GetUser()->username);
	}
	else
	{
		define('USER_ID', 0);
		define('USER_NAME', '');
	}
	
	/*temp logout function*/
	if (isset($_GET['logout'], Core::$Users))
	{
		Core::$Users->Logout();
		
		Core::Redirect(URL.'/account/logout_ok');
	}
	
	if (!Cache::Read('users_online', $usersonline, 5))
	{
		$result = Core::$DB->prepare('SELECT COUNT(`online`) AS `count` FROM `characters` WHERE `online` = "1"')->execute();
		
		$usersonline = $result->result();
		
		Cache::Store('users_online', $usersonline);
	}
	
	define('USERS_ONLINE', $usersonline);
	
	require_once INC.'interface.plugin.php';
	require_once INC.'interface.page.php';
	
	require_once INC.'class.IncludeFile.php';
	require_once INC.'smarty'.DS.'Smarty.class.php';
	require_once INC.'class.nsmarty.php';
	require_once INC.'class.pluginextention.php';
	require_once INC.'class.plugin.manager.php';
	
	require_once INC.'recaptchalib.php';
	
	if (isset($_GET['page']))
	{
		$page = $_GET['page'];
	}
	
	$pagefile = TEMP.'pages'.DS.$page.'.php';
	
	if (!file_exists($pagefile))
	{
		trigger_error('Page doesn\'t exists ('.$page.')', E_USER_ERROR);
	}
	
	require_once $pagefile;
	
	$classname = 'page_'.$page;
	Core::$Template = new $classname();
	Core::$Template->Initialize();
	
	if (count($_POST) > 0)
	{
		Core::$Template->OnSubmit();
	}
	
	Core::$Template->OnCreate();
?>