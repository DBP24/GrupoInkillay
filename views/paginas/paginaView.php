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
          
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>Nombres:</label>
                            <input type="text" class="form-control" placeholder="Max Orlando">
                        </div>
                        <div class="col-md-6">
                            <label>Apellidos:</label>
                            <input type="text" class="form-control" placeholder="Max Orlando">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="mt-3">Dirección:</label>
                            <input type="text" class="form-control" placeholder="320.00">
                        </div>
                        <div class="col-md-4">
                            <label class="mt-3">Teléfono:</label>
                            <input type="text" class="form-control" placeholder="320.00">
                        </div>
                        <div class="col-md-4">
                            <label class="mt-3">Sueldo (S/):</label>
                            <input type="text" class="form-control" placeholder="320.00">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="mt-3">Cargo:</label>
                            <select class="form-select">
                                <option value="" disabled selected>Seleccione</option>
                                <option value="">Accountant</option>
                                <option value="">Integration Specialist</option>
                                <option value="">Junior Technical Author</option>
                                <option value="">Sales Assistant</option>
                                <option value="">Senior Javascript Developer</option>
                                <option value="">Software Engineer</option>
                                <option value="">System Architect</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="mt-3">Oficina:</label>
                            <select class="form-select">
                                <option value="" disabled selected>Seleccione</option>
                                <option value="">Edinburgh</option>
                                <option value="">New York</option>
                                <option value="">San Francisco</option>
                                <option value="">Tokyo</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="mt-3">Edad:</label>
                            <input type="number" class="form-control" placeholder="0">
                        </div>
                        <div class="col-md-4">
                            <label class="mt-3">Fecha de Inicio:</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="mt-3">Fecha de Fin:</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                   
                   
                </div>
            </div>
            <div class="mt-5 mb-5 text-center">
                <button type="button" class="btn btn-primary">Insertar</button>
            </div>
        </div>
    </div>

    </div>
</div>

<?= footerAdmin($data)?>