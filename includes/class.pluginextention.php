<?php

	class PluginExtention
	{
		private $data;
		private $plugin;
		
		public function __Construct($row)
		{
			$this->data = $row;
			if (!empty($this->data['files']))
			{
				$this->data['files'] = (array)json_decode($row['files']);
			}
			else
			{
				$this->data['files'] = array();
			}
			if (!empty($this->data['options']))
			{
				$this->data['options'] = (array)json_decode($row['options']);
			}
			elseif (!empty($this->data['default_options']))
			{
				$this->data['options'] = (array)json_decode($row['default_options']);
			}
			else
			{
				$this->data['options'] = array();
			}
			
			$file = TEMP.'/plugins/'.$this->folder.'.php';
			if (!file_exists($file))
			{
				trigger_error('Plugin file not found! ('.$this->folder.')', E_USER_ERROR);
			}
			
			require_once TEMP.'/plugins/'.$this->folder.'.php';
			
			$class = 'plugin_'.$this->folder;
			$this->plugin = new $class();
			$this->Initialize($this->options);
		}
		
		public function __Get($key)
		{
			if (!isset($this->data[$key]))
			{
				return false;
			}
			
			return $this->data[$key];
		}
		
		public function __Set($key, $value)
		{
			if (!isset($this->data[$key]))
			{
				return false;
			}
			
			if (is_array($value) && $key == 'files' || $key = 'options')
			{
				$this->data[$key] = $value;
				
				$value = json_encode($value);
			}
			else if ($key == 'files' || $key = 'options')
			{
				$this->data[$key] = json_decode($value);
			}
			
			Core::$DB->prepare('UPDATE `cms_plugin_page` SET `'.$key.'` = ? WHERE `id` = ? LIMIT 1')->bind_param($value, $this->id)->execute();
		}
		
		public function __Call($method, $arguments)
		{
			if (!method_exists($this->plugin, $method))
			{
				return null;
			}
			
			return call_user_func_array(array($this->plugin, $method), $arguments);
		}
	}


?>