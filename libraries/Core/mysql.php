<?php 

	class mysql extends conexion
	{
		private $conexion;
		private $strquery;
		private $arrValues;

		function __construct()
		{
			$this->conexion = new conexion();
			$this->conexion = $this->conexion->conect();
		}

		//insert registro
		public function insert(string $query, array $arrValues)
		{

			$this->strquery = $query;
			$this->arrValues = $arrValues;


			$insert = $this->conexion->prepare($this->strquery);
			$resInsert = $insert->execute($this->arrValues);
			
			if($resInsert)
			{
				$lastInsert = $this->conexion->lastInsertId();
			}else{
				$lastInsert = 0;
			}
			return $lastInsert;
		}

		public function select(string $query)
		{
			$this->strquery = $query;
			$result = $this->conexion->prepare($this->strquery);
			$result->execute();
			$data = $result->fetch(PDO::FETCH_ASSOC);
			return $data;
		}

	//devolver todos los registros
		public function select_all(string $query)
		{
			$this->strquery = $query;
			$result = $this->conexion->prepare($this->strquery);
			$result->execute();
			$data = $result->fetchall(PDO::FETCH_ASSOC);
			return $data;

		}

		//metod para actualizar
		public function update(string $query, array $arrValues)
		{
			$this->strquery = $query;
			$this->arrValues = $arrValues;
			$update = $this->conexion->prepare($this->strquery);
			$resExecute = $update->execute($this->arrValues);
			return $resExecute;
		}

		//metodo eliminar
		public function delete(string $query)
		{
			$this->strquery = $query;
			$result = $this->conexion->prepare($this->strquery);
			$del = $result->execute();
			return $del;
		}
	}

 ?>