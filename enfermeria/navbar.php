  <!-- Navegación Principal -->
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active">
    <a href="#medicamentos" aria-controls="medicamentos" role="tab" data-toggle="tab">
      <img src="/CIJ/static/images/pildora.png">  Medicamentos</a>
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