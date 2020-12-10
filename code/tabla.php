 <!--tabla-->
 <div class="row">
  <div class="col-lg-12">
    <table class="table table-hover table-condensed">
      <thead>
        <tr>
         <th>Número</th>
         <th>Tipo</th>
         <th>Precio</th>
         <th>Estado</th>
       </tr>
     </thead>
     <tbody class="BusquedaRapida">
      <?php
    $e="";//almacenara el estado
    $conexion=mysqli_connect('localhost','root','','uhotel');
    $sql="SELECT * from habitaciones";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){ ;?>
      <tr>

        <td><?php echo $mostrar['numero'] ?></td>
        <td><?php echo $mostrar['tipo'] ?></td>
        <td><?php echo $mostrar['precio'] ?>$</td>
        <!--validacion del estado de la habitacion-->
        <?php $e= $mostrar['estado']; 
        switch ($e){
      case 'Disponible' : $color = 'green'; break;// colo verde para BMW
      case 'Ocupado' : $color = 'red'; break; // color amarillo y asi .....
    } 
    ?>

    <!--fin validacion del estado de la habitacion-->
    <td  style=" background-color:<?php echo $color ?>; color: #ffffff"><?php echo $mostrar['estado'] ?></td>
    <?php echo '<td><a href="vistah.php?id='.$mostrar["id"].'" class="btn btn-outline-primary">Ver habitacion';?>
  </tr>

<?php }?>          

</tbody>
</table>    
<!---->
<hr>
</div>
</div>
    