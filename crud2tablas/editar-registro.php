<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php  include("./includes/conexion.php");?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./librerias/css/bootstrap.min.css" rel="stylesheet">
	<title>Actualizar</title>
</head>
<body>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Direccion</th>
						<th>Telefono</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$seleccionarValores = mysqli_query($conexion,"SELECT * FROM invitados");
						#inicializa variable para sentencia de seleccion de tabla roles
						$n = 0;
						while($recuperarColumnas = mysqli_fetch_assoc($seleccionarValores)) {
							$n += 1;
					?>
							<tr>
								<td><?php echo $n; ?></td>
								<td><?php echo $recuperarColumnas["nombre"]; ?></td>
									<!--impresion de campos de bases de datos -->
								<td>
									<a href="registro-editar.php?id=<?php echo $recuperarColumnas['id']; ?>" class="btn btn-primary btn-xs">
										<!-- redireccionamiento a archivo editar.php e impresion de campo rolId de base de dato-->
										<i class="glyphicon glyphicon-pencil"></i>
									</a>
									<button type="button" class="btn btn-danger btn-xs" onclick="eliminar(<?php echo $recuperarColumnas['id']; ?>);">
											<!-- eliminar campo rolid  -->
										<i class="glyphicon glyphicon-trash"></i>
									</button>
								</td>
							</tr> 
							 
							<tr>
								<td></td>
								<td><?php echo $recuperarColumnas["apellido"]; ?></td>
									<!--impresion de campos de bases de datos -->
								<td>
									<a href="registro-editar.php?id=<?php echo $recuperarColumnas['apellido']; ?>" class="btn btn-primary btn-xs">
										<!-- redireccionamiento a archivo editar.php e impresion de campo rolId de base de dato-->
										<i class="glyphicon glyphicon-pencil"></i>
									</a>
									<button type="button" class="btn btn-danger btn-xs" onclick="eliminar(<?php echo $recuperarColumnas['apellido']; ?>);">
											<!-- eliminar campo rolid  -->
										<i class="glyphicon glyphicon-trash"></i>
									</button>
								</td>
							</tr>
							<tr>
								<td></td>
								<td><?php echo $recuperarColumnas["direccion"]; ?></td>
									<!--impresion de campos de bases de datos -->
								<td>
									<a href="registro-editar.php?id=<?php echo $recuperarColumnas['direccion']; ?>" class="btn btn-primary btn-xs">
										<!-- redireccionamiento a archivo editar.php e impresion de campo rolId de base de dato-->
										<i class="glyphicon glyphicon-pencil"></i>
									</a>
									<button type="button" class="btn btn-danger btn-xs" onclick="eliminar(<?php echo $recuperarColumnas['direccion']; ?>);">
											<!-- eliminar campo rolid  -->
										<i class="glyphicon glyphicon-trash"></i>
									</button>
								</td>
							</tr>






							<tr>
								<td></td>
								<td><?php echo $recuperarColumnas["telefono"]; ?></td>
									<!--impresion de campos de bases de datos -->
								<td>
									<a href="registro-editar.php?id=<?php echo $recuperarColumnas['telefono']; ?>" class="btn btn-primary btn-xs">
										<!-- redireccionamiento a archivo editar.php e impresion de campo rolId de base de dato-->
										<i class="glyphicon glyphicon-pencil"></i>
									</a>
									<button type="button" class="btn btn-danger btn-xs" onclick="eliminar(<?php echo $recuperarColumnas['telefono']; ?>);">
											<!-- eliminar campo rolid  -->
										<i class="glyphicon glyphicon-trash"></i>
									</button>
								</td>
							</tr>
							


						
					<?php 
						} // cierre while $recuperarColumnas
					?>
				</tbody>
			</table>

</body>
</html>




		
	
