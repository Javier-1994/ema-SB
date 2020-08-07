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
      <form  class="form-horizontal">
    <div id="actualizaDatos"></div>
          
              <div class="form-group">
<label for="user_name" class="col-sm-3 control-label">Descripcion</label>
                <div class="controls col-md-8 ">
<input type="text" class="input-md textinput textInput form-control inp"  id="descripcionc" name="descripcionc"   placeholder="Descripcion"  autocomplete="off" required tabindex="1" disabled>

<input type="hidden" class="input-md textinput textInput form-control inp"  id="id_detalle" name="id_detalle"   placeholder="Id del detalle"  >
                </div>
   </div>
                    
              <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Monto Total</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="montoc" name="montoc" placeholder="Monto" autocomplete="off" required tabindex="2" disabled>
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