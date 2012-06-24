<?php

	class Cache
	{
		public static function Store($key, $value, $id = 0)
		{
			if (is_array($value))
			{
				$value = json_encode($value);
			}
			
			$fp = fopen(CACHE.md5($key.$id).'.cache', 'w');
			
			fputs($fp, $value);
			
			fclose($fp);
		}
		
		public static function Read($key, &$out, $timeout = 0, $id = 0)
		{
			if (!self::Exists($key, $timeout, $id))
			{
				return false;
			}
		
			$fp = fopen(CACHE.md5($key.$id).'.cache', 'r');
			while (!feof($fp))
			{
				$out .= fgets($fp);
			}
			fclose($fp);
			
			if (($json = json_decode($out)) != null)
			{
				$out = $json;
			}
			
			return true;
		}
		
		public static function Exists($key, $timeout = 0, $id = 0)
		{
			$file = CACHE.md5($key.$id).'.cache';
		
			if (!file_exists($file))
			{
				return false;
			}
			
			if (filemtime($file) + $timeout < time())
			{
				return false;
			}
			
			return true;
		}
		
		public static function Clear($key, $id = 0)
		{
			unlink(CACHE.md5($key.$id).'.cache');
		}
	}

?>