<?php 

include "../../conexion.php";
$id_medicina = $_POST['id_medicina'];
$sql = "DELETE FROM medicina WHERE id_medicina = $id_medicina";

if ($conexion->query($sql) === TRUE) {

	header("Location:http://localhost/CIJ/enfermeria/menu.php");
}

?>