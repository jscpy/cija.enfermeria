<br/><br/><br/>
<form class="form-horizontal" action="/CIJ/enfermeria/inventarios/create_pdf.php" method="POST" accept-charset="utf-8" id="inventarioForm">
	<div class="form-group">
			<label class="col-sm-2 control-label" for="fecha_inicio">Fecha Inicio</label>
			<div class="col-sm-3">
				<input class="form-control" type="text" name="fecha_inicio" id="fecha_inicio" placeholder="YYYY/MM/DD">
			</div>

			<label class="col-sm-2 control-label" for="fecha_final">Fecha Final</label>
			<div class="col-sm-3">
				<input class="form-control" type="text" id="fecha_final" name="fecha_final" placeholder="YYYY/MM/DD">
			</div>
	</div>
<br/><br/>
	<div class="form-group">
		<center>
			<button class="btn btn-primary" type="submit" >Crear</button>
		</center>
	</div>
</form>