<?php

class TicketsModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function selectAllTickets()
		{
			$query="SELECT ID_Ticket, Periodo, NumTicket, FechaProceso, LibroNombre, NumeroRegistrosSUNAT FROM 
			SIRE_ticket t INNER JOIN LibroMast lm ON lm.IdLibro= t.IdLibro WHERE t.Estado='1'";
			$request=$this->select_all($query);
			return $request;
		}

		public function viewFields($id)
		{
			$query="SELECT ImportaArchivo, ValidaTicket FROM LibroMast WHERE IdLibro=$id;";
			$request=$this->select($query);
			return $request;
		}

		public function loadMasterBook()
		{
			$query="SELECT * FROM LibroMast ORDER BY IdLibro ";
			$request=$this->select_all($query);
			return $request;
		}

		public function loadBookTypeSUNAT()
		{
			$query="SELECT * FROM LibroMast WHERE Estado = '1' AND IdLibro='1' OR IdLibro='3' ORDER BY IdLibro ";
			$request=$this->select_all($query);
			return $request;
		}

		public function loadBookTypeCompany()
		{
			$query="SELECT * FROM LibroMast WHERE Estado = '1' AND IdLibro='2' OR IdLibro='4' ORDER BY IdLibro ";
			$request=$this->select_all($query);
			return $request;
		}

		public function loadBookType()
		{
			$query="SELECT * FROM LibroMast WHERE Estado = '1' ORDER BY IdLibro ";
			$request=$this->select_all($query);
			return $request;
		}
		
		public function insertNewTicket($arrData){
			
			$query="INSERT INTO SIRE_ticket(
				CompaniaCodigo,		
				Periodo,		
				NumTicket,					
				FechaProceso,	
				NumeroRegistrosSUNAT,
				NumeroRegistrosEmpresa,	
				NombreArchivoSUNAT,
				NombreArchivoEmpresa,
				Correlativo,
				Estado,
				IdLibro) 
				VALUES (?,?,?,?,?,?,?,?,?,?,?);";
			
			$request=$this->insert($query,$arrData);
			return $request;
		}

		public function insertNewTemporaryRegistrationOfSUNATPurchases($archivo,$name_table){
			$query = "EXEC SIRE_SP_RegistroCompras_SUNAT @ruta_archivo = ?,@name_table = ?";
			$request = $this->bulkinsert_prueba($query, [$archivo,$name_table]);
			return $request;
		}

		public function insertNewTemporaryRegistrationOfSUNATSales($archivo,$name_table){
			$query = "EXEC SIRE_SP_RegistroVentas_SUNAT @ruta_archivo = ?,@name_table = ?";
			$request = $this->bulkinsert_prueba($query, [$archivo,$name_table]);
			return $request;
		}

		public function insertNewTemporaryRegistrationOfCompanyPurchases($archivo,$name_table){
			$query = "EXEC SIRE_SP_RegistroCompras_EMPRESA @ruta_archivo = ?,@name_table = ?";
			$request = $this->bulkinsert_prueba($query, [$archivo,$name_table]);
			return $request;
		}

		public function insertNewTemporaryRegistrationOfCompanySales($archivo,$name_table){
			$query = "EXEC SIRE_SP_RegistroVentas_EMPRESA @ruta_archivo = ?,@name_table = ?";
			$request = $this->bulkinsert_prueba($query, [$archivo,$name_table]);
			return $request;
		}
		
		
		public function selectMaxIDTicket(){
			$query="SELECT MAX(ID_Ticket) AS ID FROM SIRE_Ticket";
			$request=$this->select($query);
			return $request;
		}

		public function viewTicket($id)
		{
			$query="SELECT *,CONVERT(date, FechaProceso) AS FechaProceso FROM SIRE_Ticket WHERE ID_Ticket=$id;";
			$request=$this->select($query);
			return $request;
		}

		public function updateTicket($arrData){
			$query="UPDATE SIRE_Ticket SET
				NumeroRegistros=? WHERE ID_Ticket=?";
			
			$request=$this->update($query,$arrData);
			return $request;
		}

		public function deleteTicket($arrData){
			$query="UPDATE SIRE_Ticket SET
				Estado='0' WHERE ID_Ticket=?";
			
			$request=$this->update($query,$arrData);
			return $request;
		}
    }
?>