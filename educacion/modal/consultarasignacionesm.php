  <?php
    //if (isset($con))
    //{
  
  ?>
  <!-- Modal -->
  <div class="modal fade" id="dataConsult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Consultar</h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal">
    <div id="actualizaDatos"></div>
  
   <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre Maestro</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="maestroc" name="maestroc" placeholder="Nombre maestro"  autocomplete="off" required tabindex="1" disabled="">
                </div>
              </div>
  

              <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Curso</label>
               <div class="controls col-sm-8 ">
 <input type="text" class="form-control inp" id="cursoc" name="cursoc" placeholder="Curso" autocomplete="off" required tabindex="2" disabled>

                </div>
                </div> 

                <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Materia</label>
               <div class="controls col-sm-8 ">
 <input type="text" class="form-control inp" id="materiac" name="materiac" placeholder="Materia" autocomplete="off" required tabindex="2" disabled>

                </div>
                </div>  
                        
  
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      
      </div>

      </form>
    </div>
    </div>
  </div>
  <?php

    //}
  ?>

  
  