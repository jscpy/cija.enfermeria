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
	<caption><h3 align="center" >Stock de Materiales de Curación</h3></caption>
	<thead>
		<tr>
			<th>#</th>
			<th>Concepto</th>
			<th>Presentación</th>
			<th>Lote</th>
			<th>Cantidad</th>
		</tr>
	</thead>
	<tbody>
<?php 
include 'conexion.php';

$sql = "SELECT * FROM mtes_curacion";

$resultado = $conexion->query($sql);

while ($row = $resultado->fetch_object() ) {

		echo "<tr class='info' >
				<td>$row->id_curacion</td>
				<td>$row->concepto</td>
				<td>$row->presentacion</td>
				<td>$row->lote</td>
				<td>$row->cantidad</td>
			<tr/>";
}

$resultado->close();
mysqli_close($conexion);

?>
	</tbody>
</table>
</div>
