<?= headerAdmin($data);?>
<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Dashboard</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0 align-items-center">
                        <li class="breadcrumb-item"><a href="javascript:;">
                                <ion-icon name="home-outline"></ion-icon>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">eCommerce</li>
                    </ol>
                </nav>
            </div>
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
                                <p class="mb-0 fs-6">Total Revenue</p>
                            </div>
                            <div class="ms-auto widget-icon-small text-white bg-gradient-purple">
                                <ion-icon name="wallet-outline"></ion-icon>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div>
                                <h4 class="mb-0">$92,854</h4>
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
                                <p class="mb-0 fs-6">Total Customer</p>
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
                                <p class="mb-0 fs-6">Total Orders</p>
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
                                <p class="mb-0 fs-6">Conversion Rate</p>
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
                            <h6 class="mb-0">Sales by Countries</h6>
                            <div class="dropdown options ms-auto">
                                <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                    <ion-icon name="ellipsis-horizontal-outline" class="md hydrated"></ion-icon>
                                </div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="countries-list">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="country-icon">
                                    <img src="assets/images/icons/usa.png" alt="" width="35">
                                </div>
                                <div class="country-name flex-grow-1">
                                    <h5 class="mb-0">$84.5K</h5>
                                    <p class="mb-0 text-secondary">United states</p>
                                </div>
                                <div class="">
                                    <p class="mb-0 text-success d-flex gap-1 align-items-center fw-500"><i
                                            class='bx bx-up-arrow-alt'></i><span>25%</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="country-icon">
                                    <img src="assets/images/icons/india.png" alt="" width="35">
                                </div>
                                <div class="country-name flex-grow-1">
                                    <h5 class="mb-0">$750</h5>
                                    <p class="mb-0 text-secondary">India</p>
                                </div>
                                <div class="">
                                    <p class="mb-0 text-success d-flex gap-1 align-items-center fw-500"><i
                                            class='bx bx-up-arrow-alt'></i><span>18%</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="country-icon">
                                    <img src="assets/images/icons/china.png" alt="" width="35">
                                </div>
                                <div class="country-name flex-grow-1">
                                    <h5 class="mb-0">$38.5</h5>
                                    <p class="mb-0 text-secondary">China</p>
                                </div>
                                <div class="">
                                    <p class="mb-0 text-danger d-flex gap-1 align-items-center fw-500"><i
                                            class='bx bx-down-arrow-alt'></i><span>14%</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="country-icon">
                                    <img src="assets/images/icons/russia.png" alt="" width="35">
                                </div>
                                <div class="country-name flex-grow-1">
                                    <h5 class="mb-0">$88.0K</h5>
                                    <p class="mb-0 text-secondary">France</p>
                                </div>
                                <div class="">
                                    <p class="mb-0 text-success d-flex gap-1 align-items-center fw-500"><i
                                            class='bx bx-up-arrow-alt'></i><span>28%</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="country-icon">
                                    <img src="assets/images/icons/australia.png" alt="" width="35">
                                </div>
                                <div class="country-name flex-grow-1">
                                    <h5 class="mb-0">$78.3K</h5>
                                    <p class="mb-0 text-secondary">Australia</p>
                                </div>
                                <div class="">
                                    <p class="mb-0 text-danger d-flex gap-1 align-items-center fw-500"><i
                                            class='bx bx-down-arrow-alt'></i><span>16%</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="country-icon">
                                    <img src="assets/images/icons/brazil.png" alt="" width="35">
                                </div>
                                <div class="country-name flex-grow-1">
                                    <h5 class="mb-0">$10.5K</h5>
                                    <p class="mb-0 text-secondary">Brazil</p>
                                </div>
                                <div class="">
                                    <p class="mb-0 text-success d-flex gap-1 align-items-center fw-500"><i
                                            class='bx bx-up-arrow-alt'></i><span>25%</span></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-0">
                                <div class="country-icon">
                                    <img src="assets/images/icons/UAE.png" alt="" width="35">
                                </div>
                                <div class="country-name flex-grow-1">
                                    <h5 class="mb-0">$30.5K</h5>
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
                            <h6 class="mb-0">Total Earning</h6>
                            <div class="dropdown options ms-auto">
                                <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                    <ion-icon name="ellipsis-horizontal-outline" class="md hydrated"></ion-icon>
                                </div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
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
                        <div id="chart1"></div>
                        <div class="mt-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="widget-icon-small rounded bg-light-success text-success">
                                    <ion-icon name="wallet-outline"></ion-icon>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0">$545.69</h6>
                                    <p class="mb-0 text-secondary">Last Month Sales</p>
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
                                    <h6 class="mb-0">$956.34</h6>
                                    <p class="mb-0 text-secondary">Last Month Sales</p>
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
                                    <h6 class="mb-0">$6956.48</h6>
                                    <p class="mb-0 text-secondary">Last Year Sales</p>
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
                            <h6 class="mb-0">Total Traffic</h6>
                            <div class="dropdown options ms-auto">
                                <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                                    <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                                </div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center font-13 gap-2">
                            <span class="border px-1 rounded cursor-pointer"><i
                                    class="bx bxs-circle me-1 text-tiffany"></i>Cliks</span>
                            <span class="border px-1 rounded cursor-pointer"><i
                                    class="bx bxs-circle me-1 text-success"></i>Views</span>
                        </div>
                        <div id="chart2"></div>
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