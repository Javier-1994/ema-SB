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
//$empleado=$_GET['empleado'];
$idmaestro=$_POST['idmaestro'];
$idperiodo=$_POST['periodo'];
$asignatura_uno=$_POST['asignatura_uno'];
$asignatura_dos=$_POST['asignatura_dos'];
$asignatura_tres=$_POST['asignatura_tres'];
$estado='1';
$estadou='A';

//echo $identidad.' - '.$nombre.' - '.$direccion.' - '.$telefono;
//echo "INSERT INTO empleados (Identidad,Nombre,Direccion,Telefono) VALUES ('$identidad','$nombre','$direccion','$telefono')";

{
		// $sql=mysqli_query($db,"INSERT INTO asignacionesm (idmaestro,idperiodo,asignatura_uno,asignatura_dos,asignatura_tres,estado_m) VALUES ('$idmaestro','$idperiodo','$asignatura_uno','$asignatura_dos','$asignatura_tres','$estado')") or die(mysqli_error());

$sql_existe=mysqli_query($db,"SELECT COUNT(*) as existe FROM asignacionesm WHERE idmaestro='$idmaestro' AND idperiodo='$idperiodo'") or die(mysqli_error());
$row1=mysqli_fetch_array($sql_existe);
if ($row1['existe']==3) {
	echo '<span id="incorrecto">ERROR: Este maestro ya tiene sus tres clases asignadas, asignar a otro maestro...</span>';
	echo "<br>";


	?>
	<script type="text/javascript">
		$('select[name=idmaestro]').focus();
		$("#incorrecto").fadeOut(4000);
	</script>
<?php
}

if ($row1['existe']==0) {

		$sql=mysqli_query($db,"INSERT INTO asignacionesm (idmaestro,idperiodo,asignatura_a,estado_m) VALUES ('$idmaestro','$idperiodo','$asignatura_uno','$estado')") or die(mysqli_error());

		$sql1=mysqli_query($db,"INSERT INTO asignacionesm (idmaestro,idperiodo,asignatura_a,estado_m) VALUES ('$idmaestro','$idperiodo','$asignatura_dos','$estado')") or die(mysqli_error());

		$sql2=mysqli_query($db,"INSERT INTO asignacionesm (idmaestro,idperiodo,asignatura_a,estado_m) VALUES ('$idmaestro','$idperiodo','$asignatura_tres','$estado')") or die(mysqli_error());

$sql4=mysqli_query($db,"UPDATE usuarios SET estado='$estadou' WHERE usuario='$idmaestro'") 
or die(mysql_error());

	echo '<span id="correcto">Datos Guardados Correctamente.</span>';
	?>
	<script type="text/javascript">
		$('select[name=idmaestro]').val("");
		$('select[name=idperiodo]').val("");
		$('select[name=asignatura_uno]').val("");
		$('select[name=asignatura_dos]').val("");
		$('select[name=asignatura_tres]').val("");
		//$('input[name=cantidad]').val("");
//		$('input[name=proveedor]').val("");
		$("#correcto").fadeOut(3000);
	</script>
<?php

}
 
}
} else { 
    header("location: login.php");
} 

 ?>
