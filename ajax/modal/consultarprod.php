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
      <form >
    <div id="actualizaDatos"></div>
  
<label for="user_name" class="col-sm-3 control-label">Codigo</label>
                <div class="controls col-md-8 ">
<input type="text" class="input-md textinput textInput form-control inp"  id="codigop" name="codigop"   placeholder="Codigo"  autocomplete="off" required tabindex="1" disabled>

<input type="hidden" class="input-md textinput textInput form-control inp"  id="id_productop" name="id_productop"   placeholder="codigo"  >
                </div>
                  
            
                <label for="user_name" class="col-sm-3 control-label">Nombre</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="nombrep" name="nombrep" placeholder="Nombre" autocomplete="off" required tabindex="2" disabled>
                 
                </div>
            
             
  <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Costo</label>
                <div class="col-sm-8">
    <input type="text" class="form-control inp" id="costop" name="costop" placeholder="Costo"  autocomplete="off" required tabindex="3" disabled>
                </div>
              </div>

       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Precio</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="preciop" name="preciop" placeholder="Precio"  autocomplete="off" required tabindex="4" disabled>
                </div>
              </div>
  

         <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Linea</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="lineap" name="lineap" placeholder="Precio"  autocomplete="off" required tabindex="4" disabled>
                </div>
              </div>      

            
            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Cantidad</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="cantidadp" name="cantidadp" placeholder="Cantidad"  autocomplete="off" required tabindex="6" disabled>
                </div>
              </div>
              
              <table class="table">
  
  <thead>
    <tr>
      <th>Agregado por</th>
      <th>Actualizado por</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <input type="text" class="form-control inp" id="agregado" name="agregado" placeholder="agregado"  autocomplete="off" required tabindex="4"  disabled>
        <input type="text" class="form-control inp" id="fecha" name="fecha" disabled>
      </td>

      <td>
        <input type="text" class="form-control inp" id="modificado" name="modificado" placeholder="agregado"  autocomplete="off" required tabindex="4"  disabled>
        <input type="text" class="form-control inp" id="fecha_modifica" name="fecha_modifica" disabled>
      </td>
    </tr>

  </tbody>
</table>

              
  
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