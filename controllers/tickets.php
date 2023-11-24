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
			$this->views->getView($this,"tickets", $data,$datos);
		}

		public function crear(){
			
			if($_POST){
				/* ID_Ticket Int primary key identity(1,1),
	CompaniaCodigo		Char(11) Not Null, 
	Periodo				Char(6) Not Null,
	NumTicket			VarChar(15) Not Null,
	Secuencia			Int,
	TipoProceso			Char(02),					--Se alimenta de un maestro
	FechaProceso		DateTime,                   --Registrar la fecha y hora que se genera el registro, debe ser en automático, no puede se manual, esto para evitar algún reclamo
	NumeroRegistros		Int,						--Importante saber cuantos registros se importan, ésto es para la facturación a futuro
	NombreArchivo		VarChar(200),				--Importante guardar el nombre del Archivo Importado o Generado
	Correlativo			*/
				$companiacodigo = $_POST['documento_fiscal'];
				$periodo = $_POST['periodo'];
				$numticket = $_POST['numero_ticket'];
				$secuencia = 8;
				$tipoproceso = $_POST['tipo_proceso'];
				$fechaproceso = date('Y-m-d h:m:s');
				$numeroregistros = $_POST['nro_registros'];
				$nombrearchivo = "hola";
				$correlativo = $_POST['correlativo'];

				$archivo=$_FILES["archivo"]["name"];
				$tipo=$_FILES["archivo"]["type"];
				$temp=$_FILES["archivo"]["tmp_name"];
				$extension = pathinfo($archivo, PATHINFO_EXTENSION);

				$archivo_sunat=$_FILES["archivo_sunat"]["name"];
				$tipo1=$_FILES["archivo_sunat"]["type"];
				$temp1=$_FILES["archivo_sunat"]["tmp_name"];
				$extension1 = pathinfo($archivo_sunat, PATHINFO_EXTENSION);

				$extensiones_permitidas = array('csv');
             


				if(empty($companiacodigo) && empty($periodo) && empty($numticket) && empty($secuencia) && empty($fechaproceso) && empty($numeroregistros) && empty($nombrearchivo) && empty($correlativo))
				{

					$arrResponse = array('status' => false, 'msg' => 'Campos vacíos', 'type' => 'warning');

				} else if(empty($companiacodigo) || empty($periodo) || empty($numticket) || empty($secuencia) || empty($fechaproceso) || empty($nombrearchivo) || empty($correlativo))
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

				} else if(strlen($periodo) > 6 || strlen($periodo) < 6){
				
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
						$nombrearchivo,
						$correlativo);


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

	}
 ?>