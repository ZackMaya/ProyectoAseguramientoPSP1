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
  <title>Solicitudes UACM</title>
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
    <!--Gráficas alumno-->
    <script src="https://code.highcharts.com/stock/highstock.js"></script>
    <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
    <!--Otros-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--Highcharts-->
    <script type="text/javascript" src=https://code.hightcharts.com/hightcharts.js></script>
    <script type="text/javascript" src=https://code.hightcharts.com/hightcharts-3d.js></script>
    <script type="text/javascript" src=https://code.hightcharts.com/modules/exporting.js></script>
    <script type="text/javascript">
$(function () {
    Highcharts.chart('grafica', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Gráfica de solicitud de horarios para el próximo semestre'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Solicitudes',
            colorByPoint: true,
            data: [{
                name: 
                'Introducción a la programación'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Introducción a la Programación'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
            {
                name: 
                'Introducción a la Ingeniería de Software'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Introducción a la Ingeniería de Software'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
            {
                name: 
                'Programación Orientada a Objetos'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Programación Orientada a Objetos'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
            {
                name: 
                'Estructura de Datos'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Estructura de Datos'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
            {
                name: 
                'Analisis de Algortimos'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Analisis de Algortimos'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
             {
                name: 
                'Teoria de la Computación'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Teoria de la Computación'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
             {
                name: 
                'Construcción y Evolución del Software'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Construcción y Evolución del Software'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
             {
                name: 
                'Bases de datos'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Bases de datos'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
             {
                name: 
                'Analisis de Requisitos'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Analisis de Requisitos'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
             {
                name: 
                'Programación Web'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Programación Web'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
            {
                name: 
                'Sistemas Operativos '
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Sistemas Operativos '";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
            {
                name: 
                'Aseguramiento de la calidad del software'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Aseguramiento de la calidad del software'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
            {
                name: 
                'Análisis y modelamiento de software'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Análisis y modelamiento de software'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
            {
                name: 
                'Programación de sistemas'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Programación de sistemas'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
            {
                name: 
                'Arquitectura de computadoras'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Arquitectura de computadoras'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
            {
                name: 
                'Lenguajes de programación'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Lenguajes de programación'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
             {
                name: 
                'Técnicas de pruebas de software'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Técnicas de pruebas de software'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
              {
                name: 
                'Diseño de software'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Diseño de software'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
            {
                name: 
                'Metodología de la investigación'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Metodología de la investigación'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
            {
                name: 
                'Redes de computadoras'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Redes de computadoras'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
            {
                name: 
                'Normatividad y legislación'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Normatividad y legislación'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
            {
                name: 
                'Arquitectura de software'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Arquitectura de software'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
            {
                name: 
                'Sistemas distribuidos'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Sistemas distribuidos'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
            {
                name: 
                'Administración de proyectos I'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Administración de proyectos I'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
             {
                name: 
                'Métricas de software'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Métricas de software'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
             {
                name: 
                'Diseño de experimentos en ing de software'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Diseño de experimentos en ing de software'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
              {
                name: 
                'Administración de proyectos II'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Administración de proyectos II'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            },
              {
                name: 
                'Gestión tecnológica'
                    ,
                y: <?php
                    include('conexion.php');
                    $query="SELECT materiasolicitada,count(*) FROM solicitudxalumno,materia WHERE solicitudxalumno.materiasolicitada=materia.id_materia AND materia.nombremateria='Gestión tecnológica'";
                    $resultado=$con->query($query);
                    while($row=$resultado->fetch_assoc()){
                    ?>
                     <?php echo $row['count(*)'];?>,
                    <?php
                    }
                     ?>
            }
            ]
        }]
    });
});
        </script>
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
                </ul>
            </div>
        </div>
    </nav><br><br><br><br>
    <div class="header-content-inner" style="padding-left: 35%"><br> 
        <a href="http://www.uacm.edu.mx" target="_blank"><img id="uacm" src="./imagenes/uacm2.png" alt="uacm"></a>
    </div>
    <br><br><br>
    <!--Logistica-->
    <center><h4>Toma de decisiones</h4></center>
    <div id="grafica" style="min-width: 310px; height: 400px; max-width: 100%; margin: 0 auto"></div>
    <br><br><br><br><br>
<!--Materias Solicitadas-->
<center><h4>Materias Solicitadas</h4></center>
    <center><table style="width: 70%" class="table table-bordered table-striped" border="2">
        <tbody>
        <tr>
            <td>Solicitante</td>
            <td>Semestre</td>
            <td>Materia Solicitada</td>
            <td>Carrera</td>
            <td>Profesor Candidato por alumno</td>
            <td>Hora (90min por clase)</td>
            <td>Día</td>
            <td>Día 2</td>  
            <td>Día 3</td> 
        </tr>
        <?php
        include('conexion.php');
        $query="SELECT * FROM solicitudxalumno,materia,alumno,carrera,dia,hora,profesor WHERE solicitudxalumno.matriculasolicitud=alumno.matricula AND solicitudxalumno.materiasolicitada=materia.id_materia AND solicitudxalumno.horasolicitada=hora.idHora AND solicitudxalumno.diasolicitado=dia.idDia AND solicitudxalumno.profesorSolicitado=profesor.idProfesor ORDER BY nombremateria";
        $resultado=$con->query($query);
        while($row=$resultado->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['matricula'];?></td>
            <td><?php echo $row['semestre'];?></td>
            <td><?php echo $row['nombremateria'];?></td>
            <td><?php echo $row['nombrecarrera'];?></td>
            <td><?php echo $row['nombreProfesor'];?> <?php echo $row['apellidopProfesor'];?> <?php echo $row['apellidomProfesor'];?></td>
            <td><?php echo $row['hora'];?></td>
            <td><?php echo $row['dia'];?></td> 
            <td><?php echo $row['diasolicitado2'];?></td> 
            <td><?php echo $row['diasolicitado3'];?></td>        
        
        <?php
            }
        ?>
        </tr>
 
        </tbody>
        </table>
    </center>
<hr>

<br><br><br>
<br><br><br>
<br><br><br>
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
