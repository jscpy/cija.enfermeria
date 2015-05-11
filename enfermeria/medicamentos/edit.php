<?php 
	include '../header.php';
	include "../conexion.php";
	$id_medicina = $_POST['id_medicina'];
	$sql = "SELECT * FROM medicina WHERE id_medicina = $id_medicina";
	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_object();

	$fecha_caducidad = $row->caducidad;
	$caducidad = str_replace("-","/", $fecha_caducidad);
?>
<br/>
<form class="form-horizontal" action="/CIJ/enfermeria/medicamentos/crud/update.php" method="POST" accept-charset="utf-8" id="medicinaForm">
	<div class="form-group">
		<label class="col-sm-2 control-label" for="concepto">Concepto</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" name="concepto" onkeyup = 'this.value = this.value.toUpperCase()'
			value="<?php echo $row->concepto; ?>">	
		</div>

		<label class="col-sm-1 control-label" for="presentacion">Presentación</label>
		<div class="col-sm-3">
			<select class="form-control" name="presentacion">
				<option value="<?php echo $row->presentacion; ?>"><?php echo $row->presentacion; ?></option>
				<option value="TABLETAS">Tabletas</option>
				<option value="TABLETAS RECUBIERTAS">Tabletas Recubiertas</option>
				<option value="SUSPENSION">Suspensión</option>
				<option value="SUSPENSION AEROSOL">Suspensión Aerosol</option>
				<option value="GRAGEAS">Grageas</option>
				<option value="CAPSULAS">Capsulas</option>
				<option value="COMPRIMIDOS">Comprimidos</option>
				<option value="CREMA">Crema</option>
				<option value="FRASCO">Frasco</option>
				<option value="SOL. INYECTABLE">Solución Inyectable</option>
				<option value="PIEZA">Pieza</option>
			</select>	
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" for="unidad_medida">Unidad de Medida</label>
		<div class="col-sm-3">
			<input type="text" class="form-control" name="unidad_medida" onkeyup = 'this.value = this.value.toUpperCase()'
			value="<?php echo $row->unidad_medida; ?>">
		</div>

		<label class="col-sm-2 control-label" for="lote">Lote</label>
		<div class="col-sm-3" >
			<input type="text" class="form-control" name="lote" value="<?php echo $row->lote; ?>" onkeyup = 'this.value = this.value.toUpperCase()'>
		</div>
	</div>

	<div class="form-group">
			<label class="col-sm-2 control-label" for="fecha_caducidad">Caducidad</label>
			<div class="col-sm-3">
				<input class="form-control" type="text" name="fecha_caducidad" id="fecha_caducidad" value="<?php echo $caducidad ?>">
			</div>

			<label class="col-sm-2 control-label" for="cantidad">Cantidad</label>
			<div class="col-sm-2">
				<input class="form-control" type="text" name="cantidad" value="<?php echo $row->cantidad; ?>">
			</div>
	</div>
<br/><br/>
	<div class="form-group">
		<center>
			<button class="btn btn-primary" type="submit" >Guardar</button>
		</center>
	</div>
</form>
<?php include "../footer.php"; ?>
