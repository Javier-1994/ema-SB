<?php 
  
session_start();
if(isset($_SESSION['usuario'])&&($_SESSION['tipo']=='2')&&($_SESSION['estado'])) { 

 ?>

<?php 
include("principal.php");
include('ajax/ingreso_notas.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notas</title>
</head>
<body>
	<?php
		aingreso_notas();
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