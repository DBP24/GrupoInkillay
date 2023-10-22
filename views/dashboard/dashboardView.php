<?= headerAdmin($data);?>
<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Dashboard</div>
            <!-- <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-primary">Settings</button>
                    <button type="button"
                        class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                            href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated
                            link</a>
                    </div>
                </div>
            </div> -->
        </div>
        <!--end breadcrumb-->


        <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-4">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <p class="mb-0 fs-6">Ingresos Totales</p>
                            </div>
                            <div class="ms-auto widget-icon-small text-white bg-gradient-purple">
                                <ion-icon name="wallet-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div>
                                <h4 class="mb-0"> S/ 92,854</h4>
                            </div>
                            <div class="ms-auto">+6.32%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <p class="mb-0 fs-6">Total de Clientes</p>
                            </div>
                            <div class="ms-auto widget-icon-small text-white bg-gradient-info">
                                <ion-icon name="people-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div>
                                <h4 class="mb-0">48,789</h4>
                            </div>
                            <div class="ms-auto">+12.45%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <p class="mb-0 fs-6">Total de Órdenes</p>
                            </div>
                            <div class="ms-auto widget-icon-small text-white bg-gradient-danger">
                                <ion-icon name="bag-handle-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div>
                                <h4 class="mb-0">88,234</h4>
                            </div>
                            <div class="ms-auto">+3.12%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-start gap-2">
                            <div>
                                <p class="mb-0 fs-6">Tasa de conversión</p>
                            </div>
                            <div class="ms-auto widget-icon-small text-white bg-gradient-success">
                                <ion-icon name="bar-chart-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div>
                                <h4 class="mb-0">48.76%</h4>
                            </div>
                            <div class="ms-auto">+8.52%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->

        <div class="row row-cols-1 row-cols-lg-3">
            <div class="col">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <h6 class="mb-0">Ventas por países</h6>
                            <div class="dropdown options ms-auto">
                                <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                    <ion-icon name="ellipsis-horizontal-outline" class="md hydrated"></ion-icon>
                                </div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Ver</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="countries-list">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="country-icon">
                                    <img src="<?= media();?>/img/usa.png" alt="" width="35">
                                </div>
                                <div class="country-name flex-grow-1">
                                    <h5 class="mb-0"> S/ 84.50</h5>
                                    <p class="mb-0 text-secondary">USA</p>
                                </div>
                                <div class="">
                                    <p class="mb-0 text-success d-flex gap-1 align-items-center fw-500"><i
                                            class='bx bx-up-arrow-alt'></i><span>25%</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="country-icon">
                                    <img src="<?= media();?>/img/india.png" alt="" width="35">
                                </div>
                                <div class="country-name flex-grow-1">
                                    <h5 class="mb-0"> S/ 70.00</h5>
                                    <p class="mb-0 text-secondary">India</p>
                                </div>
                                <div class="">
                                    <p class="mb-0 text-success d-flex gap-1 align-items-center fw-500"><i
                                            class='bx bx-up-arrow-alt'></i><span>18%</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="country-icon">
                                    <img src="<?= media();?>/img/china.png" alt="" width="35">
                                </div>
                                <div class="country-name flex-grow-1">
                                    <h5 class="mb-0"> S/ 38.50</h5>
                                    <p class="mb-0 text-secondary">China</p>
                                </div>
                                <div class="">
                                    <p class="mb-0 text-danger d-flex gap-1 align-items-center fw-500"><i
                                            class='bx bx-down-arrow-alt'></i><span>14%</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="country-icon">
                                    <img src="<?= media();?>/img/russia.png" alt="" width="35">
                                </div>
                                <div class="country-name flex-grow-1">
                                    <h5 class="mb-0"> S/ 88.00</h5>
                                    <p class="mb-0 text-secondary">Francia</p>
                                </div>
                                <div class="">
                                    <p class="mb-0 text-success d-flex gap-1 align-items-center fw-500"><i
                                            class='bx bx-up-arrow-alt'></i><span>28%</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="country-icon">
                                    <img src="<?= media();?>/img/australia.png" alt="" width="35">
                                </div>
                                <div class="country-name flex-grow-1">
                                    <h5 class="mb-0"> S/ 78.39</h5>
                                    <p class="mb-0 text-secondary">Australia</p>
                                </div>
                                <div class="">
                                    <p class="mb-0 text-danger d-flex gap-1 align-items-center fw-500"><i
                                            class='bx bx-down-arrow-alt'></i><span>16%</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="country-icon">
                                    <img src="<?= media();?>/img/brazil.png" alt="" width="35">
                                </div>
                                <div class="country-name flex-grow-1">
                                    <h5 class="mb-0"> S/ 10.50</h5>
                                    <p class="mb-0 text-secondary">Brasil</p>
                                </div>
                                <div class="">
                                    <p class="mb-0 text-success d-flex gap-1 align-items-center fw-500"><i
                                            class='bx bx-up-arrow-alt'></i><span>25%</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div class="country-icon">
                                    <img src="<?= media();?>/img/UAE.png" alt="" width="35">
                                </div>
                                <div class="country-name flex-grow-1">
                                    <h5 class="mb-0"> S/ 30.50</h5>
                                    <p class="mb-0 text-secondary">UAE</p>
                                </div>
                                <div class="">
                                    <p class="mb-0 text-success d-flex gap-1 align-items-center fw-500"><i
                                            class='bx bx-up-arrow-alt'></i><span>25%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <h6 class="mb-0">Total de Ganancias</h6>
                            <div class="dropdown options ms-auto">
                                <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                    <ion-icon name="ellipsis-horizontal-outline" class="md hydrated"></ion-icon>
                                </div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Ver</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <h2 class="mb-0">68%</h2>
                            <div class="">
                                <p class="mb-0 text-success d-flex gap-1 align-items-center fw-500 fs-6"><i
                                        class='bx bx-up-arrow-alt'></i><span>25%</span></p>
                            </div>
                        </div>


                        <canvas id="myChart"></canvas>


                        <div class="mt-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="widget-icon-small rounded bg-light-success text-success">
                                    <ion-icon name="wallet-outline"></ion-icon>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0"> S/ 545.69</h6>
                                    <p class="mb-0 text-secondary">Ganancias del pasado mes</p>
                                </div>
                                <div class="">
                                    <p class="mb-0 text-success d-flex gap-1 align-items-center fw-500 fs-6"><i
                                            class='bx bx-up-arrow-alt'></i><span>35%</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="widget-icon-small rounded bg-light-tiffany text-tiffany">
                                    <ion-icon name="flag-outline"></ion-icon>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0"> S/ 956.34</h6>
                                    <p class="mb-0 text-secondary">Ganancias del pasado mes</p>
                                </div>
                                <div class="">
                                    <p class="mb-0 text-danger d-flex gap-1 align-items-center fw-500 fs-6"><i
                                            class='bx bx-up-arrow-alt'></i><span>45%</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div class="widget-icon-small rounded bg-light-danger text-danger">
                                    <ion-icon name="school-outline"></ion-icon>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0"> S/ 6956.48</h6>
                                    <p class="mb-0 text-secondary">Ganancias del pasado año</p>
                                </div>
                                <div class="">
                                    <p class="mb-0 text-success d-flex gap-1 align-items-center fw-500 fs-6"><i
                                            class='bx bx-up-arrow-alt'></i><span>66%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 overflow-hidden w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <h6 class="mb-0">Total de Tráfico</h6>
                            <div class="dropdown options ms-auto">
                                <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                    <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                                </div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Ver</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center font-13 gap-2">
                            <span class="border px-1 rounded cursor-pointer"><i
                                    class="bx bxs-circle me-1 text-tiffany"></i>Clics</span>
                            <span class="border px-1 rounded cursor-pointer"><i
                                    class="bx bxs-circle me-1 text-success"></i>Vistas</span>
                        </div>

                        <canvas id="myChart2"></canvas>
                        <h6 class="mt-3 mb-0 text-center">Tráfico</h6>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
    <!-- end page content-->
</div>
<!--end page content wrapper-->
<?= footerAdmin($data);?>

<!-- Chart -->
<script src="<?= media();?>/js/chart/chart.js"></script>
<script src="<?= media();?>/js/chart/index.js"></script>

</body>

</html>