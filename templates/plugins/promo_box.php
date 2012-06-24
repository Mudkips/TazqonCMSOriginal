<?php

	class plugin_promo_box extends nSmarty implements IPlugin
	{
		public final function __Construct()
		{
			parent::__Construct();
			
			$this->SetCaching(false);
		}
		
		public final function Initialize($options = null)
		{
			$this->InitParams();
			
			$newspromo = array();
			
			$result = Core::$DB->prepare('SELECT * FROM `cms_plugin_promo_box` WHERE `enabled` = "1" ORDER BY `order` ASC LIMIT 4')->execute();
			while ($row = $result->next_record())
			{
				$newspromo[] = $row;
			}
			
			$this->Assign('newspromo', $newspromo);
		}
		
		public final function OnCreate()
		{
			$this->display('widget-promo-box.tpl');
		}
		
		public final function OnSubmit()
		{
		}
	}

?>