<?php
class conexion{

	private $conect;

	public function __construct(){
		$connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.B_CHARSET.";
		try{
		    //$this->conect = new PDO($connectionString, $this->user, $this->password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
			//
			$this->conect = new PDO($connectionString,DB_USER, DB_PASSWORD);
			$this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    //echo "conexión exitosa";
		}catch(PDOException $e){
			$this->conect = 'Error de conexión';
		    echo "ERROR: " . $e->getMessage();
		}
	}

	public function conect(){
		return $this->conect;
	}
}

?>