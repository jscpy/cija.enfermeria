<?php  

include "../../conexion.php";

$sql_update_pdf = "UPDATE usuario SET pdf = 0";
$conexion->query($sql_update_pdf);

$administrador = $_POST['administrador'];
$enfermeria    = $_POST['enfermeria'];

$sql_administrador = "UPDATE usuario SET pdf = 1 
						WHERE nombre_completo = '$administrador' AND privilegios = 'alto' ";

$conexion->query($sql_administrador);

$sql_enfermeria = "UPDATE usuario SET pdf = 1 
						WHERE nombre_completo = '$enfermeria' AND privilegios = 'bajo'";

$conexion->query($sql_enfermeria);

mysqli_close($conexion);

header("Location:http://localhost/CIJ/enfermeria/exito.php");

?>