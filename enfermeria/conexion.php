<?php 
$host = "127.0.0.1";
$user = "root";
$passw = "";
$database = "cij";

$conexion = new mysqli($host,$user,$passw,$database);

if (empty($conexion)) {
	die("Fallo Conexion: ".mysqli_connect_error());
}

?>