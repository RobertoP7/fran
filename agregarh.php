<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['username']) {
  header("Location:index.php");
}


require 'code/conexion.php';
require 'code/count.php'
?>

<html>
<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/style.css">
  <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.slim.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

  <!--Script para para validar datos vacios-->




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


      <!-- formulario de registro -->

      <form id="formguardar" class="text-center border border-light p-5"  method="POST" action="code/guardar.php" enctype="multipart/form-data">

        <p class="h4 mb-4">Habitación nueva</p>
        <!--PRECIO-->
        <div class="text-left">
          <label for="precio">Precio:</label>
        </div>
        <div class="form-row mb-4">

          <div class="col">

            <input type="text" id="precio" name="precio" class="form-control" placeholder="Precio de la habitacion">
          </div>

        </div>
        <!--FIN PRECIO-->

        <br>
        <!--numero-->
       <div class="text-left">
          <label for="numero">Número de habitación:</label>
        </div>
        <div class="form-row mb-4">

          <div class="col">
        <?php
         //sumamos el numero de habitaciones que tenemos +1
        $n= $row+1;
            ?>
            <input value="<?php echo "$n" ?>" type="text" id="numero" name="numero" class="form-control" readonly>
          </div>

        </div>
        <!--fin numero-->

        <div class="form-row">

          <!-- tipo -->
          <div class="text-left">
            <label for="tipo">Tipo:</label>
          </div>
          <select class="form-control"  id="tipo" name="tipo"  required>
           <option value="Deluxe">Deluxe</option>
           <option  value="Familiar">Familiar</option>
           <option value="Individual"  >Individual</option>
           <option value="Matrimonial">Matrimonial</option>
         </select>

       </div>
       <br>

       <!--Servicios-->
       <div class="form-group">
        <div class="text-left">
          <label for="servicios">Servicios:</label>
        </div>
        <textarea class="form-control" id="servicios" name="servicios" rows="4" ></textarea>
      </div>
      <!--descripcion-->
      <div class="form-group">
        <div class="text-left">
          <label for="descripcion">Descripción:</label>
        </div>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="4" ></textarea>
      </div>

      <br>
      <!--solicitar foto de banios-->

      <div class="form-group">
       <div class="text-left">
        <label for="archivo" class="col-sm-2 control-label">Foto para baños:</label>
      </div>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="archivo" name="archivo">
      </div>
    </div>
    <!--fin-->
    <br>
    <!--solicitar foto de camas-->

    <div class="form-group">
     <div class="text-left">
      <label for="archivodos" class="col-sm-2 control-label">Foto para cama:</label>
    </div>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="archivodos" name="archivodos">
    </div>
  </div>

  <!--fin camas-->
  <br>
  <!--solicitar foto de espacio-->

  <div class="form-group">
   <div class="text-left">
    <label for="archivotres" class="col-sm-2 control-label">Foto de espacio:</label>
  </div>
  <div class="col-sm-10">
    <input type="file" class="form-control" id="archivotres" name="archivotres">
  </div>
</div>

<!--fin espacio-->


<br>
<br>

<!--Botones-->
<div class="container">
  <div class="row">

    <div class="col">
      <button  type="submit" class="btn btn-info">Guardar</button>
    </div>
    <div class="col">
     <a href="buscarh.php" class="btn btn-danger" role="button">Cancelar</a>
   </div>
 </div>
</div>

<!--fin Botones-->


<hr>

<!-- empresa -->
<p align="center">
  <em>uHotel</em>
</p>

<!--Validacion de los datos-->
<script type="text/javascript">

  $(document).ready(function(){
    $("#formguardar").submit(function() {
      var p = $("#precio").val();
      var n = $("#numero").val();
      var s = $("#servicios").val();
      var d= $("#descripcion").val();
      if ((p=="")||(n=="")||(s=="")||(d=="")||(p.length!=p.length)) {
        alert("OJO CON ESO: Verifica que ningun campo este en blanco o verifica la información");   
        return false;
      } else 
      return true;      
    });
  });
</script> <!-- fin Validacion de los datos-->



</form>
<!-- fin de form -->



</div>
</div>

<!--fin content pagina-->


</body>

</html>