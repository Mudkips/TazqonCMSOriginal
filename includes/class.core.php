<?php

	class Core
	{
		public static $DB;
		public static $Config;

		public static $Users;
		public static $Template;
		
		public function __Construct()
		{
			require_once(INC.'inc.config.php');
			
			self::$Config = $_config;
			
			
			self::$DB = new nMySQLi(
				self::$Config['mysql']['hostname'],
				self::$Config['mysql']['username'],
				self::$Config['mysql']['password'],
				self::$Config['mysql']['database']
			);
			
			set_error_handler(array('Core', 'ErrorHandler'));
		}
		
		public static function ErrorHandler($errno, $errstr, $errfile, $errline)
		{
			if (!(error_reporting() & $errno)) {
		        return;
		    }
			
			echo '<center><div style="margin: 5px; width: 50%; border: 2px solid #FF0000; background-color: #FF8C8C; padding: 10px; padding-top: 0; font-family: Arial;">';
			
		    switch ($errno) {
			    case E_USER_ERROR:
			        echo "<b>My ERROR</b> [$errno] $errstr<br /><br />";
			        echo "  Fatal error on line $errline in file $errfile";
			        echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\n";
			        echo "Aborting...<br />\n";
			        exit;
			        break;
			
			    case E_USER_WARNING:
			        echo "<b>My WARNING</b> [$errno] $errstr<br />\n";
			        break;
			
			    case E_USER_NOTICE:
			        echo "<b>My NOTICE</b> [$errno] $errstr<br />\n";
			        break;
			
			    default:
			        echo "Unknown error type: [$errno] $errstr<br />\n";
			        break;
		    }
		    
		    echo '</div></center>';
		
		    return true;
		}
		
		public static function Hash($string)
		{
			return sha1(md5($string).$string);
		}
		
		public static function Redirect($page)
		{
			if (!Request::SafeLocation($page))
			{
				trigger_error('Unsafe location has been found: '.$page, E_USER_ERROR);
			}
			
			header('Location: '.$page);
			exit;
		}
	}

?>