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

    <!-- DataTables -->
    <link href="<?= media();?>/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

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
            <div class="pt-4 pe-2 ps-3 pb-0">
                    <!-- <h4 class="logo-text">Grupo Inkillay</h4> -->
                <img src="<?= media();?>/img/logo.png" class="logo" alt="logo icon">
            </div>
        
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a class="encabezado" href="<?= base_url();?>">
                        <div class="parent-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="menu-title ">Dashboard</div>
                    </a>
                </li>

                <li class="menu-label ">Elementos</li>
            
                <li class="content__interfaces">
                    <a href="<?= base_url();?>/paginas/pagina">
                        <div class="parent-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Insertar Nuevos Usuarios</div>
                    </a>
                        <hr>
                    <a href="<?= base_url();?>/paginas/pagina2">
                        <div class="parent-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Listado de Información</div>
                    </a>
                    <hr>
                    <a href="<?= base_url();?>/paginas/pagina">
                        <div class="parent-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </div>
                        <div class="menu-title">Listado de Información</div>
                    </a>
                    <hr>
                    
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
                        <div class="nav-perfil me-3">
                            <?php echo $_SESSION['Usuario']["Nombres"] ?>
                        </div>
                        <div class="nav-perfil ms-3 me-3">
                            <?php echo  $_SESSION['Usuario']["Apellidos"]?>
                        </div>
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