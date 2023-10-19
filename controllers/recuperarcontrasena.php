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
			$data['page_title'] = "Recuperar contraseña - Grupo Inkillay";
			$data['page_content'] = "Recuperar contraseña";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
			$this->views->getView($this,"validartoken", $data);
		}

       
		public function recuperar(){
			
			if($_POST){
				$email = $_POST['correo'];
				$token = token();
				if(empty($email))
				{
					$arrResponse = array('status' => false, 'msg' => 'Ingrese su correo...', 'type' => 'error');
				}else{
					$arrData = array($token, $email);
					$requestAdd = $this->model->recuperarContrasena($arrData);
					if($requestAdd)
						{
							//enviar información al correo el token.....
							$arrResponse = array('status' => true, 'msg' => 'Se le a enviado un correo a su Gmail, verifique', 'type' => 'success');
						} else {
							$arrResponse = array('status' => false, 'msg' => 'Datos Erroneos', 'type' => 'error');
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
				if(empty($token) || empty($pass_01) || empty($pass_02))
				{
					$arrResponse = array('status' => false, 'msg' => 'Rellene todos los campos', 'type' => 'error');
				}else if($pass_01 == $pass_02){
					$arrResponse = array('status' => false, 'msg' => 'Las contraseñas no coinciden', 'type' => 'error');
				}
				else{
					$arrData = array($token, $pass_01);
					$requestAdd = $this->model->cambiarContrasenaToken($arrData);
					if($requestAdd)
						{
							$arrResponse = array('status' => true, 'msg' => 'Su Contraseña se a restablecido', 'type' => 'success');
						} else {
							$arrResponse = array('status' => false, 'msg' => 'Error al restablecer contraseña', 'type' => 'error');
						}
					
				}
			
				
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			 die();
		}


	}
 ?>