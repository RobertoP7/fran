

<?php

$sql = "SELECT  numero FROM habitaciones ORDER BY numero";
$resultado = $mysqli->query($sql);
 $row = mysqli_num_rows($resultado);


?>