<?php 
    session_start(); 
    include('config/conec.php');
    if(isset($_SESSION['usuario'])) { 
        session_destroy(); 
        header("Location: login.php"); 
    }else { 
	   echo "Operación incorrecta."; 
    } 
?>