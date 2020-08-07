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
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Editar maestros</h4>
      </div>
      <div class="modal-body">
      <form  class="form-horizontal" method="post">
      <div id="actualizaDatos"></div>
  
<input type="hidden" class="form-control inp" id="id_matricula" name="id_matricula" placeholder="ID Matricula">

<div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre del Alumno</label>
               <div class="controls col-md-8 ">
               <select class="form-control input-sm"  id="nombrea" name="nombrea">
       <option  value=""  selected>-Seleccione Alumno-</option>
                  <?php
                    $sql_vendedor=mysqli_query($con,"select * from alumnos order by pnombre_a");
                    while ($rw=mysqli_fetch_array($sql_vendedor)){
                      $id_alumno=$rw["id_alumno"];
                      $nombrea=$rw["pnombre_a"];
                      $nombres=$rw["snombre_a"];
                      $apellidoa=$rw["papellido_a"];
                      $apellidos=$rw["sapellido_a"];
                      ?>
                      <option value="<?php echo $id_alumno?>" ><?php echo $nombrea." ".$nombres." ".$apellidoa." ".$apellidos?></option>
                      <?php
                    }
                  ?>
                  </select> 
                  </div>
                </div>

              <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Curso a Matricular</label>
                <div class="col-sm-8">
              <select class="form-control input-sm"  id="cursoa" name="cursoa">
       <option value="" selected>-Seleccione Curso-</option>
                  <?php
                    $sql_vendedor=mysqli_query($con,"select * from curso order by nombre_c");
                    while ($rw=mysqli_fetch_array($sql_vendedor)){
                      $id_curso=$rw["id_curso"];
                      $nombre_c=$rw["codigo_c"];
                      ?>
                      <option value="<?php echo $nombre_c?>" ><?php echo $nombre_c?></option>
                      <?php
                    }
                  ?>
                  </select>          
          </div>
             </div>

<div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Año </label>
               <div class="controls col-md-8 ">
     <input type="text" class="form-control" name="activop" id="activop" value="<?php echo $fecha;  ?>"disabled>
   </div>
 </div>
            
            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Tipo de Matricula</label>
                <div class="col-sm-8">
        <select name="tipom" id="tipom" class="form-control input-sm">
            <option value="" selected>-Seleccione Maticula-</option>
          <option value="Normal">Normal</option>
           <option value="Repitente">Repitente</option>
        </select> 
                </div>
              </div>      
                
  
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" id="limp" data-dismiss="modal">Cerrar</button>
      <button type="reset" class="btn btn-danger" >Limpiar</button>
      <button type="submit" class="btn btn-primary" id="Updatedmatricula">Actualizar datos</button>
      </div>
      </form>
    </div>
    </div>
  </div>
  <?php

    //}
  ?>

