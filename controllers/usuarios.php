<?php 
    require_once("./models/usuariosModel.php");
	class Usuarios extends Controller{
		public function __construct()
		{
			session_start();
			if(!isset($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
			$this->model=new usuariosModel();
			
			parent::__construct();
		}

		public function cargar($id){
			$datos = $this->model->selectUser($id);
			return $datos;
		}

		public function usuarios(){
			$data['page_title'] = "Página 1 - Grupo Inkillay";
			$data['page_content'] = "Insertar Nuevos Usuarios";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
			$datos=$this->model->selectAllUsers();
			$this->views->getView($this,"usuarios", $data,$datos);
		}

		public function perfil(){
			$data['page_title'] = "Perfil - Grupo Inkillay";
			$data['page_content'] = "Mi perfil";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
			$datos = $this->cargar($_SESSION['Usuario']["ID"]); 
			$this->views->getView($this,"perfil", $data , $datos);

		}

		public function recuperarcontrasena(){
			$data['page_title'] = "Recuperar contraseña - Grupo Inkillay";
			$data['page_content'] = "Recuperar contraseña";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
			$this->views->getView($this,"recuperarcontrasena", $data , $datos);
		}

		public function agregar(){
			$data['page_title'] = "Agregar Usuario - Grupo Inkillay";
			$data['page_content'] = "Agregar Usuario";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
			$this->views->getView($this,"agregar", $data);

		}

		public function crearUsuario(){
			
			if($_POST){
				print_r("hola");
				$apellidopaterno = $_POST['apellidopaterno'];
				$apellidomaterno = $_POST['apellidomaterno'];
				$nombres = $_POST['nombres'];
				$cargo = $_POST['cargo'];
				$correoelectronico = $_POST['correoelectronico'];
				$telefono = $_POST['telefono'];
				$numerocelular = $_POST['numerocelular'];
				$fecharegistro = date('Y-m-d H:i:s');

				// CAMBIOS

				$fechainicio = date('Y-m-d H:i:s', strtotime($_POST['fechainicio']));
				$fechafinal = date('Y-m-d H:i:s', strtotime($_POST['fechafinal']));

				// END

				$importecontrato = $_POST['importecontrato'];
				$usuario = $_POST['usuario'];
				$password = $_POST['password'];
				$imagen=$_FILES["fileInput"]["name"];
				$tipo=$_FILES["fileInput"]["type"];
				$temp=$_FILES["fileInput"]["tmp_name"];
				$extensiones_permitidas = array('png', 'jpeg', 'jpg');
                $extension = pathinfo($imagen, PATHINFO_EXTENSION);
				$estado = isset($_POST['estado']) ? true : false;
				$id_empresa = $_POST['empresa'];

				$pattern_letras = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚÜüñÑ]+$/";

				$pattern_email = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';

				if(empty($apellidopaterno) && empty($apellidomaterno) && empty($nombres) && empty($correoelectronico) && empty($numerocelular) && empty($fechainicio) && empty($fechafinal) && empty($importecontrato) && empty($usuario) && empty($password))
				{

					$arrResponse = array('status' => false, 'msg' => 'Campos vacíos', 'type' => 'warning');

				} else if(empty($apellidopaterno) || empty($apellidomaterno) || empty($nombres) || empty($correoelectronico) || empty($numerocelular) || empty($fechainicio) || empty($fechafinal) || empty($importecontrato) || empty($usuario) || empty($password))
				{

					$arrResponse = array('status' => false, 'msg' => 'Campo vacío', 'type' => 'warning');

				} else if($cargo == 0 || $id_empresa==0)
				{

					$arrResponse = array('status' => false, 'msg' => 'Seleccione una opción', 'type' => 'warning');

				} else if(!preg_match($pattern_letras,$apellidopaterno) || !preg_match($pattern_letras,$apellidomaterno) || !preg_match($pattern_letras,$nombres)){
				
					$arrResponse = array('status' => false, 'msg' => 'Solo se ingresan letras', 'type' => 'warning');

				} else if(!preg_match($pattern_email,$correoelectronico)){
				
					$arrResponse = array('status' => false, 'msg' => 'Correo inválido', 'type' => 'warning');

				} else if(!is_numeric($numerocelular) || !is_numeric($importecontrato)){
				
					$arrResponse = array('status' => false, 'msg' => 'Solo se ingresan números', 'type' => 'warning');

				} else if(!empty($telefono) && !is_numeric($telefono) || !empty($telefono) && strlen($telefono) > 7 || !empty($telefono) && strlen($telefono) < 7){
				
					$arrResponse = array('status' => false, 'msg' => 'Teléfono inválido', 'type' => 'warning');

				} else if(strlen($numerocelular) > 9 || strlen($numerocelular) < 9){
				
					$arrResponse = array('status' => false, 'msg' => 'Número de Celular inválido', 'type' => 'warning');

				} else if($fechainicio > $fechafinal || $fechainicio == $fechafinal){

					$arrResponse = array('status' => false, 'msg' => 'Fecha final inválida', 'type' => 'warning');

				} else if(!empty($imagen) && !in_array($extension, $extensiones_permitidas)){

					$arrResponse = array('status' => false, 'msg' => 'Solo se permiten formatos como: .jpg, .png y .jpeg', 'type' => 'warning');

				} else
				{
					try
					{

						if($imagen == "" || $imagen == null || empty($imagen))
						{

							$foto="defecto.png";

						} else {

							$cadena_minuscula=mb_strtolower($imagen,'utf-8');
							$cadena_sin_espacios=strtr($cadena_minuscula, " ", "_");
							$foto=$this->eliminar_acentos($cadena_sin_espacios);

						}

						if($estado==1){

							$estado = "1";

						} else {

							$estado = "0";

						}

						if(empty($telefono)){

							$telefono=null;
							
						}
						
						$arrData = array($apellidopaterno,$apellidomaterno,$nombres,$cargo,$correoelectronico,$telefono,$numerocelular,$fecharegistro,$fechainicio,$fechafinal,$importecontrato,$usuario,$password,$foto,$estado);

						$selectMaxIDUser = $this->model->selectMaxIDUser();
						$id_usuario = $selectMaxIDUser['ID']+1;

						$arrData1 = array($id_usuario, $id_empresa);
						
						move_uploaded_file($temp,"assets/img/usuarios/".$foto);

						$requestAdd = $this->model->insertNewUser($arrData);

						$this->model->insertNewUserCompany($arrData1);

						if($requestAdd)
						{

							$arrResponse = array('status' => true, 'msg' => 'Se ha insertado el usuario', 'type' => 'success');

						} else {
							
							$arrResponse = array('status' => false, 'msg' => 'Error al agregar el usuario', 'type' => 'error');
						
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

		public function eliminar_acentos($cadena){
		
			//Reemplazamos la A y a
			$cadena = str_replace(
			array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
			array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
			$cadena
			);
	
			//Reemplazamos la E y e
			$cadena = str_replace(
			array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
			array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
			$cadena );
	
			//Reemplazamos la I y i
			$cadena = str_replace(
			array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
			array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
			$cadena );
	
			//Reemplazamos la O y o
			$cadena = str_replace(
			array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
			array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
			$cadena );
	
			//Reemplazamos la U y u
			$cadena = str_replace(
			array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
			array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
			$cadena );
	
			//Reemplazamos la N, n, C y c
			$cadena = str_replace(
			array('Ñ', 'ñ', 'Ç', 'ç'),
			array('N', 'n', 'C', 'c'),
			$cadena
			);
			
			return $cadena;
		}

		public function cargarcombos()
		{
			if(isset($_POST['action'])){
				switch ($_POST['action']){
					case 'get-companies':
						$arrData=$this->model->loadCompany();
			            echo json_encode($arrData);
					break;
				}
			}
		}

		


    }
?>