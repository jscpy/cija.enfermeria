<?php 
/*
	Archivo: index.php
	Descripcion: Formulario de entrada para el modulo de enfermeria
*/
	session_start();
	
	include 'login.php';

	if(isset($_SESSION['username'])){

		header("Location:http://localhost/CIJ/enfermeria/menu.php");
	}
	
	include "header.php"; 
?>

<div class="row">
	<div class="col-md-4 col-md-offset-4"> 
		<form class="form" role="form" method="POST" action="" accept-charset="utf-8">
		  <h2 align="center">Iniciar Sesión</h2>
		    <br/>
		    <div class="input-group input-group-lg" >
		        <span class="input-group-addon">
		            <span class="glyphicon glyphicon-user"></span> 
		        </span>
		            <input type="text" class="form-control" placeholder="Usuario" name='username' id='user'>
		    </div>
		    <div class="input-group input-group-lg" >
		        <span class="input-group-addon"> 
		            <span class="glyphicon glyphicon-lock"></span>
		        </span>
		            <input type="password" class="form-control" placeholder="Contraseña" name='password' id='passw'>
		    </div>
		<br/>
		    <button name="submit" type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
		</form>
		<br/>
		<center>
			<span class="error" >
				<?php echo "$error"; ?>
			</span>
		</center>
	</div>
</div>

<?php include "footer.php"; ?>