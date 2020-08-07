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
$id_encargado=$_POST['idencargados'];
$nombre=$_POST['nombrep'];
$apellido=$_POST['apellidop'];
$identidad=$_POST['identidadp'];
$telefono=$_POST['telefonop'];
$tipo=$_POST['tipop'];
//$id_usuario=$_SESSION['usuario'];

//$fecha=date("Y-m-d");



$sql=mysqli_query($db,"UPDATE encargados SET identidad_e='$identidad', nombre_e='$nombre', apellido_e='$apellido', telefono_e='$telefono', tipo_e='$tipo'WHERE id_encargado='$id_encargado'") 
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


