<?php
   require_once("./models/loginModel.php");
class Login extends Controller
{
	public function __construct()
	{
		session_start();
		if (isset($_SESSION['login'])) {
			header('Location: ' . base_url() . '/dashboard');
		}
        $this->model=new loginModel();
		parent::__construct();
	}

	public function login()
	{

		$data['page_title'] = "Login - Grupo Inkillay";
		$data['page_content'] = "Login";
		$data['page_author'] = "";
		$data['page_description'] = "";
		$data['page_keywords'] = "";

		if (isset($_COOKIE["usuario"]) && isset($_COOKIE["contrasena"])) {
			$data['usuario'] = $_COOKIE["usuario"];
			$data['contrasena'] = $_COOKIE["contrasena"];
		} else {
			$data['usuario'] = "";
			$data['contrasena'] = "";
		}

		$this->views->getView($this, "login", $data);
	}

	public function validarcredenciales(){
		if($_POST){
			try {
                $ruc = $_POST['ruc'] ;
				$usuario = $_POST['usuario'] ;
				$password = $_POST['password'];
				$recordarme = isset($_POST['recordarme']) ? true : false;
				//validamos el captcha
				$ip =  $_SERVER['REMOTE_ADDR'];
				$captcha = $_POST['g-recaptcha-response'];
				$secret = "6LfQkbQoAAAAAIGZrDPG66QxG-m45zKgUAJyT4Ic";

				$correct  =  file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
				$atr =  json_decode($correct,TRUE);

			if ($atr['success']){
				$requestLog = $this->model->validateCredentials($ruc,$usuario,$password);

				if($requestLog)
				{
					$_SESSION['login']=true;
					$_SESSION['Usuario'] = $requestLog;

					//creamos las cookis
					if ($recordarme) {
						setcookie("usuario", $requestLog['Usuario'], time() + 604800);
						setcookie("contrasena", $password, time() + 604800);
					}
					
    					$arrResponse = array('status' => true, 'msg' => 'Es correcto las credenciales', 'type' => 'success');
    				
				} else if($requestLog == 'exist')
    			{
    				$arrResponse = array('status' => false, 'msg' => 'Credenciales incorrectas' , 'type' => 'error');
    				
				} else if(empty($ruc) && empty($usuario) && empty($password))
    			{

    				$arrResponse = array('status' => false, 'msg' => 'Campos vacíos' , 'type' => 'warning');

    			} else if(empty($ruc) || empty($usuario) || empty($password))
    			{

    				$arrResponse = array('status' => false, 'msg' => 'Campo vacío' , 'type' => 'warning');

				} else if(!is_numeric($ruc))
    			{

    				$arrResponse = array('status' => false, 'msg' => 'Solo se ingresan números' , 'type' => 'warning');	
				
				} else if(strlen($ruc) > 11 || strlen($ruc) < 11)
    			{

    				$arrResponse = array('status' => false, 'msg' => 'RUC inválido' , 'type' => 'warning');

    			}else
    			{

    				$arrResponse = array('status' => false, 'msg' => 'Contraseña Incorrecta' , 'type' => 'error');
    				
				}
    				
			} else {

				$arrResponse = array('status' => false, 'msg' => 'Seleccione el Captcha' , 'type' => 'error');
				
			}

	
			} catch (Exception $e)
			{
				$arrResponse = array('status' => false, 'msg' => 'Ocurrió un error: '.$e->getMessage(), 'type' => 'error');
			}
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
		}
		
		die();
	}


}
?>