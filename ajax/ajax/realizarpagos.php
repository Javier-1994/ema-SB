
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
date_default_timezone_set("America/Tegucigalpa");
$id_pagos=$_POST['id_pagos'];
$ad=$_POST['ad'];
$saldop=$_POST['saldop'];
$monto_pago=$_POST['monto_pago'];
$tipo=$_POST['tipo'];
$fecha_a=date("Y-m-d");

$estado='2';

$estado_pago='Pagado';

$tipo_pago='Credito';
$tipo_pago1='Contado';
$total_abono=0;

if ( $tipo == 'Credito') {
//include("../config/conexion1.php");
	
 $sal1=mysqli_query($db,"SELECT  abono_p,total_pago FROM pagos where id_pagos = $id_pagos");
 while($row1=mysqli_fetch_array($sal1)){

	 			$abono_p=$row1['abono_p'];
	 			$total_pago=$row1['total_pago'];
	 			$total_abono = $abono_p+$ad ;
	
if ($total_abono==$total_pago) {
	
	$sql2 =mysqli_query($db,"UPDATE pagos SET fecha_a='$fecha_a',abono_p='$total_abono',pendiente='0',estado2='$estado',estado_pago='$estado_pago',tipo_pago='$estado_pago' WHERE id_pagos='$id_pagos'") or die(mysqli_error());					
echo '<span id="correcto"> Cuota a Credito Cancelada Correctamente.</span>';
}else{
	$sql3=mysqli_query($db,"UPDATE pagos SET fecha_a='$fecha_a',abono_p='$total_abono',pendiente='$saldop'
		,tipo_pago='$tipo_pago' WHERE id_pagos='$id_pagos'") or die(mysqli_error());	
		echo '<span id="correcto">Abono Realizado Correctamente.</span>';				
}
}


}

if ( $tipo == 'Contado') {
//include("../config/conexion1.php");
	
	$sql4=mysqli_query($db,"UPDATE pagos SET fecha='$fecha_a',pendiente='0',estado2='$estado',estado_pago='$estado_pago',tipo_pago='$tipo_pago1' WHERE 
	id_pagos='$id_pagos'") or die(mysqli_error());	
	echo '<span id="correcto"> Cuota Cancelada Correctamente.</span>';				
}


	?>
	<script type="text/javascript">

		$('input[name=abono]').val("");
		$("#correcto").fadeOut(5000);
		
	</script>

<?php

} else { 
    header("location: login.php");
} 

?>


