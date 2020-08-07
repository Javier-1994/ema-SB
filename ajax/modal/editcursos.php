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
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Editar encargados</h4>
      </div>
      <div class="modal-body">
      <form  class="form-horizontal" method="post">
      <div id="actualizaDatos"></div>
  
<input type="hidden" class="form-control inp" id="idcurso" name="idcurso" placeholder="idcurso">

<div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="nombrep" name="nombrep" placeholder="Nombre" autocomplete="off" required tabindex="1">
                  </div>
                </div>


                <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Codigo</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="codigop" name="codigop" placeholder="Codigo" autocomplete="off" required tabindex="3">
                  </div>
                </div>
            

              
  
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" id="limp" data-dismiss="modal">Cerrar</button>
      <button type="reset" class="btn btn-danger" >Limpiar</button>
      <button type="submit" class="btn btn-primary" id="Updatedcursos">Actualizar datos</button>
      </div>
      </form>
    </div>
    </div>
  </div>
  <?php

    //}
  ?>

  
