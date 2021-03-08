<?php 
	include("../includes/conexion.php");
	$empleadoId = $_REQUEST["id"]; 
	$seleccionarValor = mysqli_query($conexion,"SELECT * FROM empleados WHERE empleadoId='$empleadoId'");
	$mostrarValor = mysqli_fetch_assoc($seleccionarValor);
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Empleado - CRUD</title>
	<link href="../librerias/css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body>
 	<div class="container">
 		<div class="row" style="text-align: center;">
 			<div class="col-md-12">
 				<h2>Mantenimiento de Empleados-Editar</h2>	
 			</div>
 		</div>
 		<br>
 		<form action="crud/editar-empleado.php" method="post">
 			<input type="hidden" name="empleadoId" value="<?php  echo $empleadoId; ?>">
	 		<div class="row">
	 			<div class="col-md-4" style="text-align: right;">
	 				Nombre de Empleado:
	 			</div>
	 			<div class="col-md-8">
	 				<input type="text" name="nombreEmpleado" class="form-control" placeholder="Ingrese el nombre de empleado..." value="<?php echo $mostrarValor['empleado']; ?>">
	 			</div>
	 		</div>
	 		<br>
	 		<div class="row">
	 			<div class="col-md-offset-8 col-md-2">
	 				<button type="submit" class="btn btn-primary btn-block"> Guardar</button>
	 			</div>
	 			<div class="col-md-2">
					<a href="empleados.php" class="btn btn-default btn-block">Cancelar</a>
				</div>
	 		</div>
	 		</form>
 	</div>
 </body>
 	<script src="../librerias/js/jquery-1.11.3.min.js"></script>
    <script src="../librerias/js/bootstrap.min.js"></script>
 </html>