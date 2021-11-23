<?php
include '../bd/db.php';
session_start();

$nombre = $_SESSION['nombre']; 

$sql = "SELECT * FROM alumn Where name = '$nombre'";
$result = mysqli_query($conexion, $sql);
if (!$result) {
    echo 'No se pudo ejecutar la consulta: ' ; 
}
$row = mysqli_fetch_row($result);
$id = $row[0]; 
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- FONTAWESOME : https://kit.fontawesome.com/a23e6feb03.js -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.  5/jquery.mCustomScrollbar.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="css/styles2.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">

        <script src="js/icons.js"></script>

        <title>Plataforma</title>
    </head>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light blue fixed-top">
        <button id="sidebarCollapse" class="btn navbar-btn">
            <i class="fas fa-lg fa-bars"></i>
        </button>
        <a class="navbar-brand" href="">
            <h3 id="logo">BIENVENIDO : <?php echo $_SESSION['nombre']; ?></h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

        <div class="contenedor" id="content">

            <table border="1" id="notas">

                <tr>
                    <th>ASIGNATURA</th>

                    <th>CALIFICACIÓN </th>
                </tr>
              
                <tr>
                <?php

; 
                $suma =0; 
                $contador =0;
                $sql = "SELECT val , name FROM calification join block Where block_id = block.id and alumn_id = '$id' ";
                $result = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($result)) {
                    $suma =$suma + $mostrar['val']; 
                    $contador += 1; 
                ?>
                <tr>
                <td><?php echo $mostrar['name'] ?></td>
                <td><?php echo $mostrar['val'] ?></td>
                </tr>
            <?php
                    }
                $prom = $suma / $contador; 

                if ($prom < 3.0) {
                    $mensaje = "Ponte las pilas , necesitas estudiar más";
                } elseif ($prom < 4.0) {
                    $mensaje =  "Vas por buen camino , sin embargo necesitas reforzar tu estudio";
                } else {
                    $mensaje =" Excelente , vas muy bien , sigue así :) ";
                }


            ?>
          
         
            </table>
            <h2 class="m"><?php echo 'Promedio del estudiante : ' ,round($prom, 2)?></h2>
            <h6 class="m"><?php echo $mensaje ?></h6>
        </div>

    





        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="js/script2.js"></script>
</body>

</html>