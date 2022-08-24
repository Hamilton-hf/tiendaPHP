<?php 

//crear clase home
	class errors extends controllers{

		public function __construct()
		{
			parent::__construct();
		}

		public function notFound()
		{
		//	echo "mensaje desde el controlador";
			$this->views->getView($this, "error");
		}

	}

	$notFound = new errors();
	$notFound->notFound();

 ?>

