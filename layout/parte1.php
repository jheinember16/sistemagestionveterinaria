<?php
session_start();
$email_sesion = "";
if (isset($_SESSION['sesion_email'])) {
//echo "ha pasado por el login";
    $email_sesion = $_SESSION['sesion_email'];
    $sql = "SELECT * FROM tb_usuarios WHERE email = '$email_sesion' ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($usuarios as $usuario) {
        $id_usuario_sesion = $usuario['id_usuario'];
        $cargo_sesion = $usuario['cargo'];
        $nombre_completo_sesion = $usuario['nombre_completo'];


    }
} else {
//echo "no ha pasado por el login";
   // header('Location: ' . $URL . '/login');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sistema de Informacion Clinica Veterinaria</title>

    <link href="<?php echo $URL;?>/public/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- ICONOS DE BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- JQUERY -->
    <script src="<?php echo $URL;?>/public/js/jquery-3.6.4.min.js"></script> 

    <!-- STYLES CSS -->
    <link rel="stylesheet" href="<?php echo $URL;?>/public/css/style.css">

     <!-- Libreria de mensajes Sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>   

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $URL;?>">
            <img src="https://www.merida.gob.mx/salud/assets/img/elements/servicios-03.svg"
                 alt="Logo" width="50" height="24" class="d-inline-block align-text-top">
            Bootstrap
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn btn-outline-info" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ingresar
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="login">Iniciar sesion</a></li>
                        <li><a class="dropdown-item" href="login/registro.php">Registrar</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-info">Disabled</a>
                </li>
            </ul>
            <div class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                <?php
                
                if($email_sesion == ""){
                    //echo "sin logearse";
                    ?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn btn-outline-info" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ingresar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $URL; ?>/login">Iniciar Sesión</a></li>
                                <li><a class="dropdown-item" href="<?php echo $URL; ?>/login/registro.php">Registrarme</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php
                }else{
                //echo "ya paso el login";
                    ?>
                    <ul class="navbar-nav ms-2 me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn btn-outline-info" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                                <?php echo $email_sesion;?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo $URL;?>/app/controllers/login/cerrar_sesion.php">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php
                }
                ?>                
            </div>
        </div>
    </div>
</nav>
