<?php 
function aalumnos(){
  ?>
     



    <script src="css/principal/jquery.mask.js"></script>   

    <div class="right_col" role="main"  ><!-- page content -->
 
            <div class="page-title">
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >

                    <?php 
include("modal/registro_alumnos.php");
include("modal/editalumnos.php");
include("modal/consultaralumnos.php");

                     ?>
                     
             </div>
         </div>    

   
  <h3>Alumnos</h3>

        <div class="x_panel" >
                        <div class="x_title" >
                       
   <ul class="nav navbar-right panel_toolbox"  >
                                <button type='button' class="btn btn-success" data-toggle="modal" data-target="#nuevo_encargado"><span class="icon-user-plus nuevo">
                </span> Agregar alumnos</button>
                                
                            </ul>
                            <div  class="clearfix" ></div>
                        </div>
   
       
 <div class="outer_div"></div><!-- div cargar los Datos de js/mostrartabla -->
        <!-- contenido-->

        
        </div>
        <!--generales-->
</div>
</script>

<script type="text/javascript" src="js/mtablaalumnos.js"></script>

 <?php 
}
  ?>
  



 