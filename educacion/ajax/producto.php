

    <?php 
function aproducto(){
  ?>
     

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>   

    <div class="right_col" role="main"  ><!-- page content -->
 <div class="" >
            <div class="page-title" >
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >

                    <?php 
include("modal/registro_productos.php");
include("modal/editarprod.php");
include("modal/consultarprod.php");
//include("modal/agregarp.php");
                     ?>
                     
             </div>
         </div>    

    <!-- contenido-->

<!---->


  <!--otro-->
  <h3>Listado de Productos</h3>

        <div class="x_panel" >
                        <div class="x_title" >
                       
   <ul class="nav navbar-right panel_toolbox"  >
                                <button type='button' class="btn btn-success" data-toggle="modal" data-target="#nuevo_producto"><span class="icon-user-plus nuevo">
                </span> Nuevo Producto</button>
                                
                            </ul>
                            <div  class="clearfix" ></div>
                        </div>
   
       
 <div class="outer_div"></div><!-- div cargar los Datos de js/mostrartabla -->
        <!-- contenido-->

        
        </div>
        <!--generales-->
</div>
</div>

 



</script>

<script type="text/javascript" src="js/mtablaproducto.js"></script>



 <?php 
}
  ?>
  


