<?php

class VentasModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function selectAllRegistrationOfSUNATSales()
		{
			$query="SELECT 
			ID_RegVentSunat
			,FechaEmision
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
			,CarSunat
			FROM SIRE_RegistroVentas_SUNAT srv 
			INNER JOIN SIRE_Ticket st ON st.ID_Ticket=srv.ID_Ticket
			INNER JOIN LibroMast lm ON lm.IdLibro=st.IdLibroSUNAT
			WHERE st.IdLibroSUNAT=3
			AND st.Periodo = (SELECT MAX(Periodo) FROM SIRE_Ticket WHERE IdLibroSUNAT = 3)
			ORDER BY 3 ASC";
			$request=$this->select_all($query);
			return $request;
		}

		public function selectAllRegistrationOfCompanySales()
		{
			$query="SELECT
			ID_RegVentEmpresa
			,FechaEmision
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
			,CarSunat
			FROM SIRE_RegistroVentas_EMPRESA sre 
			INNER JOIN SIRE_Ticket st ON st.ID_Ticket=sre.ID_Ticket
			WHERE st.IdLibroEmpresa=4
			AND st.Periodo = (SELECT MAX(Periodo) FROM SIRE_Ticket WHERE IdLibroEmpresa = 4)
			ORDER BY 3 ASC";
			$request=$this->select_all($query);
			return $request;
		}

		public function viewRegistrationOfSUNATSalesXPeriod($periodo)
		{
			$query="SELECT
			ID_RegVentSunat
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
			,CarSunat FROM SIRE_RegistroVentas_SUNAT srv
			INNER JOIN SIRE_Ticket st ON st.ID_Ticket = srv.ID_Ticket
			WHERE st.Periodo='$periodo';";
			$request=$this->select_all($query);
			return $request;
		}

		public function viewRegistrationOfCompanySalesXPeriod($periodo)
		{
			$query="SELECT
			ID_RegVentEmpresa
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
			,CarSunat FROM SIRE_RegistroVentas_Empresa sre
			INNER JOIN SIRE_Ticket st ON st.ID_Ticket = sre.ID_Ticket
			WHERE st.Periodo='$periodo';";
			$request=$this->select_all($query);
			return $request;
		}
		
		public function viewRegistrationOfSUNATSales($id)
		{
			$query="SELECT * FROM SIRE_RegistroVentas_SUNAT WHERE ID_RegVentSunat=$id;";
			$request=$this->select($query);
			return $request;
		}

		public function viewRegistrationOfCompanySales($id)
		{
			$query="SELECT * FROM SIRE_RegistroVentas_EMPRESA WHERE ID_RegVentEmpresa=$id;";
			$request=$this->select($query);
			return $request;
		}



    }
?>