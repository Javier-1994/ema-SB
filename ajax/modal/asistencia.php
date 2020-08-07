<?php
    //if (isset($con))
    //{
  ?>
  <!-- Modal -->
  <div class="modal fade" id="pasaasistencia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Tomar Asistencia</h4>
      </div>
      <style>
 .prueba{
        display: none;

    }

.titulo{
  font-size: 14px;
  font-weight: bold;
  color: #0E0E0E;
}
</style>
      <div class="modal-body">
      <form  class="form-horizontal" method="post">
      

<div class="form-group">
        <label for="user_name" class="col-sm-3 control-label">Fecha</label>
        <div class="col-sm-4">
       <input type="date" class="form-control" id="fecdha" name="fedcha" value="<?php echo date("Y-m-d");?>">
        </div>
        </div>

<div id="resultados"></div>
  
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" id="limp" data-dismiss="modal">Cerrar</button>
    
     
      </div>
      </form>
    </div>
    </div>
  </div>
  <?php

    //}
  ?>

  
  