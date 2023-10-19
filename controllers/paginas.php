<?php 

	class Paginas extends Controller{
		public function __construct()
		{
			
			session_start();
			if(!isset($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
			//$this->model=new PaginasModel();
			
			parent::__construct();
		}

        public function pagina(){
			$data['page_title'] = "Página 1 - Grupo Inkillay";
			$data['page_content'] = "Página 1";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
			$this->views->getView($this,"pagina", $data);
		}

        public function pagina2(){
			$data['page_title'] = "Página 2 - Grupo Inkillay";
			$data['page_content'] = "Página 2";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
			$this->views->getView($this,"pagina2", $data);
		}


	}
 ?>