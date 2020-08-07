<style type="text/css">
	#incorrecto{
		color: #FFFFFF;
		font-weight: bold;
		background: red;
	}
	#correcto{
		
		color:green;
		font-weight: bold;
		
	}
</style>
<?php 
session_start();
if(isset($_SESSION['usuario'])&&($_SESSION['tipo'])&&($_SESSION['estado'])&&($_SESSION['id_usuarios']) ) { 

	//if(isset($_SESSION['usuario'])&&($_SESSION['tipo'])&&($_SESSION['estado'])) { 

 ?>

<?php
include("../config/conec.php");
date_default_timezone_set("America/Tegucigalpa");
$id_periodo=$_POST['idperiodo'];
$codigo=$_POST['codigo'];
$estado='2';
//$id_usuario=$_SESSION['usuario'];

//$fecha=date("Y-m-d");f

$sql=mysqli_query($db,"UPDATE periodo SET  estado_p='$estado' WHERE id_periodo='$id_periodo'") 
or die(mysql_error());

$sql1=mysqli_query($db,"UPDATE asignacionesm SET estado_m='$estado' WHERE idperiodo='$id_periodo'") 
or die(mysql_error());

/*$sql2=mysqli_query($db,"UPDATE matricula SET estado_ma='$estado' WHERE periodo='$codigo'") 
or die(mysql_error());*/


$sql3=mysqli_query($db,"UPDATE notas SET estado_n='$estado'") 
or die(mysql_error());

echo '<span id="correcto">Periodo Academico Finalizado.</span>';
	?>
	<script type="text/javascript">
		
		$("#correcto").fadeOut(4000);
	</script>

<?php

} else { 
    header("location: login.php");
} 

?>
