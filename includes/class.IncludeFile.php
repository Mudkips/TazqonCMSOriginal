<?php
	
	class IncludeFile
	{
		private $file;
		private $rule;
		
		function __Construct($file)
		{
			$this->file = $file;
			
			$ext = $this->Extention();
			switch ($ext)
			{
				case 'js':
					$this->rule = '<script type="text/javascript" src="'.$this->file.'"></script>';
					break;
					
				case 'css':
					$this->rule = '<link type="text/css" rel="stylesheet" href="'.$this->file.'">';
					break;
			}
		}
		
		private function Extention()
		{
			return end(explode('.', $this->file));
		}
		
		function __Tostring()
		{
			return $this->rule;
		}
	}

?>