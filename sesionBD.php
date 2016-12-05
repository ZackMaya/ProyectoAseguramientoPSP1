<?php
session_start();
include('conexion.php');

    $matricula=$_POST["matricula"];
    $password=$_POST["password"];
        
    $emailsql = "SELECT * FROM alumno WHERE matricula='$matricula' and password='$password'";
    $res= $con->query($emailsql);

    if($res->num_rows>0){
    $_SESSION["usuario_matricula"]= $matricula;
        header('Location: panelAlumno.php');
           // echo "sesión éxitosa";
    }else{
        header('Location: sesion.php');
    }
?>
