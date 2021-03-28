<?php 
	include("../includes/conexion.php");
	$rolId = $_REQUEST["id"]; // REQUEST es para obtener valores de la URL
	$seleccionarValor = mysqli_query($conexion,"SELECT * FROM roles WHERE rolId='$rolId'");
	$mostrarValor = mysqli_fetch_assoc($seleccionarValor);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Roles - CRUD</title>
	<link href="../librerias/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row" style="text-align: center;">
			<div class="col-md-12">
				<h2>Mantenimiento de Roles - Editar</h2>
			</div>
		</div>
		<br>
		<form action="crud/editar-rol.php" method="post">
			<input type="hidden" name="rolId" value="<?php echo $rolId; ?>">
			<div class="row">
				<div class="col-md-4" style="text-align: right;">
					Nombre del Rol:
				</div>
				<div class="col-md-8">
					<input type="text" name="nombreRol" class="form-control" placeholder="Ingrese el Nombre del Rol..." value="<?php echo $mostrarValor['nombre']; ?>">
					<!-- 
						id="nombreRol" name="nombreRol"
						id: Es para javascript y jquery (recuperar el valor del input)
						name: Es para PHP para recuperar con $_POST["nombreRol"]
					-->
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-offset-8 col-md-2">
					<button type="submit" class="btn btn-primary btn-block">Guardar</button>
				</div>
				<div class="col-md-2">
					<a href="roles.php" class="btn btn-default btn-block">Cancelar</a>
				</div>
			</div>
		</form>
	</div>
</body>
    <script src="../librerias/js/jquery-1.11.3.min.js"></script>
    <script src="../librerias/js/bootstrap.min.js"></script>
</html>