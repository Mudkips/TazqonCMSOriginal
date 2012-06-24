<?php

	class TemplateManager extends xmlToArrayParser
	{
		private $params;
		private $final_params;
		private $content;
		
		private $webbuild;
		
		private $plugins;
	
		public function __Construct($type)
		{
			$xmlfile = TEMP.'pages'.DS.$type.'.xml';
			
			if (!file_exists($xmlfile))
			{
				trigger_error('Page type doesn\'t exists ('.$type.')!', E_USER_ERROR);
			}
			
			parent::__Construct(file_get_contents($xmlfile));
			
			$this->InitParams();
			
			$content = $this->array['page']['contents']['attrib'];
			$type = $content['type'];
			$base = $content['base'];
			$this->content = $this->GetBaseFile($base.'.'.$type);
		}
		
		protected function GetBaseFile($file)
		{
			$file = TEMP.'bases'.DS.$file;
			
			if (!file_exists($file))
			{
				trigger_error('Page base doesn\'t exists ('.$base.')', E_USER_ERROR);
			}
			
			ob_start();
			require_once $file;
			return ob_get_clean();
		}
		
		private function InitParams()
		{
			$this->webbuild = Core::$Config['site']['webbuild'];
			
			$this->AddFinalParam('users-online', USERS_ONLINE);
			$this->AddFinalParam('webbuild', $this->webbuild);
			$this->AddFinalParam('url', URL);
			$this->AddFinalParam('title', Core::$Config['site']['title']);
		
			$this->AddFinalParam('LoggedIn', 'false');
			$this->AddFinalParam('Username');
			$this->AddFinalParam('Userid', 0);
		
			if (isset(Core::$Users))
			{
				$this->AddFinalParam('LoggedIn', 'true');
				$this->AddFinalParam('Username', Core::$Users->GetUser()->Username);
				$this->AddFinalParam('Userid', Core::$Users->GetUser()->Id);
			}
		}
		
		private function ParseHeader($header)
		{
			switch ($header['attrib']['type'])
			{
				case 'js':
				case 'css':
					$this->AddParam('header', (string)new IncludeFile($this->webbuild.$header['attrib']['href']), true);
					break;
						
				case 'php':
				case 'html':
					$type = $header['attrib']['type'];
					$base = $header['attrib']['href'];
				
					$this->AddParam('header', $this->GetBaseFile($base.'.'.$type), true);
					break;
			}
		}
		
		private function ParseContent($content)
		{
			switch ($content['attrib']['type'])
			{
				case 'plugin':
					$this->AddParam($content['attrib']['param'], 'Plugin not supported yet');
					break;	
			}
		}
		
		protected function ParseXML()
		{
			if (isset($this->array['page']['headers']['header']['0']))
			{
				foreach ($this->array['page']['headers']['header'] as $header)
				{
					$this->ParseHeader($header);
				}
			}
			else
			{
				$this->ParseHeader($this->array['page']['headers']['header']);
			}
			
			if (isset($this->array['page']['contents']['content']['0']))
			{
				foreach ($this->array['page']['contents']['content'] as $content)
				{
					$this->ParseContent($content);
				}
			}
			else
			{
				$this->ParseContent($this->array['page']['contents']['content']);
			}
		}
		
		public function AddParam($key, $value = '', $append = false)
		{
			if (is_object($key) || is_object($value) || is_resource($key) || is_resource($value))
			{
				return false;
			}
			
			if ($append && isset($this->params['{'.$key.'}']))
			{
				$this->params['{'.$key.'}'] .= $value;
				
				return true;
			}
			
			$this->params['{'.$key.'}'] = $value;
			
			return true;
		}
		
		public function AddFinalParam($key, $value = '', $append = false)
		{
			if (is_object($key) || is_object($value) || is_resource($key) || is_resource($value))
			{
				return false;
			}
			
			if ($append && isset($this->final_params['{'.$key.'}']))
			{
				$this->final_params['{'.$key.'}'] .= $value;
				
				return true;
			}
			
			$this->final_params['{'.$key.'}'] = $value;
			
			return true;
		}
		
		protected final function GetParsedTemplate()
		{
			$content = str_replace(array_keys($this->params), array_values($this->params), $this->content);
			return str_replace(array_keys($this->final_params), array_values($this->final_params), $content);
		}
	}

?>