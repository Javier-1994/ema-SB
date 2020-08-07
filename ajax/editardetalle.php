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
$id_detalle=$_POST['iddetalle'];
$monto=$_POST['montoe'];
$descripcion=$_POST['descripcione'];
$quita=$_POST['quita'];

//$id_usuario=$_SESSION['usuario'];

//$fecha=date("Y-m-d");f

$sql=mysqli_query($db,"UPDATE descripcion_pago SET descripcion='$descripcion', monto='$monto', estado='$quita' WHERE id_detalle='$id_detalle'") 
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


