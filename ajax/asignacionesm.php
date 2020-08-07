<?php 
function aasignacionesm(){
  ?>
     



<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script> -->
    <link rel="stylesheet" type="text/css" href="css/select2.min.css"> 
     <link rel="stylesheet" type="text/css" href="css/select2.css">

    <div class="right_col" role="main"  ><!-- page content -->
 
            <div class="page-title">
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >

                    <?php 
include("modal/registro_asignacionesm.php");
include("modal/editasignacionesm.php");
include("modal/consultarasignacionesm.php");

                     ?>
                     
             </div>
         </div>    

   
  <h3>Asignaciones</h3>

        <div class="x_panel" >
                        <div class="x_title">
                       
   <ul class="nav navbar-right panel_toolbox">
                                <button type='button' class="btn btn-success" id="nuevaa" data-toggle="modal" data-target="#nueva_asignacion"><span class="icon-user-plus nuevo">
                </span> Agregar asignación</button>
                                
                            </ul>
                            <div  class="clearfix" >
                        
                        <h4> Periodo:
<?php 
require_once("config/db.php");
require_once("config/conexion.php");

$query=mysqli_query($con,"SELECT * FROM  periodo where estado_p='1'");
        $row=mysqli_fetch_array($query);
$estado_factura=$row['estado_p'];
$codigo=$row['codigo_p'];
       if ($estado_factura==1){$text_estado=$codigo;}
            else{$text_estado="No hay Periodo Activo";}
                 
 ?> 
<?php 
$prueba="jairo";



 ?>
  <?php   echo $text_estado; ?>
 </h4>
                            </div>
                        </div>
   <input type="hidden" name="ac" id="ac" value="<?php  echo $text_estado; ?>">
   <script>
     function validacion(){
  var activo = document.getElementById("ac").value;
 //return false;


  if(activo=='No hay Periodo Activo'){
              document.getElementById("nuevaa").disabled = true;
  
  }else{
     document.getElementById("nuevaa").disabled = false;
            }


          }  
   </script>
   
       
 <div class="outer_div"></div><!-- div cargar los Datos de js/mostrartabla -->
        <!-- contenido-->

        
        </div>
        <!--generales-->
</div>

</script>

<script type="text/javascript" src="plugins/select2/select2.full.min.js"></script>
<script type="text/javascript" src="js/select2.min.js"></script>
<script type="text/javascript" src="js/mtablaasignacionesm.js"></script>

 <?php 
}
  ?>
  

 