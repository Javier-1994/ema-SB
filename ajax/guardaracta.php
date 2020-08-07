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
$idalumno=$_POST['idalumno'];
$fecha_a=$_POST['fecha_a'];
$descripcion_a=$_POST['descripcion_a'];

//echo $identidad.' - '.$nombre.' - '.$direccion.' - '.$telefono;
//echo "INSERT INTO empleados (Identidad,Nombre,Direccion,Telefono) VALUES ('$identidad','$nombre','$direccion','$telefono')";

{
		$sql=mysqli_query($db,"INSERT INTO actas (idalumno,fecha_a,descripcion_a) VALUES ('$idalumno','$fecha_a','$descripcion_a')") or die(mysqli_error());

	echo '<span id="correcto">Datos Guardados Correctamente.</span>';
	?>
	<script type="text/javascript">
		$('input[name=idalumno]').val("");
		$('input[name=fecha_a]').val("");
		$('textarea[name=descripcion_a]').val("");
		//$('input[name=cantidad]').val("");
//		$('input[name=proveedor]').val("");
		$("#correcto").fadeOut(3000);
	</script>
<?php 
}
} else { 
    header("location: login.php");
} 

 ?>
