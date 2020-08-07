
<?php  
 

function aingreso_notas(){
?>
<?php
  require("config/conec.php");//Contiene las variables de configuracion para conectar a la base de datos

if (isset($_GET['numasignacion']))
  {


    $numasignacion=$_GET['numasignacion'];
    $_SESSION['numasignacion']=$numasignacion;

    $campos="COUNT(matricula.id_matricula) as conteo, asignacionesm.asignatura_a, maestros.identidad_m as IDDocente, maestros.nombre_m as Docente, maestros.apellido_m as Apellido, curso.codigo_c, curso.nombre_c as Grado, asignatura.id_asignatura as MateriaID, asignatura.nombre_asig as Materia";
    $sql_notas=mysqli_query($db,"select $campos from asignacionesm, matricula, asignatura, curso, maestros where curso.id_curso=asignatura.idcurso and asignacionesm.asignatura_a=asignatura.id_asignatura and asignacionesm.idmaestro=maestros.identidad_m and matricula.idcurso=curso.codigo_c and asignacionesm.id_asignaciones='".$numasignacion."'");
    $count=mysqli_num_rows($sql_notas);
    if ($count==1)
    {
        $rw_factura=mysqli_fetch_array($sql_notas);
        $docente=$rw_factura['Docente'];
        $apellido=$rw_factura['Apellido'];
        $carrera=$rw_factura['Grado'];
        $materia=$rw_factura['Materia'];
        $consultas=$rw_factura['conteo'];

        // $docente=$rw_factura['Docente'];
        // $carrera=$rw_factura['Grado'];
        // $materia=$rw_factura['Materia'];
        // $consultas=$rw_factura['conteo'];


    } 

    
  }
  
  ?>
     



    
    <div class="right_col" role="main"  ><!-- page content -->
 
            <div class="page-title">
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >

                    <?php 
include("modal/ingreso_notas.php");
                     ?>
                     
             </div>
         </div>    
<style>
 ul .datosdocente {
font-size:10px;
background:#EFEDED;
  }
  .lead{
    font-size:15px;
    margin-bottom: 1px solid #f0f0f0;
  }

  ul{
     margin-bottom: 1px solid #f0f0f0;
  }
</style>
   
  <h3>Ingreso Notas</h3>

        <div class="x_panel" >
                        <div class="x_title" >
                       
   <ul class="nav navbar-left panel_toolbox"  >
      <div class="responsive">
    <table class="table">
<tr>
  <th>Maestro</th>
  <th>Curso</th>
  <th>Asignatura</th>
  <th>Cantidad Alumnos</th>

</tr>
      <tr>
        <td><?php echo $docente." ".$apellido; ?></td>
        <td><?php echo $carrera; ?></td>
        <td><?php echo $materia; ?></td>
        <td><?php echo $consultas; ?></td>

      </tr>
    </table>
</div>
    <a href="notas.php" class="btn btn-default">Regresar</a>
                            </ul>
                            <div  class="clearfix" ></div>
                        </div>
   
       
 <div class="outer_div"></div><!-- div cargar los Datos de js/mostrartabla -->
        <!-- contenido-->

        
        </div>
        <!--generales-->
</div>
</script>

<script type="text/javascript" src="js/ingreso_notas.js"></script>

 <?php 
}
  ?>
  

r

 


 