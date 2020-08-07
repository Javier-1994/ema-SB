<?php 
function amatricula(){
  ?>
     

  

    <div class="right_col" role="main"  ><!-- page content -->
 
            <div class="page-title">
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >

                    <?php 
include("modal/registro_matricula.php");
include("modal/editmatricula.php");
include("modal/consultarmatricula.php");
include("modal/close_matricula.php");

                     ?>
                     
             </div>
         </div>    
  <h3>Matrículas</h3>

        <div class="x_panel" >
                        <div class="x_title" >
                 
   <ul class="nav navbar-right panel_toolbox"  >

     <button type='button' class="btn btn-success" id="nuevam" data-toggle="modal" data-target="#nueva_matricula"><span class="icon-user-plus nuevo">
                </span> Agregar Matrícula</button>
                                
                            </ul>
                            <div  class="clearfix" >
                              <h4>Año : <?php 
/*
require_once("config/db.php");
require_once("config/conexion.php");

 $query=mysqli_query($con,"SELECT * FROM  periodo where estado_p='1'");
        $row=mysqli_fetch_array($query);
$estado_factura=$row['estado_p'];
$codigo=$row['codigo_p'];
       if ($estado_factura==1){$text_estado=$codigo;}
            else{$text_estado="No hay Periodo Activo";}*/
         
require_once("config/db.php");
require_once("config/conexion.php");

 $query=mysqli_query($con,"SELECT * FROM  matricula where estado_ma='1'");
        $row=mysqli_fetch_array($query);
$estado=$row['estado_ma'];
       if ($estado==1){$text_estado="Hay mat";}
            else{$text_estado="No hay Matricula";}        
 ?> 
<?php 


$fecha=date("Y");

 ?>
  <?php   echo $fecha; ?>
 </h4>
                            </div>
                        </div>
   <input type="hidden" name="mat" id="mat" value="<?php  echo $text_estado; ?>">
    <script>
     function validacion(){
  var activo = document.getElementById("mat").value;
 //return false;


  if(activo=='No hay Matrícula'){
              document.getElementById("closema").disabled = true;
  
  }else{
     document.getElementById("closema").disabled = false;
            }


          } 
             
   </script>
        
 <div class="outer_div"></div><!-- div cargar los Datos de js/mostrartabla -->
        <!-- contenido-->
<ul class="nav navbar-right panel_toolbox"  >

     <button type='button' class="btn btn-success" id="closema" data-toggle="modal" data-target="#close_matricula"><span class="icon-user-plus nuevo">
                </span> Cerrar Matrícula <?php echo $fecha; ?></button>
                                
                            </ul>
        </div>
        <!--generales-->
</div>
</script>

<script type="text/javascript" src="js/mtablamatricula.js"></script>

 <?php 
}
  ?>
  



 