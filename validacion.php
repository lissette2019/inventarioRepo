<?php
    include('./includes/conexion.php');

    session_start();

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM credenciales WHERE usuario = '$usuario' AND password = '$password'";
    $resultado = $conexion ->query(sql);

    $row = $resultado->fetch_assoc();


    if($row['nombre'] == $usuario && $row ['password'] == $password){
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
    }else{
        header("Location: login.php");
    }

?>