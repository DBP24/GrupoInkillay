<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="<?= media();?>/css/pace.min.css" rel="stylesheet" />
    <script src="<?= media();?>/js/pace.min.js"></script>

    <!--plugins-->
    <link href="<?= media();?>/css/simplebar.css" rel="stylesheet" />
    <link href="<?= media();?>/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="<?= media();?>/css/metisMenu.min.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="<?= media();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= media();?>/css/bootstrap-extended.css" rel="stylesheet">
    <link href="<?= media();?>/css/style.css" rel="stylesheet">
    <link href="<?= media();?>/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!--Theme Styles-->
    <link href="<?= media();?>/css/dark-theme.css" rel="stylesheet" />
    <link href="<?= media();?>/css/semi-dark.css" rel="stylesheet" />
    <link href="<?= media();?>/css/header-colors.css" rel="stylesheet" />

    <title><?= $data['page_title']; ?></title>

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= media();?>/css/sweetalert2.min.css">
</head>

<body>


    <!--start wrapper-->
    <div class="wrapper">

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="<?= media();?>/img/logo-icon.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Grupo Inkillay</h4>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="index.html">
                        <div class="parent-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>


                <li class="menu-label">Páginas</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon">
                            <ion-icon name="bar-chart-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Charts</div>
                    </a>
                    <ul>
                        <li> <a href="charts-apex-chart.html">
                                <ion-icon name="ellipse-outline"></ion-icon>Apex
                            </a>
                        </li>
                        <li> <a href="charts-chartjs.html">
                                <ion-icon name="ellipse-outline"></ion-icon>Chartjs
                            </a>
                        </li>
                        <li> <a href="charts-peity.html">
                                <ion-icon name="ellipse-outline"></ion-icon>Peity
                            </a>
                        </li>
                        <li> <a href="charts-other.html">
                                <ion-icon name="ellipse-outline"></ion-icon>Other Charts
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="index.html">
                        <div class="parent-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Página 1</div>
                    </a>

                    <a href="index.html">
                        <div class="parent-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Página 2</div>
                    </a>

                    <a href="index.html">
                        <div class="parent-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Página 3</div>
                    </a>

                    <a href="index.html">
                        <div class="parent-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Página 4</div>
                    </a>

                    <a href="index.html">
                        <div class="parent-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Página 5</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </aside>
        <!--end sidebar -->

        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
                <div class="toggle-icon">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <form class="searchbar">
                    <div class="position-absolute top-50 translate-middle-y search-icon ms-3">
                        <ion-icon name="search-outline"></ion-icon>
                    </div>
                    <input class="form-control" type="text" placeholder="Search for anything">
                    <div class="position-absolute top-50 translate-middle-y search-close-icon">
                        <ion-icon name="close-outline"></ion-icon>
                    </div>
                </form>
                <div class="top-navbar-right ms-auto">

                    <ul class="navbar-nav align-items-center">
                       
                        <li class="nav-item dropdown dropdown-user-setting">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                                data-bs-toggle="dropdown">
                                <div class="user-setting">
                                    <img src="<?= media();?>/img/<?php echo $_SESSION['Usuario']['Foto']?>"
                                        class="user-img" alt="">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex flex-row align-items-center gap-2">
                                            <img src="<?= media();?>/img/<?php echo $_SESSION['Usuario']['Foto']?>"
                                                alt="" class="rounded-circle" width="54" height="54">
                                            <div class="">
                                                <h6 class="mb-0 dropdown-user-name">
                                                    <?php echo $_SESSION['Usuario']["Nombres"]?></h6>
                                                <small class="mb-0 dropdown-user-designation text-secondary">UI
                                                    Developer</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item" href="<?= base_url()?>/usuarios/perfil">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <ion-icon name="person-outline"></ion-icon>
                                            </div>
                                            <div class="ms-3"><span>Perfil</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <button onclick="logout();" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <div class="">
                                                <ion-icon name="log-out-outline"></ion-icon>
                                            </div>
                                            <div class="ms-3"><span>Cerrar sesión</span></div>
                                        </div>
                                    </button>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </nav>
        </header>
        <!--end top header-->