<?php 
    require_once("./models/ticketsModel.php");
	class Tickets extends Controller
	{
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
					$arrResponse = array('status' => true, 'msg' => 'Datos no encontrados','id' => $idd);
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
				// print_r("hola");
				$companiacodigo = $_SESSION['Usuario']['DocumentoFiscal'];
				$periodo = $_POST['periodo'];
				// Obtener los primeros 4 caracteres (año) y los siguientes 2 caracteres (mes)
				$periodo_ano=substr($periodo,0,4);
				$periodo_mes = substr($periodo, 4, 2);

				$periodo_concatenado = $periodo_ano.$periodo_mes;

				$numticket = $_POST['numero_ticket'];
				$idlibro = $_POST['tipo_libro'];
				//Buscar el ValidaTicket y ImportaArchivo
				$viewFields = $this->model->viewFields($idlibro);

				$fechaproceso = date('Y-m-d h:m:s');

				// Crear un objeto DateTime a partir de la cadena de fecha
				$fechaObjeto = new DateTime($fechaproceso);
				// Obtener el año y el mes
				$ano = $fechaObjeto->format('Y');  
				$mes = $fechaObjeto->format('m'); 

				$fechaproceso_concatenado=$ano.$mes;

				$numeroregistros_sunat = $_POST['nro_registros_sunat'];
				$correlativo = $_POST['correlativo'];
				
				$nombrearchivo_sunat=$_FILES["archivo_sunat"]["name"];
				$tipo1=$_FILES["archivo_sunat"]["type"];
				$temp_sunat=$_FILES["archivo_sunat"]["tmp_name"];
				
				$extension1 = pathinfo($nombrearchivo_sunat, PATHINFO_EXTENSION);

				$extensiones_permitidas = array('txt');
             
                $nombrearchivo=$nombrearchivo_sunat;

				$estado='1';

				if(empty($companiacodigo) && empty($periodo) && empty($fechaproceso) && empty($numeroregistros) && empty($correlativo)
				&& empty($numticket) && empty($nombrearchivo_sunat))
				{

					$arrResponse = array('status' => false, 'msg' => 'Campos vacíos', 'type' => 'warning');

				} else if(empty($companiacodigo) || empty($periodo) || empty($fechaproceso) || empty($correlativo))
				{

					$arrResponse = array('status' => false, 'msg' => 'Campo vacío', 'type' => 'warning');

				} else if($idlibro == 0)
				{

					$arrResponse = array('status' => false, 'msg' => 'Seleccione una opción', 'type' => 'warning');

				} else 	if($viewFields['ValidaTicket'] === 'S' && empty($numticket))
				{

					$arrResponse = array('status' => false, 'msg' => 'Número de Ticket vacío', 'type' => 'warning');

				} else 	if($viewFields['ImportaArchivo'] === 'S' && empty($nombrearchivo_sunat))
				{

					$arrResponse = array('status' => false, 'msg' => 'Por favor suba un archivo', 'type' => 'warning');

				} else if(!empty($numeroregistros) && !is_numeric($numeroregistros) ||
				!empty($correlativo) && !is_numeric($correlativo) ||
				!empty($numticket) && !is_numeric($numticket) ||
				!empty($periodo) && !is_numeric($periodo)){
				
					$arrResponse = array('status' => false, 'msg' => 'Solo se ingresan números', 'type' => 'warning');

				} else if(strlen($periodo) > 6 || strlen($periodo) < 6 || $periodo_mes>12 || $periodo_mes <1 || $periodo_concatenado >= $fechaproceso_concatenado){
				
					$arrResponse = array('status' => false, 'msg' => 'Periodo inválido', 'type' => 'warning');

			    } else if($viewFields['ImportaArchivo']==='S' && !empty($nombrearchivo_sunat) && !in_array($extension1, $extensiones_permitidas))
				{

					$arrResponse = array('status' => false, 'msg' => 'Solo se permiten formato .TXT', 'type' => 'warning');

				} else if($this->validarArchivo($temp_sunat))
				{

				    $arrResponse = array('status' => false, 'msg' => 'El archivo está vacío', 'type' => 'warning');

				} else if($this->validarColumnas($temp_sunat, 37))
				{

					$arrResponse = array('status' => false, 'msg' => 'Archivo inválido', 'type' => 'warning');

				} else if($this->validarRUCdelArchivo($temp_sunat, $companiacodigo)){

					$arrResponse = array('status' => false, 'msg' => 'El RUC que está en el archivo, es diferente a la empresa que estás logueado', 'type' => 'warning');

				} else
				{
					try
					{
						// Contar los registros en el archivo
						$numeroregistros_sunat = $this->contarRegistrosEnArchivo($temp_sunat);

						if(empty($nombrearchivo_sunat))
						{
                            $nombrearchivo_sunat = null;
						}

						$numeroregistros_empresa = null;
						$nombrearchivo_empresa = null;

                        
						if($idlibro == 1)
						{
                            //Registro Compras Propuesto
							$name_table = "SIRE_RegistroTemporalCompras_SUNAT_".$companiacodigo ;
							$this->model->insertNewTemporaryRegistrationOfSUNATPurchases($temp_sunat,$name_table);
						} else if($idlibro == 3){
						    //Registro Ventas Propuesto
							$name_table = "SIRE_RegistroTemporalVentas_SUNAT_".$companiacodigo ;
							$this->model->insertNewTemporaryRegistrationOfSUNATSales($temp_sunat,$name_table);
						}

						$arrData = array($companiacodigo,
						$periodo,
						$numticket,
						$fechaproceso,
						$numeroregistros_sunat,
						$numeroregistros_empresa,
						$nombrearchivo_sunat,
						$nombrearchivo_empresa,
						$correlativo,
						$estado,
					    $idlibro);

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
				$companiacodigo = $_SESSION['Usuario']['DocumentoFiscal'];
                //SUNAT
				$nombrearchivo_sunat=$_FILES["archivo_sunat"]["name"];
				$tipo=$_FILES["archivo_sunat"]["type"];
				$temp_sunat=$_FILES["archivo_sunat"]["tmp_name"];
                //Empresa
				$nombrearchivo_empresa=$_FILES["archivo"]["name"];
				$tipo1=$_FILES["archivo"]["type"];
				$temp_empresa=$_FILES["archivo"]["tmp_name"];

				$extension = pathinfo($nombrearchivo_sunat, PATHINFO_EXTENSION);
				$extension1 = pathinfo($nombrearchivo_empresa, PATHINFO_EXTENSION);

				$extensiones_permitidas = array('txt');

				$idlibro = $_POST['tipo_libro_editar'];
				//Buscar el ValidaTicket y ImportaArchivo
				$viewFields = $this->model->viewFields($idlibro);
				//Recibo el id
				$id = intval($_POST['id_ticket']);
                
				if($idlibro == 0)
				{

					$arrResponse = array('status' => false, 'msg' => 'Seleccione una opción', 'type' => 'warning');
					
				} else if($viewFields['ImportaArchivo']==='S' && !empty($nombrearchivo_sunat) && !in_array($extension1, $extensiones_permitidas))
				{

					$arrResponse = array('status' => false, 'msg' => 'Solo se permiten formato .TXT', 'type' => 'warning');

				} else if($this->validarArchivo($temp_empresa))
				{

				    $arrResponse = array('status' => false, 'msg' => 'El archivo está vacío', 'type' => 'warning');

				} else if($this->validarColumnas($temp_empresa, 37))
				{

					$arrResponse = array('status' => false, 'msg' => 'Archivo inválido', 'type' => 'warning');


				} else
				{
					try
					{
						// Contar los registros en el archivo
						$numeroregistros = $this->contarRegistrosEnArchivo($temp_empresa);

						$arrData = array($numeroregistros,$nombrearchivo_empresa,$id);

						if($idlibro == 2)
						{
                            //Registro Compras Propuesto
							$name_table = "SIRE_RegistroTemporalCompras_EMPRESA_".$companiacodigo ;
							$this->model->insertNewTemporaryRegistrationOfCompanyPurchases($temp_empresa,$name_table);

						} else if($idlibro == 4){
						    //Registro Ventas Propuesto
							$name_table = "SIRE_RegistroTemporalVentas_EMPRESA_".$companiacodigo ;
							$this->model->insertNewTemporaryRegistrationOfCompanySales($temp_empresa,$name_table);
						}

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

		public function contarRegistrosEnArchivo($ruta_archivo) {
			$contenido = file_get_contents($ruta_archivo);
		
			// Dividir el contenido en líneas
			$lineas = explode("\n", $contenido);
		
			// Excluir la primera línea (encabezado)
			array_shift($lineas);
		
			// Contar las líneas restantes (registros)
			$num_registros = count($lineas);
		
			return $num_registros;
		}

		
		public function validarArchivo($ruta_archivo) {
     
			if (file_exists($ruta_archivo)) {
				//Verificar si el tamaño del archivo es igual a cero (está vacío)
				if (filesize($ruta_archivo) == 0) {
					return true;
				} else {
					return false;
				}
			} else {
				return true;
			}

			
		}

		function validarColumnas($rutaArchivo, $numeroColumnas) {
			// Verificar si el archivo existe
			if (file_exists($rutaArchivo)) {
				// Abrir el archivo en modo lectura
				$archivo = fopen($rutaArchivo, 'r');
		
				// Verificar si se pudo abrir el archivo
				if ($archivo) {
					// Iterar sobre cada línea del archivo
					while (($linea = fgets($archivo)) !== false) {
						// Obtener las columnas separando la línea por un delimitador (por ejemplo, '|')
						$columnas = explode('|', $linea);
		                
						// Verificar si el número de columnas es igual al esperado
						if (count($columnas) !== $numeroColumnas) {
							fclose($archivo);
							return true; // La función devuelve falso si hay un error
						}
					}
		
					// Cerrar el archivo
					fclose($archivo);
		
					return false; // La función devuelve verdadero si todas las líneas cumplen con el número de columnas
				} else {
					return true; // no se pudo abrir el archivo
				}
			} else {
				return true; //archivo no existe
			}
		}


		public function cargarcombos(){
			
				if(isset($_POST['action'])){
					switch ($_POST['action']){
						case 'get-book_type-SUNAT':
							$arrData=$this->model->loadBookTypeSUNAT();
							echo json_encode($arrData);
							break;

						case 'get-book_type':
						$arrData=$this->model->loadBookType();
						echo json_encode($arrData);
						break;

						case 'get-book_type-Purchases-Or-Sales':
							$id=addslashes(trim($_POST['id']));
							$arrData=$this->model->loadBookTypeOfPurchasesOrSales($id);
							//unset($_SESSION['idd']);
							echo json_encode($arrData);
							break;
					}
				}
	
        }

		public function eliminar(){
			if($_POST)
			{
				$id = $_POST['id'];

				$requestDel = $this->model->deleteTicket(array($id));
						

				if($requestDel)
				{

					$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el ticket', 'type' => 'success');

				} else {
							
					$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el ticket', 'type' => 'error');
						
				}

				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);

			}
		}

		public function validarRUCdelArchivo($rutaArchivo, $companiacodigo, $delimitador = '|') {
			// Lee el contenido del archivo
			$contenido = file_get_contents($rutaArchivo);
		
			// Divide el contenido en líneas
			$lineas = explode("\n", $contenido);
		
			// Inicializa un array para almacenar los datos de la columna 37
			$datosColumna37 = [];
		
			// Retorna
			$bandera = false;
		
			// Verifica si hay al menos una línea en el archivo
			if (!empty($lineas)) {
				// Obtén la primera línea del archivo para determinar la cantidad de columnas
				$primeraLinea = reset($lineas);
		
				// Divide la primera línea en columnas usando el delimitador
				$columnasPrimeraLinea = explode($delimitador, $primeraLinea);
		
				// Obtén la cantidad de columnas
				$cantidadColumnas = count($columnasPrimeraLinea);
		
				// Itera sobre cada línea y obtiene los datos de la columna 37
				foreach ($lineas as $linea) {
					// Divide la línea en columnas usando el delimitador
					$columnas = explode($delimitador, $linea);
		
					// Obtiene los datos de la columna 37 (ajusta el índice según sea necesario)
					$datoColumna37 = isset($columnas[$cantidadColumnas - 1]) ? trim($columnas[$cantidadColumnas - 1]) : null;
		
					// Extrae los 11 primeros dígitos
					$primeros11Digitos = substr($datoColumna37, 0, 11);
		
					// Almacena los 11 primeros dígitos en el array
					$datosColumna37[] = $primeros11Digitos;
				}
		
				foreach ($datosColumna37 as $datoColumna37) {
					if ($datoColumna37 != $companiacodigo) {
						$bandera = true;
						break;
					} else {
						$bandera = false;
						break;
					}
				}
			}
		
			return $bandera;
		}
		

		

    }

?>