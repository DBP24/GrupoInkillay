<!doctype html>
<html lang="en" class="light-theme">

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

  <title><?= $data['page_title'];?></title>

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= media();?>/css/sweetalert2.min.css">
  <!--plugins-->
  <link href="<?= media();?>/css/simplebar.css" rel="stylesheet" />
  <link href="<?= media();?>/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="<?= media();?>/css/metisMenu.min.css" rel="stylesheet" />

</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">
  
    <div class="container ">
      <div class="row mt-ms-0 mt-md-5">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          
          <div class="reset-passowrd">
            <div class="card radius-10 w-100">
              <div class="card-body p-4">
                <div class="text-center">
                <div class="text-center mb-4 mt-2">
                    <img src="<?= media();?>/img/logo.png" alt="Logo de Grupo Inkillay" width="100%">
                </div>
                  <h4>Resetear Contraseña</h4>
                  <p>Recibirás un correo electrónico en máximo 60 segundos.</p>
                </div>
                <form id="recovery" name="recovery" class="form-body row g-3" method="POST">
                  <div class="col-12">
                    <label class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="usuario@grupoinkillay.com">
                  </div>
                  <div class="col-6 col-lg-6">
                    <div class="d-grid">
                      <a href="<?= base_url();?>/login" class="btn btn-secondary">Retornar a Login</a>
                    </div>
                  </div>
                  <div class="col-6 col-lg-6">
                    <div class="d-grid">
                      <button id="enviar" name="enviar" type="button" class="btn btn-primary">Enviar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="my-5">
      <div class="container">
        <div class="text-center">
          <p class="my-4">Copyright © <?= date("Y");   echo " " .  empresa();?>.</p>
        </div>
      </div>
    </footer>
  </div>
  <!--end wrapper-->



  <script src="<?= media();?>/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="<?= media();?>/js/recuperarContrasena.js"></script>
  <script>
    const base_url = "<?= base_url(); ?>";
    const media_url = "<?= media(); ?>";
   </script>
  <!-- SweetAlert2 -->
    <script src="<?= media();?>/js/sweetalert2.min.js"></script>

    <!-- JS Files-->
    <script src="<?= media();?>/js/jquery.min.js"></script>
    <script src="<?= media();?>/js/simplebar.min.js"></script>
    <script src="<?= media();?>/js/metisMenu.min.js"></script>
    <script src="<?= media();?>/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

    <!--plugins-->
    <script src="<?= media();?>/js/perfect-scrollbar.js"></script>
</body>

</html>