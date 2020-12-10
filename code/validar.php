
<?php



session_start();
	include "conexion.php";

	$username=$_POST['username'];
	$pass=$_POST['password'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");



//verifico si el usuario existo, y lo comparo en la bd, con el valor de username que me manda index.php
   
	$sql2=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE username='$username'");
 $md5pass = md5($pass);
	if($f2=mysqli_fetch_assoc($sql2)){

		if($md5pass==$f2['password']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['username']=$f2['username'];
			

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='../inicio.php'</script>";
		
		}
	}


	else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='../index.php'</script>";	

	}

?>