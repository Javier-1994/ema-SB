<style type="text/css">
	#incorrecto{
		color: red;
		font-weight: bold;
	}
	#correcto{
		color: green;
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
$descripcion=$_POST['descripcion'];
$monto=$_POST['monto'];
$es='1';
$fecha_pago=date('Y-m-d');
$fechaanual=date('Y');

$sql1=mysqli_query($db,"SELECT COUNT(*) as existe FROM descripcion_pago WHERE descripcion='$descripcion'") or die(mysqli_error());
$row1=mysqli_fetch_array($sql1);
if ($row1['existe']==1) {
	echo '<span id="incorrecto">ERROR: La descripcion '.$descripcion.' ya existe, ingrese otra por favor</span>';
	?>
	<script type="text/javascript">
		$('input[name=descripcion]').focus();
	</script>
<?php
}
if ($row1['existe']==0) {
		$sql=mysqli_query($db,"INSERT INTO descripcion_pago (descripcion,monto,estado,fecha_pagos) VALUES ('$descripcion','$monto','$es','$fecha_pago')") or die(mysqli_error());
	echo '<span id="correcto">Datos Guardados Correctamente.</span>';
	?>
	<script type="text/javascript">
		$('input[name=descripcion]').val("");
		$('input[name=monto_m]').val("");
		$("#correcto").fadeOut(3000);
	</script>
<?php
}
} else { 
    header("location: login.php");
} 
//header("location:agregar.php");
?>
