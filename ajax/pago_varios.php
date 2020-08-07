<?php 
  
session_start();
if(isset($_SESSION['usuario'])&&($_SESSION['tipo']=='1')&&($_SESSION['estado'])) { 

 ?>

<?php 
include("principal.php");
include('ajax/pagos_varios.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagos Varios</title>
</head>
<body>

	<?php
		apagosv();
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