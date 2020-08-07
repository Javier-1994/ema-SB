<?php 
  
session_start();
if(isset($_SESSION['usuario'])&&($_SESSION['tipo'])&&($_SESSION['estado'])) { 

 ?>

<?php 
include("principal.php");
include('ajax/asistencias.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cursos</title>
</head>
<body>
	<?php
		asistencia();
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