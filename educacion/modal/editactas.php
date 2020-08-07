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
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Editar alumno</h4>
      </div>
      <div class="modal-body">
      <form  class="form-horizontal" method="post">
      <div id="actualizaDatos"></div>
  
<input type="hidden" class="form-control inp" id="idacta" name="idacta" placeholder="idacta">
   
   <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre alumno</label>
                <div class="col-sm-8">
       <select class="form-control inp" id="idalumnoe"  name="idalumnoe" autocomplete="off">
        <option value="" selected="">Seleccione un almuno</option>
            <?php
           $alu=mysqli_query($con,"SELECT * FROM alumnos") or die(mysqli_error());
              while ($fila=mysqli_fetch_row($alu)) {
               echo "<option value='".$fila['0']."'> ".$fila['1']." - ".$fila['3']." - ".$fila['5']."</option>";
              }
            ?>
      </select>   
        </div>
        </div>    


            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Fecha</label>
                <div class="col-sm-8">
        <input type="date" class="form-control inp" id="fechae" name="fechae" placeholder="Fecha"  autocomplete="off" required tabindex="2">
                </div>
              </div>
  

             <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Descripción</label>
                <div class="col-sm-8">
        <textarea class="form-control inp" id="descripcione" name="descripcione" placeholder="Descripción"  autocomplete="off" required tabindex="3"></textarea>   

                </div>
              </div>    

     
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" id="limp" data-dismiss="modal">Cerrar</button>
      <button type="reset" class="btn btn-danger" >Limpiar</button>
      <button type="submit" class="btn btn-primary" id="Updatedactas">Actualizar datos</button>
      </div>
      </form>
    </div>
    </div>
  </div>
  <?php

    //}
  ?>

  
