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
$id_producto=$_POST['idprod'];
$nombre=$_POST['nombrep'];
$costo=$_POST['costop'];
$precio=$_POST['preciop'];
$codigo=$_POST['codigop'];
$linea=$_POST['lineap'];
$id_usuario=$_SESSION['usuario'];

$fecha=date("Y-m-d");



$sql=mysqli_query($db,"UPDATE producto SET cod_producto='$codigo', nombre_prod='$nombre', costo='$costo', precio='$precio', linea='$linea',id_usuario_modifica='$id_usuario', fecha_modifica='$fecha' WHERE id_producto='$id_producto'") 
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


