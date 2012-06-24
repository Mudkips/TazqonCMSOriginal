<?php

	//Base class
	abstract class BitPermission
	{
		//Current value
		private $value = 0;
		
		//The constructor for initializing the permissions
		abstract public function __Construct();
		
		//Returns the string
		public function __Tostring()
		{
			return $this->value;
		}
		
		//Get value for a permission
		public final function GetPermission($key)
		{
			if (is_int($key))
			{
				return ($this->value & (1 << $key)) != 0;
			}
			
			return 0;
		}
		
		//Set value for a permission
		public final function SetPermission($key, $value = true)
		{
			$this->value = ($this->value & ~(1 << $key)) | ($value << $key);
		}
		
		//Unset a permission
		public final function ClearPermission($key)
		{
			$this->Set($key, false);
		}
	}
	
	//user permission class
	class UserPermissions extends BitPermission
	{
		const PERM_LOGIN = 1; //may login
		const PERM_ENTER_CLIENT = 2; //may enter client
		const PERM_ADMIN = 3; //login admin, search users, add bans
		const PERM_ADMIN_2 = 4; //add/edit news, edit users, edit/remove bans
		const PERM_ADMIN_3 = 5; //remove users, remove news, edit website settings, edit ranks below user rank
		const PERM_ADMIN_4 = 6; //edit client settings, edit all ranks (Full premission)
		
		private $rank;
		
		//Set permissions for rank
		public function __Construct($rank = 1)
		{
			$this->rank = $rank;
			
			switch ($rank)
			{
				case 5:
					$this->SetPermission(self::PERM_ADMIN_4);
				case 5:
					$this->SetPermission(self::PERM_ADMIN_3);
				case 4:
					$this->SetPermission(self::PERM_ADMIN_2);
				case 4:
					$this->SetPermission(self::PERM_ADMIN);
				case 2:
				case 1:
				case 0:
					$this->SetPermission(self::PERM_LOGIN);
					$this->SetPermission(self::PERM_ENTER_CLIENT);
					break;
			}
		}
	}
	
?>