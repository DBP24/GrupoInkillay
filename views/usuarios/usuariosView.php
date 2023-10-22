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
        <a href="<?= base_url();?>/usuarios/agregar" class="btn btn-primary mb-3">
            Agregar
        </a>

        <div class="card radius-10 w-100">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <!-- <h6 class="mb-0">Recent Orders</h6> -->
                </div>
                <div class="table-responsive mt-2">
                    <!-- <table class="table align-middle mb-0"> -->
                    <table id="example2" class="table align-middle mb-0">

                        <thead class="text-center">
                            <tr>

                                <th>N°</th>
                                <th>Usuario</th>
                                <th>Cargo</th>
                                <th>Correo Electrónico</th>
                                <th>Fecha Registro</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Final</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $contador=0;
                            foreach($datos as $datos_usuarios) { ?>
                            <tr>
                                <td><?php echo $contador = $contador + 1;?></td>
                                <td><?php echo $datos_usuarios['Usuario'];?></td>
                                <td><?php echo $datos_usuarios['Cargo'];?></td>
                                <td><?php echo $datos_usuarios['CorreoElectronico'];?></td>
                                <td><?php echo $datos_usuarios['FechaRegistro'];?></td>
                                <td><?php echo $datos_usuarios['FechaInicio'];?></td>
                                <td><?php echo $datos_usuarios['FechaFinal'];?></td>
                                <td>
                                    <div class="d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="text-primary" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Ver"
                                            aria-label="Ver">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Editar"
                                            aria-label="Editar">
                                            <ion-icon name="pencil-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="text-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="" data-bs-original-title="Eliminar"
                                            aria-label="Eliminar">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>N°</th>
                                <th>Usuario</th>
                                <th>Cargo</th>
                                <th>Correo Electrónico</th>
                                <th>Fecha Registro</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Final</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
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