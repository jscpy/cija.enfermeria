<div class="row">
<div class="col-md-4 col-md-offset-4"> 
	<div class="input-group">
		<span class="input-group-addon">
			<span class="glyphicon glyphicon-search"></span>
		</span>
    	<input type="text" class="form-control" placeholder="Buscar..." id="buscar">
  	</div>
</div>
</div>

<br/>
<div class="table-responsive">
<table class="table table-bordered table-hover" id="tabla">
	<caption><h3 align="center" >Stock de Medicinas Agotadas</h3></caption>
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
			WHERE medicina.id_medicina = movimiento.medicamento AND total = 0
			ORDER BY id_medicina";

$resultado = $conexion->query($sql);

while ($row = $resultado->fetch_object() ) {

	$fecha_caducidad = $row->caducidad;
	$caducidad = str_replace("/","-", $fecha_caducidad);

	echo "<tr>
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

$resultado->close();
mysqli_close($conexion);
?>
	</tbody>
</table>
</div>
