<?php 
    require_once("./models/ventasModel.php");
	class Ventas extends Controller{
		public function __construct()
		{
			session_start();
			if(!isset($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
            $this->model=new ventasModel();

			parent::__construct();
		}

		public function ventas()
		{
			
			$data['page_title'] = "Ventas - Grupo Inkillay";
			$data['page_content'] = "Listado de Ventas generadas";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
            //$datos=$this->model->selectAllTickets();
			$this->views->getView($this,"ventas", $data);
		}

	}
 ?>