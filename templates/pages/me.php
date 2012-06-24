<?php

	class page_me extends nSmarty implements IPage
	{
		public final function __Construct()
		{
			parent::__Construct();
			
			$this->CheckLogin(true);
			
			$this->SetCaching(false);
		}
		
		public final function Initialize()
		{
			$this->InitParams();
		}
		
		public final function OnCreate()
		{
			$user = Core::$Users->GetUser();
			
			echo 'Welcome '.$user->username.' ('.$user->motto.').<br>';
			echo 'Logout <a href="index.php?logout">here</a><br>';
			
			if ($user->email_activated == 1)
			{
				echo 'Your email is activated!<br>';
			}
			else
			{
				echo 'Your email is not activated yet!<br>';
			}
		}
		
		public final function OnSubmit()
		{
			//No need to submit this page
		}
	}

?>