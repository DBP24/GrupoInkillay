<?php 

	class Recuperarcontrasena extends Controller{
		public function __construct()
		{
			
			parent::__construct();
		}

        public function recuperarcontrasena(){
			$data['page_title'] = "Recuperar contraseña - Grupo Inkillay";
			$data['page_content'] = "Recuperar contraseña";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
			$this->views->getView($this,"recuperarcontrasena", $data);
		}
        public function CambiarContrasenaToken(){
			if(isset($_GET['resp'])){
				$data['page_title'] = "Cambiar contraseña - Grupo Inkillay";
				$data['page_content'] = "Cambiar contraseña";
				$data['page_author'] = "";
				$data['page_description'] = "";
				$data['page_keywords'] = "";
				$this->views->getView($this,"validartoken", $data);
			}else{
				$this->recuperarcontrasena();
			}
			
		}

       
		public function recuperar(){
			
			if($_POST){
				$correo = $_POST['correo'];
				$token = token();

				$pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
				
				if(empty($correo))
				{
					$arrResponse = array('status' => false, 'msg' => 'Campo vacío', 'type' => 'warning');

				} else if(!preg_match($pattern,$correo))
				{
					$arrResponse = array('status' => false, 'msg' => 'Correo inválido', 'type' => 'warning');

				}else{
					$arrData = array($token, $correo);
					$requestAdd = $this->model->recuperarContrasena($arrData);
					
					if($requestAdd == 1)
					{	
						//enviar información al correo el token.....
						$arrResponse = array('status' => true, 'msg' => 'Se le ha enviado el token a su correo electrónico', 'type' => 'success');
						$this->envioToken($token,$correo);
					
					} else {

						$arrResponse = array('status' => false, 'msg' => 'Datos Erróneos', 'type' => 'error');
					}
					
				}
			
				
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			 die();
		}

		public function validarToken(){
			if($_POST){

				$token = $_POST['token'];
				$pass_01 = $_POST['pass_1'];
				$pass_02 = $_POST['pass_2'];

				
				if(empty($token) && empty($pass_01) && empty($pass_02))
				{
					$arrResponse = array('status' => false, 'msg' => 'Rellene todos los campos', 'type' => 'warning');

				} else if(empty($token) || empty($pass_01) || empty($pass_02)){

					$arrResponse = array('status' => false, 'msg' => 'Campo vacío', 'type' => 'warning');

				}else if($pass_01 != $pass_02){

					$arrResponse = array('status' => false, 'msg' => 'Las contraseñas no coinciden', 'type' => 'error');
				}
				else{
					$tk = strval($token);
					$arrData1 = array($pass_01,$tk);
					$requestAdd1 = $this->model->cambiarContrasenaToken($arrData1);
					// print_r($requestAdd1);
					if($requestAdd1 == 1)
						{
							$arrResponse = array('status' => true, 'msg' => 'Su contraseña se a restablecido', 'type' => 'success');
						} else {
							$arrResponse = array('status' => false, 'msg' => 'Error al restablecer contraseña', 'type' => 'error');
						}
					
				}
			
				
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			 die();
		}

		private function envioToken($token_,$correo_){
			//datos para el correo
			$destinatario="hola@darematechnology.com";
			$asunto ="Envío de Token";
			$mensaje="
			Hola,\n

			Te enviamos un token de acceso para nuestro formulario:\n
			Token: " . $token_. "\n

			Por favor, copia el token y pégalo en el formulario en [Enlace al Formulario]. El token es válido por un tiempo limitado.\n

			Gracias.\n

			Ricardo Rouillon Lao\n
			Grupo Inkillay\n";

			$header="From: " . $correo_ . "\r\n";
			$header.="Reply-To: " . $correo_ . "\r\n";
			$header.="X-Mailer: PHP/". phpversion();
	 
			//enviar mensaje
			$mail=@mail($destinatario,$asunto,$mensaje,$header);
			 
			return $mail;
		}


	}
 ?>