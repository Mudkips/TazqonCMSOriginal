<?php

	class page_community extends PluginManager implements IPage
	{
		private $id;
		private $menu_id;
		private $body_id;
		private $title;
		private $page;
		
		public final function __Construct()
		{
			$this->page = 1;
			if (isset($_GET['page_id']))
			{
				$this->page = $_GET['page_id'];
			}
			
			parent::__Construct($this->page);
			
			$this->CheckLogin(true);
			
			$this->SetCaching(false);
		}
		
		public final function Initialize()
		{
			$this->InitParams();
			$this->InitPluginParams();
			
			$result = Core::$DB->prepare('SELECT * FROM `cms_pages` WHERE `id` = ? LIMIT 1')->bind_param($this->page)->execute();
			$data = $result->next_record();
			$this->id = $data['id'];
			$this->menu_id = $data['menu_id'];
			$this->title = $data['title'];
			$this->body_id = $data['body_id'];
			
			$this->Assign('subtitle', $this->title);
			$this->Assign('body_id', $this->body_id);
			
			$mainitems = array();
			$subitems = array();
			
			$result = Core::$DB->prepare('SELECT `a`.*, `b`.`id` AS `main_id`
			FROM `cms_menu` `a`
			LEFT JOIN `cms_menu` `b`
			ON `b`.`id` = `a`.`parent_id`
			WHERE `a`.`enabled` = "1"
			AND `a`.`min_rank` <= ?
			AND (`a`.`parent_id` = 0
			OR `a`.`id` = ?
			OR `a`.`parent_id` = `b`.`id`)
			ORDER BY `a`.`order` ASC')->bind_param(Core::$Users->GetUser()->rank, $this->menu_id)->execute();
			while ($row = $result->next_record())
			{
				
				$row = $this->ReplaceParams($row);
					
				if ($row['parent_id'] == 0)
				{
					$mainitems[$row['id']] = $row;
					$mainitems[$row['id']]['selected'] = false;
				}
				else
				{
					$subitems[$row['id']] = $row;
					$subitems[$row['id']]['selected'] = false;
					
					if ($this->menu_id == $row['id'])
					{
						$mainitems[$row['main_id']]['selected'] = true;
						$subitems[$row['id']]['selected'] = true;
					}
				}
			}
			
			//exit(nl2br(print_r($mainitems, true).'<br>'.print_r($subitems, true)));
			
			if (Core::$Users->GetUser()->GetPermission(UserPermissions::PERM_ADMIN))
			{
				$index = Count($mainitems) + 1;
				$mainitems[$index]['title'] = 'Housekeeping';
				$mainitems[$index]['classname'] = '" id="tab-register-now';
				$mainitems[$index]['url'] = URL.'/housekeeping';
				$mainitems[$index]['selected']  = false;
			}
			
			$subitem = array_pop($subitems);
			$subitem['classname'] .= ' last';
			$subitems[] = $subitem;
			
			$this->Assign('menu_mainitems', $mainitems);
			$this->Assign('menu_subitems', $subitems);
		}
		
		public final function OnCreate()
		{
			$this->Display('page-community-base.tpl');
		}
		
		public final function OnSubmit()
		{	
			while ($plugin = $this->GetNextPlugin())
			{
				$plugin->OnSubmit();
			}
		}
	}

?>