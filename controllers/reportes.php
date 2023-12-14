<?php 
    require_once("./models/reportesModel.php");
	class Reportes extends Controller{
		public function __construct()
		{
			session_start();
			if(!isset($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
            $this->model=new reportesModel();

			parent::__construct();
		}

		public function reportes()
		{
			
			$data['page_title'] = "Reportes - Grupo Inkillay";
			$data['page_content'] = "Listado de Reportes generados";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
			//Compras SUNAT
            // $datos=$this->model->selectAllReports();
			$this->views->getView($this,"reportes", $data);
		}

        /*public function cargarDatos555()
        {
            if($_POST) {

                $start = $_POST['start'] ?? 0;
                $length = $_POST['length'] ?? 10;

                $busqueda_tipo_documento2= $_POST['search']['busqueda_tipo_documento2'] ?? '';
                $busqueda_serie2= $_POST['search']['busqueda_serie2'] ?? '';
                $busqueda_nro_de_documento2= $_POST['search']['busqueda_nro_de_documento2'] ?? '';
                $busqueda_ticket2 = $_POST['search']['busqueda_ticket2'] ?? '';
                $busqueda_tipo_documento_identidad2= $_POST['search']['busqueda_tipo_documento_identidad2'] ?? '';
                $busqueda_nro_documento_identidad2= $_POST['search']['busqueda_nro_documento_identidad2'] ?? '';
                $busqueda_razon_social2= $_POST['search']['busqueda_razon_social2'] ?? '';
                $busqueda_monto_exportacion2= $_POST['search']['busqueda_monto_exportacion2'] ?? '';
                $busqueda_base_imponible_gravado2= $_POST['search']['busqueda_base_imponible_gravado2'] ?? '';
                $busqueda_base_imponible_dsct2= $_POST['search']['busqueda_base_imponible_dsct2'] ?? '';
                $busqueda_base_igv_ipm2= $_POST['search']['busqueda_base_igv_ipm2'] ?? '';
                $busqueda_dscto_igv_ipm2= $_POST['search']['busqueda_dscto_igv_ipm2'] ?? '';
                $busqueda_monto_exonerado2= $_POST['search']['busqueda_monto_exonerado2'] ?? '';
                $busqueda_monto_inafecto2= $_POST['search']['busqueda_monto_inafecto2'] ?? '';
                $busqueda_monto_isc2= $_POST['search']['busqueda_monto_isc2'] ?? '';
                $busqueda_base_imponible_ivap2= $_POST['search']['busqueda_base_imponible_ivap2'] ?? '';
                $busqueda_monto_ivap2= $_POST['search']['busqueda_monto_ivap2'] ?? '';
                $busqueda_monto_icbper2= $_POST['search']['busqueda_monto_icbper2'] ?? '';
                $busqueda_monto_otros_tributos2= $_POST['search']['busqueda_monto_otros_tributos2'] ?? '';
                $busqueda_monto_total2= $_POST['search']['busqueda_monto_total2'] ?? '';
                $busqueda_moneda2= $_POST['search']['busqueda_moneda2'] ?? '';
                $busqueda_tipo_cambio2= $_POST['search']['busqueda_tipo_cambio2'] ?? '';
                $busqueda_fec_emision_doc_modificado2= $_POST['search']['busqueda_fec_emision_doc_modificado2'] ?? '';
                $busqueda_tipo_doc_modificado2= $_POST['search']['busqueda_tipo_doc_modificado2'] ?? '';
                $busqueda_serie_doc_modificado2= $_POST['search']['busqueda_serie_doc_modificado2'] ?? '';
                $busqueda_numero_doc_modificado2= $_POST['search']['busqueda_numero_doc_modificado2'] ?? '';
                $busqueda_proyecto_operados_atribucion2= $_POST['search']['busqueda_proyecto_operados_atribucion2'] ?? '';
                $busqueda_tipo_de_nota2= $_POST['search']['busqueda_tipo_de_nota2'] ?? '';
                $busqueda_estado_comprobante2= $_POST['search']['busqueda_estado_comprobante2'] ?? '';
                $busqueda_valor_fob_embarcado2= $_POST['search']['busqueda_valor_fob_embarcado2'] ?? '';
                $busqueda_valor_operacion_gratuito2= $_POST['search']['busqueda_valor_operacion_gratuito2'] ?? '';
                $busqueda_tipo_operacion2= $_POST['search']['busqueda_tipo_operacion2'] ?? '';
                $busqueda_dam_cp2= $_POST['search']['busqueda_dam_cp2'] ?? '';
                $busqueda_clu2= $_POST['search']['busqueda_clu2'] ?? '';
                $busqueda_car_sunat2= $_POST['search']['busqueda_car_sunat2'] ?? '';

                $start1 = $start;
                $length1 = $length;

                $arrResponse = $this->model->selectAllReports($start1, $length1, $busqueda_tipo_documento2, $busqueda_serie2, $busqueda_nro_de_documento2, $busqueda_ticket2, $busqueda_tipo_documento_identidad2, $busqueda_nro_documento_identidad2, $busqueda_razon_social2, $busqueda_monto_exportacion2, $busqueda_base_imponible_gravado2, $busqueda_base_imponible_dsct2, $busqueda_base_igv_ipm2, $busqueda_dscto_igv_ipm2, $busqueda_monto_exonerado2, $busqueda_monto_inafecto2, $busqueda_monto_isc2, $busqueda_base_imponible_ivap2, $busqueda_monto_ivap2, $busqueda_monto_icbper2, $busqueda_monto_otros_tributos2, $busqueda_monto_total2, $busqueda_moneda2, $busqueda_tipo_cambio2, $busqueda_fec_emision_doc_modificado2, $busqueda_tipo_doc_modificado2, $busqueda_serie_doc_modificado2, $busqueda_numero_doc_modificado2, $busqueda_proyecto_operados_atribucion2, $busqueda_tipo_de_nota2, $busqueda_estado_comprobante2, $busqueda_valor_fob_embarcado2, $busqueda_valor_operacion_gratuito2, $busqueda_tipo_operacion2, $busqueda_dam_cp2, $busqueda_clu2, $busqueda_car_sunat2);

                $response = array(
                    "data" => $arrResponse['data'],
                    "recordsTotal" => $arrResponse['total'],
                    "recordsFiltered" => $arrResponse['total']
                );

        
                echo json_encode($response, JSON_UNESCAPED_UNICODE);
                
            }
            die();
            
        }*/

        public function cargarDatos()
        {
            if($_POST) {

                $start = $_POST['start'] ?? 0;
                $length = $_POST['length'] ?? 10;

                $busqueda_tipo_documento2= $_POST['search']['busqueda_tipo_documento2'] ?? '';
                $busqueda_serie2= $_POST['search']['busqueda_serie2'] ?? '';
                $busqueda_nro_de_documento2= $_POST['search']['busqueda_nro_de_documento2'] ?? '';
                $busqueda_ticket2 = $_POST['search']['busqueda_ticket2'] ?? '';
                $busqueda_tipo_documento_identidad2= $_POST['search']['busqueda_tipo_documento_identidad2'] ?? '';
                $busqueda_nro_documento_identidad2= $_POST['search']['busqueda_nro_documento_identidad2'] ?? '';
                $busqueda_razon_social2= $_POST['search']['busqueda_razon_social2'] ?? '';
                $busqueda_monto_exportacion2= $_POST['search']['busqueda_monto_exportacion2'] ?? '';
                $busqueda_base_imponible_gravado2= $_POST['search']['busqueda_base_imponible_gravado2'] ?? '';
                $busqueda_base_imponible_dsct2= $_POST['search']['busqueda_base_imponible_dsct2'] ?? '';
                $busqueda_base_igv_ipm2= $_POST['search']['busqueda_base_igv_ipm2'] ?? '';
                $busqueda_dscto_igv_ipm2= $_POST['search']['busqueda_dscto_igv_ipm2'] ?? '';
                $busqueda_monto_exonerado2= $_POST['search']['busqueda_monto_exonerado2'] ?? '';
                $busqueda_monto_inafecto2= $_POST['search']['busqueda_monto_inafecto2'] ?? '';
                $busqueda_monto_isc2= $_POST['search']['busqueda_monto_isc2'] ?? '';
                $busqueda_base_imponible_ivap2= $_POST['search']['busqueda_base_imponible_ivap2'] ?? '';
                $busqueda_monto_ivap2= $_POST['search']['busqueda_monto_ivap2'] ?? '';
                $busqueda_monto_icbper2= $_POST['search']['busqueda_monto_icbper2'] ?? '';
                $busqueda_monto_otros_tributos2= $_POST['search']['busqueda_monto_otros_tributos2'] ?? '';
                $busqueda_monto_total2= $_POST['search']['busqueda_monto_total2'] ?? '';
                $busqueda_moneda2= $_POST['search']['busqueda_moneda2'] ?? '';
                $busqueda_tipo_cambio2= $_POST['search']['busqueda_tipo_cambio2'] ?? '';
                $busqueda_fec_emision_doc_modificado2= $_POST['search']['busqueda_fec_emision_doc_modificado2'] ?? '';
                $busqueda_tipo_doc_modificado2= $_POST['search']['busqueda_tipo_doc_modificado2'] ?? '';
                $busqueda_serie_doc_modificado2= $_POST['search']['busqueda_serie_doc_modificado2'] ?? '';
                $busqueda_numero_doc_modificado2= $_POST['search']['busqueda_numero_doc_modificado2'] ?? '';
                $busqueda_proyecto_operados_atribucion2= $_POST['search']['busqueda_proyecto_operados_atribucion2'] ?? '';
                $busqueda_tipo_de_nota2= $_POST['search']['busqueda_tipo_de_nota2'] ?? '';
                $busqueda_estado_comprobante2= $_POST['search']['busqueda_estado_comprobante2'] ?? '';
                $busqueda_valor_fob_embarcado2= $_POST['search']['busqueda_valor_fob_embarcado2'] ?? '';
                $busqueda_valor_operacion_gratuito2= $_POST['search']['busqueda_valor_operacion_gratuito2'] ?? '';
                $busqueda_tipo_operacion2= $_POST['search']['busqueda_tipo_operacion2'] ?? '';
                $busqueda_dam_cp2= $_POST['search']['busqueda_dam_cp2'] ?? '';
                $busqueda_clu2= $_POST['search']['busqueda_clu2'] ?? '';
                $busqueda_car_sunat2= $_POST['search']['busqueda_car_sunat2'] ?? '';

                $search = array (
                    'TipoComprobante' => $busqueda_tipo_documento2, 
                    'SerieComprobante' => $busqueda_serie2, 
                    'NumeroComprobante' => $busqueda_nro_de_documento2, 
                    'Ticket' => $busqueda_ticket2, 
                    'TipDocIdentidad' => $busqueda_tipo_documento_identidad2, 
                    'NroDocIdentidad' => $busqueda_nro_documento_identidad2, 
                    'RazonSocial' => $busqueda_razon_social2, 
                    'MontoExportacion' => $busqueda_monto_exportacion2, 
                    'BaseImponibleGravado' => $busqueda_base_imponible_gravado2, 
                    'BaseImponibleDsct' => $busqueda_base_imponible_dsct2, 
                    'BaseIgvIpm' => $busqueda_base_igv_ipm2,
                    'DsctoIgvIpm' => $busqueda_dscto_igv_ipm2, 
                    'MontoExonerado' => $busqueda_monto_exonerado2, 
                    'MontoInafecto' => $busqueda_monto_inafecto2, 
                    'MontoISC' => $busqueda_monto_isc2, 
                    'BaseImponibleIvap' => $busqueda_base_imponible_ivap2, 
                    'MontoIvap' => $busqueda_monto_ivap2, 
                    'MontoICBPER' => $busqueda_monto_icbper2, 
                    'MontoOtrostributos' => $busqueda_monto_otros_tributos2, 
                    'MontoTotal' => $busqueda_monto_total2, 
                    'Moneda' => $busqueda_moneda2, 
                    'TipoCambio' => $busqueda_tipo_cambio2,
                    'FecEmisionDocModificado' => $busqueda_fec_emision_doc_modificado2, 
                    'TipoDocModificado' => $busqueda_tipo_doc_modificado2, 
                    'SerieDocModificado' => $busqueda_serie_doc_modificado2, 
                    'NumeroDocModificado' => $busqueda_numero_doc_modificado2, 
                    'ProyectoOperadosAtribucion' => $busqueda_proyecto_operados_atribucion2, 
                    'TipodeNota' => $busqueda_tipo_de_nota2, 
                    'EstadoComprobante' => $busqueda_estado_comprobante2, 
                    'ValorFOBEmbarcado' => $busqueda_valor_fob_embarcado2,
                    'ValorOperacionGratuito' => $busqueda_valor_operacion_gratuito2, 
                    'TipoOperacion' => $busqueda_tipo_operacion2, 
                    'DamCP' => $busqueda_dam_cp2, 
                    'CLU' => $busqueda_clu2, 
                    'CarSunat' => $busqueda_car_sunat2
                );

                $arrResponse = $this->model->selectAllReports($start, $length, $search);

                $response = array(
                    "data" => $arrResponse['data'],
                    "recordsTotal" => $arrResponse['total'],
                    "recordsFiltered" => $arrResponse['total']
                );

        
                echo json_encode($response, JSON_UNESCAPED_UNICODE);
                
            }
            die();
            
        }
        


		public function buscarXPeriodoEmpresa()
		{
			if($_POST)
			{
              $periodo = $_POST['periodo'];


			  $arrResponse = $this->model->viewRegistrationOfCompanyPurchasesXPeriod($periodo);


			  echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			  
			}

			die();
		}


		public function editar_compras_empresa(){
			$idd = intval($_POST['id']);

			if($idd>0)
			{
				$datos_compras_empresa=$this->model->viewRegistrationOfCompanyPurchases($idd);

                if(empty($datos_compras_empresa)){
					$arrResponse = array('status' => true, 'msg' => 'Datos no encontrados','id' => $idd);
				}else{

					$arrResponse = array('status' => true, 
					'msg' => 'Se muestran todos los comprobantes',
					'compras_empresa' => $datos_compras_empresa); 
				}

				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				
			}
			
			die();
		}

	}
 ?>