<?php 
function amaestros(){
  ?>
     



    <script src="css/principal/jquery.mask.js"></script>   
    <div class="right_col" role="main"  ><!-- page content -->
 
            <div class="page-title">
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >

                    <?php 
include("modal/registro_maestros.php");
include("modal/editmaestros.php");
include("modal/consultarmaestros.php");

                     ?>
                     
             </div>
         </div>    

   
  <h3>Maestros</h3>

        <div class="x_panel" >
                        <div class="x_title" >
                       
   <ul class="nav navbar-right panel_toolbox"  >
                                <button type='button' class="btn btn-success" data-toggle="modal" data-target="#nuevo_maestro"><span class="icon-user-plus nuevo">
                </span> Agregar maestro</button>
                                
                            </ul>
                            <div  class="clearfix" ></div>
                        </div>
   
       
 <div class="outer_div"></div><!-- div cargar los Datos de js/mostrartabla -->
        <!-- contenido-->

        
        </div>
        <!--generales-->
</div>
</script>

<script type="text/javascript" src="js/mtablamaestros.js"></script>

 <?php 
}
  ?>
  



 