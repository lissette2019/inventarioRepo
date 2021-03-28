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
				<h2>Mantenimiento de Empleado - Agregar</h2>
			</div>
		</div>
		<br>
		<form action="crud/agregar-empleado.php" method="post">
			<div class="row">
				<div class="col-md-4" style="text-align: right;">
					Nombre del Empleado:
				</div>
				<div class="col-md-8">
					<input type="text" name="nombreEmpleado" class="form-control" placeholder="Ingrese el Nombre de Empleado">
						<!-- nombreEmpleado es nombre de variable que guarda el contenido de lo que ingresa el usuario-->
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-4" style="text-align: right;">
					Nombre Apellido:
				</div>
				<div class="col-md-8">
					<input type="text" name="nombreEmpleado" class="form-control" placeholder="Ingrese el apellido de Empleado">
						<!-- nombreEmpleado es nombre de variable que guarda el contenido de lo que ingresa el usuario-->
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-4" style="text-align: right;">
					Correo electronico:
				</div>
				<div class="col-md-8">
					<input type="text" name="nombreEmpleado" class="form-control" placeholder="Ingrese el correo de Empleado">
						<!-- nombreEmpleado es nombre de variable que guarda el contenido de lo que ingresa el usuario-->
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-4" style="text-align: right;">
					Seleccione el rol:
				</div>
				<div class="col-md-8">
					<select class="form-control">
  						<option>1</option>
  						<option>2</option>
  						<option>3</option>
  						<option>4</option>
  						<option>5</option>
					</select>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-offset-8 col-md-2">
					<button type="submit" class="btn btn-primary btn-block">Guardar</button>
				</div>
				<div class="col-md-2">
					<a href="empleado.php" class="btn btn-default btn-block">Cancelar</a>
				</div>
			</div>
		</form>
	</div>
</body>
    <script src="../librerias/js/jquery-1.11.3.min.js"></script>
    <script src="../librerias/js/bootstrap.min.js"></script>
</html>