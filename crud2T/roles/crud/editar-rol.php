<?php 
	include("../../includes/conexion.php");

	// obtener inputs entre las etiquetas form
	$rolId = $_POST["rolId"];
	$nombreRol = $_POST["nombreRol"]; // Nuevo nombre del Rol

	if($nombreRol == "") {
		header("Location: ../roles-editar.php?id=$rolId"); // redireccionar con PHP enviando variable
	} else {
		// ACTUALIZAR tabla ESTABLECIENDO columna1='$variable1',columnaN='$variableN' DONDE id='idAModificar'
		$update = mysqli_query($conexion,"UPDATE roles SET nombre='$nombreRol' WHERE rolId='$rolId'");
		header("Location: ../roles.php");
	}
?>