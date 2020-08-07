<style type="text/css">
	#incorrecto{
		color: #FFFFFF;
		font-weight: bold;
		background: red;
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
date_default_timezone_set("America/Tegucigalpa");
include("../config/conec.php");
//$empleado=$_GET['empleado'];
$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$pass=$_POST['pass'];
$tipo='1';
$estado='A';

$id_usuario=$_SESSION['usuario'];

$fecha=date("Y-m-d");

//echo $identidad.' - '.$nombre.' - '.$direccion.' - '.$telefono;
//echo "INSERT INTO empleados (Identidad,Nombre,Direccion,Telefono) VALUES ('$identidad','$nombre','$direccion','$telefono')";
$sql1=mysqli_query($db,"SELECT COUNT(*) as existe FROM usuarios WHERE usuario='$usuario'") or die(mysqli_error());
$row1=mysqli_fetch_array($sql1);
if ($row1['existe']==1) {
	//echo '<span id="incorrecto">ERROR: La RTN ' .$rtn. ' ya existe, ingrese otra por favor</span>';

	?>

	<script>
				window.setTimeout(function() {
    $(".alert").fadeTo(3000).slideUp(2000, function(){
        $(this).remove(); 
    });
},3000);
			</script>

	<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Error!</strong>
						El Usuario <?php echo $usuario; ?> ya existe, ingrese otro!
					
				</div>
	<script type="text/javascript">
		$('input[name=usuario]').focus();
	</script>
<?php
}
if ($row1['existe']==0) {
	$sql=mysqli_query($db,"INSERT INTO usuarios(nombre,usuario,pass,tipo,estado,agregado,fecha_ingreso,modificado,fecha_modificacion) VALUES ('$nombre','$usuario','$pass','$tipo','$estado','$id_usuario','$fecha','$id_usuario','$fecha')") or die(mysqli_error());
	//echo '<span id="correcto">Datos Guardados Correctamente.</span>';
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
						Datos de Usuario Guardados Correctamente.
				</div>
	<script type="text/javascript">
		$('input[name=usuario]').val("");
		$('input[name=nombre]').val("");
		$('input[name=pass]').val("");
		$('select[name=tipo]').val("");
		$("#correcto").fadeOut(3000);
	</script>


<?php 
}
} else { 
    header("location: login.php");
} 

 ?>


