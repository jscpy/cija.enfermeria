<?php 
/*
	Archivo: logout.php
	Descripcion: Destruye la sesión activa del usuario
*/
session_start();

$_SESSION = array();

session_destroy();

header("Location: http://localhost/CIJ/");

?>