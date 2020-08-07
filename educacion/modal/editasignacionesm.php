<?php
    //if (isset($con))
    //{
  ?>
  <!-- Modal -->
  <div class="modal fade" id="dataUpdat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Editar asignacion</h4>
      </div>
      <div class="modal-body">
      <form  class="form-horizontal" method="post">
      <div id="actualizaDatos"></div>
  
<input type="hidden" class="form-control inp" id="idasignacionm" name="idasignacionm" placeholder="idasignacionm">
   
   <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre Maestro</label>
                <div class="col-sm-8">

           <select class="form-control input-sm"  id="maestrop" name="maestrop">
       <option value="0" selected>-Seleccione encargado-</option>
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

              <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Materia</label>
                <div class="col-sm-8">
              <select class="form-control input-sm"  id="asignaturap" name="asignaturap">
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
           
     
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" id="limp" data-dismiss="modal">Cerrar</button>
      <button type="reset" class="btn btn-danger" >Limpiar</button>
      <button type="submit" class="btn btn-primary" id="Updatedasignaciones">Actualizar datos</button>
      </div>
      </form>
    </div>
    </div>
  </div>
  <?php

    //}
  ?>

  
