<?= headerAdmin($data);?>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet" />

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
                                        data-bs-target="#staticBackdrop2">
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
                                    <br><input type="text" name="busqueda_tipo_proceso" id="busqueda_tipo_proceso"
                                        class="form-control">
                                </th>
                                <th>Nro Registros
                                    <br><input type="text" name="busqueda_nro_registros" id="busqueda_nro_registros"
                                        class="form-control">
                                </th>
                                <th>Estado
                                    <br><input type="text" name="busqueda_estado" id="busqueda_estado"
                                        class="form-control">
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
                                    <a class="icon_e" href="#">
                                        <ion-icon class="icon__e" name="create-outline"></ion-icon>
                                    </a>
                                </td>
                                <td><?php echo $datos_tickets['Secuencia']?></td>
                                <td><?php echo $datos_tickets['NumTicket']?></td>
                                <td><?php echo $datos_tickets['FechaProceso']?></td>
                                <td><?php echo $datos_tickets['TipoProceso']?></td>
                                <td><?php echo $datos_tickets['NumeroRegistros']?></td>
                                <td>Activo</td>
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

<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
                                <input type="text" class="form-control" id="periodo" value="<?php echo  date('Ym')?>" name="periodo"
                                    placeholder="202310">
                            </div>
                            <div class="col-md-6">
                                <label class="mt-3">Fecha:</label>
                                <input type="text" class="form-control"
                                    value="<?php echo date('Y-m-d'); ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label mt-3">Tipo Proceso:</label>
                                <select name="tipo_proceso" id="tipo_proceso" class="form-select">
                                    <option value="P1">Proceso 1</option>
                                    <option value="P2">Proceso 2</option>
                                    <option value="P3">Proceso 3</option>
                                    <option value="P4">Proceso 4</option>
                                    <option value="P5">Proceso 5</option>
                                    <option value="P6">Proceso 6</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-3">Nro. Registros:</label>
                                <input type="text" class="form-control" value="0" name="nro_registros"
                                    id="nro_registros">
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
                                <input type="text" class="form-control" value="ACTIVO" id="estado" name="estado"
                                    disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mt-3">
                                    <label class="input-group-btn">
                                        <span class="btn btn-info">
                                            Archivo SUNAT&hellip; <input type="file" id="archivo_sunat"
                                                name="archivo_sunat" style="display: none;" multiple
                                                onchange="updateFileNameSunat()">
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" id="file-name-sunat" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-3">Correlativo:</label>
                                <input type="text" class="form-control" id="correlativo" name="correlativo">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <label class="input-group-btn">
                                        <span class="btn btn-warning">
                                            Archivo Empresa&hellip; <input type="file" id="archivo"
                                                name="archivo" style="display: none;" multiple
                                                onchange="updateFileName()">
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" id="file-name" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="formFile" class="form-label mt-3" hidden>Documento Fiscal</label>
                                <input class="form-control" type="text" id="documento_fiscal" name="documento_fiscal"
                                    value="<?php echo $_SESSION['Usuario']['DocumentoFiscal']?>" hidden>
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

<script>
function updateFileNameSunat() {
    var input = document.getElementById('archivo_sunat');
    var fileName = input.files[0].name;
    document.getElementById('file-name-sunat').value = fileName;
}

function updateFileName() {
    var input = document.getElementById('archivo');
    var fileName = input.files[0].name;
    document.getElementById('file-name').value = fileName;
}
</script>

<script>
$(document).ready(function() {
    // Filtro de periodo general
    $('.realizar_busqueda').on('click', function() {
        // Obtener el valor del campo de búsqueda de periodo
        var periodo = $('#busqueda_periodo').val().trim();

        // Filtrar la tabla en función del valor de búsqueda de periodo
        $('tbody tr').each(function() {
            var valorPeriodo = $(this).find('td:eq(7)').text()
                .trim(); // Índice 7 para la columna de Periodo oculta
            var mostrarFila = !periodo || valorPeriodo === periodo;

            // Mostrar u ocultar la fila según las condiciones de filtro
            $(this).toggle(mostrarFila);
        });
    });

    // Manejar el evento de cambio para los campos de búsqueda
    $('#busqueda_secuencia, #busqueda_numero_ticket, #busqueda_fecha_proceso, #busqueda_tipo_proceso, #busqueda_nro_registros, #busqueda_estado')
        .on('input', function() {
            // Obtener el valor de los campos de búsqueda
            var secuencia = $('#busqueda_secuencia').val().trim();
            var numeroTicket = $('#busqueda_numero_ticket').val().trim();
            var fechaProceso = $('#busqueda_fecha_proceso').val().trim();
            var tipoProceso = $('#busqueda_tipo_proceso').val().trim();
            var nroRegistros = $('#busqueda_nro_registros').val().trim();
            var estado = $('#busqueda_estado').val().trim();
            // Filtrar la tabla en función de los valores de búsqueda
            $('tbody tr').each(function() {
                var valorSecuencia = $(this).find('td:eq(1)').text().trim();
                var valorNumeroTicket = $(this).find('td:eq(2)').text().trim();
                var valorFechaProceso = $(this).find('td:eq(3)').text().trim();
                var valorTipoProceso = $(this).find('td:eq(4)').text().trim();
                var valorNroRegistros = $(this).find('td:eq(5)').text().trim();
                var valorEstado = $(this).find('td:eq(6)').text().trim();
                var mostrarFila =
                    (!secuencia || valorSecuencia.includes(secuencia)) &&
                    (!numeroTicket || valorNumeroTicket.includes(numeroTicket)) &&
                    (!fechaProceso || valorFechaProceso.includes(fechaProceso)) &&
                    (!tipoProceso || valorTipoProceso.includes(tipoProceso)) &&
                    (!nroRegistros || valorNroRegistros.includes(nroRegistros)) &&
                    (!estado || valorEstado.includes(estado));

                // Mostrar u ocultar la fila según las condiciones de filtro
                $(this).toggle(mostrarFila);
            });
        });
});
</script>
<!-- JS -->
<script src="<?= media(); ?>/js/tickets/agregar.js"></script>

<!-- DataTables -->
<script src="<?= media();?>/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?= media();?>/js/dataTables/dataTables.bootstrap5.min.js"></script>
<script src="<?= media();?>/js/dataTables/table-datatable.js"></script>
</body>

</html>