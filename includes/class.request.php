<?php

	class Request
	{
		private static $mobile_agents = array(
		'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    	'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    	'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    	'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    	'newt','noki','oper','palm','pana','pant','phil','play','port','prox',
    	'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    	'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    	'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    	'wapr','webc','winw','winw','xda ','xda-');
	
		private static $ORIGIN;
		private static $func;
		
		function __Construct($origin, &$IsSafe, &$IsMobile, $filtering = null)
		{
			//Grap needed variables
			self::$ORIGIN = $origin;
			
			$IsSafe = $this->IsSafe();
			$IsMobile = $this->IsMobile();
		
			//Filter injections
			if (empty($filtering) || !is_array($filtering))
			{
				return;
			}

			array_walk_recursive($filtering, array('self', 'FilterInjections'));
		}
		
		private function IsSafe()
		{
			if (empty($_POST))
			{
				return true;
			}
			
			if ((isset($_SERVER['HTTP_REFERER']) && is_int(strpos($_SERVER['HTTP_REFERER'], self::$ORIGIN))) || (isset($_SERVER['HTTP_ORIGIN']) && is_int(strpos($_SERVER['HTTP_ORIGIN'], self::$ORIGIN))))
			{
				return true;
			}
			
			return false;
		}
		
		public static function SafeLocation($url = '')
		{
			return is_int(strpos($url, self::$ORIGIN));
		}
		
		public static function FilterInjections(&$var)
		{
			if (is_array($var))
			{
				array_walk($var, array('self', 'FilterInjections'));
				
				return;
			}
			
			$var = Core::$DB->real_escape_string($var);
		}
		
		public static function Clean($string, $ignoreHTML = false, $nl2br = false)
		{
			$string = stripslashes(trim($string));
			
			if (!$ignoreHTML)
			{
				$string = htmlentities($string);
			}
		
			if ($nl2br)
			{
				$string = nl2br($string);
			}
			
			return $string;
		}
		
		public static function CleanArray($array, $ignoreHTML = false, $nl2br = false)
		{
			array_walk($array, function (&$value) use ($ignoreHTML, $nl2br) {
				$value = Request::Clean($value, $ignoreHTML, $nl2br);
			});

			return $array;
		}
		
		public function IsMobile()
		{
			$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
			$http_accept = strtolower($_SERVER['HTTP_ACCEPT']);
			
			if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android)/i', $user_agent)) 
			{
				return true;
			}
 
			if (is_int(strpos($http_accept,'application/vnd.wap.xhtml+xml')) || ((isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE'])))) 
			{
				return true;
			}
			
			$var = substr($user_agent, 0, 4);
			if (in_array($var, self::$mobile_agents))
			{
				return true;
			}
			
			return false;
		}
		
		public static function CheckData($keys, $array)
		{
			$check = array_filter(array_keys($array), function ($key) use ($keys){
				return in_array($key, $keys);
			});
			
			return count($check) == count($keys);
		}
	}

?>