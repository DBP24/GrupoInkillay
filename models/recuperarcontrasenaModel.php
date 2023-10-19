<?php 

	class RecuperarcontrasenaModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}	

		public function recuperarContrasena($arrData){
			$query = "UPDATE tb_usuario SET token=? WHERE correo=?";
			$request=$this->update($query,$arrData);
			return $request;
		}

		public function cambiarContrasenaToken($arrData){
			$query = "UPDATE tb_usuario SET Apellido='' WHERE token=?";
			$request=$this->update($query,$arrData);
			return $request;
		}
		
	}

	//diego@gmail.com
	
 ?>