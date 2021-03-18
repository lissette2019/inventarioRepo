<?php
    include('./includes/conexion.php');

    session_start();

    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    #variables de envios de nombre y password

    $sql = "SELECT * FROM invitados WHERE nombre = '$nombre' AND password = '$password'";
    $resultado = $conexion->query($sql);
    #variable de seleccione de datos de BD

    $row = $resultado->fetch_assoc();


    if($row['nombre'] == $nombre && $row ['password'] == $password){
        $_SESSION['usuario'] = $nombre;
        header("Location: index.php");
    }else{
        header("Location: login.php");
    }

?>