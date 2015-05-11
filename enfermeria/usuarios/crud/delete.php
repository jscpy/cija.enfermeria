<?php 

include "../../conexion.php";
$id_usuario = $_POST['id_usuario'];
$sql = "DELETE FROM usuario WHERE id_usuario = $id_usuario";

if ($conexion->query($sql) === TRUE) {

	header("Location:http://localhost/CIJ/enfermeria/menu.php");
}

?>