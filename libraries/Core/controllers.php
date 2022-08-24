<?php 

	class controllers
	{
		//metodo construct
		 public function __construct()
		 {
		 	$this->views =  new views();
		 	$this->loadModel();
		 }

		 //metodo para cargar los modelos
		 //heredado de home .. 
		 public function loadModel()
		 {
		 	//homemodel
		 	$model = get_class($this)."Model";
		 	//reerencia a la carpeta moels
		 	$routClass = "models/".$model.".php";

		 	if(file_exists($routClass))
		 	{
		 		require_once($routClass);
		 		//instancia de la clase del homdelo
		 		$this->model = new $model();
		 	}
		 }


	}

 ?>