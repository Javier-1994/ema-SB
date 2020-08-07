	<?php
		//if (isset($con))
		//{
	?>
	<!-- Modal -->
	<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header" style="background:#2A6968;">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Editar Producto</h4>
		  </div>
		  <div class="modal-body">
			<form  class="form-horizontal" method="post" id="guardar_cliente" name="guardar_cliente">
			<div id="actualizaDatos"></div>

			 <div class="form-group">
<label for="user_name" class="col-sm-3 control-label">RTN</label>
                <div class="controls col-md-8 ">
<input type="text" class="input-md textinput textInput form-control inp"  id="rtnp" name="rtnp"   placeholder="RTN"  autocomplete="off" required tabindex="1">

<input type="hidden" class="input-md textinput textInput form-control inp"  id="idp" name="idp"   placeholder="RTN"  >
                </div>
                  </div>
            

           <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="nombrep" name="nombrep" placeholder="Nombre" autocomplete="off" required tabindex="2">
                 
                </div>
            </div>
             
            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Direccion</label>
                <div class="col-sm-8">
    <input type="text" class="form-control inp" id="direccionp" name="direccionp" placeholder="Direccion"  autocomplete="off" required tabindex="3">
                </div>
              </div>


            <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Telefono</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="telefonop" name="telefonop" placeholder="Telefono"  autocomplete="off" required tabindex="4">
                </div>
              </div>
  

                 
             
            
         
	
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" id="limp" data-dismiss="modal">Cerrar</button>
			<button type="reset" class="btn btn-danger" >Limpiar</button>
			<button type="submit" class="btn btn-primary" id="updatep">Actualizar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php

		//}
	?>

	
	 <script type="text/javascript" >
  
  $('#rtnp').mask("00000000000000", {placeholder: ""});
   $('#telefonop').mask("0000-0000", {placeholder: ""});


</script>