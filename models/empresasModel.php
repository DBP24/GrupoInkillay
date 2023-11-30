<?php

class EmpresasModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

        public function insertNewCompany($arrData){
			
			$query="INSERT INTO dbo.tb_empresa(
				RazonSocial,
				DocumentoFiscal,
				Ciudad,
				Direccion,
				Telefono,
				CorreoElectronico,
				Estado) 
				VALUES (?,?,?,?,?,?,?);";
			
			$request=$this->inserta($query,$arrData);
			return $request;
		}

    }
?>