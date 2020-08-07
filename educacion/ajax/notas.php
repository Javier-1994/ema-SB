

  
<?php 



function anotas(){

 // session_start();
  $docente=$_SESSION['usuario'];
  $nombreadmin=$_SESSION['nombre'];
  

  require("config/conec.php");//Contiene las variables de configuracion para conectar a la base de datos

$query_docente=mysqli_query($db,"SELECT * FROM maestros WHERE identidad_m='$docente'");
  while ($row=mysqli_fetch_array($query_docente)){
    $nombre=$row['nombre_m'];
     $apellido=$row['apellido_m'];
  }
  
  ?>
     



    
    <div class="right_col" role="main"  ><!-- page content -->
 
            <div class="page-title">
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >

                    <?php 
include("modal/materias_notas.php");
include("modal/asistencia.php");

                     ?>
                     
             </div>
         </div>    

   
  <h3> Gestión Alumnos</h3>

        <div class="x_panel" >
                        <div class="x_title" >
                       
   <ul class="nav navbar-left panel_toolbox"  >
        <?php 
                   if ($_SESSION['tipo']=='1') {
                        echo "
                        <hr>
                        <p class='lead'>Admin:".$nombreadmin."</p>
                            ";
                      }

                      if ($_SESSION['tipo']=='2') {
                          echo "
                         
                        <p class='lead'>Clases asignadas al Docente: ".$nombre." ".$apellido."</p>
                            ";
                      }
        ?>
                            </ul>
                            <div  class="clearfix" ></div>
                        </div>
   

 

<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active titulo" href="#profile" role="tab" data-toggle="tab">Asignar Notas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link titulo" href="#buzz" role="tab" data-toggle="tab">Tomar Asistencia</a>
  </li>
  
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="profile">
 
    <div class="outer_div"></div><!-- div cargar los Datos de js/mostrartabla -->
  </div>
  <div role="tabpanel" class="tab-pane fade" id="buzz">
  
<div class="form-group">
        <label for="user_name" class="col-sm-1 control-label">Fecha:</label>
        <div class="col-sm-3">
       <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo date("Y-m-d");?>">
        </div>
        </div>
        
        <br>
<hr>
<div class="datagrid"></div>

  </div>
 
</div>

       <div id="actualizaDatoss"></div>
 <div class="outder_div"></div><!-- div cargar los Datos de js/mostrartabla -->
        <!-- contenido-->

        
        </div>
        <!--generales-->
</div>
</script>

<script type="text/javascript" src="js/notas.js"></script>

 <?php 
}
  ?>
  



 


 