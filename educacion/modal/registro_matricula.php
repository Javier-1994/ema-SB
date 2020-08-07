<?php
    //sif (isset($con))
    //{

require_once("./config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("./config/conexion.php");//Contiene funcion que conecta a la base de datos
  ?>
  <!-- Modal -->

      <div class="modal fade" id="nueva_matricula" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Agregar Nueva Matricula</h4>
      </div>

      
      <div class="modal-body">
      <form class="form-horizontal" id="formulario" name="formulario"  method="POST" >
     <div id="comprobarid"></div>
       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre Alumno</label>
               <div class="controls col-md-8 ">
  <input type="text" class="form-control" name="idalumno"  list="idalumno" placeholder="Ingrese el nombre"   required>

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
                <label for="user_name" class="col-sm-3 control-label">Curso a Matricular</label>
               <div class="controls col-md-8 ">
  <input type="text" class="form-control" name="idcurso"  list="idcurso" placeholder="Ingrese el nombre"   required>

<datalist id="idcurso">
       <select id="idcurso"  name="idcurso" autocomplete="off">
            <?php
           $curso=mysqli_query($con,"SELECT * FROM curso") or die(mysqli_error());
              while ($fila=mysqli_fetch_row($curso)) {
               echo "<option value='".$fila['2']."'> ".$fila['1']." - ".$fila['2']."</option>";
              }
            ?>
      </select>   
      </datalist>
                </div>
                </div>    
                <?php 

$fecha=date("Y")

 ?>
  <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Año </label>
               <div class="controls col-md-8 ">
     <input type="text" class="form-control" name="activo" id="activo" value="<?php echo $fecha;  ?>"disabled>
   </div>
 </div>

 <input type="hidden" class="form-control inp" id="y" name="y" placeholder="Año" value="<?php echo date("Y") ?>" tabindex="4" disabled>
                    
                       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Tipo de Matricula</label>
                <div class="col-sm-8">
             <select name="matricula" id="matricula" class="form-control">
            <option value="" selected>-Seleccione Maticula-</option>
          <option value="Normal">Normal</option>
           <option value="Repitente">Repitente</option>
        </select> 
                </div>
              </div>


          <div class="modal-footer">
            <button type="reset"  class="btn btn-danger">Limpiar</button>
            <input type="submit" class="btn btn-primary" id="agregarmatricula" name="agregar" value="Agregar"></button>
          </div>
  </form>
    </div>
    </div>

  </div>
  </div>
  <?php
    //}
  ?>

