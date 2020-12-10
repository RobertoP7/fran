<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['username']) {
  header("Location:index.php");
}
?>


<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/estilos.css">
	<title>Error al enviar foto</title>

	
	<!-- Custom stlylesheet -->
	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h3>Ups! ocurrio un error al subir las fotos o registrar la habitacion</h3>
				<h1><span>4</span><span>0</span><span>4</span></h1>
			</div>
			<h2>Por favor si se registro la habitacion con algún error, eliminala e intenta de nuevo una vez más</h2>
			<h2>Posibles errores: </h2>
			<h3>*La habitacion ya existe</h3>
			<h3>*Error al guardar archivo</h3>
			<h3>*Archivo ya existe</h3>
			<h3>*Archivo no permitido o excede el tamaño</h3>

			<div class="text-center"> 
           <a class="btn btn-danger" href="buscarh.php" role="button">
              Volver a las habitaciones
            </a>
               </div>

		</div>
	</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
