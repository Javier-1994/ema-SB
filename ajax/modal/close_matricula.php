<?php
    //if (isset($con))
    //{
  ?>
  <!-- Modal -->
  <div class="modal fade" id="close_matricula" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Cerrar Matricula</h4>
      </div>
      <div class="modal-body">
      <form  class="form-horizontal" method="post">
      <div id="actualizaDatos"></div>
  
<input type="hidden" class="form-control inp" id="iddetallee" name="iddetallee" placeholder="iddetallee">

<?php 
date_default_timezone_set("America/Tegucigalpa");
$fecha=date("Y");

 ?>

<h3>Desea cerrar año lectivo?</h3>

              
 <input type="hidden" class="form-control inp" id="fecha" name="fecha"  autocomplete="off" value="<?php echo $fecha; ?>" required tabindex="3">
                  
      
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" id="limp" data-dismiss="modal">Cerrar</button>
      <button type="submit" class="btn btn-primary" id="cerrar_matricula" onclick="location.reload()">Aceptar</button>
      </div>
      </form>
    </div>
    </div>
  </div>
  <?php

    //}
  ?>

  
