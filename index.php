<!DOCTYPE html>
<?php
session_start();
if (@$_SESSION['username']) {
  header("Location:inicio.php");
}
?>


<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/signin.css">
	<title>Inicio de Sesión</title>
</head>

<body class="text-center">
    <form  action="code/validar.php" method="POST" class="form-signin">
      <img class="mb-4" src="img/login.png" alt="" width="200" height="200">
      <h1 class="h3 mb-3 font-weight-normal">Ingrese sus credenciales</h1>
      <label for="username" class="sr-only">Usuario</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Usuario" required autofocus>
      <label for="password" class="sr-only">Contraseña</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
    
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; Versatility 2019</p>
    </form>


</body>
</html>