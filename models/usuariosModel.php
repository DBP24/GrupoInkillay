<?php

class UsuariosModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function selectAllUsers()
		{
			$query="SELECT ID, CONCAT(ApellidoPaterno,' ',ApellidoMaterno,', ',Nombres) AS Usuario, Cargo, CorreoElectronico, FechaRegistro, FechaInicio, FechaFinal FROM tb_usuario";
			$request=$this->select_all($query);
			return $request;
		}

		public function insertNewUser($arrData){
			
			$query="INSERT INTO tb_usuario(
				ApellidoPaterno,
				ApellidoMaterno,
				Nombres,
				Cargo,
				CorreoElectronico,
				Telefono,
				NumeroCelular,
				FechaRegistro,
				FechaInicio,
				FechaFinal,
				ImporteContrato,
				Usuario,
				Password,
				Foto,
				Estado) 
				VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
			
			$request=$this->insert($query,$arrData);
			return $request;
		}

		public function selectUser($id){
			$query="SELECT * FROM tb_usuario WHERE ID= '$id'";
			$request=$this->select($query);
			return $request;
		}

		public function loadCompany(){
			$query="SELECT * FROM tb_empresa";
			$request=$this->select_all($query);
			return $request;
		}

		public function selectMaxIDUser(){
			$query="SELECT MAX(ID) AS ID FROM tb_usuario";
			$request=$this->select($query);
			return $request;
		}

		public function insertNewUserCompany($arrData){
			
			$query="INSERT INTO tb_usuario_empresa(
				Usuario,
				Empresa) 
				VALUES (?,?);";
			
			$request=$this->insert($query,$arrData);
			return $request;
		}

    }
?>