<?php 
    require_once("./models/comprasModel.php");
	class Compras extends Controller{
		public function __construct()
		{
			session_start();
			if(!isset($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
            $this->model=new comprasModel();

			parent::__construct();
		}

		public function compras()
		{
			
			$data['page_title'] = "Compras - Grupo Inkillay";
			$data['page_content'] = "Listado de Compras generados en SUNAT";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
            $datos=$this->model->selectAllRegistrationOfSUNATPurchases();
			$this->views->getView($this,"compras", $data,$datos);
		}

	}
 ?>