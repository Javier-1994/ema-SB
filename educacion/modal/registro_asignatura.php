<?php
    //sif (isset($con))
    //{

require_once("./config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("./config/conexion.php");//Contiene funcion que conecta a la base de datos
  ?>
  <!-- Modal -->

      <div class="modal fade" id="nuevo_asignatura" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Agregar nueva asignatura</h4>
      </div>

      
      <div class="modal-body">
      <form class="form-horizontal" id="formulario" name="formulario"  method="POST" >
     <div id="comprobarid"></div>
       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="nombre_asig" name="nombre_asig" placeholder="Nombre" autocomplete="off" required tabindex="1">
                </div>
                </div>              

       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Codigo</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="codigo_asig" name="codigo_asig" placeholder="Codigo" autocomplete="off" required tabindex="2">

                </div>
                </div>        
            
                    
                              <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Curso</label>
                <div class="col-sm-8">
              <select class="form-control input-sm"  id="idcurso" name="idcurso">
       <option value="0" selected>-Seleccione Curso-</option>
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


          <div class="modal-footer">
            <button type="reset"  class="btn btn-danger">Limpiar</button>
            <input type="submit" class="btn btn-primary" id="agregarasignatura" name="agregar" value="Agregar"></button>
          </div>
  </form>
    </div>
    </div>

  </div>
  </div>
  <?php
    //}
  ?>

