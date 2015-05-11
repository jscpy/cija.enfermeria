<?php
/*
Modulo: enfermeria
Formulario: .php
*/

include "../../conexion.php";
$grado    = $_POST['grado'];
$nombre   = $_POST['nombre'];
$username = $_POST['username'];
$password = $_POST['password'];
$tipo     = $_POST['tipo'];

$nombre = ucwords(strtolower($nombre));
$nombre_completo = $grado.$nombre;

$sql  = "INSERT INTO usuario VALUES (NULL,'$nombre_completo','$username','$password','$tipo',DEFAULT)";

if ($conexion->query($sql) === TRUE) {

	header("Location:http://localhost/CIJ/enfermeria/exito.php");
}

else {
		header("Location:http://localhost/CIJ/enfermeria/error.php");
	}

mysqli_close($conexion);
?>
