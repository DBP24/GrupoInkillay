<?= headerAdmin($data);?>
<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"><?= $data['page_content'];?></div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card radius-10">
                    <div class="card-body">
                        <form id="formularioActualizarPerfil" name="formularioActualizarPerfil" method="POST" onsubmit="return false">
                            <div class="mb-4 d-flex flex-column gap-3 align-items-center justify-content-center">
                                <div class="user-change-photo shadow">
                                    <img src="<?=media();?>/img/<?php echo $_SESSION['Usuario']['Foto']?>" alt="...">
                                </div>
                                <button type="button" class="btn btn-outline-primary btn-sm radius-30 px-4">
                                    <ion-icon name="image-sharp"></ion-icon>Cambiar foto
                                </button>
                            </div>
                            <h5 class="mb-0 mt-4">Información del usuario</h5>
                            <hr>
                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="form-label">Nombres</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres"
                                        value="<?php echo $_SESSION['Usuario']['Nombres']?>">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidos" name="apellidos"
                                        value="<?php echo $_SESSION['Usuario']['Apellidos']?>">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Correo</label>
                                    <input type="email" class="form-control" id="correo" name="correo"
                                        value="<?php echo $_SESSION['Usuario']['Correo']?>">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Celular</label>
                                    <input type="text" class="form-control" id="celular" name="celular"
                                        value="<?php echo $_SESSION['Usuario']['Celular']?>">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Usuario</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario"
                                        value="<?php echo $_SESSION['Usuario']['Usuario']?>">
                                </div>
                            </div>

                            <div class="text-start mt-3">
                                <button type="submit" name="modificar_usuario" id="modificar_usuario" class="btn btn-primary px-4">Guardar cambios</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end row-->

    </div>
    <!-- end page content-->
</div>

<!-- JS -->

<!--End Back To Top Button-->
<?= footerAdmin($data);?>
<script src="<?= media();?>/js/usuarios/actualizar.js"></script>

</body>
</html>