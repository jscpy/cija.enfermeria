<br/><br/><br/>
<form class="form-horizontal" action="/CIJ/enfermeria/mtes_curacion/crud/store.php" method="POST" accept-charset="utf-8" id="curacionForm">
	<div class="form-group">
		<label class="col-sm-2 control-label" for="concepto">Concepto</label>
		<div class="col-sm-4">
			<input type="text" class="form-control" name="concepto" placeholder="Gasas" onkeyup = 'this.value = this.value.toUpperCase()'>	
		</div>

		<label class="col-sm-1 control-label" for="presentacion">Presentación</label>
		<div class="col-sm-3">
			<input type="text" class="form-control" name="presentacion" placeholder="10 x 10 cm" onkeyup = 'this.value = this.value.toUpperCase()'>	
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" for="cantidad">Cantidad</label>
		<div class="col-sm-2">
			<input class="form-control" type="text" name="cantidad" placeholder="10">
		</div>

		<label class="col-sm-3 control-label" for="lote">Lote</label>
		<div class="col-sm-3" >
			<input type="text" class="form-control" name="lote" placeholder="GAS200" onkeyup = 'this.value = this.value.toUpperCase()'>
		</div>
	</div>
<br/><br/>
	<div class="form-group">
		<center>
			<button class="btn btn-primary" type="submit" >Guardar</button>
		</center>
	</div>
</form>