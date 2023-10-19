<?= headerAdmin($data);?>
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
                <form action="">
                    <div class="modal-body">
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mt-3">Apellido Paterno:</label>
                                    <input type="text" class="form-control" placeholder="Rouillon"
                                        pattern="[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+" title="Solo se permiten letras" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="mt-3">Apellido Materno:</label>
                                    <input type="text" class="form-control" placeholder="Lao"
                                        pattern="[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+" title="Solo se permiten letras" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="mt-3">Nombres:</label>
                                    <input type="text" class="form-control" placeholder="Ricardo"
                                        pattern="[A-Za-záéíóúÁÉÍÓÚñÑüÜ\s]+" title="Solo se permiten letras" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="mt-3">Cargo:</label>
                                    <select class="form-select" required>
                                        <option value="" disabled selected>Seleccione</option>
                                        <option value="">Administrador</option>
                                        <option value="">Secretaria</option>
                                        <option value="">Ingeniero</option>
                                        <option value="">Contador</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="mt-3">Correo Electrónico:</label>
                                    <input type="text" class="form-control" placeholder="hola@grupoinkillay.com"
                                        pattern="[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-]([\.]?[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-])+@[a-zA-Z0-9]([^@&%$\/\(\)=?¿!\.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?"
                                        title="Ingrese una dirección de correo electrónico válida" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mt-3">Teléfono:</label>
                                    <input type="text" class="form-control" placeholder="2321177" pattern="[0-9]+"
                                        title="Solo se permiten números" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="mt-3">Número Celular:</label>
                                    <input type="text" class="form-control" placeholder="987456321" pattern="[0-9]+"
                                        title="Solo se permiten números" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="mt-3">Fecha Registro:</label>
                                    <input type="date" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="mt-3">Fecha Inicio:</label>
                                    <input type="date" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="mt-3">Fecha Final:</label>
                                    <input type="date" class="form-control" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mt-3">Importe Contrato (S/):</label>
                                    <input type="text" class="form-control" placeholder="3320.00" pattern="[0-9]+"
                                        title="Solo se permiten números" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="mt-3">Estado:</label>
                                    <input type="text" class="form-control" value="Activo" disabled>
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

<?= footerAdmin($data)?>

</body>
</html>