<?php
	
	define('DS', DIRECTORY_SEPARATOR);
	define('BASE', str_replace('\\', DS, dirname(__FILE__).DS));
	
	define('INC', BASE.'includes'.DS);
	
	define('CACHE', INC.'cache'.DS);
	
	require_once INC.'class.cache.php';
	
	
	switch ($_GET['type'])
	{
		case 'figuredata':
			if (!Cache::Read('figuredata', $figuredata, 1440))
			{
				$figuredata = file_get_contents('http://www.habbo.com/gamedata/figuredata');
				
				Cache::Store('figuredata', $figuredata);
			}
			
			echo $figuredata;
			break;
	}
?>