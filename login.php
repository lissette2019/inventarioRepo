<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD</title>
	<link href="librerias/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container" >
        <div class="row text-center login-page">
            <div class="col-md-12 login-form">
			<div class="col-md-12">
				<h2>Login</h2>
			</div>
		</div>
		<form action="validacion.php" method="post"> 			
		</div>
        <br>
		<div class="row">
		   <div class="col-md-12 login-from-row">
		      <input name="usuario" type="text" placeholder="Usuario" required/>
		   </div>
		</div>
        <br>
		<div class="row">
		   <div class="col-md-12 login-from-row">
		      <input name="password" type="password" placeholder="Contraseña" required/>
		   </div>
		</div>
        <br>
		<div class="row">
		   <div class="col-md-12 login-from-row">
		      <button class="btn btn-info">Entrar</button>
		   </div>
		</div>
	    </form>
	</div>
</body>
    <script src="librerias/js/jquery-1.11.3.min.js"></script>
    <script src="librerias/js/bootstrap.min.js"></script>
</html>