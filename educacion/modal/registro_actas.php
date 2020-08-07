<?php
    //sif (isset($con))
    //{

require_once("./config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("./config/conexion.php");//Contiene funcion que conecta a la base de datos
  ?>
  <!-- Modal -->

      <div class="modal fade" id="nueva_acta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Agregar acta</h4>
      </div>

      
      <div class="modal-body">
      <form class="form-horizontal" id="formulario" name="formulario"  method="POST" >
     <div id="comprobarid"></div>
     
             <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre alumno</label>
                <div class="col-sm-8">
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


            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Fecha</label>
                <div class="col-sm-8">
        <input type="date" class="form-control inp input-sm" id="fecha_a" name="fecha_a" placeholder="Fecha"  autocomplete="off" required tabindex="2">
                </div>
              </div>
  

             <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Descripción</label>
                <div class="col-sm-8">
        <textarea class="form-control inp" id="descripcion_a" name="descripcion_a" placeholder="Descripción"  autocomplete="off" required tabindex="3"></textarea>   

                </div>
              </div>         
            
                    
    


          <div class="modal-footer">
            <button type="reset"  class="btn btn-danger">Limpiar</button>
            <input type="submit" class="btn btn-primary" id="agregaractas" name="agregar" value="Agregar"></button>
          </div>
  </form>
    </div>
    </div>

  </div>
  </div>
  <?php
    //}
  ?>

