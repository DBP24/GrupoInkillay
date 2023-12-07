<?php

class ComprasModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function selectAllRegistrationOfSUNATPurchases()
		{
			$query="SELECT
			ID_RegCompSunat
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
			,CarSunat
			FROM SIRE_RegistroCompras_SUNAT srs 
			INNER JOIN SIRE_Ticket st ON st.ID_Ticket=srs.ID_Ticket
			INNER JOIN LibroMast lm ON lm.IdLibro=st.IdLibroSUNAT
			WHERE st.IdLibroSUNAT=1
  			AND st.Periodo = (SELECT MAX(Periodo) FROM SIRE_Ticket WHERE IdLibroSUNAT = 1)
			ORDER BY 3 ASC";
			$request=$this->select_all($query);
			return $request;
		}

		public function selectAllRegistrationOfCompanyPurchases()
		{
			$query="SELECT 
			ID_RegCompEmpresa
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
			,CarSunat
			FROM SIRE_RegistroCompras_EMPRESA sre 
			INNER JOIN SIRE_Ticket st ON st.ID_Ticket=sre.ID_Ticket
			WHERE st.IdLibroEmpresa=2
			AND st.Periodo = (SELECT MAX(Periodo) FROM SIRE_Ticket WHERE IdLibroEmpresa = 2)
			ORDER BY 3 ASC";
			$request=$this->select_all($query);
			return $request;
		}

		public function viewRegistrationOfSUNATPurchasesXPeriod($periodo)
		{
			$query="SELECT
			ID_RegCompSunat
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
			,CarSunat FROM SIRE_RegistroCompras_SUNAT srs
			INNER JOIN SIRE_Ticket st ON st.ID_Ticket = srs.ID_Ticket
			WHERE st.Periodo='$periodo';";
			$request=$this->select_all($query);
			return $request;
		}

		public function viewRegistrationOfCompanyPurchasesXPeriod($periodo)
		{
			$query="SELECT
			ID_RegCompEmpresa
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
			,CarSunat FROM SIRE_RegistroCompras_Empresa sre
			INNER JOIN SIRE_Ticket st ON st.ID_Ticket = sre.ID_Ticket
			WHERE st.Periodo='$periodo';";
			$request=$this->select_all($query);
			return $request;
		}
		
		public function viewRegistrationOfSUNATPurchases($id)
		{
			$query="SELECT * FROM SIRE_RegistroCompras_SUNAT WHERE ID_RegCompSunat=$id;";
			$request=$this->select($query);
			return $request;
		}

		public function viewRegistrationOfCompanyPurchases($id)
		{
			$query="SELECT * FROM SIRE_RegistroCompras_EMPRESA WHERE ID_RegCompEmpresa=$id;";
			$request=$this->select($query);
			return $request;
		}


    }
?>