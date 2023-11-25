<?= headerAdmin($data);
getModal('tickets','editar',$data); ?>
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
            <div class="col-4 d-flex justify-content-center align-items-center">
                <label>Periodo</label>
                <input type="text" id="busqueda_periodo" name="busqueda_periodo" class="form-control mx-2">
                <button class="btn btn-primary realizar_busqueda">Buscar</button>
            </div>
        </div>
        <hr class="linea__separadora">
        <div class="card radius-10">
            <div class="card-body">
                <div class="table-responsive mt-2">
                    <table id="example2" class="table table-hover" width="100%">
                        <thead class="text-center table-light">
                            <tr>
                                <th>
                                    <input type="button" class="icon__a" value="+" data-bs-toggle="modal"
                                        data-bs-target="#modalAgregarTicket">
                                </th>
                                <th>Sec
                                    <br><input type="text" name="busqueda_secuencia" id="busqueda_secuencia"
                                        class="form-control">
                                </th>
                                <th>Número Ticket
                                    <br><input type="text" name="busqueda_numero_ticket" id="busqueda_numero_ticket"
                                        class="form-control">
                                </th>
                                <th>Fecha Proceso
                                    <br><input type="text" name="busqueda_fecha_proceso" id="busqueda_fecha_proceso"
                                        class="form-control">
                                </th>
                                <th>Tipo Proceso
                                    <br>
                                    <select class="form-select" name="busqueda_tipo_proceso" id="busqueda_tipo_proceso">
                                        <option value="TODOS">TODOS</option>
                                        <option value="P1">PROCESO 1</option>
                                        <option value="P2">PROCESO 2</option>
                                        <option value="P3">PROCESO 3</option>
                                        <option value="P4">PROCESO 4</option>
                                        <option value="P5">PROCESO 5</option>
                                        <option value="P6">PROCESO 6</option>
                                    </select>
                                </th>
                                <th>Nro Registros
                                    <br><input type="text" name="busqueda_nro_registros" id="busqueda_nro_registros"
                                        class="form-control">
                                </th>
                                <th>Estado
                                    <br>
                                    <select class="form-select" name="busqueda_estado" id="busqueda_estado">
                                        <option value="TODOS">TODOS</option>
                                        <option value="ACTIVO">ACTIVO</option>
                                        <option value="INACTIVO">INACTIVO</option>
                                    </select>
                                </th>
                                <th hidden>Periodo
                                    <br><input type="text" name="busqueda_periodo2" id="busqueda_periodo2"
                                        class="form-control">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos as $datos_tickets) { ?>
                            <tr class="text-center">
                                <td>
                                    <a class="icon_e" href="#"
                                        onclick="verDatos(<?php echo $datos_tickets['ID_Ticket']?>)">
                                        <ion-icon class="icon__e" name="create-outline"></ion-icon>
                                    </a>
                                </td>
                                <td><?php echo $datos_tickets['Secuencia']?></td>
                                <td><?php echo $datos_tickets['NumTicket']?></td>
                                <td><?php echo $datos_tickets['FechaProceso']?></td>
                                <td><?php echo $datos_tickets['TipoProceso']?></td>
                                <td><?php echo $datos_tickets['NumeroRegistros']?></td>
                                <td>ACTIVO</td>
                                <td hidden><?php echo $datos_tickets['Periodo']?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Agregar Ticket-->
<div class="modal fade" id="modalAgregarTicket" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="formularioAgregarTicket" name="formularioAgregarTicket" method="POST"
                enctype="multipart/form-data">

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
                                <input type="text" class="form-control" id="periodo" value="<?php echo  date('Ym')?>"
                                    name="periodo" placeholder="202310">
                            </div>
                            <div class="col-md-6">
                                <label class="mt-3">Fecha:</label>
                                <input type="text" class="form-control" id="fecha" name="fecha" value="<?php echo date('Y-m-d'); ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label mt-3">Tipo Proceso:</label>
                                <select name="tipo_proceso" id="tipo_proceso" class="form-select">
                                    <option value="0">TODOS</option>
                                    <option value="P1">PROCESO 1</option>
                                    <option value="P2">PROCESO 2</option>
                                    <option value="P3">PROCESO 3</option>
                                    <option value="P4">PROCESO 4</option>
                                    <option value="P5">PROCESO 5</option>
                                    <option value="P6">PROCESO 6</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-3">Nro. Registros:</label>
                                <input type="text" class="form-control" value="0" name="nro_registros"
                                    id="nro_registros" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label mt-3">Número Ticket:</label>
                                <input type="text" class="form-control" placeholder="7894515" id="numero_ticket"
                                    name="numero_ticket">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-3">Estado:</label>
                                <input type="text" class="form-control" value="ACTIVO" id="estado" name="estado" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <label class="form-label mt-3">Archivo Sunat:</label>
                                    <input type="file" class='fancy-file green' id="archivo2" name="archivo_sunat"
                                         />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-3">Correlativo:</label>
                                <input type="text" class="form-control" id="correlativo" name="correlativo"
                                    value="<?php echo $dato?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <label class="form-label mt-3">Archivo:</label>
                                    <input type="file" class='fancy-file blue' id="archivo3" name="archivo"
                                         />
                                </div>
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
<script src="<?= media();?>/js/tickets/editar.js"></script>
<script src="<?= media();?>/js/fancy-file.js"></script>
<script src="<?= media();?>/js/tickets/actualizar.js"></script>
<script src="<?= media(); ?>/js/tickets/busqueda.js"></script>
<script>
$(document).ready(function() {
    // Función para establecer los campos en modo de solo lectura
    function setReadOnlyFields() {
        // Establecer el campo de nro_registros en modo de solo lectura
        $("#modalAgregarTicket input[name='nro_registros']").prop("readonly", true);

        // Establecer el campo de fecha en modo de solo lectura
        $("#modalAgregarTicket input[name='fecha']").prop("readonly", true);

        // Establecer el campo de estado en modo de solo lectura
        $("#modalAgregarTicket input[name='estado']").prop("readonly", true);

        // Establecer el campo de correlativo en modo de solo lectura
        $("#modalAgregarTicket input[name='correlativo']").prop("readonly", true);
    }

    // Llamada a la función cuando se carga el modal
    $('#modalAgregarTicket').on('show.bs.modal', function(e) {
        setReadOnlyFields();
    });
});
</script>
<script src="<?= media(); ?>/js/tickets/agregar.js"></script>

<!-- DataTables -->
<script src="<?= media();?>/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?= media();?>/js/dataTables/dataTables.bootstrap5.min.js"></script>
<script src="<?= media();?>/js/dataTables/table-datatable.js"></script>
</body>

</html>