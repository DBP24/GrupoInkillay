<?php 
    require_once("./models/ticketsModel.php");
	class Tickets extends Controller{
		public function __construct()
		{
			session_start();
			if(!isset($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
            $this->model=new ticketsModel();

			parent::__construct();
		}

		public function tickets()
		{
			
			$data['page_title'] = "Tickets - Grupo Inkillay";
			$data['page_content'] = "Listado de Tickets generados";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
            $datos=$this->model->selectAllTickets();
			$selectMaxIDTicket=$this->model->selectMaxIDTicket();
			$dato=$selectMaxIDTicket['ID']+1;
			$this->views->getView($this,"tickets", $data,$datos,$dato);
		}

		public function editar(){
			$idd = intval($_POST['id']);
			if($idd>0)
			{
				$datos_ticket=$this->model->viewTicket($idd);

                if(empty($datos_ticket)){
					$arrResponse = array('status' => true, 'msg' => 'Datos no encontrados');
				}else{
					$arrResponse = array('status' => true, 
					'msg' => 'Se muestran todos los clientes',
					'ticket' => $datos_ticket); 
				}
					
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}


		public function crear(){
			
			if($_POST){

				$companiacodigo = $_SESSION['Usuario']['DocumentoFiscal'];
				$periodo = $_POST['periodo'];
				// Obtener los primeros 4 caracteres (año) y los siguientes 2 caracteres (mes)
				$periodo_ano=substr($periodo,0,4);
				$periodo_mes = substr($periodo, 4, 2);

				$periodo_concatenado = $periodo_ano.$periodo_mes;

				$numticket = $_POST['numero_ticket'];
				$secuencia = 8;
				$tipoproceso = $_POST['tipo_proceso'];
				$fechaproceso = date('Y-m-d h:m:s');

				// Crear un objeto DateTime a partir de la cadena de fecha
				$fechaObjeto = new DateTime($fechaproceso);
				// Obtener el año y el mes
				$ano = $fechaObjeto->format('Y');  
				$mes = $fechaObjeto->format('m'); 

				$fechaproceso_concatenado=$ano.$mes;

				$numeroregistros = $_POST['nro_registros'];
				$correlativo = $_POST['correlativo'];

				$archivo=$_FILES["archivo"]["name"];
				$tipo=$_FILES["archivo"]["type"];
				$temp_empresa=$_FILES["archivo"]["tmp_name"];
				$extension = pathinfo($archivo, PATHINFO_EXTENSION);
				

				$archivo_sunat=$_FILES["archivo_sunat"]["name"];
				$tipo1=$_FILES["archivo_sunat"]["type"];
				$temp_sunat=$_FILES["archivo_sunat"]["tmp_name"];
				$extension1 = pathinfo($archivo_sunat, PATHINFO_EXTENSION);

				$extensiones_permitidas = array('csv');
             


				if(empty($companiacodigo) && empty($periodo) && empty($numticket) && empty($secuencia) && empty($fechaproceso) && empty($numeroregistros) && empty($correlativo))
				{

					$arrResponse = array('status' => false, 'msg' => 'Campos vacíos', 'type' => 'warning');

				} else if(empty($companiacodigo) || empty($periodo) || empty($numticket) || empty($secuencia) || empty($fechaproceso) || empty($correlativo))
				{

					$arrResponse = array('status' => false, 'msg' => 'Campo vacío', 'type' => 'warning');

				} else if($tipoproceso == 0)
				{

					$arrResponse = array('status' => false, 'msg' => 'Seleccione una opción', 'type' => 'warning');

				} else if(!empty($numeroregistros) && !is_numeric($numeroregistros) ||
				!empty($correlativo) && !is_numeric($correlativo) ||
				!empty($numticket) && !is_numeric($numticket) ||
				!empty($periodo) && !is_numeric($periodo)){
				
					$arrResponse = array('status' => false, 'msg' => 'Solo se ingresan números', 'type' => 'warning');

				} else if(strlen($periodo) > 6 || strlen($periodo) < 6 || $periodo_mes>12 || $periodo_mes <1 || $periodo_concatenado != $fechaproceso_concatenado){
				
					$arrResponse = array('status' => false, 'msg' => 'Periodo inválido', 'type' => 'warning');

				} else if(empty($archivo) || empty($archivo_sunat))
				{

					$arrResponse = array('status' => false, 'msg' => 'Por favor, suba el archivo', 'type' => 'warning');
				
				} else if(!empty($archivo_sunat) && !in_array($extension1, $extensiones_permitidas) ||
				!empty($archivo) && !in_array($extension, $extensiones_permitidas)){

					$arrResponse = array('status' => false, 'msg' => 'Solo se permiten formato .CSV', 'type' => 'warning');

				} else
				{
					try
					{
						$arrData = array($companiacodigo,
						$periodo,
						$numticket,
						$secuencia,
						$tipoproceso,
						$fechaproceso,
						$numeroregistros,
						$correlativo);
						
						$name_table = "SIRE_RegistroTemporalCompras_SUNAT_".$companiacodigo ;
						$name_table_empresa = "SIRE_RegistroTemporalCompras_EMPRESA_".$companiacodigo ;
						$this->model->insertNewSunatPurchaseRecord($temp_sunat,$name_table);
						$this->model->insertNewEntreprisePurchaseRecord($temp_empresa,$name_table_empresa);

						$requestAdd = $this->model->insertNewTicket($arrData);
						

						if($requestAdd)
						{

							$arrResponse = array('status' => true, 'msg' => 'Se ha insertado el ticket', 'type' => 'success');

						} else {
							
							$arrResponse = array('status' => false, 'msg' => 'Error al agregar el ticket', 'type' => 'error');
						
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

		public function actualizar(){

			if($_POST){

				$numeroregistros = $_POST['nro_registros']; 

				//Recibo el id
				$id = intval($_POST['id_ticket']);

				if(empty($numeroregistros)) 
				{

					$arrResponse = array('status' => false, 'msg' => 'Campos vacío', 'type' => 'warning');

				} else if(!is_numeric($numeroregistros))
				{

					$arrResponse = array('status' => false, 'msg' => 'Solo se permiten números', 'type' => 'warning');


				} else
				{
					try
					{
						$arrData = array($numeroregistros,$id);

						$requestUpd = $this->model->updateTicket($arrData);

						if($requestUpd)
						{

							$arrResponse = array('status' => true, 'msg' => 'Se ha actualizado el ticket', 'type' => 'success');

						} else {
							$arrResponse = array('status' => false, 'msg' => 'Error al actualizar el ticket', 'type' => 'error');
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
		
		function parsearCSV($csvData) {
			$lineas = explode("\n", $csvData);
			$registros = [];
		
			foreach ($lineas as $linea) {
				$registros[] = explode("|", $linea);
			}
		
			return $registros;
		}
		
	}
 ?>