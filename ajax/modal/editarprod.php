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
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Editar Producto</h4>
      </div>
      <div class="modal-body">
      <form  class="form-horizontal" method="post">
      <div id="actualizaDatos"></div>
  
<input type="hidden" class="form-control inp" id="idprod" name="idprod" placeholder="idprod">

<div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="nombrep" name="nombrep" placeholder="Nombre" autocomplete="off" required tabindex="1">
                  </div>
                </div>

                <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Costo</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="costop" name="costop" placeholder="Costo" autocomplete="off" required tabindex="2" readonly="readonly">
                  </div>
                </div>

                <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Precio</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="preciop" name="preciop" placeholder="Precio" autocomplete="off" required tabindex="3" readonly="readonly">
                  </div>
                </div>
            
            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Codigo</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="codigop" name="codigop" placeholder="Codigo"  autocomplete="off" required tabindex="4">
                </div>
              </div>      
                 

            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Linea</label>
                <div class="col-sm-8">
              <select class="form-control input-sm"  id="lineap" name="lineap">
       <option value="" selected>-Seleccione Linea-</option>
                  <?php
                    $sql_vendedor=mysqli_query($con,"select * from linea order by nombre_linea");
                    while ($rw=mysqli_fetch_array($sql_vendedor)){
                      $id_linea=$rw["id_linea"];
                      $nombre_linea=$rw["nombre_linea"];
                     
                      ?>
                      <option value="<?php echo $nombre_linea?>" ><?php echo $nombre_linea?></option>
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
      <button type="submit" class="btn btn-primary" id="Updatedprod">Actualizar datos</button>
      </div>
      </form>
    </div>
    </div>
  </div>
  <?php

    //}
  ?>

  
  