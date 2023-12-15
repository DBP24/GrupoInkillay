<?php 
    require_once("./models/comprasModel.php");
	class Compras extends Controller{
		public function __construct()
		{
			session_start();
			if(!isset($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
            $this->model=new comprasModel();

			parent::__construct();
		}

		public function compras()
		{
			
			$data['page_title'] = "Compras - Grupo Inkillay";
			$data['page_content'] = "Listado de Compras generados";
			$data['page_author'] = "";
			$data['page_description'] = "";
			$data['page_keywords'] = "";
			$this->views->getView($this,"compras", $data);
		}

		public function cargarDatosSUNAT()
        {
            if($_POST) {

                $start = $_POST['start'] ?? 0;
                $length = $_POST['length'] ?? 10;

                $busqueda_periodo1 = $_POST['search']['busqueda_periodo1'] ?? '';
                $busqueda_tipo_documento1= $_POST['search']['busqueda_tipo_documento1'] ?? '';
                $busqueda_serie1= $_POST['search']['busqueda_serie1'] ?? '';
                $busqueda_nro_de_documento1= $_POST['search']['busqueda_nro_de_documento1'] ?? '';
                $busqueda_ticket1 = $_POST['search']['busqueda_ticket1'] ?? '';
                $busqueda_tipo_documento_identidad1= $_POST['search']['busqueda_tipo_documento_identidad1'] ?? '';
                $busqueda_nro_documento_identidad1= $_POST['search']['busqueda_nro_documento_identidad1'] ?? '';
                $busqueda_razon_social1= $_POST['search']['busqueda_razon_social1'] ?? '';
                $busqueda_monto_exportacion1= $_POST['search']['busqueda_monto_exportacion1'] ?? '';
                $busqueda_base_imponible_gravado1= $_POST['search']['busqueda_base_imponible_gravado1'] ?? '';
                $busqueda_base_imponible_dsct1= $_POST['search']['busqueda_base_imponible_dsct1'] ?? '';
                $busqueda_base_igv_ipm1= $_POST['search']['busqueda_base_igv_ipm1'] ?? '';
                $busqueda_dscto_igv_ipm1= $_POST['search']['busqueda_dscto_igv_ipm1'] ?? '';
                $busqueda_monto_exonerado1= $_POST['search']['busqueda_monto_exonerado1'] ?? '';
                $busqueda_monto_inafecto1= $_POST['search']['busqueda_monto_inafecto1'] ?? '';
                $busqueda_monto_isc1= $_POST['search']['busqueda_monto_isc1'] ?? '';
                $busqueda_base_imponible_ivap1= $_POST['search']['busqueda_base_imponible_ivap1'] ?? '';
                $busqueda_monto_ivap1= $_POST['search']['busqueda_monto_ivap1'] ?? '';
                $busqueda_monto_icbper1= $_POST['search']['busqueda_monto_icbper1'] ?? '';
                $busqueda_monto_otros_tributos1= $_POST['search']['busqueda_monto_otros_tributos1'] ?? '';
                $busqueda_monto_total1= $_POST['search']['busqueda_monto_total1'] ?? '';
                $busqueda_moneda1= $_POST['search']['busqueda_moneda1'] ?? '';
                $busqueda_tipo_cambio1= $_POST['search']['busqueda_tipo_cambio1'] ?? '';
                $busqueda_fec_emision_doc_modificado1= $_POST['search']['busqueda_fec_emision_doc_modificado1'] ?? '';
                $busqueda_tipo_doc_modificado1= $_POST['search']['busqueda_tipo_doc_modificado1'] ?? '';
                $busqueda_serie_doc_modificado1= $_POST['search']['busqueda_serie_doc_modificado1'] ?? '';
                $busqueda_numero_doc_modificado1= $_POST['search']['busqueda_numero_doc_modificado1'] ?? '';
                $busqueda_proyecto_operados_atribucion1= $_POST['search']['busqueda_proyecto_operados_atribucion1'] ?? '';
                $busqueda_tipo_de_nota1= $_POST['search']['busqueda_tipo_de_nota1'] ?? '';
                $busqueda_estado_comprobante1= $_POST['search']['busqueda_estado_comprobante1'] ?? '';
                $busqueda_valor_fob_embarcado1= $_POST['search']['busqueda_valor_fob_embarcado1'] ?? '';
                $busqueda_valor_operacion_gratuito1= $_POST['search']['busqueda_valor_operacion_gratuito1'] ?? '';
                $busqueda_tipo_operacion1= $_POST['search']['busqueda_tipo_operacion1'] ?? '';
                $busqueda_dam_cp1= $_POST['search']['busqueda_dam_cp1'] ?? '';
                $busqueda_clu1= $_POST['search']['busqueda_clu1'] ?? '';
                $busqueda_car_sunat1= $_POST['search']['busqueda_car_sunat1'] ?? '';

                $compania_codigo = $_SESSION['Usuario']['DocumentoFiscal'];

                $search = array (
                    'Periodo' => $busqueda_periodo1,
                    'TipoComprobante' => $busqueda_tipo_documento1, 
                    'SerieComprobante' => $busqueda_serie1, 
                    'NumeroComprobante' => $busqueda_nro_de_documento1, 
                    'Ticket' => $busqueda_ticket1, 
                    'TipDocIdentidad' => $busqueda_tipo_documento_identidad1, 
                    'NroDocIdentidad' => $busqueda_nro_documento_identidad1, 
                    'RazonSocial' => $busqueda_razon_social1, 
                    'MontoExportacion' => $busqueda_monto_exportacion1, 
                    'BaseImponibleGravado' => $busqueda_base_imponible_gravado1, 
                    'BaseImponibleDsct' => $busqueda_base_imponible_dsct1, 
                    'BaseIgvIpm' => $busqueda_base_igv_ipm1,
                    'DsctoIgvIpm' => $busqueda_dscto_igv_ipm1, 
                    'MontoExonerado' => $busqueda_monto_exonerado1, 
                    'MontoInafecto' => $busqueda_monto_inafecto1, 
                    'MontoISC' => $busqueda_monto_isc1, 
                    'BaseImponibleIvap' => $busqueda_base_imponible_ivap1, 
                    'MontoIvap' => $busqueda_monto_ivap1, 
                    'MontoICBPER' => $busqueda_monto_icbper1, 
                    'MontoOtrostributos' => $busqueda_monto_otros_tributos1, 
                    'MontoTotal' => $busqueda_monto_total1, 
                    'Moneda' => $busqueda_moneda1, 
                    'TipoCambio' => $busqueda_tipo_cambio1,
                    'FecEmisionDocModificado' => $busqueda_fec_emision_doc_modificado1, 
                    'TipoDocModificado' => $busqueda_tipo_doc_modificado1, 
                    'SerieDocModificado' => $busqueda_serie_doc_modificado1, 
                    'NumeroDocModificado' => $busqueda_numero_doc_modificado1, 
                    'ProyectoOperadosAtribucion' => $busqueda_proyecto_operados_atribucion1, 
                    'TipodeNota' => $busqueda_tipo_de_nota1, 
                    'EstadoComprobante' => $busqueda_estado_comprobante1, 
                    'ValorFOBEmbarcado' => $busqueda_valor_fob_embarcado1,
                    'ValorOperacionGratuito' => $busqueda_valor_operacion_gratuito1, 
                    'TipoOperacion' => $busqueda_tipo_operacion1, 
                    'DamCP' => $busqueda_dam_cp1, 
                    'CLU' => $busqueda_clu1, 
                    'CarSunat' => $busqueda_car_sunat1
                );

                $arrResponse = $this->model->selectAllRegistrationOfSUNATPurchases($start, $length, $search, $compania_codigo);

                $response = array(
                    "data" => $arrResponse['data'],
                    "recordsTotal" => $arrResponse['total'],
                    "recordsFiltered" => $arrResponse['total']
                );

        
                echo json_encode($response, JSON_UNESCAPED_UNICODE);
                
            }
            die();
            
        }

        public function cargarDatosEmpresa()
        {
            if($_POST) {

                $start = $_POST['start'] ?? 0;
                $length = $_POST['length'] ?? 10;

                $busqueda_periodo2 = $_POST['search']['busqueda_periodo2'] ?? '';
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

                $compania_codigo = $_SESSION['Usuario']['DocumentoFiscal'];

                $search = array (
                    'Periodo' => $busqueda_periodo2,
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

                $arrResponse = $this->model->selectAllRegistrationOfCompanyPurchases($start, $length, $search, $compania_codigo);

                $response = array(
                    "data" => $arrResponse['data'],
                    "recordsTotal" => $arrResponse['total'],
                    "recordsFiltered" => $arrResponse['total']
                );

        
                echo json_encode($response, JSON_UNESCAPED_UNICODE);
                
            }
            die();
            
        }

		public function editar_compras_sunat(){
			$idd = intval($_POST['id']);

			if($idd>0)
			{
				$datos_compras_sunat=$this->model->viewRegistrationOfSUNATPurchases($idd);

                if(empty($datos_compras_sunat)){
					$arrResponse = array('status' => true, 'msg' => 'Datos no encontrados','id' => $idd);
				}else{

					$arrResponse = array('status' => true, 
					'msg' => 'Se muestran todos los comprobantes',
					'compras_sunat' => $datos_compras_sunat); 
				}

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