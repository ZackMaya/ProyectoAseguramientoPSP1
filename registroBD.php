<?php
if(isset($_POST['submitted'])){
	include('conexion.php');
		$nombre = $_POST['nombre'];
		$matricula = $_POST['matricula'];
		$password = $_POST['password'];
		//Valida si la matricula ya esta registrada
		$selesql = "SELECT * FROM alumno WHERE matricula='$matricula'";
		$resultado= $con->query($selesql);
		if($resultado->num_rows>0){ 
		    //se manda a una página con mensaje explicando el correo ya registrado, o en este caso regresa y no inicia sesión
		    header('Location: matriculaexistente.php');
		    echo "La matricula que quiere utilizar ya existe en la BD";

		}
		else{
			$sqlinsert ="INSERT INTO alumno (matricula,nombre,password) VALUES('$matricula','$nombre','$password')";
			if(!mysqli_query($con,$sqlinsert)){
				die('error de conexion...');
			}
		$newrecord = "Tu registro ha sido éxitoso";
		session_start();
		$_SESSION["usuario_matricula"]=$matricula;
		 header('Location: panelAlumno.php');
		}
}
?>


