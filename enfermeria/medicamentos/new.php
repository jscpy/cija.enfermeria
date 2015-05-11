<br/><br/><br/>
<form class="form-horizontal" action="/CIJ/enfermeria/medicamentos/crud/store.php" method="POST" accept-charset="utf-8" id="medicinaForm">
	<div class="form-group">
		<label class="col-sm-2 control-label" for="concepto">Concepto</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" name="concepto" placeholder="Paracetamol" onkeyup = 'this.value = this.value.toUpperCase()'>	
		</div>

		<label class="col-sm-1 control-label" for="presentacion">Presentación</label>
		<div class="col-sm-3">
			<select class="form-control" name="presentacion">
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
			<input type="text" class="form-control" name="unidad_medida" placeholder="400 g" onkeyup = 'this.value = this.value.toUpperCase()'>
		</div>

		<label class="col-sm-2 control-label" for="lote">Lote</label>
		<div class="col-sm-3" >
			<input type="text" class="form-control" name="lote" placeholder="AA1000" onkeyup = 'this.value = this.value.toUpperCase()'>
		</div>
	</div>

	<div class="form-group">
			<label class="col-sm-2 control-label" for="fecha_caducidad">Caducidad</label>
			<div class="col-sm-3">
				<input class="form-control" type="text" name="fecha_caducidad" id="fecha_caducidad" placeholder="YYYY/MM/DD">
			</div>

			<label class="col-sm-2 control-label" for="cantidad">Cantidad</label>
			<div class="col-sm-2">
				<input class="form-control" type="text" name="cantidad" placeholder="10">
			</div>
	</div>
<br/><br/>
	<div class="form-group">
		<center>
			<button class="btn btn-primary" type="submit" >Guardar</button>
		</center>
	</div>
</form>