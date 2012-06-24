<?php

	class page_logout_user extends nSmarty implements IPage
	{
		public final function __Construct()
		{
			parent::__Construct();
			
			$this->CheckLogin(false, 'me');
			
			$this->SetCaching(false);
		}
		
		public final function Initialize()
		{
			$this->InitParams();
		}
		
		public final function OnCreate()
		{
			$this->Display('page-logout.tpl');
		}
		
		public final function OnSubmit()
		{
		}
	}

?>