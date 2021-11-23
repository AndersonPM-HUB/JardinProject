<?php

$usuario = $_POST['nombre'];
$contraseña = $_POST['contraseña'];
session_start();

$_SESSION['nombre']=$contraseña; 

include('../bd/db.php'); 

$consulta= "SELECT * FROM alumn where email='$usuario' and name='$contraseña'";
$resultado = mysqli_query($conexion,$consulta);

$filas= mysqli_num_rows($resultado);

if ($filas){

    header("location:dashboard.php");
}else{
    ?>
    <?php
    include("Login_students.php")
    ?>
    <h1 class="bad">Datos mal digitados </h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);