<?php 

/*
Modulo: enfermeria
Formulario: new_cure.php
*/

include "../../conexion.php";

//Datos del Formulario
$concepto        = $_POST['concepto'];
$presentacion    = $_POST['presentacion'];
$lote            = $_POST['lote'];
$cantidad        = $_POST['cantidad'];

//Tabla: Medicina
$sql = "INSERT INTO mtes_curacion VALUES(
				NULL,'$concepto','$presentacion',$cantidad,'$lote' 
		)";

	if ($conexion->query($sql) === TRUE) {

		header("Location:http://localhost/CIJ/enfermeria/exito.php");
	}

	else {

		header("Location:http://localhost/CIJ/enfermeria/error.php");
	}

mysqli_close($conexion);

?>