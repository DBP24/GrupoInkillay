<?php 

	class LoginModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}	

		public function validateCredentials($ruc,$usuario,$password){
			
			$query="SELECT * FROM tb_usuario_empresa ue INNER JOIN tb_usuario u ON u.ID= ue.Usuario INNER JOIN tb_empresa e ON e.ID = ue.Empresa WHERE u.Usuario ='$usuario' AND u.Password=AES_ENCRYPT('$password','2023') AND e.DocumentoFiscal = '$ruc';";

			$request=$this->select($query);
			
			return $request;
		
	    }
	}
 ?>