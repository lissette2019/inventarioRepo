<?php

session_start();
$usuario = $_SESSION['usuario'];

?>
<!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <title>Bienvenido al Inventario</title>
            <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
            <link rel="stylesheet" href="assets/css/style.css">
        </head>
        <body>

        <?php if(!empty($user)): ?>
            <br>Bienvenido <?= $user['email']; ?>
            <br>Ha iniciado sesión correctamente
            <a href="CerrarSesion.php">
               CerrarSesion
            </a>
            <?php else: ?>
            <h1>Por favor ingresa o regístrate</h1>

            <a href="Login.php">Login</a> or
            <a href="Registro.php">Registrate</a>
            <?php endif; ?>

        <header id="main-header">
                
                <a id="logo-header" href="/assets/Imagenes/LOGO INVENTARIO.png">
                </a> <!-- / #logo-header -->

                <nav>
                    
                        <a href="Login.php">Login,</a>
                        <a href="Registro.php">Registro,</a>
                        <a href="CerrarSesion.php">Salir.</a>
                
                </nav><!-- / nav -->

            </header><!-- / #main-header -->

            <h1>Bienvenido al Inventario Digital</h1>
            <h3>Hospital Militar Central</h3>
            <?php 
                echo 'Bienvenido Usuario' .$usuario; 
            ?>
        </body>
 </html>
