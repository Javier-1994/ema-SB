<?php 
  
session_start();
if(isset($_SESSION['usuario'])&&($_SESSION['tipo']=='1')&&($_SESSION['estado'])) { 

 ?>

<?php 
include("principal.php");
include('ajax/encargados.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Encargados</title>
</head>
<body>
	<?php
		aencargados();
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
 