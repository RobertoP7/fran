<?php

$sql = "SELECT * FROM habitaciones WHERE id = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);


?>