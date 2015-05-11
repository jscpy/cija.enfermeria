<?php
/*
	Archivo: index.php
	Formulario: login.php
	Decripcion: Obtiene el nombre de usuario y contraseña y se compara con los usuarios registrados de la BD.
*/

//Variable que imprime un mensaje de error en login.php
$error = "";

if (isset($_POST['submit'])) {

	//Si uno o ambos campos del usuario y contraseña estan vacios se muestra un mensaje de error.
	if (empty($_POST['username']) || empty($_POST['password'])) {

		$error = "Usuario o Contraseña Incorrecto";
	}
	
	else {
		
		//Se obtienen los datos del formulario.
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		//Se incluye la conexion de la BD.
		include "conexion.php";

		// Protecccion para MySQL injection
		$username = stripslashes($username);
		$password = stripslashes($password);
		
		$username = mysqli_real_escape_string($conexion, $username );
		$password = mysqli_real_escape_string($conexion, $password);

		//Query para obtener al usuario que intenta logearse
		$sql = "SELECT * FROM usuario WHERE password = '$password' AND username = '$username'";
		$resultado = $conexion->query($sql);
		$row = mysqli_num_rows($resultado);
		
			if ($row == 1) {

				$username = ucwords($username);
				session_start();
				$_SESSION['username'] = $username;
				header("Location:http://localhost/CIJ/enfermeria/menu.php");
			} 

			else {

				$error = "Usuario o Contraseña Incorrecto";
			}
		
		mysqli_close($conexion); // Closing Connection
		}
	}
?>