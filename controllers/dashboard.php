<?php 

	class Dashboard extends Controller{
		public function __construct()
		{
			session_start();
			if(!isset($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
			parent::__construct();
		}

		public function dashboard()
		{
			
			$data['page_title'] = "Dashboard - Grupo Inkillay";
			$data['page_content'] = "Dashboard";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
            //$datos=$this->model->contar();
			$this->views->getView($this,"dashboard", $data);
		}

	}
 ?>