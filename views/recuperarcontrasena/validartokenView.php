<!doctype html>
<html class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="<?= media();?>/css/pace.min.css" rel="stylesheet" />
    <script src="<?= media();?>/js/pace.min.js"></script>

    <!--plugins-->
    <link href="<?= media();?>/css/perfect-scrollbar.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="<?= media();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= media();?>/css/bootstrap-extended.css" rel="stylesheet">
    <link href="<?= media();?>/css/style.css" rel="stylesheet">
    <link href="<?= media();?>/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <title><?= $data['page_title']; ?></title>

    <link rel="icon" href="<?= media();?>/img/logo.ico">
    
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= media();?>/css/sweetalert2.min.css">
</head>

<body>

    <!--start wrapper-->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
                    <div class="card radius-10">
                        <div class="card-body p-4">
                            <div class="text-center mb-4 mt-2">
                                <img src="<?= media();?>/img/logo.png" alt="Logo de Grupo Inkillay" width="100%">
                                <!-- <h4 class="mt-3">Inicio de Sesión</h4> -->
                                <!-- <p>Iniciar sesión con tu cuenta</p> -->
                            </div>
                            <form id="FormularioToken" name="FormularioToken" class="form-body row g-3" method="POST">
                                <div class="col-12">
                                    <label class="form-label">Ingrese Token</label>
                                    <input type="text" class="form-control" id="token" name="token" placeholder="token">
                                </div>
                                <hr>
                                <div class="col-12">
                                    <label class="form-label">Nueva Contraseña</label>
                                    <input type="password" class="form-control" id="pass_1" name="pass_1"
                                        placeholder="************">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Repite Contraseña</label>
                                    <input type="password" class="form-control" id="pass_2" name="pass_2"
                                        placeholder="************">
                                </div>

                                <div class="col-12 col-lg-12 ">
                                    <div class="d-grid text-center">
                                        <button id="cambiar" name="cambiar" type="submit"
                                            class="btn btn-primary">Guardar Cambios</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="my-5">
            <div class="container">
                <div class="text-center">
                    <p class="my-4">Copyright © 2023 Grupo Inkillay.</p>
                </div>
            </div>
        </footer>
    </div>
    <!--end wrapper-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= media(); ?>/js/cambiarContrasenaToken.js"></script>
    <!-- JS -->
    <script>
    const base_url = "<?= base_url(); ?>";
    </script>
    <!-- SweetAlert2 -->
    <script src="<?= media();?>/js/sweetalert2.min.js"></script>
    <script src="<?= media();?>/js/bootstrap.bundle.min.js"></script>
</body>

</html>