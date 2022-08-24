<?php 

		class Dashboard extends controllers{

		public function __construct()
		{
			parent::__construct();
		}

		public function dashboard()
		{
		//	echo "mensaje desde el controlador";
			$data['page_id'] = 2;
			$data['page_tag'] = "Dashboard";
			$data['page_title'] = "dashboard";
			$data['page_name'] = "dashboard";
			
			$this->views->getView($this,"dashboard",$data);
			

		}


	}



 ?>