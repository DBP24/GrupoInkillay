<?= headerAdmin($data);
getModal('compras','editar',$data); ?>
<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">
        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"><?=$data['page_content'];?></div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-6 d-flex justify-content-center align-items-center">
                <label>Periodo</label>
                <input type="text" id="busqueda_periodo" name="busqueda_periodo" class="form-control ms-1 me-1">
                <button class="btn btn-primary ms-2 realizar_busqueda">Buscar</button>
                <button class="btn btn-primary mx-2">Análisis</button>
            </div>
        </div>
        <nav class="mt-3">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-propuesta-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-propuesta" type="button" role="tab" aria-controls="nav-propuesta"
                    aria-selected="true">Propuesta</button>
                <button class="nav-link" id="nav-registro-de-compras-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-registro-de-compras" type="button" role="tab"
                    aria-controls="nav-registro-de-compras" aria-selected="false">Registro de
                    Compras</button>
                <button class="nav-link" id="nav-analisis-tab" data-bs-toggle="tab" data-bs-target="#nav-analisis"
                    type="button" role="tab" aria-controls="nav-analisis" aria-selected="false">Análisis</button>
                <button class="nav-link" id="nav-anexo-8-tab" data-bs-toggle="tab" data-bs-target="#nav-anexo-8"
                    type="button" role="tab" aria-controls="nav-anexo-8" aria-selected="false">Anexo 8</button>
                <button class="nav-link" id="nav-anexo-9-tab" data-bs-toggle="tab" data-bs-target="#nav-anexo-9"
                    type="button" role="tab" aria-controls="nav-anexo-9" aria-selected="false">Anexo 9</button>
                <button class="nav-link" id="nav-anexo-10-tab" data-bs-toggle="tab" data-bs-target="#nav-anexo-10"
                    type="button" role="tab" aria-controls="nav-anexo-10" aria-selected="false">Anexo 10</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-propuesta" role="tabpanel"
                aria-labelledby="nav-propuesta-tab" tabindex="0">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="table-responsive mt-2">
                            <table id="example1" class="table table-hover" width="100%">
                                <thead class="text-center table-light">
                                    <tr>
                                        <th>

                                        </th>
                                        <th>Tipo Doc.
                                            <br><br>
                                            <select name="busqueda_tipo_documento1" id="busqueda_tipo_documento1"
                                                class="form-select">
                                                <option value="0">Todos</option>
                                                <option value="01">DNI</option>
                                                <option value="02">Pasaporte</option>
                                            </select>
                                        </th>
                                        <th>Serie<br>
                                            <br><input type="text" name="busqueda_serie1" id="busqueda_serie1"
                                                class="form-control">
                                        </th>
                                        <th>Nro de <br> Documento
                                            <br><input type="text" name="busqueda_nro_de_documento1"
                                                id="busqueda_nro_de_documento1" class="form-control">
                                        </th>
                                        <th>Ticket<br>
                                            <br><input type="text" name="busqueda_ticket1" id="busqueda_ticket1"
                                                class="form-control">
                                        </th>
                                        <th>Tipo de Documento <br> de Identidad
                                            <br><input type="text" name="busqueda_tipo_documento_identidad1"
                                                id="busqueda_tipo_documento_identidad1" class="form-control">
                                        </th>
                                        <th>Nro de Documento <br> de Identidad
                                            <br><input type="text" name="busqueda_nro_documento_identidad1"
                                                id="busqueda_nro_documento_identidad1" class="form-control">
                                        </th>
                                        <th>Razón Social <br>
                                            <br><input type="text" name="busqueda_razon_social1"
                                                id="busqueda_razon_social1" class="form-control" value="">
                                        </th>
                                        <th>Monto Exportación <br>
                                            <br><input type="text" name="busqueda_monto_exportacion1"
                                                id="busqueda_monto_exportacion1" class="form-control">
                                        </th>
                                        <th>Base Imponible <br> Gravado
                                            <br><input type="text" name="busqueda_base_imponible_gravado1"
                                                id="busqueda_base_imponible_gravado1" class="form-control">
                                        </th>
                                        <th>Base Imponible <br> Dsct
                                            <br><input type="text" name="busqueda_base_imponible_dsct1"
                                                id="busqueda_base_imponible_dsct1" class="form-control">
                                        </th>
                                        <th>Base Igv Ipm <br>
                                            <br><input type="text" name="busqueda_base_igv_ipm1"
                                                id="busqueda_base_igv_ipm1" class="form-control">
                                        </th>
                                        <th>Dscto Igv Ipm <br>
                                            <br><input type="text" name="busqueda_dscto_igv_ipm1"
                                                id="busqueda_dscto_igv_ipm1" class="form-control">
                                        </th>
                                        <th>Monto Exonerado <br>
                                            <br><input type="text" name="busqueda_monto_exonerado1"
                                                id="busqueda_monto_exonerado1" class="form-control">
                                        </th>
                                        <th>Monto Inafecto <br>
                                            <br><input type="text" name="busqueda_monto_inafecto1"
                                                id="busqueda_monto_inafecto1" class="form-control">
                                        </th>
                                        <th>Monto ISC <br>
                                            <br><input type="text" name="busqueda_monto_isc1" id="busqueda_monto_isc1"
                                                class="form-control">
                                        </th>
                                        <th>Base Imponible <br> Ivap
                                            <br><input type="text" name="busqueda_base_imponible_ivap1"
                                                id="busqueda_base_imponible_ivap1" class="form-control">
                                        </th>
                                        <th>Monto Ivap <br>
                                            <br><input type="text" name="busqueda_monto_ivap1" id="busqueda_monto_ivap1"
                                                class="form-control">
                                        </th>
                                        <th>Monto ICBPER <br>
                                            <br><input type="text" name="busqueda_monto_icbper1"
                                                id="busqueda_monto_icbper1" class="form-control">
                                        </th>
                                        <th>Monto Otros <br> tributos
                                            <br><input type="text" name="busqueda_monto_otros_tributos1"
                                                id="busqueda_monto_otros_tributos1" class="form-control">
                                        </th>
                                        <th>Monto Total <br>
                                            <br><input type="text" name="busqueda_monto_total1"
                                                id="busqueda_monto_total1" class="form-control">
                                        </th>
                                        <th>Moneda <br>
                                            <br><input type="text" name="busqueda_moneda1" id="busqueda_moneda1"
                                                class="form-control">
                                        </th>
                                        <th>Tipo Cambio <br>
                                            <br><input type="text" name="busqueda_tipo_cambio1"
                                                id="busqueda_tipo_cambio1" class="form-control">
                                        </th>
                                        <th>Fec Emision <br> Doc Modificado
                                            <br><input type="text" name="busqueda_fec_emision_doc_modificado1"
                                                id="busqueda_fec_emision_doc_modificado1" class="form-control">
                                        </th>
                                        <th>Tipo Doc <br> Modificado
                                            <br><input type="text" name="busqueda_tipo_doc_modificado1"
                                                id="busqueda_tipo_doc_modificado1" class="form-control">
                                        </th>
                                        <th>Serie Doc <br> Modificado
                                            <br><input type="text" name="busqueda_serie_doc_modificado1"
                                                id="busqueda_serie_doc_modificado1" class="form-control">
                                        </th>
                                        <th>Numero Doc <br> Modificado
                                            <br><input type="text" name="busqueda_numero_doc_modificado1"
                                                id="busqueda_numero_doc_modificado1" class="form-control">
                                        </th>
                                        <th>Proyecto Operados <br> Atribucion
                                            <br><input type="text" name="busqueda_proyecto_operados_atribucion1"
                                                id="busqueda_proyecto_operados_atribucion1" class="form-control">
                                        </th>
                                        <th>Tipo de Nota <br>
                                            <br><input type="text" name="busqueda_tipo_de_nota1"
                                                id="busqueda_tipo_de_nota1" class="form-control">
                                        </th>
                                        <th>Estado Comprobante <br>
                                            <br><input type="text" name="busqueda_estado_comprobante1"
                                                id="busqueda_estado_comprobante1" class="form-control">
                                        </th>
                                        <th>Valor FOB <br> Embarcado
                                            <br><input type="text" name="busqueda_valor_fob_embarcado1"
                                                id="busqueda_valor_fob_embarcado1" class="form-control">
                                        </th>
                                        <th>Valor Operacion <br> Gratuito
                                            <br><input type="text" name="busqueda_valor_operacion_gratuito1"
                                                id="busqueda_valor_operacion_gratuito1" class="form-control">
                                        </th>
                                        <th>Tipo Operacion <br>
                                            <br><input type="text" name="busqueda_tipo_operacion1"
                                                id="busqueda_tipo_operacion1" class="form-control">
                                        </th>
                                        <th>Dam CP <br>
                                            <br><input type="text" name="busqueda_dam_cp1" id="busqueda_dam_cp1"
                                                class="form-control">
                                        </th>
                                        <th>CLU <br>
                                            <br><input type="text" name="busqueda_clu1" id="busqueda_clu1"
                                                class="form-control">
                                        </th>
                                        <th>Car Sunat <br>
                                            <br><input type="text" name="busqueda_car_sunat1" id="busqueda_car_sunat1"
                                                class="form-control">
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-registro-de-compras" role="tabpanel"
                aria-labelledby="nav-registro-de-compras-tab" tabindex="0">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="table-responsive mt-2">
                            <table id="example2" class="table table-hover" width="100%">
                                <thead class="text-center table-light">
                                    <tr>
                                        <th>

                                        </th>
                                        <th>Tipo Doc.
                                            <br><br>
                                            <select name="busqueda_tipo_documento2" id="busqueda_tipo_documento2"
                                                class="form-select">
                                                <option value="0">Todos</option>
                                                <option value="01">DNI</option>
                                                <option value="02">Pasaporte</option>
                                            </select>
                                        </th>
                                        <th>Serie<br>
                                            <br><input type="text" name="busqueda_serie2" id="busqueda_serie2"
                                                class="form-control">
                                        </th>
                                        <th>Nro de <br> Documento
                                            <br><input type="text" name="busqueda_nro_de_documento2"
                                                id="busqueda_nro_de_documento2" class="form-control">
                                        </th>
                                        <th>Ticket<br>
                                            <br><input type="text" name="busqueda_ticket2" id="busqueda_ticket2"
                                                class="form-control">
                                        </th>
                                        <th>Tipo de Documento <br> de Identidad
                                            <br><input type="text" name="busqueda_tipo_documento_identidad2"
                                                id="busqueda_tipo_documento_identidad2" class="form-control">
                                        </th>
                                        <th>Nro de Documento <br> de Identidad
                                            <br><input type="text" name="busqueda_nro_documento_identidad2"
                                                id="busqueda_nro_documento_identidad2" class="form-control">
                                        </th>
                                        <th>Razón Social <br>
                                            <br><input type="text" name="busqueda_razon_social2"
                                                id="busqueda_razon_social2" class="form-control">
                                        </th>
                                        <th>Monto Exportación <br>
                                            <br><input type="text" name="busqueda_monto_exportacion2"
                                                id="busqueda_monto_exportacion2" class="form-control">
                                        </th>
                                        <th>Base Imponible <br> Gravado
                                            <br><input type="text" name="busqueda_base_imponible_gravado2"
                                                id="busqueda_base_imponible_gravado2" class="form-control">
                                        </th>
                                        <th>Base Imponible <br> Dsct
                                            <br><input type="text" name="busqueda_base_imponible_dsct2"
                                                id="busqueda_base_imponible_dsct2" class="form-control">
                                        </th>
                                        <th>Base Igv Ipm <br>
                                            <br><input type="text" name="busqueda_base_igv_ipm2"
                                                id="busqueda_base_igv_ipm2" class="form-control">
                                        </th>
                                        <th>Dscto Igv Ipm <br>
                                            <br><input type="text" name="busqueda_dscto_igv_ipm2"
                                                id="busqueda_dscto_igv_ipm2" class="form-control">
                                        </th>
                                        <th>Monto Exonerado <br>
                                            <br><input type="text" name="busqueda_monto_exonerado2"
                                                id="busqueda_monto_exonerado2" class="form-control">
                                        </th>
                                        <th>Monto Inafecto <br>
                                            <br><input type="text" name="busqueda_monto_inafecto2"
                                                id="busqueda_monto_inafecto2" class="form-control">
                                        </th>
                                        <th>Monto ISC <br>
                                            <br><input type="text" name="busqueda_monto_isc2" id="busqueda_monto_isc2"
                                                class="form-control">
                                        </th>
                                        <th>Base Imponible <br> Ivap
                                            <br><input type="text" name="busqueda_base_imponible_ivap2"
                                                id="busqueda_base_imponible_ivap2" class="form-control">
                                        </th>
                                        <th>Monto Ivap <br>
                                            <br><input type="text" name="busqueda_monto_ivap2" id="busqueda_monto_ivap2"
                                                class="form-control">
                                        </th>
                                        <th>Monto ICBPER <br>
                                            <br><input type="text" name="busqueda_monto_icbper2"
                                                id="busqueda_monto_icbper2" class="form-control">
                                        </th>
                                        <th>Monto Otros <br> tributos
                                            <br><input type="text" name="busqueda_monto_otros_tributos2"
                                                id="busqueda_monto_otros_tributos2" class="form-control">
                                        </th>
                                        <th>Monto Total <br>
                                            <br><input type="text" name="busqueda_monto_total2"
                                                id="busqueda_monto_total2" class="form-control">
                                        </th>
                                        <th>Moneda <br>
                                            <br><input type="text" name="busqueda_moneda2" id="busqueda_moneda2"
                                                class="form-control">
                                        </th>
                                        <th>Tipo Cambio<br>
                                            <br><input type="text" name="busqueda_tipo_cambio2"
                                                id="busqueda_tipo_cambio2" class="form-control">
                                        </th>
                                        <th>Fec Emision <br> Doc Modificado
                                            <br><input type="text" name="busqueda_fec_emision_doc_modificado2"
                                                id="busqueda_fec_emision_doc_modificado2" class="form-control">
                                        </th>
                                        <th>Tipo Doc <br> Modificado
                                            <br><input type="text" name="busqueda_tipo_doc_modificado2"
                                                id="busqueda_tipo_doc_modificado2" class="form-control">
                                        </th>
                                        <th>Serie Doc <br> Modificado
                                            <br><input type="text" name="busqueda_serie_doc_modificado2"
                                                id="busqueda_serie_doc_modificado2" class="form-control">
                                        </th>
                                        <th>Numero Doc <br> Modificado
                                            <br><input type="text" name="busqueda_numero_doc_modificado2"
                                                id="busqueda_numero_doc_modificado2" class="form-control">
                                        </th>
                                        <th>Proyecto Operados <br> Atribucion
                                            <br><input type="text" name="busqueda_proyecto_operados_atribucion2"
                                                id="busqueda_proyecto_operados_atribucion2" class="form-control">
                                        </th>
                                        <th>Tipo de Nota <br>
                                            <br><input type="text" name="busqueda_tipo_de_nota2"
                                                id="busqueda_tipo_de_nota2" class="form-control">
                                        </th>
                                        <th>Estado Comprobante <br>
                                            <br><input type="text" name="busqueda_estado_comprobante2"
                                                id="busqueda_estado_comprobante2" class="form-control">
                                        </th>
                                        <th>Valor FOB <br> Embarcado
                                            <br><input type="text" name="busqueda_valor_fob_embarcado2"
                                                id="busqueda_valor_fob_embarcado2" class="form-control">
                                        </th>
                                        <th>Valor Operacion <br> Gratuito
                                            <br><input type="text" name="busqueda_valor_operacion_gratuito2"
                                                id="busqueda_valor_operacion_gratuito2" class="form-control">
                                        </th>
                                        <th>Tipo Operacion <br>
                                            <br><input type="text" name="busqueda_tipo_operacion2"
                                                id="busqueda_tipo_operacion2" class="form-control">
                                        </th>
                                        <th>Dam CP <br>
                                            <br><input type="text" name="busqueda_dam_cp2" id="busqueda_dam_cp2"
                                                class="form-control">
                                        </th>
                                        <th>CLU <br>
                                            <br><input type="text" name="busqueda_clu2" id="busqueda_clu2"
                                                class="form-control">
                                        </th>
                                        <th>Car Sunat <br>
                                            <br><input type="text" name="busqueda_car_sunat2" id="busqueda_car_sunat2"
                                                class="form-control">
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-analisis" role="tabpanel" aria-labelledby="nav-analisis-tab"
                tabindex="0">
                Analisis</div>
            <div class="tab-pane fade" id="nav-anexo-8" role="tabpanel" aria-labelledby="nav-anexo-8-tab" tabindex="0">
                <!-- ANEXO 8 -->
                <nav class="mt-3">
                    <div class="d-flex nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-agregar-cp-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-agregar-cp" type="button" role="tab" aria-controls="nav-agregar-cp"
                            aria-selected="true">Agregar CP</button>
                        <button class="nav-link" id="nav-excluir-e-incluir-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-excluir-e-incluir" type="button" role="tab"
                            aria-controls="nav-excluir-e-incluir" aria-selected="false">Excluir e Incluir</button>
                        <button class="nav-link" id="nav-completar-o-reubicar-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-completar-o-reubicar" type="button" role="tab"
                            aria-controls="nav-completar-o-reubicar" aria-selected="false">Completar o Reubicar</button>

                        <!-- Contenedor con la clase ms-auto para apegar el botón a la izquierda -->
                        <div class="ms-auto mb-1">
                            <button class="btn btn-primary">
                                <ion-icon name="download-outline"></ion-icon>Exportar
                            </button>
                        </div>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-agregar-cp" role="tabpanel"
                        aria-labelledby="nav-agregar-cp-tab" tabindex="0">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="table-responsive mt-2">
                                    <table class="table table-bordered">
                                        <thead class="text-center table-light">
                                            <tr>
                                                <th>Tipo Doc.</th>
                                                <th>Serie</th>
                                                <th>Comprobante</th>
                                                <th>Tipo Proceso</th>
                                                <th>Nro Registros</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>788548</td>
                                                <td>2020-03-20</td>
                                                <td>Manual</td>
                                                <td>125</td>
                                                <td>Activo</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Cierre-->
                    <div class="tab-pane fade" id="nav-excluir-e-incluir" role="tabpanel"
                        aria-labelledby="nav-excluir-e-incluir" tabindex="0">
                        excluir-e-incluir
                    </div>
                    <div class="tab-pane fade" id="nav-completar-o-reubicar" role="tabpanel"
                        aria-labelledby="nav-completar-o-reubicar" tabindex="0">
                        completar-o-reubicar
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-anexo-9" role="tabpanel" aria-labelledby="nav-anexo-9-tab" tabindex="0">
                <!-- ANEXO 8 -->
                <nav class="mt-3">
                    <div class="d-flex nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-agregar-cp-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-agregar-cp" type="button" role="tab" aria-controls="nav-agregar-cp"
                            aria-selected="true">Agregar CP</button>
                        <button class="nav-link" id="nav-excluir-e-incluir-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-excluir-e-incluir" type="button" role="tab"
                            aria-controls="nav-excluir-e-incluir" aria-selected="false">Excluir e Incluir</button>
                        <button class="nav-link" id="nav-completar-o-reubicar-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-completar-o-reubicar" type="button" role="tab"
                            aria-controls="nav-completar-o-reubicar" aria-selected="false">Completar o Reubicar</button>

                        <!-- Contenedor con la clase ms-auto para apegar el botón a la izquierda -->
                        <div class="ms-auto mb-1">
                            <button class="btn btn-primary">
                                <ion-icon name="download-outline"></ion-icon>Exportar
                            </button>
                        </div>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-agregar-cp" role="tabpanel"
                        aria-labelledby="nav-agregar-cp-tab" tabindex="0">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="table-responsive mt-2">
                                    <table class="table table-bordered">
                                        <thead class="text-center table-light">
                                            <tr>
                                                <th>Tipo Doc.</th>
                                                <th>Serie</th>
                                                <th>Comprobante</th>
                                                <th>Tipo Proceso</th>
                                                <th>Nro Registros</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>788548</td>
                                                <td>2020-03-20</td>
                                                <td>Manual</td>
                                                <td>125</td>
                                                <td>Activo</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Cierre-->
                    <div class="tab-pane fade" id="nav-excluir-e-incluir" role="tabpanel"
                        aria-labelledby="nav-excluir-e-incluir" tabindex="0">
                        excluir-e-incluir
                    </div>
                    <div class="tab-pane fade" id="nav-completar-o-reubicar" role="tabpanel"
                        aria-labelledby="nav-completar-o-reubicar" tabindex="0">
                        completar-o-reubicar
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-anexo-10" role="tabpanel" aria-labelledby="nav-anexo-10-tab"
                tabindex="0">
                <!-- ANEXO 8 -->
                <nav class="mt-3">
                    <div class="d-flex nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-agregar-cp-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-agregar-cp" type="button" role="tab" aria-controls="nav-agregar-cp"
                            aria-selected="true">Agregar CP</button>
                        <button class="nav-link" id="nav-excluir-e-incluir-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-excluir-e-incluir" type="button" role="tab"
                            aria-controls="nav-excluir-e-incluir" aria-selected="false">Excluir e Incluir</button>
                        <button class="nav-link" id="nav-completar-o-reubicar-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-completar-o-reubicar" type="button" role="tab"
                            aria-controls="nav-completar-o-reubicar" aria-selected="false">Completar o Reubicar</button>

                        <!-- Contenedor con la clase ms-auto para apegar el botón a la izquierda -->
                        <div class="ms-auto mb-1">
                            <button class="btn btn-primary">
                                <ion-icon name="download-outline"></ion-icon>Exportar
                            </button>
                        </div>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-agregar-cp" role="tabpanel"
                        aria-labelledby="nav-agregar-cp-tab" tabindex="0">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="table-responsive mt-2">
                                    <table class="table table-bordered">
                                        <thead class="text-center table-light">
                                            <tr>
                                                <th>Tipo Doc.</th>
                                                <th>Serie</th>
                                                <th>Comprobante</th>
                                                <th>Tipo Proceso</th>
                                                <th>Nro Registros</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>788548</td>
                                                <td>2020-03-20</td>
                                                <td>Manual</td>
                                                <td>125</td>
                                                <td>Activo</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Cierre-->
                    <div class="tab-pane fade" id="nav-excluir-e-incluir" role="tabpanel"
                        aria-labelledby="nav-excluir-e-incluir" tabindex="0">
                        excluir-e-incluir
                    </div>
                    <div class="tab-pane fade" id="nav-completar-o-reubicar" role="tabpanel"
                        aria-labelledby="nav-completar-o-reubicar" tabindex="0">
                        completar-o-reubicar
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Número de Ticket</h1>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">
                        X
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="mt-3">Periodo:</label>
                                <input type="text" class="form-control" placeholder="202310" required>
                            </div>
                            <div class="col-md-6">
                                <label class="mt-3">Fecha:</label>
                                <input type="text" class="form-control" value="<?php echo date('d/m/Y'); ?>" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-labelmt-3">Tipo Proceso:</label>
                                <select name="" id="" class="form-select" required>
                                    <option value="">Proceso 1</option>
                                    <option value="">Proceso 2</option>
                                    <option value="">Proceso 3</option>
                                    <option value="">Proceso 4</option>
                                    <option value="">Proceso 5</option>
                                    <option value="">Proceso 6</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-3">Nro. Registros:</label>
                                <input type="text" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label mt-3">Número Ticket:</label>
                                <input type="text" class="form-control" placeholder="7894515" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-3">Estado:</label>
                                <input type="text" class="form-control" value="ACTIVO" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="formFile" class="form-label mt-3">Archivo</label>
                                <input class="form-control" type="file" id="formFile">

                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-3">Correlativo:</label>
                                <input type="text" class="form-control" disabled>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">Grabar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= footerAdmin($data)?>

<!-- JS -->
<script src="<?= media(); ?>/js/compras/cargarDatos.js"></script>
<!-- <script src="<?= media(); ?>/js/compras/busqueda.js"></script> -->
<script src="<?= media(); ?>/js/compras/editar.js"></script>
<!-- DataTables -->
<script src="<?= media();?>/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?= media();?>/js/dataTables/dataTables.bootstrap5.min.js"></script>

</body>

</html>