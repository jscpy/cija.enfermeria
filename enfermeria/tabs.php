<div role="tabpanel" class="tab-pane active" id="medicamentos">
	<br/>
	<div role="tabpanel">
		<!-- Medicamento tabs -->
		<ul class="nav nav-pills" role="tablist">
			<li role="presentation" class="active"><a href="#new_medicamneto" aria-controls="new_medicamneto" role="tab" data-toggle="tab">Nuevo</a></li>
			<li role="presentation"><a href="#show_medicamento" aria-controls="show_medicamento" role="tab" data-toggle="tab">Mostrar</a></li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="new_medicamneto">
				<?php include 'medicamentos/new.php' ;?>
			</div>
			<div role="tabpanel" class="tab-pane" id="show_medicamento">
				<?php include 'medicamentos/show.php' ;?>
			</div>
		</div>
	</div>
</div>