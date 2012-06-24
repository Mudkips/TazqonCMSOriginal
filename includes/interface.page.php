<?php

	interface IPage
	{
		public function __Construct(); 
		
		public function Initialize(); //Used for header files etc
		
		public function OnCreate(); //Get the template
		public function OnSubmit(); //Execute an submit action for that page
	}

?>