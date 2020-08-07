<?php
    //sif (isset($con))
    //{

require_once("./config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("./config/conexion.php");//Contiene funcion que conecta a la base de datos
  ?>
  <!-- Modal -->

      <div class="modal fade" id="nueva_nota" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Agregar nuevo maestro</h4>
      </div>


      
      <div class="modal-body">
      <form class="form-horizontal" id="formulario" name="formulario"  method="POST" autocomplete="off" >
     <div id="comprobarid"></div>
      
        <div class="form-group">
                <label for="user_name" class="col-sm-2 control-label">Nombre alumno</label>
                <div class="col-sm-10">
           <input type="text" class="form-control" name="idalumno"  list="idalumno" placeholder="Ingrese el nombre o identidad"   required>

<datalist id="idalumno">
       <select id="idalumno"  name="idalumno" autocomplete="off">
            <?php
           $alu=mysqli_query($con,"SELECT * FROM alumnos") or die(mysqli_error());
              while ($fila=mysqli_fetch_row($alu)) {
               echo "<option value='".$fila['0']."'> ".$fila['1']." - ".$fila['3']." - ".$fila['5']."</option>";
              }
            ?>
      </select>   
      </datalist>
        </div>
        </div>   

                            <?php 

require_once("config/db.php");
require_once("config/conexion.php");

 $query=mysqli_query($con,"SELECT * FROM  periodo where estado_p='1'");
        $row=mysqli_fetch_array($query);
$estado_factura=$row['estado_p'];
$codigo=$row['codigo_p'];
       if ($estado_factura==1){$text_estado=$codigo;}
            else{$text_estado="";}
                 
 ?>  
  <div class="form-horinzontal">
                <label for="user_name" class="col-sm-2 control-label">Periodo </label>
               <div class="controls col-md-4 ">
     <input type="text" class="form-control" name="activo" id="activo" value="<?php  echo $text_estado;  ?>"disabled>
   </div>
 </div>

 <div class="form-group">
                <label for="user_name" class="col-sm-2 control-label">Curso</label>
                <div class="col-sm-4">
              <select class="form-control input-sm"  id="idcurso" name="idcurso">
       <option value="0" selected>-Seleccione asignatura-</option>
                  <?php
                    $sql_vendedor=mysqli_query($con,"select * from curso order by nombre_c");
                    while ($rw=mysqli_fetch_array($sql_vendedor)){
                      $id_curso=$rw["id_curso"];
                      $nombre_c=$rw["nombre_c"];
                      ?>
                      <option value="<?php echo $id_curso?>" ><?php echo $nombre_c?></option>
                      <?php
                    }
                  ?>
                  </select>          
          </div>
             </div>
  

             <div class="form-group">
                <label for="user_name" class="col-sm-2 control-label">Telefono</label>
                <div class="col-sm-10">
        <input type="text" class="form-control inp" id="telefono_m" name="telefono_m" placeholder="Telefono"  autocomplete="off" required tabindex="4">
                </div>
              </div>         

                    <div class="form-group">
                <label for="user_name" class="col-sm-2 control-label">Estado</label>
                <div class="col-sm-10">
             <select name="estado_m" id="estado_m" class="form-control inp">
            <option value="" selected>-Seleccione estado-</option>
          <option value="Activo">Activo</option>
           <option value="Inactivo">Inactivo</option>
        </select> 
                </div>
              </div>
 
          <div class="modal-footer">
            <button type="reset"  class="btn btn-danger">Limpiar</button>
            <input type="submit" class="btn btn-primary" id="agregarmaestros" name="agregar" value="Agregar"></button>
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