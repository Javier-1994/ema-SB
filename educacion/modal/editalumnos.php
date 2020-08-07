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
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Editar alumno</h4>
      </div>
      <div class="modal-body">
      <form  class="form-horizontal" method="post">
      <div id="actualizaDatos"></div>
  
<input type="hidden" class="form-control inp" id="idalumno" name="idalumno" placeholder="idalumno">
   
    
       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Primero Nombre</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="pnombrep" name="pnombrep" placeholder="Primero Nombre" autocomplete="off" required tabindex="1">
                </div>
                </div>              

       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Segundo Nombre</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="snombrep" name="snombrep" placeholder="Segundo Nombre" autocomplete="off" required tabindex="2">

                </div>
                </div>

            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Primer apellido</label>
                <div class="col-sm-8">
    <input type="text" class="form-control inp" id="papellidop" name="papellidop" placeholder="Primer apellido"  autocomplete="off" required tabindex="3">
                </div>
              </div>

                      <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Segundo apellido</label>
                <div class="col-sm-8">
    <input type="text" class="form-control inp" id="sapellidop" name="sapellidop" placeholder="Segundo apellido"  autocomplete="off" required tabindex="4">
                </div>
              </div>

            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Identidad</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="identidadp" name="identidadp" placeholder="Identidad"  autocomplete="off" required tabindex="5" >
                </div>
              </div>                 
                    <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Dirección</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="direccionp" name="direccionp" placeholder="Direccion"  autocomplete="off" required tabindex="6">
                </div>
              </div>   

            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Encargado</label>
                <div class="col-sm-8">
              <select class="form-control input-sm"  id="idencargadop" name="idencargadop" required tabindex="7">
       <option value="" selected>-Seleccione encargado-</option>
                  <?php
                    $sql_vendedor=mysqli_query($con,"select * from encargados order by nombre_e");
                    while ($rw=mysqli_fetch_array($sql_vendedor)){
                      $id_encargado=$rw["id_encargado"];
                      $nombre_e=$rw["nombre_e"];
                        $apellido_e=$rw["apellido_e"];
                      ?>
                      <option value="<?php echo $id_encargado?>" ><?php echo $id_encargado." / ".$nombre_e.' '.  $apellido_e=$rw["apellido_e"];?></option>
                      <?php
                    }
                  ?>
                  </select>          
          </div>
             </div>
  
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" id="limp" data-dismiss="modal">Cerrar</button>
      <button type="reset" class="btn btn-danger" >Limpiar</button>
      <button type="submit" class="btn btn-primary" id="Updatedalumnos">Actualizar datos</button>
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


$('#ip-field').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
        'Z': {
            pattern: /[0-9]/, optional: true
        }
    },
    placeholder: "___.___.___.___"
});
</script>  
  
