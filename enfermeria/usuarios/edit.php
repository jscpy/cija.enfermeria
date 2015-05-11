<?php 
	include '../header.php';
	include "../conexion.php";
	$id_usuario = $_POST['id_usuario'];
	$sql        = "SELECT * FROM usuario WHERE id_usuario = $id_usuario";
	$resultado  = $conexion->query($sql);
	$row        = $resultado->fetch_object();
?>
<br/><br/><br/>
<form class="form-horizontal" action="/CIJ/enfermeria/usuarios/crud/update.php" method="POST" accept-charset="utf-8" id="userForm">
	<div class="form-group">
		<label class="col-sm-3 control-label" for="nombre">Nombre Completo</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" name="nombre" onkeyup = 'this.value = this.value.toUpperCase()' value="<?php echo $row->nombre_completo; ?>" >
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" for="username">Usuario</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" name="username" value="<?php echo $row->username; ?>" readonly="true">	
		</div>

		<label class="col-sm-1 control-label" for="password">Contraseña</label>
		<div class="col-sm-2">
			<input type="password" class="form-control" name="password" value="<?php echo $row->password; ?>">
		</div>

		<label class="col-sm-1 control-label" for="tipo">Privilegios</label>
		<div class="col-sm-2">
			<select class="form-control" name="tipo">
				<option value="<?php echo $row->privilegios; ?>"> <?php echo $row->privilegios; ?> </option>
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
<?php include "../footer.php"; ?>
