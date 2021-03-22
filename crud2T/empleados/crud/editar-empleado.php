<?php 
	include("../../includes/conexion.php");

	// obtener inputs entre las etiquetas form
	$empleadoId = $_POST["empleadoId"];
	$nombreEmpleado = $_POST["nombreEmpleado"]; // Nuevo nombre del Rol

	if($nombreEmpleado == "") {
		header("Location: ../empleados-editar.php?id=$empleadoId"); // redireccionar con PHP enviando variable
	} else {
		// ACTUALIZAR tabla ESTABLECIENDO columna1='$variable1',columnaN='$variableN' DONDE id='idAModificar'
		$update = mysqli_query($conexion,"UPDATE empleados SET empleado='$nombreEmpleado' WHERE empleadoId='$empleadoId'");
		header("Location: ../empleados.php");
	}
?>