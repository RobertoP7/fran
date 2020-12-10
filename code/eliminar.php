<?php
require "conexion.php";

	$id = $_GET['id'];
	
	$sql = "DELETE FROM habitaciones WHERE id = '$id'";
	$resultado = $mysqli->query($sql);

	 header('Location: ../buscarh.php');


?>