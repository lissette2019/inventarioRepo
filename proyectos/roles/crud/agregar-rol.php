<?php 
	include("../../includes/conexion.php");

	// obtener inputs entre las etiquetas form
	$nombreRol = $_POST["nombreRol"]; // Es para obtener valores ocultos de un formulario

	if($nombreRol == "") {
		header("Location: ../roles-agregar.php"); // redireccionar con PHP
	} else {
		// INSERTAR EN tabla (columna1,columna2,columnaN) VALORES ('$variable1','$variable2','$variableN');
		$insert = mysqli_query($conexion,"INSERT INTO roles (nombre) VALUES ('$nombreRol')");
		header("Location: ../roles.php");
	}
?>