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
<label for="user_name" class="col-sm-3 control-label">Identidad</label>
                <div class="controls col-md-8 ">
<input type="text" class="input-md textinput textInput form-control inp"  id="identidadp" name="identidadp"   placeholder="Identidad"  autocomplete="off" required tabindex="1" disabled>

<input type="hidden" class="input-md textinput textInput form-control inp"  id="id_encargadosp" name="id_encargadosp"   placeholder="id_encargados"  >
                </div>
                  </div>
            
                <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Primero Nombre</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="pnombrep" name="pnombrep" placeholder="Primero Nombre" autocomplete="off" required tabindex="1" disabled>
                </div>
                </div>              

       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Segundo Nombre</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="snombrep" name="snombrep" placeholder="Segundo Nombre" autocomplete="off" required tabindex="2" disabled>

                </div>
                </div>

            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Primer apellido</label>
                <div class="col-sm-8">
    <input type="text" class="form-control inp" id="papellidop" name="papellidop" placeholder="Primer apellido"  autocomplete="off" required tabindex="3" disabled>
                </div>
              </div>

                      <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Segundo apellido</label>
                <div class="col-sm-8">
    <input type="text" class="form-control inp" id="sapellidop" name="sapellidop" placeholder="Segundo apellido"  autocomplete="off" required tabindex="4" disabled>
                </div>
              </div>

            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Identidad</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="identidadp" name="identidadp" placeholder="Identidad"  autocomplete="off" required tabindex="5" disabled>
                </div>
              </div>    

                    <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Dirección</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="direccionp" name="direccionp" placeholder="Direccion"  autocomplete="off" required tabindex="6" disabled>
                </div>
              </div>   

                 <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Encargado</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="idencargadop" name="idencargadop" placeholder="Encargado"  autocomplete="off" required tabindex="6" disabled>
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

  
  <script type="text/javascript" >
  
  
   $('#telefon').mask("0000-0000", {placeholder: "---- ----"});

$('#ip-field').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
        'Z': {
            pattern: /[0-9]/, optional: true
        }
    },
    placeholder: "___.___.___.___"
});
</script>