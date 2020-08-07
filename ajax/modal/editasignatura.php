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
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Editar asignatura</h4>
      </div>
      <div class="modal-body">
      <form  class="form-horizontal" method="post">
      <div id="actualizaDatos"></div>
  
<input type="hidden" class="form-control inp" id="idasignatura" name="idasignatura" placeholder="idasignatura">
   
    
       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre</label>
               <div class="controls col-sm-8 ">
 <input type="text" class="form-control inp" id="nombre_asigp" name="nombre_asigp" placeholder="Nombre" autocomplete="off" required tabindex="1">
                </div>
                </div>      


  <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Codigo</label>
               <div class="controls col-sm-8 ">
 <input type="text" class="form-control inp" id="codigo_asigp" name="codigo_asigp" placeholder="Codigo" autocomplete="off" required tabindex="2">

                </div>
                </div>     
             
              <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Curso</label>
                <div class="col-sm-8">
              <select class="form-control input-sm"  id="idcursoe" name="idcursoe">
       <option selected>-Seleccione Curso-</option>
                  <?php
                    $sql_vendedor=mysqli_query($con,"select * from curso order by nombre_c");
                    while ($rw=mysqli_fetch_array($sql_vendedor)){
                      $id_curso=$rw["id_curso"];
                      $nombre_c=$rw["nombre_c"];
                      ?>
                      <option value="<?php echo $id_curso?>" ><?php echo $nombre_c?></option>
                      <?php
                    }
                  ?>
                  </select>          
          </div>
             </div>


  <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Estado</label>
                <div class="col-sm-8">
        <select name="estadop" id="estadop" class="form-control input-sm" required tabindex="5">>
            <option value="" selected>-Seleccione tipo-</option>
           <option value="1">Activo</option>
           <option value="0">Inactivo</option>
        </select> 
                </div>
              </div>  
  
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" id="limp" data-dismiss="modal">Cerrar</button>
      <button type="reset" class="btn btn-danger" >Limpiar</button>
      <button type="submit" class="btn btn-primary" id="Updatedasignatura">Actualizar datos</button>
      </div>
      </form>
    </div>
    </div>
  </div>
  <?php

    //}
  ?>

  
