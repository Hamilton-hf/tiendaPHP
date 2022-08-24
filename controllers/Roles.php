<?php 

		class Roles extends controllers{

		public function __construct()
		{
			parent::__construct();
		}

		public function Roles()
		{
		//	echo "mensaje desde el controlador";
			$data['page_id'] = 3;
			$data['page_tag'] = "Roles Usuario";
			$data['page_title'] = "Roles Usuario <small>Tienda Virtual</small>";
			$data['page_name'] = "roles_usuario";
			
			$this->views->getView($this,"roles",$data);
			

		}

		//mostrarinformacion 
		public function getRoles()
		{
			$arrData =$this->model->selectRoles();
			//dep funcion en helpers
			//dep($arrData);

			//formato json para que sea leido desde cualquier lenguaje de programaci[on]
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}


	}



 ?>