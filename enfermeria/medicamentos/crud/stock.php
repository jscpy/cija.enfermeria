<?php 
/*
Modulo: enfermeria
Formulario: stock.php
*/

include "../../conexion.php";

$medicina        = $_POST['id_medicina'];
$salida_nuevo    = $_POST['salida'];

$sql_movimiento  = "SELECT salida, total FROM movimiento WHERE medicamento = $medicina";
$resultado       = $conexion->query($sql_movimiento);
$row_movimiento  = $resultado->fetch_object();

$salida_anterior = $row_movimiento->salida;
$total           = $row_movimiento->total;

if ($salida_nuevo > $total) {

	header("Location:http://localhost/CIJ/enfermeria/menu.php");
	
}

else {

	$salida = $salida_nuevo + $salida_anterior;
	$total  = $total - $salida_nuevo;

	$sql    = "UPDATE movimiento SET salida = $salida, total = $total  WHERE medicamento = $medicina";

	if ($conexion->query($sql) === TRUE) {

		header("Location:http://localhost/CIJ/enfermeria/menu.php");

	}
}
mysqli_close($conexion);
?>