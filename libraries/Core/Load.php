<?php 

	$controller = ucwords($controller);
	$controllerFile = "controllers/".$controller.".php";//buscar controlador
	if(file_exists($controllerFile))
	{
			require_once($controllerFile);
			$controller = new $controller();//instncia no tenemos el controlador
			if(method_exists($controller, $method))
			{
				$controller->{$method}($params);//instncia
			}else{
				//echo "No exixte controlador";
				require_once("controllers/error.php");
			}


	}else{
		//echo "no existe controlador";
		require_once("controllers/error.php");
	}
	

 ?>