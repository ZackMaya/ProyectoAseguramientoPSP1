<?php
session_start();
if(!isset($_SESSION["usuario_matricula"])){
	header('location: index.php');
}
//echo "inciando sesión para:$_SESSION['usuario_matricula']";
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
	<title>Panel Alumo Horarios-UACM</title>
	<!--Estilos-->
	<link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--fuentes de google-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="./css/creative.min.css" rel="stylesheet">
	<!--Formulario bootstrap-->
	<link rel="stylesheet" href="./css/bootstrap.css">
    <!--Modal-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<!--Menu-->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Menu responsive</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="panelAlumno.php" style="color: #84040F">Horarios UACM</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   	<li><a href="panelAlumno.php" class="button special" title="Alumno"> <?php include('conexion.php');
							$matricula=$_SESSION["usuario_matricula"];
							$query="SELECT * FROM alumno WHERE matricula='$matricula'";
							$resultado=$con->query($query);
							while($row=$resultado->fetch_assoc()){
							echo $row['nombre'];}?></a></li>
					<li><a href="logout.php"><i title="Cerrar Sesión" class="glyphicon glyphicon-log-out"></i></a>
                </ul>
            </div>
        </div>
    </nav><br><br><br>

    <div class="header-content-inner" style="padding-left: 35%"><br> 
        <a href="http://www.uacm.edu.mx" target="_blank"><img id="uacm" src="./imagenes/uacm2.png" alt="uacm"></a>
    </div>
    <br><br><br>
<div style="width: 100%; padding-left: 10%; padding-right: 10%">
<h4>Sistema de estudiantes</h4><hr>
<p>Bienvenido alumno, aquí podrás tener un historial de materias que haz acreditado así como también puedes contar con las opciones de solicitar una materia en un cierto horario del próximo semestre, asegurando que estas se habrán para seguir tu formación universitaria, esta solicitud es de gran importancia ya que los horarios que tu propongas serán tomados en cuenta por los profesores de la académia y así en base a las necesidades de los estudiantes se toma una logística adecuada de impartición de cursos en los horarios y con los profesores mejor calificados.</p>
</div>
 <!--Seleccion materias-->           
<div class="container">
  <div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form action = "acreditado.php" method = "post">
      <input type="hidden" name="submitted" value="true">
        <fieldset>
         <h4>Selecciona las materias que ya haz acreditado </h4>
            <!--Materias-->
            <div class="form-group">
                    <label for="materia">Materia</label>
                    <form name="combomateria">
                        <select name="materia" class="form-control" tabindex="6" style="width: 50%; display: inline-block;">
                            <option value="" selected>Elige</option>
                            <?php
                                include('conexion.php');
                                $query="SELECT * FROM materia,semestre WHERE materia.semestre=semestre.numero";
                                $resultado=$con->query($query);
                                while($row=$resultado->fetch_assoc()){
                            ?>
                                <option value="<?php echo $row['id_materia']?>"><?php echo $row['nombremateria'];?></option>
                                <?php
                                    }
                                ?>
                        </select>
                       </form>
            </div>
                <input type="submit" tabindex="7" name="aceptar" value="Aceptar" class="btn btn-primary btn-xl page-scroll" class="btn btn-default">                               
        </fieldset>
      </form>
    </div>
  </div>
</div><br>
<!--Materias Axcreditadas-->
<center><h4>Materias Acreditadas</h4></center>
    <center><table style="width: 80%" class="table table-bordered table-striped" border="2">
        <tbody>
        <tr>
            <td>Semestre</td>
            <td>Materia Acreditada</td>
            <td>Carrera</td>
        </tr>
        <?php
        include('conexion.php');
        $matricula=$_SESSION["usuario_matricula"];
        $query="SELECT DISTINCT semestre,nombremateria,nombrecarrera FROM alumnoxmateria,materia,alumno,semestre,carrera WHERE alumnoxmateria.materia= materia.id_materia  AND alumnoxmateria.matricula=alumno.matricula AND alumno.matricula='$matricula' ORDER bY materia ";
        $resultado=$con->query($query);
        while($row=$resultado->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['semestre'];?></td>
            <td><?php echo $row['nombremateria'];?></td>
            <td><?php echo $row['nombrecarrera'];?></td>
            </tr>

        <?php
            }
        ?>
            
        </tbody>
        </table>
    </center>
<hr>  

<div style="width: 100%; padding-left: 10%; padding-right: 10%">
 <h4>Selecciona las materias que quieres que se abran</h4><hr>
                 <p>Como alumno de la Universidad Autonoma de la Ciudad de México es importante que el seguimiento de tus materias sean de caracter conforme al plan de estudios, se te aconseja solicitar materias las cuales tengan como requisitos las materias acreditadas en tu historial academico. Por este motivo se te recomiendo seguir el plan de estudios de tu carrera y no solicitar materias de grados avanzados en los que necesitas conocimientos de materias previas, sin más dejanos tu solicitud.</p>
</div>
<hr>
<br><br>

<div>
<!--Mandar solicitud-->
<div class="container">
  <div class="row" style="margin-top:10px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-1">
      <form action = "solicitudxalumno.php" method = "post">
      <input type="hidden" name="submitted" value="true">
        <fieldset>
                    <!--Materias-->
                    <div class="form-group">
                            <label for="materia">Materia</label>
                            <form name="combomateria">
                                <select name="materia" class="form-control" tabindex="6" style="width: 50%; display: inline-block;">
                                    <option value="" selected>Elige</option>
                                    <?php
                                        include('conexion.php');
                                        $query="SELECT * FROM materia,semestre WHERE materia.semestre=semestre.numero
                                        ORDER BY numero";
                                        $resultado=$con->query($query);
                                        while($row=$resultado->fetch_assoc()){
                                    ?>
                                        <option value="<?php echo $row['id_materia']?>"><?php echo $row['nombremateria'];?></option>
                                        <?php
                                            }
                                        ?>
                                </select>
                               </form>
                    </div>
                    <!--Selecciona lo horarios que quieres-->
                    <!--Seleccion dia-->
                    <div class="form-group">
                    <label for="dia">Dia preferido</label>
                        <select name="diasolicitado" class="form-control" tabindex="6" style="width: 30%;display: inline-block;">
                                <option value="" selected>Elige</option>
                                <?php
                                    include('conexion.php');
                                    $query="SELECT * FROM dia
                                    ORDER BY idDia";
                                    $resultado=$con->query($query);
                                    while($row=$resultado->fetch_assoc()){
                                ?>
                                    <option value="<?php echo $row['idDia']?>"><?php echo $row['dia'];?></option>
                                    <?php
                                        }
                                    ?>
                        </select>
                    </div>  
                     <!--Seleccion dia-->
                    <div class="form-group">
                    <label for="dia2">Dia preferido 2</label>
                        <select name="diasolicitado2" class="form-control" tabindex="6" style="width: 30%;display: inline-block;">
                                <option value="" selected>Elige</option>
                                <?php
                                    include('conexion.php');
                                    $query="SELECT * FROM dia
                                    ORDER BY idDia";
                                    $resultado=$con->query($query);
                                    while($row=$resultado->fetch_assoc()){
                                ?>
                                    <option value="<?php echo $row['dia']?>"><?php echo $row['dia'];?></option>
                                    <?php
                                        }
                                    ?>
                        </select>
                    </div>  
                     <!--Seleccion dia-->
                    <div class="form-group">
                    <label for="dia3">Dia preferido 3</label>
                        <select name="diasolicitado3" class="form-control" tabindex="6" style="width: 30%;display: inline-block;">
                                <option value="" selected>Elige</option>
                                <?php
                                    include('conexion.php');
                                    $query="SELECT * FROM dia
                                    ORDER BY idDia";
                                    $resultado=$con->query($query);
                                    while($row=$resultado->fetch_assoc()){
                                ?>
                                    <option value="<?php echo $row['dia']?>"><?php echo $row['dia'];?></option>
                                    <?php
                                        }
                                    ?>
                        </select>
                    </div>  
                    <!--Selección hora-->
                    <div class="form-group">
                    <label for="hora">Hora preferida</label>
                        <select name="horasolicitada" class="form-control" tabindex="6" style="width: 40%;display: inline-block;">
                            <option value="" selected>Elige</option>
                            <?php
                                include('conexion.php');
                                $query="SELECT * FROM hora
                                ORDER BY idHora";
                                $resultado=$con->query($query);
                                while($row=$resultado->fetch_assoc()){
                            ?>
                                <option value="<?php echo $row['idHora']?>"><?php echo $row['hora'];?>  <p>Duración 90 min</p></option>
                                <?php
                                    }
                                ?>
                        </select>
                    </div>   
                    <!--Selecciona un profesor candidato--> 
                    <div class="form-group">
                    <label for="profesor">Profesor Candidato</label>
                        <select name="profesor" class="form-control" tabindex="6" style="width: 35%;display: inline-block;">
                            <option value="" selected>Elige</option>
                            <?php
                                include('conexion.php');
                                $query="SELECT * FROM profesor
                                ORDER BY nombreProfesor";
                                $resultado=$con->query($query);
                                while($row=$resultado->fetch_assoc()){
                            ?>
                                <option value="<?php echo $row['idProfesor']?>"><?php echo $row['nombreProfesor'];?>  <?php echo $row['apellidopProfesor'];?> <?php echo $row['apellidomProfesor'];?></option>
                                <?php
                                    }
                                ?>

                        </select>
                        <button type="button" class="btn btn-primary btn-xl page-scroll" data-toggle="modal" data-target="#myModal">Ver profesores</button>
                    </div> 
                <input type="submit" tabindex="7" name="aceptar" value="Aceptar" class="btn btn-primary btn-xl page-scroll" class="btn btn-default">                 
        </fieldset>
      </form>
    </div>
  </div>
</div>
</div><br>
<br><br>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Descripción de algunos profesores de la academia</h4>
        </div>
        <div class="modal-body">
          <center><h4>Lista Profesores</h4></center>
            <center><table style="width: 100%" class="table table-bordered table-striped" border="2">
                <tbody>
                <tr>
                    <td>Nombre</td>
                    <td>ApellidoP</td>
                    <td>ApellidoM</td>
                    <td>Especialidad</td>
                    <td>Materias impartidas</td>                    
                </tr>
                <?php
                include('conexion.php');
                $query="SELECT * FROM profesor";
                $resultado=$con->query($query);
                while($row=$resultado->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['nombreProfesor'];?></td>
                    <td><?php echo $row['apellidopProfesor'];?></td>
                    <td><?php echo $row['apellidomProfesor'];?></td>
                    <td><?php echo $row['especialidad'];?></td>
                    <td><?php echo $row['materiasImpartidas'];?></td>
                <?php
                    }
                ?>                        
                </tr>
         
                </tbody>
                </table>
            </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>


<!--Materias Solicitadas-->
<center><h4>Mis materias solicitadas</h4></center>
    <center><table style="width: 80%" class="table table-bordered table-striped" border="2">
        <tbody>
        <tr>
            <td>Semestre</td>
            <td>Materia Solicitada</td>
            <td>Carrera</td>
            <td>Hora (90min por clase)</td>
            <td>Profesor Candidato</td>
            <td>Día 1</td>
            <td>Día 2</td>
            <td>Día 3</td>
            
            
        </tr>
        <?php
        include('conexion.php');
        $matricula=$_SESSION["usuario_matricula"];
        $query="SELECT * FROM solicitudxalumno,materia,alumno,carrera,dia,hora,profesor WHERE solicitudxalumno.matriculasolicitud=alumno.matricula AND alumno.matricula='$matricula' AND solicitudxalumno.materiasolicitada=materia.id_materia AND  solicitudxalumno.diasolicitado=dia.idDia AND solicitudxalumno.profesorSolicitado=profesor.idProfesor AND solicitudxalumno.horasolicitada=hora.idHora";
        $resultado=$con->query($query);
        while($row=$resultado->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['semestre'];?></td>
            <td><?php echo $row['nombremateria'];?></td>
            <td><?php echo $row['nombrecarrera'];?></td>
            <td><?php echo $row['hora'];?></td>
            <td><?php echo $row['nombreProfesor'];?> <?php echo $row['apellidopProfesor'];?> <?php echo $row['apellidomProfesor'];?></td>
            <td><?php echo $row['dia'];?></td>
            <td><?php echo $row['diasolicitado3'];?></td>
             <td><?php echo $row['diasolicitado2'];?></td>
        <?php
            }
        ?>           
        </tr>
 
        </tbody>
        </table>
    </center>
<hr>

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