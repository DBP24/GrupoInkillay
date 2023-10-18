<?php

class UsuariosModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function updateUser($arrData){
			$query="UPDATE tb_usuario SET
				Nombres=?,
				Apellidos=?,
				Usuario=?,
				Foto=? WHERE ID=?";
			
			$request=$this->update($query,$arrData);
			return $request;
		}

		public function selectUser($id){
			$query="SELECT * FROM tb_usuario WHERE ID= '$id'";
			$request=$this->select($query);
			return $request;
		}

		/*public function viewPassword($id){
			$query="SELECT cast(AES_DECRYPT(Password, '150129') AS CHAR) AS Contrasena_Actual FROM tb_usuario WHERE ID= '$id'";
			$request=$this->select($query);
			return $request;
		}*/

		/*public function changepassword($arrData){
			$query="UPDATE tb_usuario SET Password=AES_ENCRYPT(?,'150129') 
			WHERE ID= ?";
			$request=$this->update($query,$arrData);
			return $request;
		}*/

    }
?>