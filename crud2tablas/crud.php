<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Roles - CRUD</title>
	<link href="./librerias/css/bootstrap.min.css" rel="stylesheet">
    <?php include('./includes/conexion.php'); ?>

</head>
<body>
<div class="container">
		<div class="row" style="text-align: center;">
			<div class="col-md-12">
				<h2>Registro de invitados</h2>
			</div>
		</div>
<form action = "crud.php" method="post">
    <div class="col-md-6">
        <input type="text" name="nombre" class="form-control" placeholder="Inserte nombre">
    </div> 
    <div class="col-md-6">
        <input type="text" name="apellido" class="form-control" placeholder="Inserte Apellido">
    </div> <br><br>
    <div class="col-md-6">
        <input type="text" name="direccion" class="form-control" placeholder="Inserte direccion">
    </div>
    <div class="col-md-6">
        <input type="text" name="telefono" class="form-control" placeholder="Inserte telefono">
    </div><br><br>
    <div class="col-md-2">
		<button type="submit" class="btn btn-primary btn-block">Registrar Usuario</button>
	</div>
</form>
<?php
    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset ($_POST['direccion']) && isset ($_POST['telefono'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $fecha = date("y-m-d");
        
        $sql = "INSERT INTO invitados (id, nombre, apellido, direccion, telefono, fecha) 
        VALUES (NULL, '$nombre', '$apellido', '$direccion', '$telefono', '$fecha')";

        if( $conexion->query($sql) === true){
            echo "Datos insertados correctamente...";
        }else{
            die("Error al insertar datos..." . $conexion->error);
        }

    }else if(isset($_POST['editar'])){
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];

        $sql = "UPDATE invitados SET nombre = '$nombre' WHERE id = $id";
        $resultado = $conexion->query($sql);

        if($conexion->query($sql) === true){
            echo "Datos actualizados correctamente...";
        }else{
            die("Error al actualizar datos..." . $conexion->error);
        }

    }else if(isset($_POST['eliminar'])){
        $id = $_POST['id'];

        $sql = "DELETE FROM invitados where id = $id";

        if($conexion->query($sql) === true){
            echo "Datos Eliminados...";
        }else{
            die("Error al Eliminar datos..." . $conexion->error);
        }

    }
/*
    $sql = "SELECT id, nombre FROM invitados";
    $resultado = $conexion->query($sql);  */

    $sql = "SELECT * FROM registros INNER JOIN invitados ON registros.invitado_id = invitados.id";
    $resultado = $conexion->query($sql);

    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()){
            echo '<div>
                    <form action = "crud.php" method="post">
                        <input type="hidden" name="id" value="'.$row['id'].'">
                        <input type="text" name="nombre" value="'.$row['nombre'].'">
                        <input type="submit" name="editar" value="Editar">
                        <input type="submit" name="eliminar" value="Eliminar">
                    </form>
                </div>';
        }
    }

    $conexion->close();

?>