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
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Editar´Periodo</h4>
      </div>
      <div class="modal-body">
      <form  class="form-horizontal" method="post">
      <div id="actualizaDatos"></div>
  
<input type="hidden" class="form-control inp" id="idcurso" name="idcurso" placeholder="idcurso">

<div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Periodo</label>
               <div class="controls col-md-8 ">
                <input type="hidden" class="form-control inp" id="id_periodo" name="id_periodo"autocomplete="off">
 <input type="text" class="form-control inp" id="codigo_pe" name="codigo_pe" placeholder="Periodo" autocomplete="off" required tabindex="1">
                  </div>
                </div>


                <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Año</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="date" name="date" placeholder="Año" autocomplete="off" required tabindex="3" disabled>
                  </div>
                </div>
      
                       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Estado</label>
                <div class="col-sm-8">
             <select name="estado_peri" id="estado_peri">
            <option value="" selected>-Seleccione tipo-</option>
          <option value="1">Activo</option>
           <option value="2">Inactivo</option>
        </select> 
                </div>
              </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" id="limp" data-dismiss="modal">Cerrar</button>
      <button type="reset" class="btn btn-danger" >Limpiar</button>
      <button type="submit" class="btn btn-primary" id="Updatedperiodo">Actualizar datos</button>
      </div>
      </form>
    </div>
    </div>
  </div>
  <?php

    //}
  ?>

  
