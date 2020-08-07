    <?php
session_start();
include('config/conec.php');
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
$usuario1=$_SESSION['usuario'];


$sql=mysqli_query($db,"SELECT * FROM usuarios WHERE usuario='$usuario' AND pass='$pass'  AND estado='A' ") or die(mysqli_error());
if($row = mysqli_fetch_array($sql)) { 
  $_SESSION['id_usuarios'] = $row["id_usuarios"];
	$_SESSION['nombre'] = $row["nombre"];
	$_SESSION['usuario'] = $row["usuario"];
  $_SESSION['tipo'] = $row["tipo"];
  $_SESSION['estado'] = $row["estado"];
  $_SESSION['pass'] = $row["pass"];

 //header("Location: index.php"); 
   //echo "Acceso concedido, redireccionando...";

    ?>
    <!--

    <div class="alert alert-success">
  <strong>Acceso concedido!</strong> espere redireccionando...<a href="#" class="alert-link">!</a>.
</div>
-->
<br>
 <div class="alert alert-success">
  <strong>Espere!</strong> redireccionando...<a href="#" class="alert-link"> !</a>.
</div>

    <script language="javascript">
        window.setTimeout('location.href="index.php"',500)
    </script>
    <?php

}else{ 
    //header("Location: login.php"); 
    //echo "Usuario o contrase&ntilde;a incorrectos";
//} 

?>
<br>
  <div class="alert alert-danger">
  <strong>Error!</strong>Usuario o contrase&ntilde;a incorrectos <a href="#" class="alert-link"> !</a>.
</div>

<?php 

}
 ?> 
