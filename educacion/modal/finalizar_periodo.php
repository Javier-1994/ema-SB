<?php
    //if (isset($con))
    //{
  ?>
  <!-- Modal -->
  <div class="modal fade" id="datafinal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Cerrar Periodo </h4>
      </div>
      <div class="modal-body">
      <form  class="form-horizontal" method="post">
      <div id="actualizaDatos"></div>
  
<input type="hidden" class="form-control inp" id="codigo_final" name="codigo_final" placeholder="idcurso">
<input type="hidden" class="form-control inp" id="codigo" name="codigo" placeholder="idcurso">



<div class="form-group">
              <h2>Desea Cerrar Periodo Academico?</h2>
               <div class="controls col-md-8 ">
               
 
                  </div> 
                </div>    
  
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" id="limp" data-dismiss="modal">Cancelar</button>
       <button type="submit" class="btn btn-primary" id="periodofinalizado">Aceptar</button>


     
      </div>
      </form>
    </div>
    </div>
  </div>
  <?php

    //}
  ?>

  
