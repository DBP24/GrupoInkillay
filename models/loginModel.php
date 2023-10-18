<?php 

	class LoginModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}	

		public function validateCredentials($usuario,$password){
			
			$query="SELECT * FROM tb_usuario WHERE Usuario ='$usuario' AND Password='$password'";
			
			$request=$this->select($query);
			
			return $request;
		
	    }
	}
 ?>