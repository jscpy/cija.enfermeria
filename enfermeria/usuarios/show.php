<div class="table-responsive">
<table class="table table-bordered table-hover">
	<caption><h3 align="center" >Usuarios Registrados</h3></caption>
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre Completo</th>
			<th>Usuario</th>
			<th>Privilegios</th>
		</tr>
	</thead>
	<tbody>
<?php 
include 'conexion.php';

$sql        = "SELECT id_usuario, nombre_completo, username, privilegios FROM usuario";
$resultado  = $conexion->query($sql);
while ($row = $resultado->fetch_object() ) {

		echo "<tr>
				<td>$row->id_usuario</td>
				<td>$row->nombre_completo</td>
				<td>$row->username</td>
				<td>$row->privilegios</td>
			<tr/>";
}

$resultado->close();
mysqli_close($conexion);

?>
	</tbody>
</table>
</div>
<?php
include 'modal_edit.php';
include 'modal_delete.php';
?>