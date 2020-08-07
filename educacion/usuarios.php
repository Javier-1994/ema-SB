<?php 
session_start();
if(isset($_SESSION['usuario'])&&($_SESSION['tipo'])&&($_SESSION['estado'])) { 
 ?>

<?php 
include("principal.php");
include('ajax/usuarios.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
</head>
<body>
	<?php
		ausuarios();
	?>
</div>
	<?php 
include("footer.php");
 ?>
</body>
</html>
<?php 
} else { 
    header("location: login.php");
} 

 ?>