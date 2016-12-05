<?php
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!--Conversiones y descripcion en navegador-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="description" content="Solicitud-UACM">
	<meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Registro Solicitud-UACM</title>
	<!--Estilos-->
	<link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--fuentes de google-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="./css/creative.min.css" rel="stylesheet">
	<!--Formulario bootstrap-->
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/main.css">
    <!--Otros-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!--Menu-->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Menu responsive</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php" style="color: #84040F">Horarios UACM</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="sesion.php">Iniciar Sesión</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="registro.php">Registrarse</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="solicitudes.php">Solicitudes de Materias</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br>
        <div class="header-content-inner" style="padding-left: 35%"><br> 
        <a href="http://www.uacm.edu.mx" target="_blank"><img id="uacm" src="./imagenes/uacm2.png" alt="uacm"></a>
    </div>
    <br><br><br>
<div class="container">
  <div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form action = "registroBD.php" method = "post">
      <input type="hidden" name="submitted" value="true">
        <fieldset>
         <center><h2>Registro Alumno</h2></center>
  			<br><br>
  			<hr>
			<!--Nombre de usuario-->	  
			<div class="form-group">
				<label for="nombreUsuario">Nombre Alumno</label>
				<input class="form-control" name="nombre" type="text" required="required" placeholder="Nombre y Apellidos" tabindex="1" title="Nombre completo">
			</div>				
			<!--Matricula-->
			<div class="form-group">
					<label for="matricula">Matricula</label>
					<input class="form-control" name="matricula" type="text" required="required"  placeholder="Matricula" tabindex="5" title="Matricula">
			</div>
			<!--contraseña-->
			<div class="form-group">
					<label for="password">Contraseña</label>
					<input class="form-control" name="password" type="password" required="required" placeholder="Contraseña" tabindex="6" title="Contraseña">
			</div>
   			<!--Botones bootstrap-->
       		<div class="col-lg-12 ">
					<br>
				<div class="col-xs-3 col-sm-3 col-md-3">
					<input type="submit" tabindex="7" name="aceptar" value="Aceptar" class="btn btn-lg btn-success btn-block" class="btn btn-default">
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3"> 
					<input type="reset" tabindex="8" class="btn btn-lg btn-primary btn-block" class="col-xs-6 col-sm-6 col-md-6" value="Borrar">
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3"> <a href="index.php"  class="btn btn-lg btn-primary btn-block">Regresar</a> 
		        </div>
				<input type="hidden" name="estado" value="1">
			</div>									
        </fieldset>
      </form>
    </div>
  </div>
</div><br><br><br>
    <!--footer-->
    <section class="bg-primary" id="about">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h5>Copyleft 2016 UACM.</h5> 
                <!--Redes Sociales-->    
                <div id="social">
                    <a href="https://twitter.com/Netozack" target="_blank" ><img  src="./imagenes/iconotwitter2.png" width="25px" height="25px" onmouseover="this.src='./imagenes/iconotwitter.png';" onmouseout="this.src='./imagenes/iconotwitter2.png';" title="Twitter"></a>
                    <a href="https://plus.google.com/u/0/+ZackMaya" target="_blank"><img src="./imagenes/iconogoogle2.png" width="25px" height="25px" onmouseover="this.src='./imagenes/iconogoogle.png';" onmouseout="this.src='./imagenes/iconogoogle2.png';" title="Google"></a>
                    <a href="https://www.facebook.com/netozack" target="_blank"><img  src="./imagenes/iconofacebook2.png" width="25px" height="25px" onmouseover="this.src='./imagenes/iconofacebook.png';" onmouseout="this.src='./imagenes/iconofacebook2.png';" title="Facebook"></a>  
                    <a href="https://github.com/ZackMaya/" target="_blank"><img  src="./imagenes/github3.png" width="25px" height="25px" onmouseover="this.src='./imagenes/github1.png';" onmouseout="this.src='./imagenes/github3.png';" title="Github"></a>
                </div>
                </div>
    </section>  
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
</body>
</html>