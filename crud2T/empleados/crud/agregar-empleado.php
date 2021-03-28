<?php 
	include("../../includes/conexion.php");

	$nombreEmpleado = $_POST["nombreEmpleado"]; 

	if($nombreEmpleado == "") {
		header("Location: ../empleado-agregar.php"); 
	} else {
		$insert = mysqli_query($conexion,"INSERT INTO empleados (empleado) VALUES ('$nombreEmpleado')");
		header("Location: ../empleados.php");
	}
?>