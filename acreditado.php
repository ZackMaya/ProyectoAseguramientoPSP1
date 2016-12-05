<?php
session_start();
if(isset($_SESSION["usuario_matricula"])){

	if(isset($_POST['submitted'])){
	include('conexion.php');

	
	$matricula=$_SESSION["usuario_matricula"];
	$materia=$_POST['materia'];

	$sqlinsert = "INSERT INTO alumnoxmateria (materia,matricula) VALUES ('$materia','$matricula')";
      
    	if(!mysqli_query($con,$sqlinsert)){
		die('error de sql...');
		}
		$newrecord = "Tu materia ha sido guardada";
    echo "<script>alert('Acreditación Guardada')</script>";
    header('Location: panelAlumno.php');
	}
}
?>
