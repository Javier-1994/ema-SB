<?php 
  
session_start();
if(isset($_SESSION['usuario'])&&($_SESSION['tipo'])&&($_SESSION['estado'])) { 
    // $_SESSION['user_login_status'] != 1)

 ?>
<?php 
include("principal.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <title>EMA</title>

    <div class="right_col" role="main"  ><!-- page content -->


<center><img src="img/HOME1.png" alt="logo" style="width: 100%;height: 90%;"  class="img-fluid"></center>


              
<!-- contenido-->
<!---->

 <!--otro-->
 <style type="text/css">
     @import url(" href="https://fonts.googleapis.com/css?family=Mystery+Quest&display=swap" rel="stylesheet);

.fuente {
  font-family: "Mystery Quest";
  font-size: 150%;


}

 </style>

        <!--generales-->
</div>





<?php 
include("footer.php");
 ?>

 <?php 
} else { 
    header("location: login.php");
} 

 ?>

 </body>
</html>