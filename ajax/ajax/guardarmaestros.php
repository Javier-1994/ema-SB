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
date_default_timezone_set("America/Tegucigalpa");
$nombre_m=$_POST['nombre_m'];
$apellido_m=$_POST['apellido_m'];
$identidad_m=$_POST['identidad_m'];
$telefono_m=$_POST['telefono_m'];
$estado_m=$_POST['estado_m'];
$tipo='2';
$estado='I';
//$proveedor=$_POST['proveedor'];
$id_usuario=$_SESSION['usuario'];

//$hora=date("H:i:s");
$fecha=date("Y-m-d");


//echo $identidad.' - '.$nombre_m.' - '.$direccion.' - '.$telefono;
//echo "INSERT INTO empleados (Identidad,nombre_m,Direccion,Telefono) VALUES ('$identidad','$nombre_m','$direccion','$telefono')";
$sql1=mysqli_query($db,"SELECT COUNT(*) as existe FROM maestros m WHERE m.identidad_m='$identidad_m'") or die(mysqli_error());
$row1=mysqli_fetch_array($sql1);
if ($row1['existe']==1) {
	echo '<span id="incorrecto">ERROR: La identidad '.$identidad_m.' ya existe, ingrese otra por favor</span>';
	?>
	<script type="text/javascript">
		$('input[name=rtn]').focus();
	</script>
<?php
}
if ($row1['existe']==0) {



		$sql=mysqli_query($db,"INSERT INTO maestros (nombre_m,apellido_m,identidad_m,telefono_m,estado_m) VALUES ('$nombre_m','$apellido_m','$identidad_m','$telefono_m','$estado_m')") or die(mysqli_error());

		$sql1=mysqli_query($db,"INSERT INTO usuarios(nombre,usuario,pass,tipo,estado,fecha_ingreso,agregado) VALUES ('$nombre_m','$identidad_m','$identidad_m','$tipo','$estado','$fecha','$id_usuario')") or die(mysqli_error());

	echo '<span id="correcto">Datos Guardados Correctamente.</span>';
	?>
	<script type="text/javascript">
		$('input[name=nombre_m]').val("");
		$('input[name=apellido_m]').val("");
		$('input[name=identidad_m]').val("");
		$('input[name=telefono_m]').val("");
		$('SELECT[name=estado_m]').val("");
		$("#correcto").fadeOut(3000);
	</script>
<?php
}
} else { 
    header("location: login.php");
} 
//header("location:agregar.php");
?>
