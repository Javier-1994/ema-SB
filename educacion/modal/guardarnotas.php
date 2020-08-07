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
$idmateria=$_POST['idmateria'];
$idperiodo=$_POST['idperiodo'];
$idnotas=$_POST['idnotas'];
$conducta=$_POST['conducta'];
$asistencia=$_POST['asistencia'];
$acum1=$_POST['acum1'];
$acum2=$_POST['acum2'];
$acum3=$_POST['acum3'];
$prueba1=$_POST['prueba1'];
$prueba2=$_POST['prueba2'];
$prueba3=$_POST['prueba3'];
$examen=$_POST['examen'];


$sql_existe=mysqli_query($db,"SELECT COUNT(*) as existe FROM notas WHERE Idalumno='$idalumno' and Idmateria='$idmateria'") or die(mysqli_error());
$row1=mysqli_fetch_array($sql_existe);
if ($row1['existe']==1) {
	$sql=mysqli_query($db,"UPDATE notas SET Idalumno='$idalumno', Idperiodo='$idperiodo', Idmateria='$idmateria', conducta='$conducta', asistencia='$asistencia', acum1='$acum1', acum2='$acum2', acum3='$acum3',prueba1='$prueba1', prueba2='$prueba2' , prueba3='$prueba3' , examen='$examen' WHERE Idnotas='$idnotas'") 
		or die(mysql_error());
	echo '<span id="correcto">Datos Actualizados Correctamente.</span>';
	?>
	<script type="text/javascript">
		$("#correcto").fadeOut(3000);
	</script>
<?php
}

if ($row1['existe']==0) {

		$sql=mysqli_query($db,"INSERT INTO notas (Idalumno,Idperiodo,Idmateria,conducta,asistencia,acum1,acum2,acum3,prueba1,prueba2,prueba3,examen,total,estado_n) VALUES ('$idalumno','$idperiodo','$idmateria','$conducta','$asistencia','$acum1','$acum2','$acum3','$prueba1','$prueba2','$prueba3','$examen','0','1')") or die(mysqli_error());

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
