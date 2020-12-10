<?php

include "conexion.php";

$id = $_POST['id'];
$precio= $_POST['precio'];
$estado= $_POST['estado'];
$tipo = $_POST['tipo'];
$servicios= $_POST['servicios'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE habitaciones SET precio='$precio', estado='$estado', tipo='$tipo', servicios='$servicios', descripcion='$descripcion' WHERE id = '$id'";
	$resultado = $mysqli->query($sql);

	header('Location: ../vistah.php?id='.$id);


?>