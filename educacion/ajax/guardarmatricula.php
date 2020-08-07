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
//$empleado=$_GET['empleado'];
$alumno=$_POST['idalumno'];
$curso=$_POST['idcurso'];
$date=$_POST['fecha'];
$matricula=$_POST['matricula'];
$activo=$_POST['activo'];
$estado='1';
$estado_pago='Pendiente';
$estado2='1';
$tipo_pago='Pendiente';

//$id_usuario=$_SESSION['usuario'];

//$hora=date("H:i:s");



//echo $identidad.' - '.$nombre_c.' - '.$direccion.' - '.$telefono;
//echo "INSERT INTO empleados (Identidad,nombre_c,Direccion,Telefono) VALUES ('$identidad','$nombre_c','$direccion','$telefono')";
$sql1=mysqli_query($db,"SELECT COUNT(*) as existe FROM matricula WHERE idalumno='$alumno' AND fecha='$date'") or die(mysqli_error());
$row1=mysqli_fetch_array($sql1);
if ($row1['existe']==1) {
	echo '<span id="incorrecto">ERROR: Alumno ya ha sido matriculado en el presente año ..</span>';
	?>
	<script type="text/javascript">
		$('input[name=rtn]').focus();
	</script>
<?php
}
if ($row1['existe']==0) {
		$sql=mysqli_query($db,"INSERT INTO matricula(idalumno,idcurso,tipo_m,fecha,estado_ma) VALUES ('$alumno','$curso','$matricula','$date','$estado')") or die(mysqli_error());

		$sql3=mysqli_query($db,"SELECT id_mes FROM meses") or die(mysqli_error());
		while($data=mysqli_fetch_array($sql3)){
			$id_mes=$data['id_mes'];
			
			$sql4=mysqli_query($db,"SELECT monto FROM descripcion_pago WHERE id_detalle='1'") or die(mysqli_error());
		while($data=mysqli_fetch_array($sql4)){
			$monto=$data['monto'];

 $sql2=mysqli_query($db,"INSERT INTO pagos(idalumno_p,mes_pago,estado_pago,total_pago,pendiente,estado2,fecha_an,tipo_pago) VALUES ('$alumno','$id_mes','$estado_pago','$monto','$monto','$estado2','$date','$tipo_pago')") or die(mysqli_error());
		
}
}
		//INSERT INTO pagos (mes_pago) SELECT mes from meses;

//$sql3=mysqli_query($db,"INSERT INTO pagos (mes_pago) SELECT mes from meses") or die(mysqli_error());

/*
$sql1=mysqli_query($db,"INSERT INTO pagos(idalumno,mes_pago,fecha,fecha_a,abono,pendiente,total_pago,fecha_an,estado) VALUES ('$alumno',,'$id_mes','$curso','$matricula','$date','$estado')") or die(mysqli_error());

$sql1=mysqli_query($db,"INSERT INTO pagos(idalumno,fecha,fecha_a,abono,pendiente,total_pago,fecha_an,estado) VALUES ('$alumno','$curso','$matricula','$date','$estado')") or die(mysqli_error());*/

	echo '<span id="correcto">Datos Guardados Correctamente.</span>';
	?>
	<script type="text/javascript">
		$('input[name=idcurso]').val("");
		$('input[name=idalumno]').val("");
		$('SELECT[name=tipo_m]').val("");
		
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
