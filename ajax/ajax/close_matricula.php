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

$fecha=$_POST['fecha'];
$estado='2';

//$id_usuario=$_SESSION['usuario'];

//$fecha=date("Y-m-d");



$sql=mysqli_query($db,"UPDATE matricula SET estado_ma='2'") 
or die(mysql_error());
echo '<span id="correcto">Datos Actualizados Correctamente.</span>';
	?>
	<script type="text/javascript">
		
		$("#correcto").fadeOut(4000);
	</script>

<?php

} else { 
    header("location: login.php");
} 

?>


