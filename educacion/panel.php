<?php 
  
session_start();
if(isset($_SESSION['usuario'])&&($_SESSION['tipo']=='1')&&($_SESSION['estado'])) { 
    // $_SESSION['user_login_status'] != 1)

 ?>
<?php 
include("principal.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Esc.M.A</title>

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

<div class="container"style="width: 90%;" >
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel"style="width: 90%;" >
    <!-- Indicators -->
    <ol class="carousel-indicators" style="width: 90%;" >
      <li data-target="#myCarousel" data-slide-to="0" class="inactive"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
       
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style=" width: 100%; background:black,white">
      <div class="item active">
      
            <h2 style=" text-align: center;font-size: 35px; color:#170202;" class="fuente">Cuerpo, Mente y Alma
                <br>
                <img src="img/logo_CAFFIN.png" alt="" style="width: 485px; height: 485px;">
                <br>
                Módulo Educación
              
            </h2> 

      </div>

    </div>
    </div>

    <!-- Left and right controls -->
 
  </div>

<script type="text/javascript">
        $('.carousel').carousel({
      interval: 8000
    })
</script>

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