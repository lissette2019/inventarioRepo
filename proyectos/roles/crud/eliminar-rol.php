<?php 
	include("../../includes/conexion.php");

	// obtener inputs entre las etiquetas form
	$rolId = $_REQUEST["rolId"];
	$delete = mysqli_query($conexion,"DELETE FROM roles WHERE rolId='$rolId'");
	header("Location: ../roles.php");
?>