<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['username']) {
  header("Location:index.php");
}
?>


<html>
<head>
  <meta charset="utf-8">
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/style.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    
  <title>uHotel</title>
 </head>

<body>
<!--Llamado a la sidebar-->
  <div class="wrapper">
    <?php include "vistas/barra.php"; ?>
    <!--fin sidebar-->

    <!-- contenido de pag -->
    <div class="container">

      <!-- llamado al boton de nav(menu) -->
      <?php include "vistas/nav.php" ?>
      <!-- fin menu nav-->

     <!--Carousel--->

<center><h1> Página de Inicio</h1></center> 
<br>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img3.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  <!--fin Carousel--->





    </div>  <!--fin container-->
  </div>  <!--fin wrapper-->

 


   

 
</body>

</html>