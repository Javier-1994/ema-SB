<?php
    //sif (isset($con))
    //{

require_once("./config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("./config/conexion.php");//Contiene funcion que conecta a la base de datos
  ?>
  <!-- Modal -->

      <div class="modal fade" id="nuevo_encargado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Agregar nuevo Encargado</h4>
      </div>
      
      <div class="modal-body">
      <form class="form-horizontal" >
     <div id="comprobarid"></div>
    <div class="container">

<!-- <div class="form-row">
   <div class="col-sm-4">
       <label  class="fontl">Nombre Paciente</label>
     <input type="text"  class="form-control border-primary"  size="50" id="nombre" name="nombre"  autocomplete="off" required tabindex="1"> 
     <input type="hidden"  class="form-control border-primary" id="expediente" name="expediente"> 
      </div> 
    
     </div> -->

     <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label"> Nombre Encargado</label>
                  <div class="col-sm-8">
 <input type="text" class="form-control inp" id="nombre_e" name="nombre_e" placeholder="Nombre" autocomplete="off" required >
               
                </div>
                </div>



            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Apellido Encargado</label>
                <div class="col-sm-8">
    <input type="text" class="form-control inp" id="apellido_e" name="apellido_e" placeholder="Apellido"  autocomplete="off" required tabindex="2">
                </div>
              </div>

            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Identidad</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="identidad_e" name="identidad_e" placeholder="Identidad"  autocomplete="off" required tabindex="3">
                </div>
              </div>
  

              <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">N° Teléfono</label>
                <div class="col-sm-8">
                 <input type="text" class="form-control inp" id="telefono_e" name="telefono_e" placeholder="Telefono"  autocomplete="off" required tabindex="4">
               </div>
             </div>         


             <div class="form-group">
              <label for="user_name" class="col-sm-3 control-label">Tipo Parentesco</label>
              <div class="col-sm-8">
               <select name="tipo_e" id="tipo_e" class="form-control">
                 <option value="" selected>-Seleccione tipo-</option>
                 <option value="Padre">Padre</option>
                 <option value="Madre">Madre</option>
                 <option value="Familiar">Familiar</option>
                 <option value="Tutor">Tutor</option>
               </select> 
             </div>
           </div>
            

</div>

</div>
 
          <div class="modal-footer">
            <button type="reset"  class="btn btn-danger">Limpiar</button>
            <input type="submit" class="btn btn-primary" id="agregarencargado" name="agregar" value="Agregar"></button>
          </div>
  </form>
   
    </div>

  </div>
  </div>
  <?php
    //}
  ?>

<script type="text/javascript" >
   $('#identidad_e').mask("0000-0000-00000", {placeholder: "---- ---- -----"});
   $('#telefono_e').mask("0000-0000", {placeholder: "---- ---- "});


</script>