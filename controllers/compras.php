<?php 
    require_once("./models/comprasModel.php");
	class Compras extends Controller{
		public function __construct()
		{
			session_start();
			if(!isset($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
            $this->model=new comprasModel();

			parent::__construct();
		}

		public function compras()
		{
			
			$data['page_title'] = "Compras - Grupo Inkillay";
			$data['page_content'] = "Listado de Compras generados";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
			//Compras SUNAT
            $datos=$this->model->selectAllRegistrationOfSUNATPurchases();
			//Compras EMPRESA
			$dato=$this->model->selectAllRegistrationOfCompanyPurchases();
			$this->views->getView($this,"compras", $data,$datos,$dato);
		}

		//Ver todos los registros perteneciente al periodo
		public function buscarXPeriodoSUNAT()
		{
			if($_POST)
			{
              $periodo = $_POST['periodo'];

			  //var_dump($periodo);

			  $arrResponse = $this->model->viewRegistrationOfSUNATPurchasesXPeriod($periodo);

			  //var_dump($arrResponse);

			  echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			  
			}

			die();
		}

		public function buscarXPeriodoEmpresa()
		{
			if($_POST)
			{
              $periodo = $_POST['periodo'];

			  //var_dump($periodo);

			  $arrResponse = $this->model->viewRegistrationOfCompanyPurchasesXPeriod($periodo);

			  //var_dump($arrResponse);

			  echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			  
			}

			die();
		}

		public function editar_compras_sunat(){
			$idd = intval($_POST['id']);

			if($idd>0)
			{
				$datos_compras_sunat=$this->model->viewRegistrationOfSUNATPurchases($idd);

                if(empty($datos_compras_sunat)){
					$arrResponse = array('status' => true, 'msg' => 'Datos no encontrados','id' => $idd);
				}else{

					$arrResponse = array('status' => true, 
					'msg' => 'Se muestran todos los comprobantes',
					'compras_sunat' => $datos_compras_sunat); 
				}

				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				
			}
			
			die();
		}

		public function editar_compras_empresa(){
			$idd = intval($_POST['id']);

			if($idd>0)
			{
				$datos_compras_empresa=$this->model->viewRegistrationOfCompanyPurchases($idd);

                if(empty($datos_compras_empresa)){
					$arrResponse = array('status' => true, 'msg' => 'Datos no encontrados','id' => $idd);
				}else{

					$arrResponse = array('status' => true, 
					'msg' => 'Se muestran todos los comprobantes',
					'compras_empresa' => $datos_compras_empresa); 
				}

				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				
			}
			
			die();
		}

	}
 ?>