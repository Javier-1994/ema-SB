<?php
    //sif (isset($con))
    //{

require_once("./config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("./config/conexion.php");//Contiene funcion que conecta a la base de datos
  ?>
  <!-- Modal -->

      <div class="modal fade" id="nuevo_curso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Agregar nuevo curso</h4>
      </div>
      
      <div class="modal-body">
      <form class="form-horizontal" id="formulario" name="formulario"  method="POST" >
     <div id="comprobarid"></div>
       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="nombre_c" name="nombre_c" placeholder="Nombre" autocomplete="off" required tabindex="1">
               
                </div>
                </div>

       
            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Codigo</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="codigo_c" name="codigo_c" placeholder="Codigo"  autocomplete="off" required tabindex="3">
                </div>
              </div>

          <div class="modal-footer">
            <button type="reset"  class="btn btn-danger">Limpiar</button>
            <input type="submit" class="btn btn-primary" id="agregarcursos" name="agregar" value="Agregar"></button>
          </div>
  </form>
    </div>
    </div>

  </div>
  </div>
  <?php
    //}
  ?>

