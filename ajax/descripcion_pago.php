<?php 
function adescripcion_pago(){
  ?>
     

    <div class="right_col" role="main"  ><!-- page content -->
 
            <div class="page-title">
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >

                    <?php 
include("modal/registro_detalle.php");
include("modal/editadetalle.php");
include("modal/consultadetalle.php");

                     ?>
                     
             </div>
         </div>    
  <h3>Descripción de pago</h3>

        <div class="x_panel" >
                        <div class="x_title" >
                 
   <ul class="nav navbar-right panel_toolbox"  >

     <button type='button' class="btn btn-success" id="nuevad" data-toggle="modal" data-target="#nueva_descripcion"><span class="icon-user-plus nuevo"></span> Agregar descripción de pago</button>

                      
                            </ul>
                            <div  class="clearfix" >
                              
                            </div>
                        </div>
  
       
 <div class="outer_div"></div><!-- div cargar los Datos de js/mostrartabla -->
        <!-- contenido-->

        
        </div>
        <!--generales-->
</div>
</script>

<script type="text/javascript" src="js/mtabladetallep.js"></script>

 <?php 
}
  ?>
  



 