	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="nuevo_usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header" style="background:#2A6968;">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Agregar Nuevo Usuario</h4>
		  </div>
		  
		  <div class="modal-body">
		
<form class="form-horizontal" method="post" id="guardar_cliente" name="guardar_cliente">
        <div id="comprobarid"></div>

          <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre</label>
                <div class="controls col-md-8 ">
<input type="text" class="input-md textinput textInput form-control inp"  id="nombre" name="nombre"   placeholder="Nombre"  autocomplete="off" required tabindex="1" title="Ingrese solo numeros">
                </div>
            </div>
                  
            

            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Usuario</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="usuario" name="usuario" placeholder="usuario" autocomplete="off" required tabindex="2">
                 </div>
                </div>
                
             

            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-8">
    <input type="password" class="form-control inp" id="pass" name="pass" placeholder="Password"  autocomplete="off" required tabindex="3">
                </div>
              </div>

          </div>
          <div class="modal-footer">
          		<button type="button"  id="limpiar" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="reset"  class="btn btn-danger">Limpiar</button>
            <input type="submit" class="btn btn-primary" id="agregar_usuario" name="agregaru"  value="Agregar"></button>
          </div>
 </form>


		</div>
	  </div>

	</div>
	<?php
		}
	?>

  
<script type="text/javascript" >
   $('#usuario').mask("0000-0000-00000", {placeholder: ""});
  

</script>