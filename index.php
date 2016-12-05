<?php
session_start();
if(isset($_SESSION["usuario_matricula"])){
    header('location: ./php/panel.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="description" content="Solicitud-UACM">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>Solicitud-UACM</title>

    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--fuentes de google-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="./css/creative.min.css" rel="stylesheet">
    <!--Otros-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body id="page-top">
    <!--Menu-->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Menu responsive</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Horarios UACM</a>
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
    </nav>
    <!--Banner con botones-->
    <header>
        <div class="header-content">
            <div class="header-content-inner"><br> 
                <a href="http://www.uacm.edu.mx" target="_blank"><img id="uacm" src="./imagenes/uacm2.png" alt="uacm"></a>
                <h1 id="homeHeading">Bienvenido al sistema de solicitud de materias</h1>
                <hr>
                <p>Puedes solicitar la apertura de materias en los horarios del próximo semestre </p>
                <a href="solicitudes.php" class="btn btn-primary btn-xl page-scroll">Ver solicitudes</a>
                <a href="sesion.php" class="btn btn-primary btn-xl page-scroll">Inicia Sesión</a>
                <a href="registro.php" class="btn btn-primary btn-xl page-scroll">Registrate</a>

            </div>
        </div>
    </header>
    <!--Sobre mí y footer-->
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h3 class="section-heading">Desarrollador</h3>
                    <img id="zack" src="./imagenes/zack.jpg"><br><br>
                    <p class="text-faded">Ernesto Z. Maya Díaz</p>
                    <hr class="light"><br>
                    <em>Estudiante de Ing. de Software UACM, Esta aplicación está hecha para la logística que se lleva semestre con semestre para toma de decisiones sobre que materias abrir y los horarios a cubrir.</em><br><br>
                    <h5>Copyleft 2016 UACM.</h5> 
                <!--Redes Sociales-->    
                <div id="social">
                    <a href="https://twitter.com/Netozack" target="_blank" ><img  src="./imagenes/iconotwitter2.png" width="25px" height="25px" onmouseover="this.src='./imagenes/iconotwitter.png';" onmouseout="this.src='./imagenes/iconotwitter2.png';" title="Twitter"></a>
                    <a href="https://plus.google.com/u/0/+ZackMaya" target="_blank"><img src="./imagenes/iconogoogle2.png" width="25px" height="25px" onmouseover="this.src='./imagenes/iconogoogle.png';" onmouseout="this.src='./imagenes/iconogoogle2.png';" title="Google"></a>
                    <a href="https://www.facebook.com/netozack" target="_blank"><img  src="./imagenes/iconofacebook2.png" width="25px" height="25px" onmouseover="this.src='./imagenes/iconofacebook.png';" onmouseout="this.src='./imagenes/iconofacebook2.png';" title="Facebook"></a>  
                    <a href="https://github.com/ZackMaya/" target="_blank"><img  src="./imagenes/github3.png" width="25px" height="25px" onmouseover="this.src='./imagenes/github1.png';" onmouseout="this.src='./imagenes/github3.png';" title="Github"></a>
                </div>
                </div>
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
