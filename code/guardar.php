<?php

include "conexion.php";
$predeterminado="Disponible";
$precio= $_POST['precio'];
$numero = $_POST['numero'];
$tipo = $_POST['tipo'];
$servicios= $_POST['servicios'];
$descripcion = $_POST['descripcion'];

//consulta para ver si ya existe la habitacion en la base de datos
 $sqldos = "SELECT * FROM habitaciones WHERE numero = '$numero'";
$resultado = $mysqli->query($sqldos);
 
 //verificamos si la habitacion exite con un condicional
 if( $resultado->fetch_array(MYSQLI_ASSOC) == 0){
// mysql_num_rows <- esta funcion me imprime el numero de registro que encontro 
// si el numero es igual a 0 es porque el registro no exidte, en otras palabras la habitacion no esta en la tabla habitaciones por lo tanto se puede registrar
 
$sql = "INSERT INTO habitaciones (precio, numero, tipo, estado, servicios, descripcion) VALUES ('$precio', '$numero', '$tipo', '$predeterminado', '$servicios', '$descripcion')";
$resultado = $mysqli->query($sql);
///tomamos el ultimo id insertado, osea el de la consulta anterior
//ese id, lo guardamos en la variable que nos ayudara a crear una carpeta unica por habitacion
//asi no se repiten fotos, cada foto se guarda en una carpeta distinta, segun su id en la bd
$id_insert = $mysqli->insert_id;


///validacion de las fotos
if(($_FILES["archivo"]["error"]>0) && ($_FILES["archivodos"]["error"]>0) && ($_FILES["archivotres"]["error"]>0) ){

	$sql = "DELETE FROM habitaciones WHERE id = '$id_insert'";
	$resultado = $mysqli->query($sql);
	 header('Location: ../error.php');
} else {

	$permitidos = array("image/jpeg","image/gif","image/png","application/pdf");


	if((in_array($_FILES["archivo"]["type"], $permitidos)) && (in_array($_FILES["archivodos"]["type"], $permitidos)) && (in_array($_FILES["archivotres"]["type"], $permitidos))		 ){

		$ruta = '../banos/'.$id_insert.'/';
		$archivo = $ruta.$_FILES["archivo"]["name"];

		$rutados = '../cama/'.$id_insert.'/';
		$archivodos = $rutados.$_FILES["archivodos"]["name"];

		$rutatres = '../espacio/'.$id_insert.'/';
		$archivotres = $rutatres.$_FILES["archivotres"]["name"];



		if((!file_exists($ruta)) && (!file_exists($rutados)) && (!file_exists($rutatres))){
			mkdir($ruta);
			mkdir($rutados);
			mkdir($rutatres);
		}

		if((!file_exists($archivo)) && (!file_exists($archivodos)) && (!file_exists($archivotres)) ){

			$resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
			$resultadodos = @move_uploaded_file($_FILES["archivodos"]["tmp_name"], $archivodos);
			$resultadotres = @move_uploaded_file($_FILES["archivotres"]["tmp_name"], $archivotres);

			if(($resultado) && ($resultadodos) && ($resultadotres) ){
				///echo "Archivos Guardados";
			$idh= $id_insert;

                header('Location: ../vistah.php?id='.$id_insert.'');

			} else {

				$sql = "DELETE FROM habitaciones WHERE id = '$id_insert'";
	$resultado = $mysqli->query($sql);
				 header('Location: ../error.php');

			}

		} else {

			$sql = "DELETE FROM habitaciones WHERE id = '$id_insert'";
	$resultado = $mysqli->query($sql);
			 header('Location: ../error.php');
		}

	} else {

		$sql = "DELETE FROM habitaciones WHERE id = '$id_insert'";
	$resultado = $mysqli->query($sql);
		 header('Location: ../error.php');
	}

}


}//fin if que ve si ya esta la habitacion
else{
//caso contario (else) es porque esa havitacion ya esta registrada
 header('Location: ../error.php');
}







?>


