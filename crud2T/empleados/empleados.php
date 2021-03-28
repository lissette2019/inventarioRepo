<?php include ("../includes/conexion.php") 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Empleados- CRUD</title>
	<link href="../librerias/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
			<div class="row" style="text-align: center;">
				<div class="col-md-2">
					<a href="../index.php" class="btn btn-default btn-block">
						<i class="glyphicon glyphicon-menu-left"></i>Volver
					</a>
				</div>
				<div class="col-md-8">
					<h2>Mantenimiendo de empleados</h2>
				</div>
				<div class="col-md-2">
					<a href="empleado-agregar.php" class="btn btn-primary btn-block"> Agregar</a>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Nombre de Empleado</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$seleccionValor = mysqli_query($conexion, "SELECT * FROM empleados");
						#sentencia de seleccion tabla empleados
						$n=0;
						while ($recuperar = mysqli_fetch_assoc($seleccionValor)){
							$n+=1;
						?>	<!-- inicializa variable $recuperar con select de tabla -->
							<tr>
								<td><?php echo $n; ?></td>
								<td><?php echo $recuperar["empleado"]; ?></td>
									<!--impresion de campo empleado de tabla empleados -->
								<td>
									<a href="empleados-editar.php?id=<?php echo $recuperar['empleadoId']; ?>" class="btn btn-primary btn-xs">
										<i class="glyphicon glyphicon-pencil"></i>
									</a>
									<button type="button" class="btn btn-danger btn-xs" onclick="eliminar( <?php echo $recuperar ['empleadoId']; ?>);">
										<i class="glyphicon glyphicon-trash"></i>
									</button>
								</td>
							</tr>
						<?php 
							}
						?>					 
					</tbody>
				</table>
			</div>
		</div>
	</body>
	<script src="../librerias/js/jquery-1.11.3.min.js"></script>
    <script src="../librerias/js/bootstrap.min.js"></script>
    <script>
    	function eliminar(empleadoId) {
    		let confirmar = confirm("¿Está seguro que desea eliminar este registro?");
    		if(confirmar) {
    			
    			location.href = "crud/eliminar-empleado.php?empleadoId="+empleadoId;
    		} else {
    		}
    	}
    </script>

</html>