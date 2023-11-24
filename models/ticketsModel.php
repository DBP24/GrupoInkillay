<?php

class TicketsModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function selectAllTickets()
		{
			$query="SELECT ID_Ticket, Periodo, NumTicket, Secuencia, FechaProceso, TipoProceso, NumeroRegistros FROM SIRE_ticket";
			$request=$this->select_all($query);
			return $request;
		}

		public function insertNewTicket($arrData){
			
			$query="INSERT INTO SIRE_ticket(
				CompaniaCodigo,		
				Periodo,		
				NumTicket,			
				Secuencia,			
				TipoProceso,		
				FechaProceso,	
				NumeroRegistros,
				NombreArchivo,	
				Correlativo) 
				VALUES (?,?,?,?,?,?,?,?,?);";
			
			$request=$this->insert($query,$arrData);
			return $request;
		}



    }
?>