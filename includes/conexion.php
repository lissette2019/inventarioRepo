<?php 
$servidor = "localhost";
$usuario = "root";
$password = "";
$db= "eventos";
$conexion = new mysqli($servidor, $usuario, $password, $db);

if($conexion->connect_error){
	die( "Conexion fallida maje!: " . $conexion->connect_error);
}
/*echo "Conexion exitosa papu! :D";*/

?>