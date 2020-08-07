<?php
require_once("./config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("./config/conexion.php");//Contiene funcion que conecta a la base de datos
  ?>
  
  <!-- Modal -->


      <div class="modal fade" id="data_pagosr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Realizar pago de cuota</h4>
      </div>


      
      <div class="modal-body">
      <form class="form-horizontal" id="formulario" name="formulario"  method="POST" autocomplete="off">
     <div id="comprobadrid"></div>
      
        <input type='hidden' class='form-control' id='id_pagos' name="id_pagos">


<div class='form-group' >
            <br>
            <label class='col-sm-4 control-label'>Pago Correspondiente a:</label>
             <div class='col-sm-7'>
              <input type='text' class='form-control' id='mes' name="mes" disabled>
             </div>

           </div>
        <div id="resultados"></div>

           <div class="modal-footer">
           
            <input type="submit" class="btn btn-primary" id="agregapago"  value="Aceptar"  ></button>
          </div>
  </form>
    </div>
    </div>

  </div>
  </div>
  <?php
    //}
  ?>

