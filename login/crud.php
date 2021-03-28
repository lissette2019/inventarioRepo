<?php include('./includes/conexion.php'); ?> <!-- conexion para base de datos-->

<h2> Registro de invitados </h2>
<br><br><br>
<form action = "crud.php" method="post">
    <!-- Datos de registro para BD enventos-->
    <input type="text" name="nombre" placeholder="Inserte nombre">
    <input type="text" name="apellido" placeholder="Inserte Apellido">
    <input type="text" name="direccion" placeholder="Inserte direccion">
    <input type="text" name="telefono" placeholder="Inserte telefono">
    <input type="submit" value="Registrar usuario">
</form>
<?php
    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset ($_POST['direccion']) && isset ($_POST['telefono'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $fecha = date("y-m-d");

        #Insertar datos en tabla invitados
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

        #Actualizar datos en tabla invitados 
        $sql = "UPDATE invitados SET nombre = '$nombre' WHERE id = $id";
        $resultado = $conexion->query($sql);

        if($conexion->query($sql) === true){
            echo "Datos actualizados correctamente...";
        }else{
            die("Error al actualizar datos..." . $conexion->error);
        }

    }else if(isset($_POST['eliminar'])){
        $id = $_POST['id'];
        #Eliminar datos de tabla invitados
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