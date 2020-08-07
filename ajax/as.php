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

$idalumno=$_POST['idalumno'];
$idmaestro=$_POST['idmaestro'];
$idperiodo=$_POST['idperiodo'];
$fecha=$_POST['fecha'];
//$fecha=date("Y-m-d");
$tipo=$_POST['tipoa'];




//$estadoc='Cursando';
$sql_existe=mysqli_query($db,"SELECT COUNT(*) as existe FROM asistencia WHERE idalumno='$idalumno' 
	and fecha='$fecha' ") or die(mysqli_error());
$row1=mysqli_fetch_array($sql_existe);
if ($row1['existe']==1) {

	$sql=mysqli_query($db,"UPDATE asistencia SET tipo='$tipo' WHERE idalumno='$idalumno'
		and fecha='$fecha'") 
		or die(mysql_error());
	echo '<span id="correcto">Datos Actualizados Correctamente.</span>';
	?>
	<script type="text/javascript">
		$("#correcto").fadeOut(3000);
	</script>
<?php

}


if ($row1['existe']==0) {

		$sql=mysqli_query($db,"INSERT INTO asistencia (fecha,tipo,idalumno,idmaestro,idperiodo) VALUES
		 ('$fecha','$tipo','$idalumno','$idmaestro','$idperiodo')") or die(mysqli_error());

		/*	$sql=mysqli_query($db,"INSERT INTO asistencia (idalumno,tipo) VALUES
		 ('$idalumno','$tipo')") or die(mysqli_error());
*/
	echo '<span id="correcto">Datos Guardados Correctamente.</span>';
	?>
	<script type="text/javascript">
		$("#correcto").fadeOut(3000);
	</script>
<?php

}
 
} else { 
    header("location: login.php");
} 

 ?>
