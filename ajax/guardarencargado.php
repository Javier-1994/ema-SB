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
$nombre_e=$_POST['nombre_e'];
$apellido_e=$_POST['apellido_e'];
$identidad_e=$_POST['identidad_e'];
$telefono_e=$_POST['telefono_e'];
$tipo_e=$_POST['tipo_e'];
//$cantidad=$_POST['cantidad'];
//$proveedor=$_POST['proveedor'];
//$id_usuario=$_SESSION['usuario'];

//$hora=date("H:i:s");
//$fecha=date("Y-m-d");


//echo $identidad.' - '.$nombre_e.' - '.$direccion.' - '.$telefono;
//echo "INSERT INTO empleados (Identidad,nombre_e,Direccion,Telefono) VALUES ('$identidad','$nombre_e','$direccion','$telefono')";
$sql1=mysqli_query($db,"SELECT COUNT(*) as existe FROM encargados WHERE identidad_e='$identidad_e'") or die(mysqli_error());
$row1=mysqli_fetch_array($sql1);
if ($row1['existe']==1) {
	echo '<span id="incorrecto">ERROR: La identidad '.$identidad_e.' ya existe, ingrese otra por favor</span>';
	?>
	<script type="text/javascript">
		$('input[name=rtn]').focus();
	</script>
<?php
}
if ($row1['existe']==0) {
		$sql=mysqli_query($db,"INSERT INTO encargados (nombre_e,apellido_e,identidad_e,telefono_e,tipo_e) VALUES ('$nombre_e','$apellido_e','$identidad_e','$telefono_e','$tipo_e')") or die(mysqli_error());
	echo '<span id="correcto">Datos Guardados Correctamente.</span>';
	?>
	<script type="text/javascript">
		$('input[name=nombre_e]').val("");
		$('input[name=apellido_e]').val("");
		$('input[name=identidad_e]').val("");
		$('input[name=telefono_e]').val("");
		$('select[name=tipo_e]').val("");
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
