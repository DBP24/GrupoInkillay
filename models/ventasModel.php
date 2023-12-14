<?php

class VentasModel extends Mysql
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function selectAllRegistrationOfSUNATSales($start, $length, $searchFields) {
			// Consulta para contar el número total de registros
			$countQuery = "SELECT COUNT(*) as total FROM SIRE_RegistroVentas_SUNAT srv
						INNER JOIN SIRE_Ticket st ON st.ID_Ticket = srv.ID_Ticket
						WHERE st.IdLibroSUNAT = 3";
		    
			 // Agrega la lógica de búsqueda si se proporciona algún valor de búsqueda
			 foreach ($searchFields as $field => $value) {
				if (!empty($value)) {
					// Verifica si el campo es 'periodo' y ajusta la condición en consecuencia
					if ($field === 'Periodo') {
						$countQuery .= " AND st.Periodo = '$value'";
					} else {
						$countQuery .= " AND ($field LIKE '%$value%')";
					}
				}
			}

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
						ID_RegVentSunat,
						TipoDocumento,
						SerieDcoumento,
						NumeroDocumento,
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
					FROM SIRE_RegistroVentas_SUNAT srv
					INNER JOIN SIRE_Ticket st ON st.ID_Ticket = srv.ID_Ticket
					WHERE st.IdLibroSUNAT = 3";

			 // Agrega la lógica de búsqueda si se proporciona algún valor de búsqueda
			 foreach ($searchFields as $field => $value) {
				if (!empty($value)) {
					// Verifica si el campo es 'periodo' y ajusta la condición en consecuencia
					if ($field === 'Periodo') {
						$countQuery .= " AND st.Periodo = '$value'";
					} else {
						$countQuery .= " AND ($field LIKE '%$value%')";
					}
				}
			}

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

        public function selectAllRegistrationOfCompanySales($start, $length, $searchFields) {
			// Consulta para contar el número total de registros
			$countQuery = "SELECT COUNT(*) as total FROM SIRE_RegistroVentas_EMPRESA srve
						INNER JOIN SIRE_Ticket st ON st.ID_Ticket = srve.ID_Ticket
						WHERE st.IdLibroEmpresa = 4";

			 // Agrega la lógica de búsqueda si se proporciona algún valor de búsqueda
			 foreach ($searchFields as $field => $value) {
				if (!empty($value)) {
					// Verifica si el campo es 'periodo' y ajusta la condición en consecuencia
					if ($field === 'Periodo') {
						$countQuery .= " AND st.Periodo = '$value'";
					} else {
						$countQuery .= " AND ($field LIKE '%$value%')";
					}
				}
			}

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
						ID_RegVentEmpresa,
						TipoDocumento,
						SerieDcoumento,
						NumeroDocumento,
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
					FROM SIRE_RegistroVentas_EMPRESA srve
					INNER JOIN SIRE_Ticket st ON st.ID_Ticket = srve.ID_Ticket
					WHERE st.IdLibroEmpresa = 4";

			 // Agrega la lógica de búsqueda si se proporciona algún valor de búsqueda
			 foreach ($searchFields as $field => $value) {
				if (!empty($value)) {
					// Verifica si el campo es 'periodo' y ajusta la condición en consecuencia
					if ($field === 'Periodo') {
						$countQuery .= " AND st.Periodo = '$value'";
					} else {
						$countQuery .= " AND ($field LIKE '%$value%')";
					}
				}
			}

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