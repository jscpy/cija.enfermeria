<br/><br/><br/>
<form class="form-horizontal" action="/CIJ/enfermeria/usuarios/crud/store.php" method="POST" accept-charset="utf-8" id="userForm">
	<div class="form-group">
		<label class="col-sm-3 control-label" for="nombre">Nombre Completo</label>
		<div class="col-sm-2">
			<select class="form-control" name="grado">
				<option value="Lic. ">Lic</option>
				<option value="Enf. ">Enfermera</option>
				<option value="Dr. ">Doctor</option>
				<option value="TS. ">T.S.</option>
				<option value="C. ">N/A</option>
			</select>	
		</div>
		<div class="col-sm-5">
			<input type="text" class="form-control" name="nombre" onkeyup = 'this.value = this.value.toUpperCase()'>	
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" for="username">Usuario</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" name="username">	
		</div>

		<label class="col-sm-1 control-label" for="password">Contraseña</label>
		<div class="col-sm-2">
			<input type="password" class="form-control" name="password">	
		</div>

		<label class="col-sm-1 control-label" for="tipo">Privilegios</label>
		<div class="col-sm-2">
			<select class="form-control" name="tipo">
				<option value="bajo">Bajo</option>
				<option value="alto">Alto</option>
			</select>	
		</div>
	</div>
<br/><br/>
	<div class="form-group">
		<center>
			<button class="btn btn-primary" type="submit" >Guardar</button>
		</center>
	</div>
</form>