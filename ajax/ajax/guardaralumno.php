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
$pnombre_a=$_POST['pnombre_a'];
$snombre_a=$_POST['snombre_a'];
$papellido_a=$_POST['papellido_a'];
$sapellido_a=$_POST['sapellido_a'];
$identidad_a=$_POST['identidad_a'];
$direccion_a=$_POST['direccion_a'];
$idencargado=$_POST['idencargado'];
//$cantidad=$_POST['cantidad'];
//$proveedor=$_POST['proveedor'];
//$id_usuario=$_SESSION['usuario'];

//$hora=date("H:i:s");
//$fecha=date("Y-m-d");


//echo $identidad.' - '.$pnombre_a.' - '.$direccion.' - '.$telefono;
//echo "INSERT INTO empleados (Identidad,pnombre_a,Direccion,Telefono) VALUES ('$identidad','$pnombre_a','$direccion','$telefono')";
$sql1=mysqli_query($db,"SELECT COUNT(*) as existe FROM alumnos WHERE identidad_a='$identidad_a'") or die(mysqli_error());
$row1=mysqli_fetch_array($sql1);
if ($row1['existe']==1) {
	echo '<span id="incorrecto">ERROR: La identidad '.$identidad_a.' ya existe, ingrese otra por favor</span>';
	?>
	<script type="text/javascript">
		$('input[name=rtn]').focus();
	</script>
<?php
}
if ($row1['existe']==0) {
		$sql=mysqli_query($db,"INSERT INTO alumnos(pnombre_a,snombre_a,papellido_a,sapellido_a,identidad_a,direccion_a,idencargado) VALUES ('$pnombre_a','$snombre_a','$papellido_a','$sapellido_a','$identidad_a','$direccion_a','$idencargado')") or die(mysqli_error());
	echo '<span id="correcto">Datos Guardados Correctamente.</span>';
	?>
	<script type="text/javascript">
		$('input[name=pnombre_a]').val("");
		$('input[name=snombre_a]').val("");
		$('input[name=papellido_a]').val("");
		$('input[name=sapellido_a]').val("");
		$('input[name=identidad_a]').val("");
		$('input[name=direccion_a]').val("");
		$('select[name=idencargado]').val("");
		//$('input[name=cantidad]').val("");
//		$('input[name=proveedor]').val("");
		$("#correcto").fadeOut(3000);
	</script>
<?php
}
} else { 
    header("location: login.php");
} 
//header("location:agregar.php");
?>
