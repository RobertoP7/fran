<?php
	

	
	$mysqli = new mysqli('localhost', 'loki', '123', 'uhotel');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>