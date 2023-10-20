<?php 

	class RecuperarcontrasenaModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}	

		public function recuperarContrasena($arrData){
			$query = "UPDATE tb_usuario SET Token=? WHERE Correo=?";
			$request=$this->update($query,$arrData);
			return $request;
		}

		public function cambiarContrasenaToken($arrData){
			$query = "UPDATE tb_usuario SET Password=AES_ENCRYPT(?,'2023'), Token= NULL WHERE Token=?";
			$request=$this->update($query,$arrData);
			return $request;
		}
		
	}

	
 ?>