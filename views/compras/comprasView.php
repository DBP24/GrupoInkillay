<?= headerAdmin($data);?>
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
                <input type="text" id="" name="" class="form-control ms-1 me-1">
                <button class="btn btn-primary ms-2">Buscar</button>
                <button class="btn btn-primary mx-2">Importar</button>
                <button class="btn btn-primary ">Análisis</button>
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
                                        <th>Tipo Doc.
                                            <br>
                                            <select name="busqueda_tipo_documento1" id="busqueda_tipo_documento1" class="form-select">
                                                <option value="0">Todos</option>
                                                <option value="01">DNI</option>
                                                <option value="02">Pasaporte</option>
                                            </select>
                                        </th>
                                        <th>Serie
                                            <br><input type="text" name="busqueda_serie1" id="busqueda_serie1" class="form-control">
                                        </th>
                                        <th>Comprobante
                                            <br><input type="text" name="busqueda_comprobante1" id="busqueda_comprobante1" class="form-control">
                                        </th>
                                        <th>Tipo Libro
                                            <br><input type="text" name="busqueda_tipo_libro1" id="busqueda_tipo_libro1" class="form-control">
                                        </th>
                                        <th>Nro Registros
                                            <br><input type="text" name="busqueda_nro_registros1" id="busqueda_nro_registros1" class="form-control">
                                        </th>
                                        <th>Estado
                                            <br><input type="text" name="busqueda_estado1" id="busqueda_estado1" class="form-control">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <?php foreach ($datos as $datos_registro_compras_sunat) {?>
                                    <tr class="text-center" >
                                        <td><?php echo $datos_registro_compras_sunat['TipoDocumento'] ?></td>
                                        <td><?php echo $datos_registro_compras_sunat['SerieDcoumento'] ?></td>
                                        <td><?php echo $datos_registro_compras_sunat['EstadoComprobante']?></td>
                                        <td><?php echo $datos_registro_compras_sunat['LibroNombre']?></td>
                                        <td><?php echo $datos_registro_compras_sunat['NumeroRegistrosSUNAT']?></td>
                                        <td><?php echo $datos_registro_compras_sunat['Estado']?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
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
                                        <th>Tipo Doc.
                                            <br>
                                            <select name="busqueda_tipo_documento2" id="busqueda_tipo_documento2" class="form-select">
                                                <option value="0">Todos</option>
                                                <option value="01">DNI</option>
                                                <option value="02">Pasaporte</option>
                                            </select>
                                        </th>
                                        <th>Serie
                                            <br><input type="text" name="busqueda_serie2" id="busqueda_serie2" class="form-control">
                                        </th>
                                        <th>Comprobante
                                            <br><input type="text" name="busqueda_comprobante2" id="busqueda_comprobante2" class="form-control">
                                        </th>
                                        <th>Tipo Libro
                                            <br><input type="text" name="busqueda_tipo_libro2" id="busqueda_tipo_libro2" class="form-control">
                                        </th>
                                        <th>Nro Registros
                                            <br><input type="text" name="busqueda_nro_registros2" id="busqueda_nro_registros2" class="form-control">
                                        </th>
                                        <th>Estado
                                            <br><input type="text" name="busqueda_estado2" id="busqueda_estado2" class="form-control">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <?php foreach ($dato as $datos_registro_compras_empresa) {?>
                                    <tr class="text-center" >
                                        <td><?php echo $datos_registro_compras_empresa['TipoDocumento'] ?></td>
                                        <td><?php echo $datos_registro_compras_empresa['SerieDcoumento'] ?></td>
                                        <td><?php echo $datos_registro_compras_empresa['EstadoComprobante']?></td>
                                        <td><?php echo $datos_registro_compras_empresa['LibroNombre']?></td>
                                        <td><?php echo $datos_registro_compras_empresa['NumeroRegistrosEmpresa']?></td>
                                        <td><?php echo $datos_registro_compras_empresa['Estado']?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
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
                        <button class="nav-link" id="nav-excluir-e-incluir-tab" data-bs-toggle="tab" data-bs-target="#nav-excluir-e-incluir"
                            type="button" role="tab" aria-controls="nav-excluir-e-incluir" aria-selected="false">Excluir e Incluir</button>
                        <button class="nav-link" id="nav-completar-o-reubicar-tab" data-bs-toggle="tab" data-bs-target="#nav-completar-o-reubicar"
                            type="button" role="tab" aria-controls="nav-completar-o-reubicar" aria-selected="false">Completar o Reubicar</button>

                        <!-- Contenedor con la clase ms-auto para apegar el botón a la izquierda -->
                        <div class="ms-auto mb-1">
                            <button class="btn btn-primary"><ion-icon name="download-outline"></ion-icon>Exportar</button>
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
                    <div class="tab-pane fade" id="nav-excluir-e-incluir" role="tabpanel" aria-labelledby="nav-excluir-e-incluir" tabindex="0">
                    excluir-e-incluir
                    </div>
                    <div class="tab-pane fade" id="nav-completar-o-reubicar" role="tabpanel" aria-labelledby="nav-completar-o-reubicar" tabindex="0">
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
                        <button class="nav-link" id="nav-excluir-e-incluir-tab" data-bs-toggle="tab" data-bs-target="#nav-excluir-e-incluir"
                            type="button" role="tab" aria-controls="nav-excluir-e-incluir" aria-selected="false">Excluir e Incluir</button>
                        <button class="nav-link" id="nav-completar-o-reubicar-tab" data-bs-toggle="tab" data-bs-target="#nav-completar-o-reubicar"
                            type="button" role="tab" aria-controls="nav-completar-o-reubicar" aria-selected="false">Completar o Reubicar</button>

                        <!-- Contenedor con la clase ms-auto para apegar el botón a la izquierda -->
                        <div class="ms-auto mb-1">
                            <button class="btn btn-primary"><ion-icon name="download-outline"></ion-icon>Exportar</button>
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
                    <div class="tab-pane fade" id="nav-excluir-e-incluir" role="tabpanel" aria-labelledby="nav-excluir-e-incluir" tabindex="0">
                    excluir-e-incluir
                    </div>
                    <div class="tab-pane fade" id="nav-completar-o-reubicar" role="tabpanel" aria-labelledby="nav-completar-o-reubicar" tabindex="0">
                      completar-o-reubicar
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-anexo-10" role="tabpanel" aria-labelledby="nav-anexo-10-tab" tabindex="0">
                <!-- ANEXO 8 -->
                <nav class="mt-3">
                    <div class="d-flex nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-agregar-cp-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-agregar-cp" type="button" role="tab" aria-controls="nav-agregar-cp"
                            aria-selected="true">Agregar CP</button>
                        <button class="nav-link" id="nav-excluir-e-incluir-tab" data-bs-toggle="tab" data-bs-target="#nav-excluir-e-incluir"
                            type="button" role="tab" aria-controls="nav-excluir-e-incluir" aria-selected="false">Excluir e Incluir</button>
                        <button class="nav-link" id="nav-completar-o-reubicar-tab" data-bs-toggle="tab" data-bs-target="#nav-completar-o-reubicar"
                            type="button" role="tab" aria-controls="nav-completar-o-reubicar" aria-selected="false">Completar o Reubicar</button>

                        <!-- Contenedor con la clase ms-auto para apegar el botón a la izquierda -->
                        <div class="ms-auto mb-1">
                            <button class="btn btn-primary"><ion-icon name="download-outline"></ion-icon>Exportar</button>
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
                    <div class="tab-pane fade" id="nav-excluir-e-incluir" role="tabpanel" aria-labelledby="nav-excluir-e-incluir" tabindex="0">
                    excluir-e-incluir
                    </div>
                    <div class="tab-pane fade" id="nav-completar-o-reubicar" role="tabpanel" aria-labelledby="nav-completar-o-reubicar" tabindex="0">
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
<script src="<?= media(); ?>/js/compras/busqueda.js"></script>
<!-- DataTables -->
<script src="<?= media();?>/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?= media();?>/js/dataTables/dataTables.bootstrap5.min.js"></script>
<script src="<?= media();?>/js/dataTables/table-datatable.js"></script>

</body>

</html>