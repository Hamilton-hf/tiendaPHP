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

			//recorrer para estado
			for($i=0; $i < count($arrData);$i++)
			{
				if($arrData[$i]['status'] ==1 )
				{
					$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
				}
				else{
					$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
				}

				$arrData[$i]['options'] = '<div class="text-center">
				<button class="btn btn-secondary btn-sm btnPermisosRol" rl="'.$arrData[$i]['idrol'].'" title="Permisos"><i class="fas fa-key">Perm.</i></button>
				<button class="btn btn-primary btn-sm btnEditRol" rl="'.$arrData[$i]['idrol'].'" title="Editar"><i class="fas fa-pencil-alt">Edit</i></button>
				<button class="btn btn-danger btn-sm btnDelRol" rl="'.$arrData[$i]['idrol'].'" title="Eliminar"><i class="far fa-trash-alt">Eliminar</i></button>
				</div>';

			}
		//	dep($arrData[0]['status']);exit;


			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}


	}



 ?>