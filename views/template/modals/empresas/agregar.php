<!-- Modal Agregar Empresa-->
<div class="modal fade" id="modalAgregarEmpresa" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="formularioAgregarEmpresa" name="formularioAgregarEmpresa" method="POST">

                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Agregar Nueva Empresa</h1>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">
                        X
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="mt-3">Razón Social:</label>
                                <input type="text" class="form-control" id="razon_social" name="razon_social">
                            </div>
                            <div class="col-md-6">
                                <label class="mt-3">Documento Fiscal:</label>
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control" id="documento_fiscal"
                                        name="documento_fiscal">
                                    <input type="button" class="icon__a" value="🔎" onclick="buscarRuc()">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="mt-3">Ciudad:</label>
                                <input type="text" class="form-control" id="ciudad" name="ciudad">
                            </div>
                            <div class="col-md-6">
                                <label class="mt-3">Correo Electrónico:</label>
                                <input type="text" class="form-control" id="correo_electronico"
                                    name="correo_electronico">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="mt-3">Teléfono:</label>
                                <input type="text" class="form-control" id="telefono" name="telefono">
                            </div>
                            <div class="col-md-6">
                                <label class="mt-3">Estado:</label>
                                <input type="text" class="form-control" id="estado_empresa" name="estado_empresa">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label class="mt-3">Dirección:</label>
                                <textarea name="direccion" id="direccion" class="form-control" 
                                    rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary btn_guardar_empresa">Grabar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>