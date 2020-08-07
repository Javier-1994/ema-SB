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
$nombre_asig=$_POST['nombre_asig'];
$codigo_asig=$_POST['codigo_asig'];
$idcurso=$_POST['idcurso'];
$estado='1';
//$cantidad=$_POST['cantidad'];
//$proveedor=$_POST['proveedor'];
//$id_usuario=$_SESSION['usuario'];

//$hora=date("H:i:s");
//$fecha=date("Y-m-d");


//echo $identidad.' - '.$nombre_asig.' - '.$direccion.' - '.$telefono;
//echo "INSERT INTO empleados (Identidad,nombre_asig,Direccion,Telefono) VALUES ('$identidad','$nombre_asig','$direccion','$telefono')";
$sql1=mysqli_query($db,"SELECT COUNT(*) as existe FROM asignatura WHERE codigo_asig='$codigo_asig'") or die(mysqli_error());
$row1=mysqli_fetch_array($sql1);
if ($row1['existe']==1) {
	echo '<span id="incorrecto">ERROR: El codigo '.$codigo_asig.' ya existe, ingrese otra por favor</span>';
	?>
	<script type="text/javascript">
		$('input[name=rtn]').focus();
	</script>
<?php
}
if ($row1['existe']==0) {
		$sql=mysqli_query($db,"INSERT INTO asignatura(nombre_asig,codigo_asig,idcurso,estado_a) VALUES ('$nombre_asig','$codigo_asig','$idcurso','$estado')") or die(mysqli_error());
	echo '<span id="correcto">Datos Guardados Correctamente.</span>';
	?>
	<script type="text/javascript">
		$('input[name=nombre_asig]').val("");
		$('input[name=codigo_asig]').val("");
		$('select[name=idcurso]').val("");
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
