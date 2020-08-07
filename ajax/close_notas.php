<style type="text/css">
	#incorrecto{
		color: #FFFFFF;
		font-weight: bold;
		background: red;
	}
	#correcto{
		
		color:green;
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

$periodo=$_POST['periodo'];
$asignatura=$_POST['asignatura'];

$estado='2';

//$id_usuario=$_SESSION['usuario'];

//$fecha=date("Y-m-d");


$sal1=mysqli_query($db,"SELECT total,Idalumno,nota_total,nota_recuperacion FROM notas where Idmateria = '$asignatura' and Idperiodo='$periodo' AND  Idnotas='8'" );
 while($row1=mysqli_fetch_array($sal1)){

	 			$idalumno=$row1['Idalumno'];
	 			//$Idperiodo=$row1['Idperiodo'];
	 			$total=$row1['total'];
	 			$nota_total=$row1['nota_total'];
	 			$nota_recuperacion=$row1['nota_recuperacion'];

	 		/*	if ($nota_recuperacion=='0') {
	 				$nota_total1=$total;
	 			}else{
	 				$nota_total1=$nota_recuperacion;
	 			}*/
	 			
if ($total>=70) {
	$estado_clase='Aprobada';
	//$nota_totalc=$total;
}


if ($total<70) {
	$estado_clase='Reprobada';
//$nota_totalc=$nota_total1;

}
//$estado_nota='Reprobada';
/*
$sql=mysqli_query($db,"UPDATE notas SET nota_total='$nota_totalc',nota_recuperacion='$nota_total1',estado_clase='$estado_nota' WHERE Idmateria = '$asignatura' and Idperiodo='$periodo' AND Idnotas='8' ") 
or die(mysql_error());

}*/
}

$sql=mysqli_query($db,"UPDATE notas SET estado_clase='$estado_clase' WHERE Idnotas='8' ") 
or die(mysql_error());

echo '<span id="correcto">Datos Actualizados Correctamente.</span>';

	?>
	<script type="text/javascript">
		
		$("#correcto").fadeOut(4000);
	</script>

<?php

} else { 
    header("location: login.php");
} 

?>


