<?php 
  
	class Usuarios extends Controller{
		public function __construct()
		{
			session_start();
			if(!isset($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
			$this->model=new UsuariosModel();
			
			parent::__construct();
		}

		public function cargar($id){
			$datos = $this->model->selectUser($id);
			return $datos;
		}

		public function perfil(){
			$data['page_title'] = "Perfil - Grupo Inkillay";
			$data['page_content'] = "Mi perfil";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
			$datos = $this->cargar($_SESSION['Usuario']["ID"]); 
			$_SESSION['Usuario']["Nombres"]=$datos['Nombres'];
			$_SESSION['Usuario']["Foto"]=$datos['Foto'];
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


    }
?>