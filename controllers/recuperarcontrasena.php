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


	}
 ?>