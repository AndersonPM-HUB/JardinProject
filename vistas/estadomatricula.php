<?php 

include '../bd/db.php';
include 'plantilla_base.php';


$validar = $_SESSION['nombre'];

if ($validar==null || $validar = '') {
  header("location: Login_students.php");
  exit;
}

$nombre = $_SESSION['nombre']; 

$sql = "SELECT * FROM alumn Where name = '$nombre'";
$result = mysqli_query($conexion, $sql);
if (!$result) {
    echo 'No se pudo ejecutar la consulta: ' ; 
}
$row = mysqli_fetch_row($result);
$id = $row[0]; 


$sql = "SELECT team_id , nombre FROM `alumn_team` join team where alumn_id = '$id' and team_id = team.idgrupo"; 
$resultado = mysqli_query($conexion , $sql);
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' ; 
}
$fila = mysqli_fetch_row($resultado);
$curso= $fila[1];


$sql = "SELECT image FROM `alumn` where id ='$id'"; 
$imagen = mysqli_query($conexion , $sql);
if (!$imagen) {
    echo 'No se pudo ejecutar la consulta: ' ; 
}
$fila = mysqli_fetch_assoc($imagen);

?>



<div class="container">




    <h1 id="titulo"><?php echo 'Curso actual:  ', $curso ?></h1>
    <h1 id="titulo"><?php echo 'Estado de Matricula:  ACTIVO '?></h1>

    <img src="data:image/png;base64,<?php echo base64_encode($fila['image']);?>"></td>

</div>






<?php 

include 'plantillabase2.php'; 


?>