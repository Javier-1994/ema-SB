

    <?php 
function ausuarios(){
    
require_once("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("config/conexion.php");//Contiene funcion que conecta a la base de datos
    

     ?>
      <script src="css/principal/jquery.mask.js"></script>   
    <div class="right_col" role="main"  ><!-- page content -->
 <div class="" >
            <div class="page-title" >
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >

                    <?php 
include("modal/nuevo_usuario.php");
include("modal/edit_usuario.php");

                     ?>
                     
             </div>
         </div>    
  <!--otro-->
  <h3>Listado de Usuarios</h3>

        <div class="x_panel" >
                        <div class="x_title" >
                       
   <ul class="nav navbar-right panel_toolbox"  >
                                <button type='button' class="btn btn-success" data-toggle="modal" data-target="#nuevo_usuario"><span class="icon-user-plus nuevo">
                </span> Nuevo Usuario</button>
                                
                            </ul>
                            <div  class="clearfix" ></div>
                        </div>
 <div class="outer_div"></div><!-- div cargar los Datos de js/mostrartabla -->
        <!-- contenido-->

        
        </div>
        <!--generales-->
</div>
</div>


<script type="text/javascript" src="js/usuarios.js"></script>

   
<?php 
//include("footer.php");
}

 ?>
  


    
