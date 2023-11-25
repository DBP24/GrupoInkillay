<!-- Modal Editar Ticket-->
<div class="modal fade" id="modalEditarTicket" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="formularioActualizarTicket" name="formularioActualizarTicket" method="POST"
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
                                <input type="text" class="form-control" id="periodo" name="periodo"
                                    placeholder="202310">
                            </div>
                            <div class="col-md-6">
                                <label class="mt-3">Fecha:</label>
                                <input type="text" class="form-control" id="fechaproceso" name="fechaproceso">
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
                                <input type="text" class="form-control" name="nro_registros" id="nro_registros">
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
                                <input type="text" class="form-control" value="ACTIVO" id="estado" name="estado">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <label class="form-label mt-3">Archivo Sunat:</label>
                                    <input type="file" class='fancy-file green' id="archivo4" name="archivo_sunat" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label mt-3">Correlativo:</label>
                                <input type="text" class="form-control" id="correlativo" name="correlativo">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <label class="form-label mt-3">Archivo:</label>
                                    <input type="file" class='fancy-file blue' id="archivo5" name="archivo" />
                                </div>
                            </div>
                        </div>
                        <input type="text" id="id_ticket" name="id_ticket" hidden>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <button type="submit" onclick="actualizarDatos();" class="btn btn-primary">Grabar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>