<?php 

/*
Modulo: enfermeria
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

	//Cantidad anterior
	$sql_cantidad      = "SELECT id_medicina, cantidad FROM medicina WHERE lote = '$lote'";
	$resultado         = $conexion->query($sql_cantidad);
	$row               = $resultado->fetch_object();
	$cantidad_anterior = $row->cantidad;
	$medicina          = $row->id_medicina;

	//Actualizando valores del medicamento
	$sql = "UPDATE medicina 
		SET concepto = '$concepto', presentacion = '$presentacion', unidad_medida = '$unidad_medida',
			lote = '$lote', caducidad = '$fecha_caducidad', cantidad = $cantidad 
		WHERE lote = '$lote'";

	if ($conexion->query($sql) === TRUE) {
		
		$sql_total = "SELECT total FROM movimiento WHERE medicamento = $medicina";
		$resultado = $conexion->query($sql_total);
		$row       = $resultado->fetch_object();
		$total     = $row->total;

		$total_nuevo = $total + ($cantidad - $cantidad_anterior);

		//Tabla: Movimiento
		$movimiento = "UPDATE movimiento SET total = $total_nuevo WHERE medicamento = $medicina";
		$conexion->query($movimiento);

		header("Location:http://localhost/CIJ/enfermeria/exito.php");
	}

	else {

		header("Location:http://localhost/CIJ/enfermeria/error.php");
	}
}

mysqli_close($conexion);

?>