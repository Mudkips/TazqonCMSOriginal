<?php

	class PluginManager extends nSmarty
	{
		private $plugins;
		private $pointer;
		
		public function __Construct($page)
		{
			parent::__Construct();
			
			$this->plugins = array();
			$this->pointer = 0;
			
			$result = Core::$DB->prepare('SELECT `cms_plugin_page`.*, 
			`cms_plugins`.`folder`, 
			`cms_plugins`.`files`,
			`cms_plugins`.`options` AS `default_options`
			FROM `cms_plugin_page`
			INNER JOIN `cms_plugins`
			ON `cms_plugins`.`id` = `cms_plugin_page`.`install_id`
			WHERE `cms_plugin_page`.`enabled` = "1"
			AND `cms_plugin_page`.`page_id` = ?
			ORDER BY `cms_plugin_page`.`order` ASC')->bind_param($page)->execute();
			
			while ($row = $result->next_record())
			{
				$this->InitPlugin($row);
			}
		}
		
		private function InitPlugin($row)
		{
			if (!is_array($row))
			{
				return false;
			}
			
			$plugin = new PluginExtention($row);
			$this->plugins[] = $plugin;
			
			return true;
		}
		
		public final function GetNextPlugin()
		{
			if (!isset($this->plugins[$this->pointer]))
			{
				$this->pointer = 0;
				
				return false;
			}
			
			return $this->plugins[$this->pointer++];
		}
		
		public final function GetPluginsByPosition($pos = 1)
		{
			return array_filter($this->plugins, function ($plugin) use ($pos) {
				return $pos == $plugin->position;
			});
		}
		
		private function GetIncludeFiles($asstring = false)
		{
			$result = array();
			
			foreach ($this->plugins as $plugin)
			{
				$files = array_filter($plugin->files, function ($file) use ($result) {
					return !in_array($file, $result);
				});
				
				$result = array_merge($result, $files);
			}
			
			if ($asstring)
			{
				$files = $result;
				$result = '';
				
				foreach ($files as $file)
				{
					$result .= (string)new IncludeFile(Core::$Config['site']['webbuild'].$file);
				}
			}
			
			return $result;
		}
		
		public final function InitPluginParams()
		{
			$this->Assign('IncludeFiles', $this->GetIncludeFiles(true));
			$this->Assign('content', $this->GetPluginsByPosition(0)); //full wide
			$this->Assign('column1', $this->GetPluginsByPosition(1)); //left
			$this->Assign('column2', $this->GetPluginsByPosition(2)); //center
			$this->Assign('column3', $this->GetPluginsByPosition(3)); //right
		}
	}

?>