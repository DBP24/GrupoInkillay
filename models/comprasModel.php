<?php

class ComprasModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function selectAllRegistrationOfSUNATPurchases()
		{
			$query="SELECT srs.ID_RegCompSunat, TipoDocumento,SerieDcoumento, EstadoComprobante, lm.LibroNombre, 
			NumeroRegistrosSUNAT, st.Estado FROM SIRE_Ticket st
			INNER JOIN LibroMast lm ON lm.IdLibro = st.IdLibroSUNAT
			INNER JOIN SIRE_RegistroCompras_SUNAT srs ON srs.ID_Ticket=st.ID_Ticket
			ORDER BY 1 DESC";
			$request=$this->select_all($query);
			return $request;
		}



    }
?>