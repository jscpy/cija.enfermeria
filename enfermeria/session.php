<?php

/*
	Archivo: session.php
	Descripcion: Si NO existe una sesión activa de un usuario entonces se redirige al login.
*/
session_start();

if(!isset($_SESSION['username'])){

	header('Location: http://localhost/CIJ/enfermeria/'); // Redirecting To Home Page
}
?>