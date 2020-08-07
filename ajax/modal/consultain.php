	<?php
		//if (isset($con))
		//{
	
	?>
	<!-- Modal -->
	<div class="modal fade" id="inconsult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header" style="background:#2A6968;">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Consultar</h4>
		  </div>
		  <div class="modal-body">
			<form  class="form-horizontal" method="post" id="guardar_cliente" name="guardar_cliente">
		<div id="actualizaDatos"></div>


<div class="form-group">
        <label for="user_name" class="col-sm-3 control-label">Producto</label>
        <div class="col-sm-8">
       <input type="text" class="form-control" id="nombre_prod" name="nombre_prod" placeholder="nombre_prod" readonly="readonly" autocomplete="off">
        </div>
        </div>

<div class="form-group">
        <label for="user_name" class="col-sm-3 control-label">Motivo</label>
        <div class="col-sm-8">
       <textarea type="" rows="2" class="form-control" id="desc_m" name="desc_m" placeholder="desc_m" readonly="readonly" autocomplete="off"></textarea>
        </div>
        </div>


        <div class="form-group">
        <label for="user_name" class="col-sm-3 control-label">cantidad actual</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad" readonly="readonly" autocomplete="off">
        </div>
        </div>

       
       

      


      

               
<table class="table">
	
	<thead>
		<tr>
			<th>Agregado por</th>
			<th>Actualizado por</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<input type="text" class="form-control inp" id="agregado" name="agregado" placeholder="agregado"  autocomplete="off" required tabindex="4"  disabled>
        <input type="text" class="form-control inp" id="fecha" name="fecha" disabled>
			</td>

			<td>
				<input type="text" class="form-control inp" id="modificado" name="modificado" placeholder="agregado"  autocomplete="off" required tabindex="4"  disabled>
        <input type="text" class="form-control inp" id="fecha_modifica" name="fecha_modifica" disabled>
			</td>
		</tr>

	</tbody>
</table>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			
		  </div>

		  </form>
		</div>
	  </div>
	</div>
		</div>
	<?php

		//}
	?>

	
	