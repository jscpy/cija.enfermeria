<?php
/*
Modulo: enfermeria
Formulario: modal_edit.php
*/

include "../../conexion.php";

$nombre      = $_POST['nombre'];
$username    = $_POST['username'];
$password    = $_POST['password'];
$privilegios = $_POST['tipo'];

$sql  = "UPDATE usuario 
			SET nombre_completo = '$nombre', username = '$username', 
				password = '$password', privilegios = '$privilegios'
			WHERE username = '$username' ";

if ($conexion->query($sql) === TRUE) {

	header("Location:http://localhost/CIJ/enfermeria/exito.php");
}

else {
		
		header("Location:http://localhost/CIJ/enfermeria/error.php");
	}

mysqli_close($conexion);
?>
