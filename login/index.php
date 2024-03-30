<?php
include "../app/config.php"
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo APP_NAME; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/dist/css/adminlte.min.css">

  <style>

    body.login-page {
      background-image: url('https://media.istockphoto.com/id/1371820934/es/foto/joven-veterinario-contempor%C3%A1neo-inclin%C3%A1ndose-sobre-el-escritorio-mientras-examina-al-perro.jpg?s=612x612&w=0&k=20&c=XKL2nIgXLnCxyGjl8jg2u1QeHwKFvqSHQUSi7CxWp2M='); /* Cambia la URL por la de tu nueva imagen */
      background-size: 100% 100% ; /* Cubre toda el área de la página */
      background-repeat: no-repeat;
    }



    .login-box {
      width: 400px;
      padding: 15px;
      background: rgba(255, 255, 255, 0.3);
      border-radius: 10px;
    }


</style>



</head>
<body class="hold-transition login-page">

<div class="container">
  <div class="row justify-content-end">
    <div class="col-md-5" >
      <div class="login-box" >
        <div class="card">
          <div class="card-body login-card-body" style="border-radius: 80px;">
            <div style="text-align: center;">
                <img src="<?php echo $URL; ?>/public/images/logo1.jpg" style="width: 32%;" alt="Inicio de sesion">
            </div>
            <br>
            <label class="login-box-msg" style=" display: block; text-align: center;">LOGIN</label>


            <form action="<?php echo $URL; ?>/app/controllers/login/controller_login.php" method="post">
              <label for="">Correo electrónico</label>
              <div class="input-group mb-1">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <label for="">Contraseña</label>
              <div class="input-group mb-0">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
               <hr>
               <br>
               <button type="submit" class="btn btn-primary mb-1" style="width: 100%">Ingresar</button>
               <a href="" class="btn btn-secondary mt-1" style="width: 100%">Cancelar</a>
            </form>
            <!-- /.social-auth-links -->
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="<?php echo $URL; ?>/public/templeates/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $URL; ?>/public/templeates/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $URL; ?>/public/templeates/dist/js/adminlte.min.js"></script>
</body>
</html>
