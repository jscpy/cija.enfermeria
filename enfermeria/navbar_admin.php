  <!-- Navegación Principal -->
<ul class="nav nav-tabs nav-justified" role="tablist">
  <li role="presentation" class="active">
    <a href="#medicamentos" aria-controls="medicamentos" role="tab" data-toggle="tab">
      <img src="/CIJ/static/images/pildora.png">  Medicamentos</a>
  </li>
  <li role="presentation">
    <a href="#mtes_curacion" aria-controls="mtes_curacion" role="tab" data-toggle="tab">
      <img src="/CIJ/static/images/maletin.png">  Mtes. de Curación</a>
  </li>
  <li role="presentation">
    <a href="#inventarios" aria-controls="inventarios" role="tab" data-toggle="tab">
      <img src="/CIJ/static/images/inventario.png">  Inventarios</a>
  </li>
  <li role="presentation">
    <a href="#usuarios" aria-controls="usuarios" role="tab" data-toggle="tab">
      <img src="/CIJ/static/images/user.png">  Usuarios</a>
  </li>
  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
    <?php echo $_SESSION['username']; ?>
    <span class="caret"></span>
    </a>
    <ul class="dropdown-menu" role="menu">
      <li><a href="logout.php">Salir</a></li>
    </ul>
  </li>
</ul>