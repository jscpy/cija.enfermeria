<?php 

include "conexion.php";

$sql_1 = "SELECT nombre_completo FROM usuario WHERE privilegios = 'alto' ";
$resultado = $conexion->query($sql_1);
$row = $resultado->fetch_object();

$administrador = $row->nombre_completo;

$sql_2 = "SELECT nombre_completo FROM usuario WHERE privilegios = 'bajo' ";
$resultado = $conexion->query($sql_2);
?>
<br/><br/><br/>
<form class="form-horizontal" action="/CIJ/enfermeria/inventarios/crud/update_pdf.php" method="POST" accept-charset="utf-8">
<div class="form-group">
	<label class="col-sm-2 control-label" for="administrador">Administrador</label>
		<div class="col-sm-4">
			<input class="form-control" type="text" name="administrador" id="administrador" value="<?php echo $administrador; ?>" readonly="true">
		</div>

	<label class="col-sm-2 control-label" for="enfermeria">Jefa de Enfermeria</label>
		<div class="col-sm-4">
			<select class="form-control" name="enfermeria">
		<?php
		while($row = $resultado->fetch_object())
		{
			echo "<option value='$row->nombre_completo'>$row->nombre_completo</option>";
		}
		?>
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