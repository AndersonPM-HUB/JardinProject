<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../public/css/blue.css">
    <link rel="stylesheet" href="css/estilos.css">
  <title>Login</title>
</head>
<body>
<div class="container" id="c">


<h1>Plataforma de estudiantes</h1>
<form action="validar.php" method="POST">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='nombre'>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name='contraseña'>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<br>
<a href="../index.html">Página de inicio</a>
<img src="https://estudiandoenlaunadm.files.wordpress.com/2016/03/commonly-used-terms-in-elearning.gif?w=352" height="180px">
</div>

</body>
</html>