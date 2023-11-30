<?php 
    require_once("./models/empresasModel.php");
	class Empresas extends Controller{
		public function __construct()
		{
			session_start();
			if(!isset($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
			$this->model=new empresasModel();
			
			parent::__construct();
		}

		public function crearEmpresa(){
			if($_POST)
			{
				$razon_social = $_POST['razon_social'];
				$documento_fiscal = $_POST['documento_fiscal'];
				$ciudad = $_POST['ciudad'];
				$direccion = $_POST['direccion'];
				$telefono = $_POST['telefono'];
				$correo_electronico=$_POST['correo_electronico'];
				$estado = $_POST['estado_empresa'];

				$pattern_email = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';

				if(empty($razon_social) && empty($documento_fiscal) && empty($ciudad) && empty($direccion) && empty($direccion) && empty($telefono) && empty($correo_electronico) && empty($estado))
				{

					$arrResponse = array('status' => false, 'msg' => 'Campos vacíos', 'type' => 'warning');

				} else if(empty($razon_social) || empty($documento_fiscal) || empty($ciudad) || empty($direccion) || empty($direccion) || empty($telefono) || empty($correo_electronico) || empty($estado))
				{

					$arrResponse = array('status' => false, 'msg' => 'Campo vacío', 'type' => 'warning');

				} else if(!preg_match($pattern_email,$correo_electronico)){
				
					$arrResponse = array('status' => false, 'msg' => 'Correo inválido', 'type' => 'warning');

				} else {
					try
					{
						$arrData = array($razon_social,
						$documento_fiscal,
						$ciudad,
						$direccion,
						$telefono,
						$correo_electronico,
						$estado);
						
						$requestAdd = $this->model->insertNewCompany($arrData);

						if($requestAdd == 1)
						{
		
							$arrResponse = array('status' => true, 'msg' => 'Se ha insertado la empresa', 'type' => 'success');
		
						} else {
									
							$arrResponse = array('status' => false, 'msg' => 'Error al agregar la empresa', 'type' => 'error');
								
						}
					} catch (Exception $e)
					{
						$arrResponse = array('status' => false, 'msg' => 'Ocurrió un error: '.$e->getMessage(), 'type' => 'error');
					}

				}

				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

        
		public function busquedaXRUC(){
			
			if($_POST)
			{

				$documento_fiscal = $_POST['documentoFiscal'];

				try
				{
						$valoreRuc = $this->getRucData($documento_fiscal);
							
	
						$arrData = array(
							$valoreRuc['ruc'],
							$valoreRuc['razonSocial'],
							$valoreRuc['estado'],
							$valoreRuc['direccion'],
							$valoreRuc['capital']);
	
						$arrResponse = $arrData;
	
	
				} catch (Exception $e)
				{
					$arrResponse = array('status' => false, 'msg' => 'Ocurrió un error: '.$e->getMessage(), 'type' => 'error');
				}

				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);

			}

			die();

		}

		function getRucData($ruc) {
			$apiUrl = "https://dniruc.apisperu.com/api/v1/ruc/";
			$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6ImRib25hdHRpQHVjdnZpcnR1YWwuZWR1LnBlIn0.-Vmytnn9kGKsYl8-nYjOXI7GCt55ToE0_qMryaRBsVs";
			$url = $apiUrl . $ruc . "?token=" . $token;
		
			$json = file_get_contents($url);
			if ($json === false) {
				throw new Exception("Failed to get data from API");
			}
		
			$data = json_decode($json, true);
			if ($data === null) {
				throw new Exception("Failed to decode JSON");
			}
		
			return $data;
		}
		

	}

	
?>