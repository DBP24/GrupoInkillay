<?php

class ReportesModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function selectAllReports($start, $length, $searchFields) {
			// Consulta para contar el número total de registros
			$countQuery = "SELECT COUNT(*) as total FROM SIRE_RegistroCompras_EMPRESA sre 
						INNER JOIN SIRE_Ticket st ON st.ID_Ticket = sre.ID_Ticket
						WHERE st.IdLibroEmpresa = 2
						AND st.Periodo = (SELECT MAX(Periodo) FROM SIRE_Ticket 
											WHERE IdLibroEmpresa = 2)";

			// Agrega la lógica de búsqueda si se proporciona algún valor de búsqueda
			foreach ($searchFields as $field => $value) {
				if (!empty($value)) {
					$countQuery .= " AND ($field LIKE '%$value%')";
				}
			}

			// Ejecutar la consulta para obtener el total de registros
			$totalCount = $this->select_all($countQuery);
			$totalRecords = $totalCount[0]['total'];

			// Consulta principal con paginación
			$query = "SELECT
						ID_RegCompEmpresa,
						TipoComprobante,
						SerieComprobante,
						NumeroComprobante,
						Ticket,
						TipDocIdentidad,
						NroDocIdentidad,
						RazonSocial,
						MontoExportacion,
						BaseImponibleGravado,
						BaseImponibleDsct,
						BaseIgvIpm,
						DsctoIgvIpm,
						MontoExonerado,
						MontoInafecto,
						MontoISC,
						BaseImponibleIvap,
						MontoIvap,
						MontoICBPER,
						MontoOtrostributos,
						MontoTotal,
						Moneda,
						TipoCambio,
						FecEmisionDocModificado,
						TipoDocModificado,
						SerieDocModificado,
						NumeroDocModificado,
						ProyectoOperadosAtribucion,
						TipodeNota,
						EstadoComprobante,
						ValorFOBEmbarcado,
						ValorOperacionGratuito,
						TipoOperacion,
						DamCP,
						CLU,
						CarSunat
					FROM SIRE_RegistroCompras_EMPRESA sre 
					INNER JOIN SIRE_Ticket st ON st.ID_Ticket = sre.ID_Ticket
					WHERE st.IdLibroEmpresa = 2
					AND st.Periodo = (SELECT MAX(Periodo) FROM SIRE_Ticket 
									WHERE IdLibroEmpresa = 2)";

			// Agrega la lógica de búsqueda si se proporciona algún valor de búsqueda

			foreach ($searchFields as $field => $value) {
				if (!empty($value)) {
					$query .= " AND ($field LIKE '%$value%')";
				}
			}

			$query .= " ORDER BY 1 ASC
						OFFSET $start ROWS
						FETCH NEXT $length ROWS ONLY";

			// Ejecutar la consulta principal utilizando tu método select_all
			$result = $this->select_all($query);

			// Devuelve el resultado junto con el total de registros
			return array('total' => $totalRecords, 'data' => $result);
		}
		
		public function viewRegistrationOfCompanyPurchasesXPeriod($periodo)
		{
			$query="SELECT
			ID_RegCompEmpresa
			,TipoComprobante
			,SerieComprobante
			,NumeroComprobante
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
		

		public function viewRegistrationOfCompanyPurchases($id)
		{
			$query="SELECT * FROM SIRE_RegistroCompras_EMPRESA WHERE ID_RegCompEmpresa=$id;";
			$request=$this->select($query);
			return $request;
		}


    }
?>