<?php

//Crear una clase
class Conexion{
	private $conect;

	public function __construct(){
		$serverName = "DESKTOP-CI62OJ1";
		$database= "grupoinkillay";
		try{
			$this->conect = new PDO("sqlsrv:Server=$serverName;Database=$database;ConnectionPooling=0", null, null);
            //Detecta errores específicos
			$this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    //echo "conexión exitosa";
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