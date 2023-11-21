<?php

//Crear una clase
class Conexion{
	private $conect;

	public function __construct(){
		// $serverName = "DESKTOP-V4RKOA4\SQLEXPRESS";
		$serverName = SERVER_NAME;
		$database= DB_NAME;
	
		try{
			// $this->conect = new PDO("sqlsrv:Server=$serverName;Database=$database;ConnectionPooling=0", null, null);
			$this->conect = new PDO("sqlsrv:Server=$serverName;Database=$database;ConnectionPooling=0", DB_USER, DB_PASSWORD);


            //Detecta errores específicos
			$this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    // echo "conexión exitosa";
		}catch(PDOException $e){
			$this->conect = 'Error de conexión';
		    echo "ERROR: " . $e->getMessage();
		}
	}

	public function conect(){
		return $this->conect;
	}
}

?>