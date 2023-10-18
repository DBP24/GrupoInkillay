<?php 

	class Login extends Controller{
		public function __construct()
		{
			session_start();
			if(isset($_SESSION['login']))
			{
				header('Location: '.base_url().'/dashboard');
			}
			parent::__construct();
		}
	
		public function login()
		{
			
			$data['page_title'] = "Login - Grupo Inkillay";
			$data['page_content'] = "Login";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";

			$this->views->getView($this,"login", $data);
		}

		public function validarcredenciales(){
			if($_POST){
                try {
					$usuario = $_POST['usuario'] ;
					$password = $_POST['password'];

					$requestLog = $this->model->validateCredentials($usuario,$password);

					if($requestLog)
					{
						$_SESSION['login']=true;
						$_SESSION['Usuario'] = $requestLog;
						
						$arrResponse = array('status' => true, 'msg' => 'Es correcto las credenciales', 'type' => 'success');
					} else if($requestLog == 'exist')
					{
						$arrResponse = array('status' => false, 'msg' => 'Credenciales incorrectas' , 'type' => 'error');
					} else if(empty($usuario) && empty($password))
					{
						$arrResponse = array('status' => false, 'msg' => 'Campos vacíos' , 'type' => 'warning');
					} else if(empty($usuario) || empty($password))
					{
						$arrResponse = array('status' => false, 'msg' => 'Campo vacío' , 'type' => 'warning');
					}else
					{
						$arrResponse = array('status' => false, 'msg' => 'Contraseña Incorrecta' , 'type' => 'error');
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