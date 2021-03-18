<?php 
	include("./includes/conexion.php");

	// obtener inputs entre las etiquetas form
	$id = $_POST["id"];
	$nombre = $_POST["nombre"]; // Nuevo nombre del Rol
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $direccion = $_POST["telefono"];

	if($nombre == "") {
		header("Location: ./.php?id=$id"); // redireccionar con PHP enviando variable
	} else {
		// ACTUALIZAR tabla ESTABLECIENDO columna1='$variable1',columnaN='$variableN' DONDE id='idAModificar'
		$update = mysqli_query($conexion,"UPDATE eventos SET nombre='$nombre' WHERE id='$id'");
		header("Location: ./index.php");
	}
?>