<?php 
   require_once("./models/recuperarcontrasenaModel.php");
	class Recuperarcontrasena extends Controller{
		public function __construct()
		{
			$this->model=new recuperarcontrasenaModel();
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
		$to = $correo_;
$subject = 'Envío de Token';
$message = '
<html>
<head>
  <meta charset="utf-8">
  <title>Envío de Token</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .header {
      background-color: #f8f8f8;
      padding: 20px;
      text-align: center;
    }
    .content {
      margin: 20px;
    }
  </style>
</head>
<body>
  <div class="header">
    <img src="https://grupoinkillay.alexanderminaya.com/assets/img/logo.png" alt="Logo" style="width: 200px;">
  </div>
  <div class="content">
    <p>Hola,</p>
    <p>Te enviamos un token de acceso para nuestro formulario:</p>
    <p>Token: '.$token_.'</p>
    <p>Por favor, copia el token y pégalo en el formulario.</p>
    <p>Ricardo Rouillon Lao</p>
    <p>Grupo Inkillay</p>
  </div>
</body>
</html>
';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: hola@darematechnology.com' . "\r\n" .
    'Reply-To: hola@darematechnology.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	 
			//enviar mensaje
			$mail=@mail($to, $subject, $message, $headers);
			 
			return $mail;
		}


	}
 ?>