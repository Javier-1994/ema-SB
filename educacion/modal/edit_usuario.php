	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="debaja_usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header" style="background:#2A6968;">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Editar Usuario</h4>
		  </div>
		  
		  <div class="modal-body">
		
<form class="form-horizontal" method="post" id="guardar_cliente" name="guardar_cliente">
        <div id="comprobaridd"></div>

        
                  <input type="hidden" class="input-md textinput textInput form-control inp"  id="id_usuario" name="id_usuario"   placeholder="Nombre"  autocomplete="off" >
             
<input type="hidden" class="input-md textinput textInput form-control inp"  id="usuariou" name="usuariou"   placeholder="Nombre"  autocomplete="off" >
               
                 <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre</label>
                <div class="controls col-md-8 ">
<input type="text" class="input-md textinput textInput form-control inp"  id="nombreu" name="nombreu"  disabled>
                </div>
            </div>


<div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Estado de Usuario</label>
                <div class="col-sm-8">
        <select name="estadou" id="estadou">
            <option value="" selected>-Seleccione-</option>
          <option value="A">Activo</option>
           <option value="I">Inactivo</option>
             
        </select> 
                </div>
              </div>
</div>
          <div class="modal-footer">
          		<button type="button"  id="limpiar" class="btn btn-default" data-dismiss="modal">Cerrar</button>
           
            <input type="submit" class="btn btn-primary" id="debaja_u" name="debaja_u"  value="Actualizar"></button>
          </div>

                </form>


		</div>
	  </div>

	</div>
	<?php
		}
	?>

