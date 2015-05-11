<?php 

/*
Modulo: enfermeria
Formulario: new.php
*/

include "../../conexion.php";

//Datos del Formulario
$concepto        = $_POST['concepto'];
$presentacion    = $_POST['presentacion'];
$unidad_medida   = $_POST['unidad_medida'];
$lote            = $_POST['lote'];
$fecha_caducidad = $_POST['fecha_caducidad'];
$cantidad        = $_POST['cantidad'];
$fecha_ingreso   = date("Y-m-d");

//Verificar Fecha de Ingreso
$ingreso = str_replace("/","-", $fecha_ingreso);
$caducidad = str_replace("/","-", $fecha_caducidad);

//Se transforma la fecha a unidades de tiempo (segundos)
$ingreso   = strtotime($fecha_ingreso);
$caducidad = strtotime($fecha_caducidad);

/*
Se hace la comparación de las siguientes variables:
	Si el ingreso del medicamento (fecha actual) 
		es menor o igual a
			la caducidad registrada en el formulario 
				entonces
					se redirige a una pagina de error.
				sino se realiza las acciones correspondiente.
*/

if ($ingreso >= $caducidad) {
	
	header("Location:http://localhost/CIJ/enfermeria/error.php");
}

else {

	//Tabla: Medicina
	$sql = "INSERT INTO medicina VALUES(
				NULL,'$concepto','$presentacion','$unidad_medida','$lote','$fecha_caducidad',$cantidad,'$fecha_ingreso'
			)";

	if ($conexion->query($sql) === TRUE) {

		//Se obtiene Id del medicamento más reciente
		$id_medicina = "SELECT id_medicina FROM medicina ORDER BY id_medicina DESC LIMIT 1";
		$resultado   = $conexion->query($id_medicina);
		$row         = $resultado->fetch_object();
		$medicina    = $row->id_medicina;

		//Tabla: Movimiento
		$movimiento = "INSERT INTO movimiento VALUES (NULL,$medicina,DEFAULT,$cantidad)";
		$conexion->query($movimiento);

		header("Location:http://localhost/CIJ/enfermeria/exito.php");
	}

	else {

		header("Location:http://localhost/CIJ/enfermeria/error.php");
	}
}

mysqli_close($conexion);

?>