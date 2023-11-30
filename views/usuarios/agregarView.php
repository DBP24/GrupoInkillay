<?= headerAdmin($data);
getModal('empresas','agregar',$data); ?>
<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">
        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"><?=$data['page_content'];?></div>
        </div>
        <hr class="mb-5">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="formularioAgregarUsuario" name="formularioAgregarUsuario" method="POST"
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="mb-4 d-flex flex-column gap-3 align-items-center justify-content-center">
                                <div class="user-change-photo shadow">
                                    <img src="<?= media();?>/img/usuarios/defecto.png" alt="..." name="foto" id="foto">
                                </div>
                                <label for="fileInput" class="custom-file-upload">
                                    Subir foto
                                </label>
                                <input type="file" id="fileInput" name="fileInput" style="display: none;">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mt-3">Apellido Paterno:</label>
                                    <input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno"
                                        pattern="[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+" title="Solo se permiten letras"
                                        maxlength="150">
                                </div>
                                <div class="col-md-6">
                                    <label class="mt-3">Apellido Materno:</label>
                                    <input type="text" class="form-control" id="apellidomaterno" name="apellidomaterno"
                                        pattern="[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+" title="Solo se permiten letras"
                                        maxlength="150">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="mt-3">Nombres:</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres"
                                        pattern="[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+" title="Solo se permiten letras"
                                        maxlength="100">
                                </div>
                                <div class="col-md-4">
                                    <label class="mt-3">Cargo:</label>
                                    <select class="form-select" id="cargo" name="cargo">
                                        <option value="0">Seleccione</option>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Usuario">Usuario</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="mt-3">Correo Electrónico:</label>
                                    <input type="text" class="form-control" id="correoelectronico"
                                        name="correoelectronico"
                                        pattern="[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-]([\.]?[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-])+@[a-zA-Z0-9]([^@&%$\/\(\)=?¿!\.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?"
                                        title="Ingrese una dirección de correo electrónico válida" maxlength="50">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mt-3">Teléfono:</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">01</span>
                                        <input type="text" class="form-control" placeholder="2321177" pattern="[0-9]+"
                                            title="Solo se permiten números" maxlength="50" id="telefono"
                                            name="telefono">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="mt-3">Número Celular:</label>
                                    <input type="text" class="form-control" placeholder="987456321" pattern="[0-9]+"
                                        title="Solo se permiten números" maxlength="50" id="numerocelular"
                                        name="numerocelular">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="mt-3">Fecha Inicio:</label>
                                    <input type="datetime-local" class="form-control" id="fechainicio"
                                        name="fechainicio">
                                </div>
                                <div class="col-md-3">
                                    <label class="mt-3">Fecha Final:</label>
                                    <input type="datetime-local" class="form-control" id="fechafinal" name="fechafinal">
                                </div>
                                <div class="col-md-3">
                                    <label class="mt-3">Importe Contrato (S/):</label>
                                    <input type="text" class="form-control" placeholder="3320.00" pattern="[0-9]+"
                                        title="Solo se permiten números" id="importecontrato" name="importecontrato">
                                </div>
                                <div class="col-md-3">
                                    <label class="mt-3">Empresa:</label>
                                    <div class="d-flex align-items-center">
                                        <select name="empresa" id="empresa" class="form-select"></select>
                                        <input type="button" class="icon__a" value="+" onclick="agregarDatos()">
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-5">
                                    <label class="mt-3">Usuario:</label>
                                    <input type="text" class="form-control" placeholder="ricardo" id="usuario"
                                        name="usuario">
                                </div>
                                <div class="col-md-5">
                                    <label class="mt-3">Password:</label>
                                    <input type="password" class="form-control" placeholder="********" id="password"
                                        name="password">
                                </div>
                                <div class="col-md-2">
                                    <label class="mt-3">Estado:</label>
                                    <div class="form-check form-switch mt-3">
                                        <input class="form-check-input" type="checkbox" role="switch" id="estado"
                                            name="estado">
                                        <label class="form-check-label" for="flexSwitchCheckRemember">Activado</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 mb-5 text-center">
                        <button type="submit" class="btn btn-primary">Insertar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JS -->
<script src="<?= media(); ?>/js/usuarios/agregar.js"></script>
<script src="<?= media(); ?>/js/empresas/agregar.js"></script>
<script src="<?= media(); ?>/js/empresas/modal.js"></script>
<script src="<?= media(); ?>/js/empresas/busquedaRUC.js"></script>
<script src="<?= media();?>/js/usuarios/cargarcombos.js"></script>
<style>
.select2 {
    width: 100% !important;
}
</style>
<?= footerAdmin($data)?>

<script src="<?= media(); ?>/js/select2.min.js"></script>
<script>
$(function() {
    //Initialize Select2 Elements
    $('.form-select').select2({
        theme: "bootstrap-5"
    });

});
</script> 


</body>

</html>