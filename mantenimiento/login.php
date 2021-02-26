<! DOCTYPE html>
< html  lang = " es " >
< cabeza >
    < meta  charset = " utf-8 " >
    < meta  http-equiv = " X-UA-Compatible "  content = " IE = edge " >
    < meta  name = " viewport "  content = " width = device-width, initial-scale = 1 " >
	< título > CRUD </ título >
	< link  href = " librerias / css / bootstrap.min.css "  rel = " hoja de estilo " >
</ cabeza >
< cuerpo >
	< div  class = " contenedor text-center " >
        < div  class = " row text-center login-page " >
			< div  class = " col-md-12 login-div " >
            	< div  class = " panel panel-default " >
            		< div  class = " panel-header " >
					< strong  class = " " > Iniciar sesión </ strong >
				</ div >
			</ div >
		< form  action = " validacion.php "  method = " post " > 			
		</ div >
        < Br >
		< div  class = " fila " >
		   < div  class = " col-md-12 login-from-row " >
		      < input  name = " nombre "  type = " text "  placeholder = " Usuario "  required />
		   </ div >
		</ div >
        < Br >
		< div  class = " fila " >
		   < div  class = " col-md-12 login-from-row " >
		      < input  name = " password "  type = " password "  placeholder = " Contraseña "  obligatorio />
		   </ div >
		</ div >
        < Br >
		< div  class = " fila " >
		   < div  class = " col-md-12 login-from-row " >
		      < button  class = " btn btn-info " > Entrar </ button >
		   </ div >
		</ div >
		< Br >
		< div  class = " fila " >
		   < div  class = " col-md-12 login-from-row " >
		      < button  class = " btn btn-success " > Registrarse </ button >
		   </ div >
		</ div >
	    </ formulario >
	</ div >
</ cuerpo >
    < script  src = " librerias / js / jquery-1.11.3.min.js " > </ script >
    < script  src = " librerias / js / bootstrap.min.js " > </ script >
</ html >