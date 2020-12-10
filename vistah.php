


<?php


session_start();
if (@!$_SESSION['username']) {
  header("Location:index.php");
}



require 'code/conexion.php';
$id = $_GET['id'];
require 'code/selectdata.php'
?>



<!DOCTYPE html>
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

      <!--inico row-->
      <div class="row">


       <div class="card-deck">
        <!--dentro de cada card esta el code que busca la imagen segun el id-->
        <div class="card">
          <?php 
          $path = "banos/".$id;
          if(file_exists($path)){
            $directorio = opendir($path);
            while ($archivo = readdir($directorio))
            {
              if (!is_dir($archivo)){
                echo "<img src='banos/$id/$archivo' class='img-fluid card-img-top' alt='...'> ";
              }
            }
          }

          ?>
          <div class="card-body">
            <h5 class="card-title">Baños</h5>
            <p class="card-text">Baños con los que cuenta la habitación, esta foto hace referencia a las caracteristicas reales que posee la habitacion.</p>

          </div>
        </div>
        <div class="card">
          <?php 
          $path = "cama/".$id;
          if(file_exists($path)){
            $directorio = opendir($path);
            while ($archivo = readdir($directorio))
            {
              if (!is_dir($archivo)){



                echo "<img src='cama/$id/$archivo' class='img-fluid card-img-top' alt='...'> ";
              }
            }
          }

          ?>
          <div class="card-body">
            <h5 class="card-title">Camas</h5>
            <p class="card-text">Zona de descanso o para dormir que posee la habitación.</p>

          </div>
        </div>

        <div class="card">
          <?php 
          $path = "espacio/".$id;
          if(file_exists($path)){
            $directorio = opendir($path);
            while ($archivo = readdir($directorio))
            {
              if (!is_dir($archivo)){



                echo "<img src='espacio/$id/$archivo' class='img-fluid card-img-top' alt='...'> ";
              }
            }
          }

          ?>
          <div class="card-body">
            <h5 class="card-title">Espacio disponible</h5>
            <p class="card-text">Estos son las partes donde el huesped puede movilizarse dentro de la habitacion, el espacio con el que cuenta.</p>

          </div>
        </div>
      </div>

      <!--fin card deck-->

      <div class="line"></div>
      <!--tipo de habitacion-->
      <h2>Habitación <?php echo $row['tipo']; ?> </h2>
      <!--fin tipo de habitacion-->


      <div class="line"></div>
      <!--numero de la habitacion sacado de la bd-->
      <h2>Habitacion #: <?php echo $row['numero'];  ?> </h2>
      <p>Numero de la habitación este número debe hacer referencia a la clasificacion de las habitaciones
       que posee el hostal, por lo tanto, el numero que se visualiza arriba es de la habitación <?php echo $row['numero'];  ?> .</p>

       <!--fin numero de la habitacion sacado de la bd-->
       

       <div class="line"></div>
       <!--precio leido de una bd-->
       <h2>Precio: <?php echo $row['precio']; ?>$</h2>
       <p>Este precio hace referencia a la estadia de un cliente durante un periodo de un dia, se debe tomar en cuenta que dicho
       precio puede cambiar dependiendo de la fecha del año u otras cirscuntancias.</p>

       <!--fin precio leido de una bd-->


       

       

       <div class="line"></div>

       <!--servicios de habitacion-->
       <h2>Servicios: </h2>
       <p><?php echo $row['servicios']; ?></p>
       <!--servicios de habitacion-->


       <div class="line"></div>

       <!--descripcion de habitacion-->
       <h2>Descripción: </h2>
       <p><?php echo $row['descripcion']; ?></p>
       <!--descripcion de habitacion-->

     </div>
     <!--fin row-->

     <br>
     <br>
     <br>

     <!--Botones para accionar modal-->
     <div class="container">
      <div class="row">
        <div class="col">
          <button type="button" class="btn btn-primary">Reservar Habitación</button>
        </div>

        <div class="col">
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editar">Editar Habitación</button>
       </div>

       <div class="col">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminar">Eliminar Habitación</button>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <!--fin Botones para accionar modal-->

  <!--modal de edicion-->



  <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edición de habitaciones</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


          <!-- formulario de registro modal editar-->
          <form  id="formeditar" class="text-center border border-light p-5"  method="POST" action="code/editar.php" enctype="multipart/form-data">

            <p class="h4 mb-4">Editando Habitación <?php echo $row['numero']; ?></p>
            <!--PRECIO-->
            <div class="text-left">
              <label for="precio">Precio:</label>
            </div>
            <div class="form-row mb-4">

              <div class="col">

                <input type="text" id="precio" value="<?php echo $row['precio']; ?>" name="precio" class="form-control" placeholder="Precio de la habitacion">
              </div>

            </div>
            <!--FIN PRECIO-->

            <!--identificador-->

            <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
            <!--fin identificador-->

            <div class="form-row">

              <!-- tipo -->
              <div class="text-left">
                <label for="tipo">Tipo:</label>
              </div>
              <select class="form-control"  id="tipo" name="tipo"  required>
               <option value="Deluxe" <?php if($row['tipo']=='Deluxe') echo 'selected'; ?>>Deluxe</option>
               <option value="Familiar" <?php if($row['tipo']=='Familiar') echo 'selected'; ?>>Familiar</option>
               <option value="Individual" <?php if($row['tipo']=='Individual') echo 'selected'; ?>>Individual</option>
               <option value="Matrimonial" <?php if($row['tipo']=='Matrimonial') echo 'selected'; ?>>Matrimonial</option>
             </select>

           </div>  <!-- fin tipo -->

           <br>
           <!-- estado -->
           <div class="text-left">
            <label for="estado">Estado:</label>
          </div>
          <select class="form-control"  id="estado" name="estado"  required>
           <option value="Disponible" <?php if($row['estado']=='Disponible') echo 'selected'; ?>>Disponible</option>
           <option value="Ocupado">Ocupado</option>
         </select><!-- fin estado -->

      

      <br>
       <!--Servicios-->

       <div class="text-left">
        <label for="servicios">Servicios:</label>
      </div>
      <div class="form-row mb-4">

        <div class="col">

          <input type="text" id="servicios" value="<?php echo $row['servicios']; ?>" name="servicios" class="form-control" placeholder="Servicios" rows="4" >
        </div>

      </div>
      <!--FIN servicios-->

      <!--descripcion-->
      <div class="text-left">
        <label for="descripcion">Descripción:</label>
      </div>
      <div class="form-row mb-4">

        <div class="col">

          <input type="text" id="descripcion" value="<?php echo $row['descripcion']; ?>" name="descripcion" class="form-control" placeholder="Descripcion" rows="4">
        </div>

      </div>


      <!--Botones-->
      <div class="container">
        <div class="row">

          <div class="col">
            <button type="submit" class="btn btn-info">Guardar</button>
          </div>
          <div class="col">
           <a href="" class="btn btn-danger" data-dismiss="modal" role="button">Cancelar</a>
         </div>
       </div>
     </div>

     <!--fin Botones-->


     <hr>

     <!--Validacion de los datos-->
     <script type="text/javascript">

      $(document).ready(function(){
        $("#formeditar").submit(function() {
          var p = $("#precio").val();
          var s = $("#servicios").val();
          var d= $("#descripcion").val();
          var e= $("#estado").val();
          if ((p.length==0)||(s.length==0)||(d.length==0)||(e.length==0)) {
            alert("OJO CON ESO: Verifica que ningun campo este en blanco");   
            return false;
          } else 
          return true;      
        });
      });
    </script> <!-- fin Validacion de los datos-->
  </form>
  <!-- fin de form modal editar -->
</div>

</div>
</div>
</div>




<!-- fin modal de edicion-->




<!--Modal de eliminacion-->

<div id="eliminar" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">OJO CON ESO:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h2>¿Seguro que deseas eliminar la habitacion <?php echo $row['numero']; ?> de forma permanente? </h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <?php echo '<a href="code/eliminar.php?id='.$row["id"].'" class="btn btn-danger">Eliminar registro</a>';?>

      </div>
    </div>
  </div>
</div>

<!--fin modal eliminacion-->


<!--fin Botones-->
<br>
<br>
<br>
<br>

</div>
</div>

<!--fin content pagina-->


</body>

</html>