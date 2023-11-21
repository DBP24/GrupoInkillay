<?php 
    require_once("./models/ticketsModel.php");
	class Tickets extends Controller{
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
            //$datos=$this->model->selectAllTickets();
			$this->views->getView($this,"tickets", $data);
		}

	}
 ?>