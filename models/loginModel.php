<?php 

	class LoginModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}	

		public function validateCredentials($ruc,$usuario,$password){
			
			$query="SELECT * FROM dbo.tb_usuario_empresa ue INNER JOIN dbo.tb_usuario u ON u.ID= ue.Usuario INNER JOIN dbo.tb_empresa e ON e.DocumentoFiscal = ue.Empresa WHERE u.Usuario ='$usuario' AND u.Password='$password' AND e.DocumentoFiscal = '$ruc';";

			$request=$this->select($query);
			
			return $request;
		
	    }
	}
 ?>