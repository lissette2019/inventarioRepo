<?php include("../includes/conexion.php"); ?>
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
			<div class="col-md-2">
				<a href="../index.php" class="btn btn-default btn-block">
					<i class="glyphicon glyphicon-menu-left"></i> Volver
				</a>
			</div>
			<div class="col-md-8">
				<h2>Mantenimiento de Roles</h2>
			</div>
			<div class="col-md-2">
				<a href="roles-agregar.php" class="btn btn-primary btn-block">Agregar</a>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre del Rol</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$seleccionarValores = mysqli_query($conexion,"SELECT * FROM roles");
						$n = 0;
						while($recuperarColumnas = mysqli_fetch_assoc($seleccionarValores)) {
							$n += 1;
					?>
							<tr>
								<td><?php echo $n; ?></td>
								<td><?php echo $recuperarColumnas["nombre"]; ?></td>
								<td>
									<a href="roles-editar.php?id=<?php echo $recuperarColumnas['rolId']; ?>" class="btn btn-primary btn-xs">
										<i class="glyphicon glyphicon-pencil"></i>
									</a>
									<button type="button" class="btn btn-danger btn-xs" onclick="eliminar(<?php echo $recuperarColumnas['rolId']; ?>);">
										<i class="glyphicon glyphicon-trash"></i>
									</button>
								</td>
							</tr>
					<?php 
						} // cierre while $recuperarColumnas
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
    <script src="../librerias/js/jquery-1.11.3.min.js"></script>
    <script src="../librerias/js/bootstrap.min.js"></script>
    <script>
    	function eliminar(rolId) {
    		let confirmar = confirm("¿Está seguro que desea eliminar este registro?");
    		if(confirmar) {
    			location.href = "crud/eliminar-rol.php?rolId="+rolId;
    		} else {
    		}
    	}
    </script>
</html>