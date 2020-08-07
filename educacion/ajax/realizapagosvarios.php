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
if(isset($_SESSION['usuario'])&&($_SESSION['tipo'])&&($_SESSION['estado'])&&($_SESSION['id_usuarios'])) { 

	//if(isset($_SESSION['usuario'])&&($_SESSION['tipo'])&&($_SESSION['estado'])) { 

 ?>

<?php
include("../config/conec.php");

date_default_timezone_set("America/Tegucigalpa");
$idalumno=$_POST['idalumno'];
$variosp=$_POST['variosp'];

//$date=$_POST['fecha'];
$estado='2';
//$proveedor=$_POST['proveedor'];
//$id_usuario=$_SESSION['usuario'];

//$hora=date("H:i:s");
$fecha=date("Y-m-d");
$fa=date("Y");

//echo $identidad.' - '.$nombre_c.' - '.$direccion.' - '.$telefono;
//echo "INSERT INTO empleados (Identidad,nombre_c,Direccion,Telefono) VALUES ('$identidad','$nombre_c','$direccion','$telefono')";

$sql1=mysqli_query($db,"SELECT COUNT(*) as existe FROM pagos_varios WHERE id_pago='$variosp' and alumnoid='$idalumno'
 and fa='$fa'") or die(mysqli_error());
$row1=mysqli_fetch_array($sql1);
if ($row1['existe']==1) {
	echo '<span id="incorrecto">ERROR: Pago ya esta cancelado
	</span>';
	?>
	<script type="text/javascript">
		$("#incorrecto").fadeOut(5000);
		$('select[name=variosp]').focus();
		$('select[name=variosp]').val("");
	</script>
<?php
}
if ($row1['existe']==0) {
 $sal1=mysqli_query($db,"SELECT  monto FROM descripcion_pago where id_detalle = $variosp");
 while($row1=mysqli_fetch_array($sal1)){

	 			$monto=$row1['monto'];
	 		

		$sql=mysqli_query($db,"INSERT INTO pagos_varios(alumnoid,total,fecha_varios,estado_varios,id_pago,fa) VALUES ('$idalumno','$monto','$fecha','$estado','$variosp','$fa')") or die(mysqli_error());
	echo '<span id="correcto">Datos Guardados Correctamente.</span>';
	?>
	<script type="text/javascript">
		$('input[name=idalumno]').val("");
		$('select[name=variosp]').val("");
	
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
//header("location:agregar.php");
?>
