<?php
    include('./includes/conexion.php');

    session_start();

    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM invitados WHERE nombre = '$nombre' AND password = '$password'";
    $resultado = $conexion->query($sql);

    $row = $resultado->fetch_assoc();


    if($row['nombre'] == $nombre && $row ['password'] == $password){
        $_SESSION['usuario'] = $nombre;
        header("Location: admin.php");
    }else{
        header("Location: login.php");
    }

?>