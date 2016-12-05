<?php
session_start();
if(isset($_SESSION["usuario_matricula"])){

	if(isset($_POST['submitted'])){
	include('conexion.php');

	$hora=$_POST['horasolicitada'];
	$dia=$_POST['diasolicitado'];
	$dia2=$_POST['diasolicitado2'];
	$dia3=$_POST['diasolicitado3'];
	$profe=$_POST['profesor'];
	$matricula=$_SESSION["usuario_matricula"];
	$materia=$_POST['materia'];
	

	//$sqlinsert = "INSERT INTO solicitudxalumno (matriculasolicitud,materiasolicitada) VALUES ('$matricula','$materia')";

	$sqlinsert = "INSERT INTO solicitudxalumno (matriculasolicitud,materiasolicitada,horasolicitada,diasolicitado,diasolicitado2,diasolicitado3,profesorSolicitado) VALUES ('$matricula','$materia','$hora','$dia','$dia2','$dia3','$profe')";
      
    	if(!mysqli_query($con,$sqlinsert)){
		die('error de sql...');
		}
		$newrecord = "Tu materia ha sido guardada";
    echo "<script>alert('Acreditación Guardada')</script>";
    header('Location: panelAlumno.php');
	}
}
?>