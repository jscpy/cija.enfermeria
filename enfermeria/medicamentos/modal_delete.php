<!-- Modal -->
<div class="modal fade" id="DelMedModal" tabindex="-1" role="dialog" aria-labelledby="labelDelMedModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<form class="form-inline" action="/CIJ/enfermeria/medicamentos/crud/delete.php" method="POST" accept-charset="utf-8" id="delmedForm">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="labelDelMedModal">Borrar información del Medicamento</h4>
			</div>
			<div class="modal-body">
			<center>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">#</span>
					<input type="text" class="form-control" name="id_medicina">
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