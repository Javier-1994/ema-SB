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
$id_usuario=$_POST['id_usuario'];
$cambiopass=$_POST['cambio_pass'];
$antigua=$_POST['antigua'];
$ant=$_POST['ant'];

$id_usuario=$_SESSION['id_usuarios'];

//$fecha=date("Y-m-d");

$sal2=mysqli_query($db,"SELECT  pass FROM usuarios where id_usuarios = '$id_usuario'");
 while($row3=mysqli_fetch_array($sal2)){

	 			if ($row3['pass']==$ant){
	 		
	 		$sql=mysqli_query($db,"UPDATE usuarios SET pass='$cambiopass' WHERE id_usuarios='$id_usuario'") 
or die(mysql_error());
	 		echo '<span id="correcto">Contraseña Actualizada</span>';
 ?>
 <script type="text/javascript">
		$("#correcto").fadeOut(6000);
		$("#incorrecto").fadeOut(4000);
		$('input[name=ant]').val("");
		$('input[name=cambio_pass]').val("");
	</script>

<?php

}if ($row3['pass']!=$ant){
echo '<span id="incorrecto">Contraseña Actual Incorrecta.</span>';
	?>
	<script type="text/javascript">
		
		$("#incorrecto").fadeOut(4000);
	</script>

<?php
}
}
} else { 
    header("location: login.php");
} 

?>


