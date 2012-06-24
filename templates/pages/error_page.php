<?php

	class page_error_page extends nSmarty implements IPage
	{
		public final function __Construct()
		{
			parent::__Construct();
			
			$this->SetCaching(false);
		}
		
		public final function Initialize()
		{
			$this->InitParams();
		}
		
		public final function OnCreate()
		{
			$this->Display('page-app-error.tpl');
		}
		
		public final function OnSubmit()
		{
			//No need to submit this page
		}
	}

?>