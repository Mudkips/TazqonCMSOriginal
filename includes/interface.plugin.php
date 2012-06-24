<?php

	interface IPlugin
	{
		public function __Construct();
		
		public function Initialize($options = null); //Used for header files etc
		
		public function OnCreate(); //Get the template
		public function OnSubmit(); //Execute an submit action for that page
	}

?>