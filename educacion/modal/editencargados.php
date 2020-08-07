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
  
<input type="hidden" class="form-control inp" id="idencargados" name="idencargados" placeholder="idencargados">

<div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre Encargado</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="nombrep" name="nombrep" placeholder="Nombre" autocomplete="off" required tabindex="1">
                  </div>
                </div>

            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Apellido Encargado</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="apellidop" name="apellidop" placeholder="Apellido" autocomplete="off" required tabindex="2">
                  </div>
                </div>


                <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Identidad</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="identidadp" name="identidadp" placeholder="Identidad" autocomplete="off" required tabindex="3" disabled>
                  </div>
                </div>
            
            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">N° Teléfono</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="telefonop" name="telefonop" placeholder="Telefono"  autocomplete="off" required tabindex="4">
                </div>
              </div>      
                 
              <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Tipo Parentesco</label>
                <div class="col-sm-8">
        <select name="tipop" id="tipop" class="form-control input-sm" required tabindex="5">>
            <option value="" selected>-Seleccione tipo-</option>
           <option value="Padre">Padre</option>
           <option value="Madre">Madre</option>
             <option value="Familiar">Familiar</option>
             <option value="Tutor">Tutor</option>
        </select> 
                </div>
              </div>    
  
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" id="limp" data-dismiss="modal">Cerrar</button>
      <button type="reset" class="btn btn-danger" >Limpiar</button>
      <button type="submit" class="btn btn-primary" id="Updatedencargados">Actualizar datos</button>
      </div>
      </form>
    </div>
    </div>
  </div>
  <?php

    //}
  ?>

<script type="text/javascript" >
   $('#identidadp').mask("0000-0000-00000", {placeholder: "---- ---- -----"});
   $('#telefonop').mask("0000-0000", {placeholder: "---- ---- "});

$('#ip-field').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
        'Z': {
            pattern: /[0-9]/, optional: true
        }
    },
    placeholder: "___.___.___.___"
});
</script>  
  
