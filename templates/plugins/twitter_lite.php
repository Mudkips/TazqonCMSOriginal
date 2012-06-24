<?php

	class plugin_twitter_lite extends nSmarty implements IPlugin
	{
		public final function __Construct()
		{
			parent::__Construct();
			
			$this->SetCaching(false);
		}
		
		public final function Initialize($options = null)
		{
			$this->InitParams();
			
			$this->Assign('options', $options);
		}
		
		public final function OnCreate()
		{
			$this->display('widget-twitter-lite.tpl');
		}
		
		public final function OnSubmit()
		{
		}
	}

?>