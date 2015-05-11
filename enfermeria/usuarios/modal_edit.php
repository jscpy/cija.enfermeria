<!-- Modal -->
<div class="modal fade" id="UserEditModal" tabindex="-1" role="dialog" aria-labelledby="labelUserEditModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<form class="form-inline" action="/CIJ/enfermeria/usuarios/edit.php" method="POST" accept-charset="utf-8" id="id_userForm">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="labelUserEditModal">Editar información del Usuario</h4>
			</div>
			<div class="modal-body">
			<center>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">#</span>
					<input type="text" class="form-control" name="id_usuario">
				</div>
			</div>
			</center>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Aceptar</button>
			</div>
		</form>
		</div>
	</div>
</div>