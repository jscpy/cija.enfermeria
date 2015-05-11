<div class="row">
<div class="col-md-4 col-md-offset-4"> 
	<div class="input-group">
		<span class="input-group-addon">
			<span class="glyphicon glyphicon-search"></span>
		</span>
    	<input type="text" class="form-control" placeholder="Buscar..." id="buscar">
  	</div>
  	<center>
  		<br>
  		<button class="btn btn-default" data-toggle="modal" data-target="#StockModal">Movimiento</button>
  	</center>
</div>
</div>

<br/>
<div class="table-responsive">
<table class="table table-bordered table-hover" id="tabla">
	<caption><h3 align="center" >Stock de Medicinas</h3></caption>
	<thead>
		<tr>
			<th>#</th>
			<th>Concepto</th>
			<th>Presentación</th>
			<th>Unidad Medida</th>
			<th>Lote</th>
			<th>Caducidad</th>
			<th>Cantidad</th>
			<th>Salidas del Mes</th>
			<th>Total</th>
		</tr>
	</thead>
	<tbody>
<?php 
$tiempo = date("Y-m-d");

include 'conexion.php';

$sql = "SELECT id_medicina,concepto,presentacion,unidad_medida,lote,caducidad,cantidad,salida,total 
			FROM medicina,movimiento 
			WHERE medicina.id_medicina = movimiento.medicamento AND total > 0
			ORDER BY id_medicina";

$resultado = $conexion->query($sql);

while ($row = $resultado->fetch_object() ) {

	$fecha_caducidad = $row->caducidad;
	$caducidad = str_replace("/","-", $fecha_caducidad);

	$caducidad = strtotime($fecha_caducidad);
	$ahora = strtotime($tiempo);

	$tiempo_vida = $caducidad - $ahora;
	$tiempo_vida = round(($tiempo_vida/3600)/24);

	if ($tiempo_vida < 90 || $tiempo_vida < 95) {

		echo "<tr class='danger'>
				<td>$row->id_medicina</td>
				<td>$row->concepto</td>
				<td>$row->presentacion</td>
				<td>$row->unidad_medida</td>
				<td>$row->lote</td>
				<td>$row->caducidad</td>
				<td>$row->cantidad</td>
				<td>$row->salida</td>
				<td> <strong>$row->total </strong> </td>
			<tr/>";
	}

	elseif ($tiempo_vida < 180 || $tiempo_vida < 185) {

		echo "<tr class='warning'>
				<td>$row->id_medicina</td>
				<td>$row->concepto</td>
				<td>$row->presentacion</td>
				<td>$row->unidad_medida</td>
				<td>$row->lote</td>
				<td>$row->caducidad</td>
				<td>$row->cantidad</td>
				<td>$row->salida</td>
				<td> <strong>$row->total </strong> </td>
			<tr/>";
	}
	
	else {

		echo "<tr class='info'>
				<td>$row->id_medicina</td>
				<td>$row->concepto</td>
				<td>$row->presentacion</td>
				<td>$row->unidad_medida</td>
				<td>$row->lote</td>
				<td>$row->caducidad</td>
				<td>$row->cantidad</td>
				<td>$row->salida</td>
				<td> <strong>$row->total </strong> </td>
			<tr/>";
	}
}

$resultado->close();
mysqli_close($conexion);

?>
	</tbody>
	</table>
</div>
<?php 
include 'modal_update.php';
include 'modal_edit.php';
include 'modal_delete.php';
?>