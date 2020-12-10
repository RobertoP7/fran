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
  
  <script type="text/javascript">
    $(document).ready(function () {
     (function($) {
       $('#FiltrarContenido').keyup(function () {
        var ValorBusqueda = new RegExp($(this).val(), 'i');
        $('.BusquedaRapida tr').hide();
        $('.BusquedaRapida tr').filter(function () {
          return ValorBusqueda.test($(this).text());
        }).show();
      })
     }(jQuery));
   });
 </script> 

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

      <!--row tabla de busqueda-->
      <div class="row">
        <div class="col-lg-12">
          <div class="page-header">
            <h1>Busqueda:</h1>
          </div>
          <p>Puedes filtrar la informacion que deseas buscar</p>
        </div>
      </div>
 <!--Busqueda-->
      <form class="form-inline">
        <div class="form-group mb-2">

        </div>
        <div class="form-group mx-sm-3 mb-2">
          <label for="FiltrarContenido" class="sr-only">Busqueda</label>
          <input id="FiltrarContenido" type="text" class="form-control"  placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Buscar</button>
      </form>  <!--fin Busqueda-->

      <!--boton izquierdo-->
      <div class="text-right"> 
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">¿Cómo buscar?</button>
      </div>
      <!--fin boton izquierdo-->

     
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Indicaciones</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Puedes filtrar la información mediante las caracteristicas de la habitación, puedes buscar por precio, tipo, estado
              o numero, recuerda ser especifico en tu busqueda para obtener los resultados que deseas
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div> <!--fin modal-->


      <div class="line"></div>

      

      <!--tabla-->

      <?php include "code/tabla.php"; ?>
      <!--fin tabla-->


      <!--fin row y tabla-->
    </div>
  </div>

  <!--fin content pagina-->


</body>

</html>