<?php
require_once("./config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("./config/conexion.php");//Contiene funcion que conecta a la base de datos
  ?>
  
  <!-- Modal -->

      <div class="modal fade" id="data_notas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Gestionar las notas del Alumno:</h4>
      </div>


      
      <div class="modal-body">
      <form class="form-horizontal" id="formulario" name="formulario"  method="POST" autocomplete="off">
     <div id="comprobarid"></div>
      

      <input type="hidden" class="form-control" name="idnotas" id="idnotas" placeholder="id de notas" disabled>
      <input type="hidden" class="form-control" name="idalumno" id="idalumno" placeholder="id del alumno" disabled>
      <input type="hidden" class="form-control" name="idperiodo" id="idperiodo" placeholder="id del alumno" disabled>
      <input type="hidden" class="form-control" name="idmateria" id="idmateria" placeholder="Nombre de la materia" disabled>
      <input type="hidden" class="form-control" name="idcurso" id="idcurso" placeholder="Nombre de la materia" disabled>

        <div class="form-group">
          <label for="user_name" class="col-sm-2 control-label">Materia</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="materia" id="materia" placeholder="Nombre de la materia" disabled>
            </div>
        </div>

        <div class="form-group">
          <label for="user_name" class="col-sm-2 control-label">Curso</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="curso" id="curso"  placeholder="Nombre del curso" disabled>
            </div>
        </div>

        <hr>

        <div class="form-group">
          <label for="user_name" class="col-sm-3 control-label">Conducta</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="conducta"  id="conducta" onkeyup="calculanota();"placeholder="Puntaje de la conducta">
            </div>
        </div>

        <div class="form-group">
          <label for="user_name" class="col-sm-3 control-label">Asistencia</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="asistencia"  id="asistencia" onkeyup="calculanota();" placeholder="Puntaje de la asistencia">
            </div>
        </div>

        <div class="form-group">
          <label for="user_name" class="col-sm-3 control-label">I Acumulativo</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="acum1"  id="acum1" onkeyup="calculanota();" placeholder="Puntaje del I Acumulativo">
            </div>
        </div> 

        <div class="form-group">
          <label for="user_name" class="col-sm-3 control-label">II Acumulativo</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="acum2"  id="acum2" onkeyup="calculanota();" placeholder="Puntaje del II Acumulativo">
            </div>
        </div>

        <div class="form-group">
          <label for="user_name" class="col-sm-3 control-label">III Acumulativo</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="acum3"  id="acum3" onkeyup="calculanota();" placeholder="Puntaje del III Acumulativo">
            </div>
        </div>

        <div class="form-group">
          <label for="user_name" class="col-sm-3 control-label">I Prueba</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="prueba1"  id="prueba1" onkeyup="calculanota();" placeholder="Puntaje de la I Prueba">
            </div>
        
        </div>
        <div class="form-group">
          <label for="user_name" class="col-sm-3 control-label">II Prueba</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="prueba2"  id="prueba2" onkeyup="calculanota();" placeholder="Puntaje de la II Prueba">
            </div>
        </div>

        <div class="form-group">
          <label for="user_name" class="col-sm-3 control-label">III Prueba</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="prueba3"  id="prueba3" onkeyup="calculanota();" placeholder="Puntaje de la III Prueba">
            </div>
        </div>   

        <div class="form-group">
          <label for="user_name" class="col-sm-3 control-label">Examen</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="examen"  id="examen" onkeyup="calculanota();" placeholder="Puntaje del Examen Final">
            </div>
        </div> 

         <div class="form-group">
          <label for="user_name" class="col-sm-3 control-label">Nota Total</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nota_total"  id="nota_total" placeholder="" disabled>
            </div>
        </div> 

           <div class="form-group">
          <label for="user_name" class="col-sm-3 control-label">Nota Recuperación</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="recuperacion"  id="recuperacion" placeholder="" >
            </div>
        </div> 

          
           <div class="modal-footer">
            <button type="reset"  class="btn btn-danger">Limpiar</button>
            <input type="submit" class="btn btn-primary" id="agregarnotas" name="agregar" value="Guardar Notas"></button>
          </div>
  </form>
    </div>
    </div>

  </div>
  </div>
  <?php
    //}
  ?>

