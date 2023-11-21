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
            <div class="col-4 d-flex justify-content-center align-items-center">
                <label>Periodo</label>
                <input type="text" id="" name="" class="form-control ms-1 me-1">
                <button class="btn btn-primary">Buscar</button>
            </div>
        </div>
        <hr class="linea__separadora">
        <div class="card radius-10 w-100">
            <div class="card-body">
                <div class="table-responsive mt-2">
                    <table class="table table-bordered">
                        <thead class="text-center table-light">
                            <tr>
                                <th>
                                    <input type="button" class="icon__a" value="+" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop2">
                                </th>
                                <th>Sec.
                                    <br><input type="text" name="" id="" class="form-control">
                                </th>
                                <th>Número Ticket
                                    <br><input type="text" name="" id="" class="form-control">
                                </th>
                                <th>Fecha Proceso
                                    <br><input type="text" name="" id="" class="form-control">
                                </th>
                                <th>Tipo Proceso
                                    <br><input type="text" name="" id="" class="form-control">
                                </th>
                                <th>Nro Registros
                                    <br><input type="text" name="" id="" class="form-control">
                                </th>
                                <th>Estado
                                    <br><input type="text" name="" id="" class="form-control">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a class="icon_e" href="#">
                                        <ion-icon class="icon__e" name="create-outline"></ion-icon>
                                    </a>
                                </td>
                                <td>1</td>
                                <td>788548</td>
                                <td>2020-03-20</td>
                                <td>Manual</td>
                                <td>125</td>
                                <td>Activo</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        <ion-icon class="icon__e" name="create-outline"></ion-icon>
                                    </a>
                                </td>
                                <td>2</td>
                                <td>788548</td>
                                <td>2020-03-20</td>
                                <td>Manual</td>
                                <td>125</td>
                                <td>Activo</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        <ion-icon class="icon__e" name="create-outline"></ion-icon>
                                    </a>
                                </td>
                                <td>3</td>
                                <td>788548</td>
                                <td>2020-03-20</td>
                                <td>Manual</td>
                                <td>125</td>
                                <td>Activo</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        <ion-icon class="icon__e" name="create-outline"></ion-icon>
                                    </a>
                                </td>
                                <td>4</td>
                                <td>788548</td>
                                <td>2020-03-20</td>
                                <td>Manual</td>
                                <td>125</td>
                                <td>Activo</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        <ion-icon  class="icon__e" name="create-outline"></ion-icon>
                                    </a>
                                </td>
                                <td>5</td>
                                <td>788548</td>
                                <td>2020-03-20</td>
                                <td>Manual</td>
                                <td>125</td>
                                <td>Activo</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">
                                        <ion-icon  class="icon__e" name="create-outline"></ion-icon>
                                    </a>
                                </td>
                                <td>6</td>
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
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Número de Ticket</h1>
                    <button type="button"  class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">
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
<!-- DataTables -->
<script src="<?= media();?>/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?= media();?>/js/dataTables/dataTables.bootstrap5.min.js"></script>
<script src="<?= media();?>/js/dataTables/table-datatable.js"></script>
</body>

</html>