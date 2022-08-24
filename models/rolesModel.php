
<?php 


	class rolesModel extends mysql
	{

		public function __construct()
		{
			//echo "Mensaje desddde el home";

			//cargar metodo padre
			parent::__construct();

		}


		public function selectRoles()
		{
			//EXTREAER ROLES
			$sql = "SELECT * FROM rol WHERE status != 0";
			$request = $this->select_all($sql);
			return $request;
		}

    }

 ?>

	


