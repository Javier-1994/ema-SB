<?php
		//sif (isset($con))
		//{

require_once("./config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("./config/conexion.php");//Contiene funcion que conecta a la base de datos
	?>
	<!-- Modal -->

      <div class="modal fade" id="nuevo_producto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Agregar nuevo Producto</h4>
      </div>
		  
		  <div class="modal-body">
			<form class="form-horizontal" id="formulario" name="formulario"  method="POST" >
		 <div id="comprobarid"></div>
		   <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="nombre" name="nombre" placeholder="Nombre" autocomplete="off" required tabindex="1">
               
                </div>
                </div>

            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Costo</label>
                <div class="col-sm-8">
    <input type="text" class="form-control inp" id="costo" name="costo" placeholder="Costo"  autocomplete="off" required tabindex="2">
                </div>
              </div>

            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Precio</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="precio" name="precio" placeholder="Precio"  autocomplete="off" required tabindex="3">
                </div>
              </div>
  

             <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Codigo</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="codigo" name="codigo" placeholder="Codigo"  autocomplete="off" required tabindex="4">
                </div>
              </div>      
                 
            
                       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Linea</label>
                <div class="col-sm-8">
              <select class="form-control input-sm"  id="linea" name="linea">
       <option value="0" selected>-Seleccione Linea-</option>
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


          <div class="modal-footer">
            <button type="reset"  class="btn btn-danger">Limpiar</button>
            <input type="submit" class="btn btn-primary" id="agregarpro" name="agregar" value="Agregar"></button>
          </div>
  </form>
		</div>
	  </div>

	</div>
  </div>
	<?php
		//}
	?>

