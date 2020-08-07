<?php
    //sif (isset($con))
    //{

require_once("./config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("./config/conexion.php");//Contiene funcion que conecta a la base de datos
  ?>
  <!-- Modal -->

      <div class="modal fade" id="nueva_descripcion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Agregar nueva descripcion</h4>
      </div>
      
      <div class="modal-body">
      <form class="form-horizontal" id="formulario" name="formulario"  method="POST" >
     <div id="comprobarid"></div>
       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Descripción</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="descripcion" name="descripcion" placeholder="Descripcion" autocomplete="off" required tabindex="1">
               
                </div>
                </div>

            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Monto Total</label>
                <div class="col-sm-8">
    <input type="text" class="form-control inp" id="monto_m" name="monto_m" placeholder="Monto"  autocomplete="off" required tabindex="2">
                </div>
              </div>

          
          <div class="modal-footer">
            <button type="reset"  class="btn btn-danger">Limpiar</button>
            <input type="submit" class="btn btn-primary" id="agregardescripcion" name="agregar" value="Agregar"></button>
          </div>
  </form>
    </div>
    </div>

  </div>
  </div>
  <?php
    //}
  ?>

<script type="text/javascript" >
   $('#identidad_m').mask("0000-0000-00000", {placeholder: "---- ---- -----"});
   $('#telefono_m').mask("0000-0000", {placeholder: "---- ---- "});

$('#ip-field').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
        'Z': {
            pattern: /[0-9]/, optional: true
        }
    },
    placeholder: "___.___.___.___"
});
</script>