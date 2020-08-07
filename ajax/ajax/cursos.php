


    <?php 
function acursos(){
  ?>

   
    <div class="right_col" role="main"  ><!-- page content -->
 
            <div class="page-title">
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >

                    <?php 
include("modal/registro_cursos.php");
include("modal/editcursos.php");
include("modal/consultarcursos.php");

                     ?>
                     
             </div>
         </div>    

    <!-- contenido-->

<!---->


  <!--otro-->
  <h3>Cursos</h3>

        <div class="x_panel" >
                        <div class="x_title" >
                       
   <ul class="nav navbar-right panel_toolbox"  >
                                <button type='button' class="btn btn-success" data-toggle="modal" data-target="#nuevo_curso"><span class="icon-user-plus nuevo">
                </span> Agregar cursos</button>
                                
                            </ul>
                            <div  class="clearfix" ></div>
                        </div>
   
       
 <div class="outer_div"></div><!-- div cargar los Datos de js/mostrartabla -->
        <!-- contenido-->

        
        </div>
        <!--generales-->
</div>



 



</script>

<script type="text/javascript" src="js/mtablacursos.js"></script>

 <?php 
}
  ?>
  