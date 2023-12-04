<?php

class ComprasModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function selectAllRegistrationOfSUNATPurchases()
		{
			$query="SELECT srs.ID_RegCompSunat,TipoDocumento,SerieDcoumento,EstadoComprobante,lm.LibroNombre,NumeroRegistrosSUNAT, st.Estado
			FROM SIRE_RegistroCompras_SUNAT srs 
			INNER JOIN SIRE_Ticket st ON st.ID_Ticket=srs.ID_Ticket
			INNER JOIN LibroMast lm ON lm.IdLibro=st.IdLibroSUNAT
			WHERE st.IdLibroSUNAT=1
			ORDER BY 3 ASC";
			$request=$this->select_all($query);
			return $request;
		}

		public function selectAllRegistrationOfCompanyPurchases()
		{
			$query="SELECT sre.ID_RegCompEmpresa,TipoDocumento,SerieDcoumento,EstadoComprobante,lm.LibroNombre,NumeroRegistrosEmpresa, st.Estado
			FROM SIRE_RegistroCompras_EMPRESA sre 
			INNER JOIN SIRE_Ticket st ON st.ID_Ticket=sre.ID_Ticket
			INNER JOIN LibroMast lm ON lm.IdLibro=st.IdLibroEmpresa
			WHERE st.IdLibroEmpresa=2
			ORDER BY 3 ASC";
			$request=$this->select_all($query);
			return $request;
		}



    }
?>