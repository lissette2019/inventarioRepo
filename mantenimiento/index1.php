<?php

/* 
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db= "eventos";
    $conexion = new mysqli($servidor, $usuario, $password, $db);

    if($conexion->connect_error){
        die( "Conexion fallida maje!: " . $conexion->connect_error);
    }
    echo "Conexion exitosa papu! :D";*/
/* 
    $sql = "CREATE DATABASE eventos";
    if( $conexion->query($sql) === true){
        echo"Base de datos creada correctamente...";
    } else {
        die("Error al crear base de datos: " . $conexion->error);
    }
    */
    /*  $sql = "CREATE TABLE invitados(
        id INT(11) AUTO_INCREMENT PRIMARY KEY, 
        nombre VARCHAR(100) NOT NULL, 
        apellido VARCHAR(150) NOT NULL,
        direccion VARCHAR(150) NOT NULL,
        telefono INT(15) NOT NULL,
        fecha DATE 
    )";
 */
    if( $conexion->query($sql) === true){
        echo"La tabla se creo correctamente papu!!...";
    } else {
        die("Error al crear tabla ¬¬ " . $conexion->error);
    }
   
?>