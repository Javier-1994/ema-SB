<?php
    //sif (isset($con))
    //{

require_once("./config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("./config/conexion.php");//Contiene funcion que conecta a la base de datos
  ?>
  <!-- Modal -->

      <div class="modal fade" id="nueva_asignacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Agregar asignación</h4>
      </div>

      
      <div class="modal-body">
      <form class="form-horizontal" id="formulario" name="formulario"  method="POST" >
     <div id="comprobarid"></div>
     
             <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre Maestro</label>
                <div class="col-sm-8">
           <select class="form-control input-sm"  id="idmaestro" name="idmaestro">
       <option value="" selected>-Seleccione encargado-</option>
                  <?php
                    $sql_vendedor=mysqli_query($con,"select * from maestros order by nombre_m");
                    while ($rw=mysqli_fetch_array($sql_vendedor)){
                      $id_maestro=$rw["id_maestro"];
                      $nombre_m=$rw["nombre_m"];
                      $apellido_m=$rw["apellido_m"];
                      $identidad_m=$rw["identidad_m"];
                      ?>
                      <option value="<?php echo $identidad_m;?>" ><?php echo $nombre_m." ".$apellido_m;?></option>
                      <?php
                    }
                  ?>
                  </select>   
        </div>
        </div>   

<?php 

require_once("config/db.php");
require_once("config/conexion.php");

 $query=mysqli_query($con,"SELECT * FROM  periodo where estado_p='1'");
        $row=mysqli_fetch_array($query);
        $id_periodo=$row['id_periodo'];

$estado_factura=$row['estado_p'];
$codigo=$row['codigo_p'];
    
                 
 ?> 
<?php 



 ?>
  <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Periodo </label>
               <div class="controls col-md-8 ">
     <input type="text" class="form-control" name="2" id="2" value="<?php  echo $codigo;  ?>"disabled>
      <input type="hidden" class="form-control" name="periodo" id="periodo" value="<?php  echo $id_periodo;  ?>"disabled>
   </div>
 </div>

                <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Asignatura I</label>
                <div class="col-sm-8">
              <select class="form-control input-sm"  id="asignatura_uno" name="asignatura_uno">
       <option value="0" selected>-Seleccione asignatura-</option>
                  <?php
                     $sql_vendedor=mysqli_query($con,"select asignatura.*, curso.* from asignatura, curso where asignatura.idcurso=curso.id_curso order by asignatura.codigo_asig");
                    while ($rw=mysqli_fetch_array($sql_vendedor)){
                      $id_asignatura=$rw["id_asignatura"];
                      $codigo_asig=$rw["codigo_asig"];
                      $nombre_asig=$rw["nombre_asig"];
                      $nombre_curso=$rw["nombre_c"];
                      ?>
                      <option value="<?php echo $id_asignatura;?>" ><?php echo $codigo_asig.' - '.$nombre_asig.' '.$nombre_curso;?></option>
                      <?php
                    }
                  ?>
                  </select>          
          </div>
             </div>
                 
                 <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Asignatura II</label>
                <div class="col-sm-8">
              <select class="form-control input-sm"  id="asignatura_dos" name="asignatura_dos">
       <option value="0" selected>-Seleccione asignatura-</option>
                  <?php
                    $sql_vendedor=mysqli_query($con,"select asignatura.*, curso.* from asignatura, curso where asignatura.idcurso=curso.id_curso order by asignatura.codigo_asig");
                    while ($rw=mysqli_fetch_array($sql_vendedor)){
                      $id_asignatura=$rw["id_asignatura"];
                      $codigo_asig=$rw["codigo_asig"];
                      $nombre_asig=$rw["nombre_asig"];
                      $nombre_curso=$rw["nombre_c"];
                      ?>
                      <option value="<?php echo $id_asignatura;?>" ><?php echo $codigo_asig.' - '.$nombre_asig.' '.$nombre_curso;?></option>
                      <?php
                    }
                  ?>
                  </select>          
          </div>
             </div>

        <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Asignatura III</label>
                <div class="col-sm-8">
              <select class="form-control input-sm"  id="asignatura_tres" name="asignatura_tres">
       <option value="0" selected>-Seleccione asignatura-</option>
                  <?php
                     $sql_vendedor=mysqli_query($con,"select asignatura.*, curso.* from asignatura, curso where asignatura.idcurso=curso.id_curso order by asignatura.codigo_asig");
                    while ($rw=mysqli_fetch_array($sql_vendedor)){
                      $id_asignatura=$rw["id_asignatura"];
                      $codigo_asig=$rw["codigo_asig"];
                      $nombre_asig=$rw["nombre_asig"];
                      $nombre_curso=$rw["nombre_c"];
                      ?>
                      <option value="<?php echo $id_asignatura;?>" ><?php echo $codigo_asig.' - '.$nombre_asig.' '.$nombre_curso;?></option>
                      <?php
                    }
                  ?>
                  </select>          
          </div>
             </div>


          <div class="modal-footer">
            <button type="reset"  class="btn btn-danger">Limpiar</button>
            <input type="submit" class="btn btn-primary" id="agregarasignacion" name="agregar" value="Agregar"></button>
          </div>
  </form>
    </div>
    </div>





  </div>
  </div>
  <?php
    //}
  ?>

