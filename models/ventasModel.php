<?php

class VentasModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function selectAllRegistrationOfSUNATSales()
		{
			$query="SELECT svs.ID_RegVentSunat,TipoDocumento,SerieDcoumento,EstadoComprobante,lm.LibroNombre,NumeroRegistrosSUNAT, st.Estado
			FROM SIRE_RegistroVentas_SUNAT svs 
			INNER JOIN SIRE_Ticket st ON st.ID_Ticket=svs.ID_Ticket
			INNER JOIN LibroMast lm ON lm.IdLibro=st.IdLibroSUNAT
			WHERE st.IdLibroSUNAT=3
			ORDER BY 3 ASC";
			$request=$this->select_all($query);
			return $request;
		}

		public function selectAllRegistrationOfCompanySales()
		{
			$query="SELECT sve.ID_RegVentEmpresa,TipoDocumento,SerieDcoumento,EstadoComprobante,lm.LibroNombre,NumeroRegistrosEmpresa, st.Estado
			FROM SIRE_RegistroVentas_EMPRESA sve 
			INNER JOIN SIRE_Ticket st ON st.ID_Ticket=sve.ID_Ticket
			INNER JOIN LibroMast lm ON lm.IdLibro=st.IdLibroEmpresa
			WHERE st.IdLibroEmpresa=4
			ORDER BY 3 ASC";
			$request=$this->select_all($query);
			return $request;
		}



    }
?>