<?php

session_start();

$validar = $_SESSION['nombre'];

if ($validar==null || $validar = '') {
  header("location: Login_students.php");
  exit;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FONTAWESOME : https://kit.fontawesome.com/a23e6feb03.js -->
    <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.  5/jquery.mCustomScrollbar.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/styles2.css" rel="stylesheet" type="text/css">

    <script src="js/icons.js"></script>

    <title>Plataforma</title>
  </head>
  <body style="background-image: url(https://fondosmil.com/fondo/1937.jpg);">

  <nav class="navbar navbar-expand-lg navbar-light blue fixed-top">
    <button id="sidebarCollapse" class="btn navbar-btn">
      <i class="fas fa-lg fa-bars"></i>
    </button>
    <a class="navbar-brand" href="">
      <h3 id="logo">BIENVENIDO : <?php echo $_SESSION['nombre']; ?></h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" id="link" href="cerrar_sesion.php">
          <i class="fas fa-sign-out-alt"></i>
          LogOut<span class="sr-only">(current) </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="link" href="#">
          <i class="fas fa-id-card"></i>Chat</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="wrapper fixed-left">
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3><i class="fas fa-user"></i> </h3>
      </div>

      <ul class="list-unstyled components">
        <li>
          <a href="dashboard.php"><i class="fas fa-home"></i>Inicio</a>
        </li>
        <li>
          <a href="actividades.php"><i class="fas fa-clipboard"></i>Actividades</a>
        </li>
  
        <li>
          <a href="notas.php"><i class="fas fa-hands-helping"></i>Notas</a>
        </li>
        <li>
          <a href="estadomatricula.php"><i class="fas fa-info"></i>Estado Matricula</a>
        </li>
      </ul>
    </nav>


    






   