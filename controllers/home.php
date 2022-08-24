<?php 

//crear clase home
	class home extends controllers{

		public function __construct()
		{
			parent::__construct();
		}

		public function home()
		{
		//	echo "mensaje desde el controlador";
			$data['page_id'] = 1;
			$data['page_tag_page'] = "home";
			$data['page_title'] = "Pagina principal";
			$data['page_name'] = "home";
			$data['page_content'] = "loren ;laksjdfpoqiwer;laksjd;flkjqpwoeirqowekr;lkjpoiwe";
			$this->views->getView($this, "home",$data);

		}


/*
		public function insertar()
		{
			$data = $this->model->setUser("Carlos",18);
			print_r($data);
		}

		public function verusuario($id)
		{
			$data = $this->model->getUser($id);
			print_r($data);
		}

		public function actualizar()
		{
			$data = $this->model->updateUser(1,"roberto",30);
			print_r($data);
		}
		
		public function verusuarios()
		{
			$data = $this->model->getUsers();
			print_r($data);
		}

		public function eliminarUsuario($id)
		{
			$data = $this->model->delUser($id);
			print_r($data);
		}*/

	}

 ?>