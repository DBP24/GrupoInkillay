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
				Correlativo) 
				VALUES (?,?,?,?,?,?,?,?);";
			
			$request=$this->insert($query,$arrData);
			return $request;
		}

		/*public function insertNewSunatPurchaseRecord($arrData){
			
			$query="INSERT INTO SIRE_RegistroCompras_SUNAT(
			FechaEmision
			,FechaVencimiento
			,TipoDocumento
			,SerieDcoumento
			,NumeroDocumento
			,Ticket
			,TipDocIdentidad
			,NroDocIdentidad
			,RazonSocial
			,MontoExportacion
			,BaseImponibleGravado
			,BaseImponibleDsct
			,BaseIgvIpm
			,DsctoIgvIpm
			,MontoExonerado
			,MontoInafecto
			,MontoISC
			,BaseImponibleIvap
			,MontoIvap
			,MontoICBPER
			,MontoOtrostributos
			,MontoTotal
			,Moneda
			,TipoCambio
			,FecEmisionDocModificado
			,TipoDocModificado
			,SerieDocModificado
			,NumeroDocModificado
			,ProyectoOperadosAtribucion
			,TipodeNota
			,EstadoComprobante
			,ValorFOBEmbarcado
			,ValorOperacionGratuito
			,TipoOperacion
			,DamCP
			,CLU
			,CarSunat) 
				VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
			
			$request=$this->insert($query,$arrData);
			return $request;
		}*/

		public function insertNewSunatPurchaseRecord($archivo){
			$query = "BULK INSERT SIRE_RegistroCompras_SUNAT_Prueba FROM '".$archivo."' with(FIELDTERMINATOR='|',ROWTERMINATOR='\n',FIRSTROW=2)";
			$request=$this->bulkinsert($query);
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
    }
?>