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
$id=$_POST['id_usuario'];
$estado=$_POST['estadou'];
$id_usuario=$_SESSION['usuario'];

$fecha=date("Y-m-d");



$sql=mysqli_query($db,"UPDATE usuarios SET estado='$estado', fecha_modificacion='$fecha', modificado='$id_usuario' WHERE id_usuarios='$id'") or die(mysql_error());
//echo '<span id="correcto">Datos Actualizados Correctamente.</span>';
	?>

	<script>
				window.setTimeout(function() {
    $(".alert").fadeTo(3000).slideUp(2000, function(){
        $(this).remove(); 
    });
},3000);
			</script>
	<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						Datos modificados Correctamente.
				</div>
	<script type="text/javascript">
		
		$("#correcto").fadeOut(4000);
	</script>

<?php 

} else { 
    header("location: login.php");
} 

 ?>



