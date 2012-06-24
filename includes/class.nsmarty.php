<?php

	class nSmarty extends Smarty
	{
		public function __Construct()
		{
			parent::__Construct();
			
			$this->SetTemplateDir(TEMP.'tpl');
			$this->SetCacheDir(TEMP.'cache');
			$this->SetCompileDir(TEMP.'compiled');
			
			if (isset(Core::$Users))
			{
				$this->cache_id = Core::$Users->GetUser()->id;
			}
		}
		
		public final function ReplaceParams($items)
		{
			$vars = $this->GetTemplateVars();
			foreach ($vars as $key => $value)
			{
				$temp = $key;
				$vars['{$'.$key.'}'] = $value;
				unset($vars[$temp]);
			}
			if (is_array($items))
			{
				array_walk($items, function (&$item) use ($vars)
				{
					$item = str_replace(array_keys($vars), array_values($vars), $item);
				});
			}
			else
			{
				$items = str_replace(array_keys($vars), array_values($vars), $items);
			}
			
			return $items;
		}
		
		public final function InitParams()
		{
			$this->Assign('headerdescription', Core::$Config['site']['description']);
			$this->Assign('headerkeywords', Core::$Config['site']['keywords']);
			
			$this->Assign('usersonline', USERS_ONLINE);
			$this->Assign('webbuild', Core::$Config['site']['webbuild']);
			$this->Assign('webbuildrelease', 'TazqonCMS - 1.0.0');
			$this->Assign('url', URL);
			$this->Assign('title', Core::$Config['site']['title']);
			$this->Assign('titleshort', Core::$Config['site']['short']);
			
			$this->Assign('LoggedIn', 'false');
			$this->Assign('Username', '');
			$this->Assign('Userid', 0);
			
			if (isset(Core::$Users))
			{
				$this->Assign('LoggedIn', 'true');
				$this->Assign('Username', USER_NAME);
				$this->Assign('Userid', USER_ID);
			}
			
			$this->Assign('footercopyright', '&copy; TazqonCMS 2012. All rights reserved.');
		}
		
		protected final function CheckLogin($must_logged_in = true, $redirect = '')
		{
			if (!isset(Core::$Users) && $must_logged_in)
			{
				Core::Redirect(URL.'/'.$redirect);
			}
			else if (isset(Core::$Users) && !$must_logged_in)
			{
				Core::Redirect(URL.'/'.$redirect);
			}
		}
	}

?>