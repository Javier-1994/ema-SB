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
$id_alumno=$_POST['idalumno'];
$pnombre_a=$_POST['pnombrep'];
$snombre_a=$_POST['snombrep'];
$papellido_a=$_POST['papellidop'];
$sapellido_a=$_POST['sapellidop'];
$identidad_a=$_POST['identidadp'];
$direccion_a=$_POST['direccionp'];
$idencargado=$_POST['idencargadop'];
//$id_usuario=$_SESSION['usuario'];

//$fecha=date("Y-m-d");



$sql=mysqli_query($db,"UPDATE alumnos SET identidad_a='$identidad_a', pnombre_a='$pnombre_a', snombre_a='$snombre_a', papellido_a='$papellido_a', sapellido_a='$sapellido_a', direccion_a='$direccion_a', idencargado='$idencargado'WHERE id_alumno='$id_alumno'") 
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


