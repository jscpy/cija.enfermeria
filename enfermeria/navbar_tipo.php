<?php 
	include 'conexion.php';

	$username = strtolower($_SESSION['username']);
	
	$sql = "SELECT privilegios FROM usuario WHERE username = '$username'";

	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_object();
	$privilegios = $row->privilegios;

	if ($privilegios == 'bajo' ){
		
		include "navbar.php"; 
	}

	else {

		include "navbar_admin.php";
	}

?>