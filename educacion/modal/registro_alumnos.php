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
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Agregar nuevo Alumno</h4>
      </div>

      
      <div class="modal-body">
      <form class="form-horizontal" id="formulario" name="formulario"  method="POST" >
     <div id="comprobarid"></div>
       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Primero Nombre</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="pnombre_a" name="pnombre_a" placeholder="Primero Nombre" autocomplete="off" required tabindex="1">
                </div>
                </div>              

       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Segundo Nombre</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="snombre_a" name="snombre_a" placeholder="Segundo Nombre" autocomplete="off" required tabindex="2">

                </div>
                </div>

            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Primer apellido</label>
                <div class="col-sm-8">
    <input type="text" class="form-control inp" id="papellido_a" name="papellido_a" placeholder="Primer apellido"  autocomplete="off" required tabindex="3">
                </div>
              </div>

                      <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Segundo apellido</label>
                <div class="col-sm-8">
    <input type="text" class="form-control inp" id="sapellido_a" name="sapellido_a" placeholder="Segundo apellido"  autocomplete="off" required tabindex="4">
                </div>
              </div>

            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Identidad</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="identidad_a" name="identidad_a" placeholder="Identidad"  autocomplete="off" required tabindex="5">
                </div>
              </div>
  

             <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Dirección</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="direccion_a" name="direccion_a" placeholder="Direccion"  autocomplete="off" required tabindex="6">
                </div>
              </div>         
            
                    
                              <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Encargado</label>
                <div class="col-sm-8">
              <select class="form-control input-sm"  id="idencargado" name="idencargado">
       <option value="" selected>-Seleccione encargado-</option>
                  <?php
                    $sql_vendedor=mysqli_query($con,"select * from encargados order by nombre_e");
                    while ($rw=mysqli_fetch_array($sql_vendedor)){
                      $id_encargado=$rw["id_encargado"];
                      $nombre_e=$rw["nombre_e"];
                         $apellido_e=$rw["apellido_e"];
                      ?>
                      <option value="<?php echo $id_encargado?>" ><?php echo $nombre_e.' '.$apellido_e?></option>
                      <?php
                    }
                  ?>
                  </select>          
          </div>
             </div>


          <div class="modal-footer">
            <button type="reset"  class="btn btn-danger">Limpiar</button>
            <input type="submit" class="btn btn-primary" id="agregaralumnos" name="agregar" value="Agregar"></button>
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
   $('#identidad_a').mask("0000-0000-00000", {placeholder: "---- ---- -----"});

$('#ip-field').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
        'Z': {
            pattern: /[0-9]/, optional: true
        }
    },
    placeholder: "___.___.___.___"
});
</script>