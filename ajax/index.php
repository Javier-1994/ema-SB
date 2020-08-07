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
    
    <title>CAFFIN</title>

    <div class="right_col" role="main"  ><!-- page content -->
 <div class="" >
            <div class="page-title" >
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >

                   
                     
             </div>
         </div>    
<!-- contenido-->
<!---->

 <!--otro-->
 <style type="text/css">
     @import url(" href="https://fonts.googleapis.com/css?family=Mystery+Quest&display=swap" rel="stylesheet);

.fuente {
  font-family: "Mystery Quest";
  font-size: 150%;
}
#lista5 {
    counter-reset: li; 
    list-style: none; 
    *list-style: decimal; 
    font: 15px 'trebuchet MS', 'lucida sans';
    padding: 0;
    margin-bottom: 4em;
    text-shadow: 0 1px 0 rgba(255,255,255,.5);
}

#lista5 ol {
    margin: 0 0 0 2em; 
}

#lista5 {
    list-style-type: none;
    list-style-type: decimal !ie; /IE 7- hack/
     
    margin: 0;
    margin-left: 1em;
    padding: 0;
     
    counter-reset: li-counter;
}

#lista5 > li{
    position: relative;
    margin-bottom: 1.5em;
    padding: 1.5em;
    background-color: #eaeaea;
}

#lista5 > li:before {
    position: absolute;
    top: -0.3em;
    left: -0.5em;
    width: 1.8em;
    height: 1.2em;
     
    font-size: 2em;
    line-height: 1.2;
    font-weight: bold;
    text-align: center;
    color: #464646;
    background-color: #d0d0d0;
     
    transform: rotate(-20deg);
    -ms-transform: rotate(-20deg);
    -webkit-transform: rotate(-20deg);
    z-index: 99;
    overflow: hidden;
     
    content: counter(li-counter);
    counter-increment: li-counter;
}
 </style>


      
            <h2 style=" text-align: center;font-size: 35px; color:#170202;" class="fuente">Centro Asistencial de Formación Familiar Integral
                <br>
                <img src="img/logoca.png" alt="logo" style="width: 40%;height: 40%;"  class="img-fluid">
                <br>
                Módulo Educación
              
            </h2> 

     
    <!-- Left and right controls -->
 
 


        <!--generales-->
</div>
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