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
                <button class="nav-link activate" id="nav-registro-de-compras-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-registro-de-compras" type="button" role="tab"
                    aria-controls="nav-registro-de-compras" aria-selected="false">Registro de
                    Compras</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-registro-de-compras" role="tabpanel"
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
        </div>
    </div>
</div>
<?= footerAdmin($data);?>
<!-- JS -->
<script src="<?= media(); ?>/js/reportes/cargarDatos.js"></script>
<!-- <script src="<?= media(); ?>/js/reportes/busqueda.js"></script> -->
<script src="<?= media(); ?>/js/reportes/editar.js"></script>

<!-- DataTables -->
<script src="<?= media();?>/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?= media();?>/js/dataTables/dataTables.bootstrap5.min.js"></script>
<!-- <script src="<?= media();?>/js/dataTables/table-datatable.js"></script> -->
</body>

</html>