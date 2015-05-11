<div role="tabpanel" class="tab-pane active" id="medicamentos">
<br/>
	<div role="tabpanel">
	<!-- Medicamento tabs -->
		<ul class="nav nav-pills" role="tablist">
			<li role="presentation" class="active"><a href="#new_medicamneto" aria-controls="new_medicamneto" role="tab" data-toggle="tab">Nuevo</a></li>
			<li role="presentation"><a href="#show_vigentes" aria-controls="show_vigentes" role="tab" data-toggle="tab">Vigentes</a></li>
			<li role="presentation"><a href="#show_agotados" aria-controls="show_agotados" role="tab" data-toggle="tab">Agotados</a></li>
			<li role="presentation"><a role="button" data-toggle="modal" data-target="#MedModal">Editar</a></li>
			<li role="presentation"><a role="button" data-toggle="modal" data-target="#DelMedModal">Borrar</a></li>
		</ul>
		<!-- Tab panel -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="new_medicamneto">
				<?php include 'medicamentos/new.php' ;?>
			</div>
			<div role="tabpanel" class="tab-pane" id="show_vigentes">
				<?php include 'medicamentos/show.php' ;?>
			</div>
			<div role="tabpanel" class="tab-pane" id="show_agotados">
				<?php include 'medicamentos/void.php' ;?>
			</div>
		</div>
	</div>
</div>

<div role="tabpanel" class="tab-pane" id="mtes_curacion">
<br/>
	<div role="tabpanel">
		<!-- Materiales de curación tabs -->
		<ul class="nav nav-pills" role="tablist">
			<li role="presentation" class="active"><a href="#new_mtes_curacion" aria-controls="new_mtes_curacion" role="tab" data-toggle="tab">Nuevo</a></li>
			<li role="presentation"><a href="#show_mtes_curacion" aria-controls="show_mtes_curacion" role="tab" data-toggle="tab">Mostrar</a></li>
		</ul>
		<!-- Tab panel -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="new_mtes_curacion">
				<?php include 'mtes_curacion/new.php' ;?>
			</div>
			<div role="tabpanel" class="tab-pane" id="show_mtes_curacion">
				<?php include 'mtes_curacion/show.php' ;?>
			</div>
		</div>
	</div>
</div>

<div role="tabpanel" class="tab-pane" id="inventarios">
<br/>
	<div role="tabpanel">
		<!-- Inventario tabs -->
		<ul class="nav nav-pills" role="tablist">
			<li role="presentation" class="active"><a href="#new_medicamentos" aria-controls="new_medicamentos" role="tab" data-toggle="tab">Medicamentos</a></li>
			<li role="presentation"><a href="#edit_inventario" aria-controls="edit_inventario" role="tab" data-toggle="tab">Editar PDF</a></li>
		</ul>
		<!-- Tab panel -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="new_medicamentos">
				<?php include 'inventarios/medicamentos.php' ;?>
			</div>
			<div role="tabpanel" class="tab-pane" id="edit_inventario">
				<?php include 'inventarios/edit.php' ;?>
			</div>
		</div>
	</div>
</div>

<div role="tabpanel" class="tab-pane" id="usuarios">
<br/>
	<div role="tabpanel">
		<!-- Usuarios tabs -->
		<ul class="nav nav-pills" role="tablist">
			<li role="presentation" class="active"><a href="#new_usuario" aria-controls="new_usuario" role="tab" data-toggle="tab">Nuevo</a></li>
			<li role="presentation"><a href="#show_usuario" aria-controls="show_usuario" role="tab" data-toggle="tab">Mostrar</a></li>
			<li role="presentation"><a role="button" data-toggle="modal" data-target="#UserEditModal">Editar</a></li>
			<li role="presentation"><a role="button" data-toggle="modal" data-target="#UserDeleteModal">Borrar</a></li>
		</ul>
		<!-- Tab panel -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="new_usuario">
				<?php include 'usuarios/new.php' ;?>
			</div>
			<div role="tabpanel" class="tab-pane" id="show_usuario">
				<?php include 'usuarios/show.php' ;?>
			</div>
		</div>
	</div>
</div>