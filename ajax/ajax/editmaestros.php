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
$id_maestro=$_POST['idmaestro'];
$nombre=$_POST['nombrep'];
$apellido=$_POST['apellidop'];
$identidad=$_POST['identidadp'];
$telefono=$_POST['telefonop'];
$estado=$_POST['estadop'];
//$id_usuario=$_SESSION['usuario'];

//$fecha=date("Y-m-d");



$sql=mysqli_query($db,"UPDATE maestros SET identidad_m='$identidad', nombre_m='$nombre', apellido_m='$apellido', telefono_m='$telefono', estado_m='$estado'WHERE id_maestro='$id_maestro'") 
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


