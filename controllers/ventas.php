<?php 
    require_once("./models/ventasModel.php");
	class Ventas extends Controller{
		public function __construct()
		{
			session_start();
			if(!isset($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
            $this->model=new ventasModel();

			parent::__construct();
		}

		public function ventas()
		{
			
			$data['page_title'] = "Ventas - Grupo Inkillay";
			$data['page_content'] = "Listado de Ventas generadas";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
           //Ventas SUNAT
		   $datos=$this->model->selectAllRegistrationOfSUNATSales();
		   //Ventas EMPRESA
		   $dato=$this->model->selectAllRegistrationOfCompanySales();
		    $this->views->getView($this,"ventas", $data, $datos,$dato);
		}

		
		//Ver todos los registros perteneciente al periodo
		public function buscarXPeriodoSUNAT()
		{
			if($_POST)
			{
              $periodo = $_POST['periodo'];

			  //var_dump($periodo);

			  $arrResponse = $this->model->viewRegistrationOfSUNATSalesXPeriod($periodo);

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

			  $arrResponse = $this->model->viewRegistrationOfCompanySalesXPeriod($periodo);

			  //var_dump($arrResponse);

			  echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			  
			}

			die();
		}

		public function editar_ventas_sunat(){
			$idd = intval($_POST['id']);

			if($idd>0)
			{
				$datos_ventas_sunat=$this->model->viewRegistrationOfSUNATSales($idd);

                if(empty($datos_ventas_sunat)){
					$arrResponse = array('status' => true, 'msg' => 'Datos no encontrados','id' => $idd);
				}else{

					$arrResponse = array('status' => true, 
					'msg' => 'Se muestran todos los comprobantes',
					'ventas_sunat' => $datos_ventas_sunat); 
				}

				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				
			}
			
			die();
		}

		public function editar_ventas_empresa(){
			$idd = intval($_POST['id']);

			if($idd>0)
			{
				$datos_ventas_empresa=$this->model->viewRegistrationOfCompanySales($idd);

                if(empty($datos_ventas_empresa)){
					$arrResponse = array('status' => true, 'msg' => 'Datos no encontrados','id' => $idd);
				}else{

					$arrResponse = array('status' => true, 
					'msg' => 'Se muestran todos los comprobantes',
					'ventas_empresa' => $datos_ventas_empresa); 
				}

				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				
			}
			
			die();
		}

	}
 ?>