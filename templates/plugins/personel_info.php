<?php

	class plugin_personel_info extends nSmarty implements IPlugin
	{
		public final function __Construct()
		{
			parent::__Construct();
			
			$this->SetCaching(false);
		}
		
		public final function Initialize($options = null)
		{
			$this->InitParams();
			
			$user = Core::$Users->GetUser();
			if (StrToLower($user->motto) == 'crikey')
			{	
				$this->Assign('figure', 'http://img4.cdn1.habbo.com/c_images/stickers/sticker_croco.gif" style="margin-top: 57px;');
			}
			else
			{
				$user->motto = 'Crikey';
				$this->Assign('figure', $user->RenderHabboImage(null));
			}
			
			$this->Assign('motto', $user->motto);
			if (empty($user->last_seen))
			{
				$this->Assign('lastsignin', 'Never..');
			}
			else
			{
				$this->Assign('lastsignin', date('M j, Y g:i:s A', $user->last_seen));
			}
		}
		
		public final function OnCreate()
		{
			$this->display('widget-personel-info.tpl');
		}
		
		public final function OnSubmit()
		{
		}
	}

?>