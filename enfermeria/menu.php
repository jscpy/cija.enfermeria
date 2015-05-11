<?php 
include 'conexion.php';
include 'session.php';
include 'header.php';
?>
<div role="tabpanel">
  <!-- Navegación Principal -->
  	<?php include 'navbar_tipo.php';?>
  
  <!-- Menús principales -->
  <div class="tab-content">
	<?php include 'tabs_tipo.php';?>
  </div>
</div>
<?php
include 'footer.php';
?>