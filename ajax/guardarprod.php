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
$nombre=$_POST['nombre'];
$costo=$_POST['costo'];
$precio=$_POST['precio'];
$codigo=$_POST['codigo'];
$linea=$_POST['linea'];
//$cantidad=$_POST['cantidad'];
//$proveedor=$_POST['proveedor'];
$id_usuario=$_SESSION['usuario'];

//$hora=date("H:i:s");
$fecha=date("Y-m-d");


//echo $identidad.' - '.$nombre.' - '.$direccion.' - '.$telefono;
//echo "INSERT INTO empleados (Identidad,Nombre,Direccion,Telefono) VALUES ('$identidad','$nombre','$direccion','$telefono')";
$sql1=mysqli_query($db,"SELECT COUNT(*) as existe FROM producto WHERE cod_producto='$codigo'") or die(mysqli_error());
$row1=mysqli_fetch_array($sql1);
if ($row1['existe']==1) {
	echo '<span id="incorrecto">ERROR: El codigo '.$codigo.' ya existe, ingrese otra por favor</span>';
	?>
	<script type="text/javascript">
		$('input[name=rtn]').focus();
	</script>
<?php
}
if ($row1['existe']==0) {
		$sql=mysqli_query($db,"INSERT INTO producto (nombre_prod,costo,precio,cod_producto,linea,id_usuario,fecha_creacion) VALUES ('$nombre','$costo','$precio','$codigo','$linea','$id_usuario','$fecha')") or die(mysqli_error());
	echo '<span id="correcto">Datos Guardados Correctamente.</span>';
	?>
	<script type="text/javascript">
		$('input[name=nombre]').val("");
		$('input[name=costo]').val("");
		$('input[name=precio]').val("");
		$('input[name=codigo]').val("");
		$('input[name=linea]').val("");
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
