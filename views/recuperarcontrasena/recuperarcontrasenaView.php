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
                <form class="form-body row g-3" method="POST">
                  <div class="col-12">
                    <label class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="correo" placeholder="usuario@grupoinkillay.com">
                  </div>
                  <div class="col-6 col-lg-6">
                    <div class="d-grid">
                      <a href="<?= base_url();?>/login" class="btn btn-secondary">Retornar a Login</a>
                    </div>
                  </div>
                  <div class="col-6 col-lg-6">
                    <div class="d-grid">
                      <button type="button" class="btn btn-primary">Enviar</button>
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

</body>

</html>