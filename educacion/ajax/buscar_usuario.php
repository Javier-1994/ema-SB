<?php

	
	require_once("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once("../config/conexion.php");//Contiene funcion que conecta a la base de datos

?>


			<div class="table-responsive">
		
			<div class="col-md-12">
				<table id="farmacia" class="table table-striped  table-hover" >
			  	<thead>		
				<tr style="background-color: #2A6968;color: #FFFFFF;">
		
			<th>Nombre</th>
			<th>Usuario</th>
			<th>Tipo</th>
			<th>Agregado por</th>
			<th>Modificado por</th>
			<th>Estado</th>
			
			
			<th width="20%">Acciones</th>
					
				</tr>
					</thead>	
				<tbody>
				<?php
	//$Table="Proveedores p, usuarios u WHERE p.id_usuario=u.id_usuarios";
					$Table="usuarios";

$sql1="SELECT * FROM  $Table";
 
         $query=mysqli_query($con,$sql1);


 
while ($row=mysqli_fetch_array($query)){
$id_usuario=$row['id_usuarios'];
						$nombre=$row['nombre'];
						$usuario=$row['usuario'];
						$agregado=$row['agregado'];
						  $fecha=date("d/m/Y", strtotime($row['fecha_ingreso']));
						$modificado=$row['modificado'];
						 $fecham=date("d/m/Y", strtotime($row['fecha_modificacion']));

						$tipo=$row['tipo'];
						if ($tipo==1){$text_tipo="Administrador";}
						if ($tipo==2){$text_tipo="Maestro";}
						
	                     $estado_u=$row['estado'];

                      if ($estado_u=='A'){$text_estado="Activo";}
						else{$text_estado="Inactivo";}
					
?>	
				<tr>
						<td><?php echo  $nombre; ?></td>
						<td><?php echo  $usuario; ?></td>
						<td><?php echo  $text_tipo; ?></td>
						<td><?php echo  $agregado." ".$fecha; ?></td>
						<td><?php echo  $modificado." ".$fecham; ?></td>
						<td><?php echo $text_estado; ?></td>
					    <td ><span class="pull-right">

<input type="button" class="btn btn-default" value="Inabilitar" data-toggle="modal" data-target="#debaja_usuario" 
data-id_usuario="<?php echo $row['id_usuarios']?>"data-nombreu="<?php echo $row['nombre']?>" data-usuariou="<?php echo $row['usuario']?>" data-estadou="<?php echo $row['estado']?>" >

						
					</tr>
					<?php
				}
				?>
				
					</span></td>
				</tr>
				</tbody>
			  </table>
			</div>
			 <!--libreriad para tablas-->
  <script src="js/data/jquery.dataTables.min.js"></script>
   <script src="js/data/dataTables.bootstrap.min.js"></script>
  <script > 
$(document).ready(function() {
    $('#farmacia').DataTable({
    	"language": {
            "lengthMenu": "Mostrar MENU registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de START al END de un total de  TOTAL registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de MAX registros)",
            "search": "Buscar:",
            "paginate": {
	            "first":    "Primero",
	            "last":    "Último",
	            "next":    "Siguiente",
	            "previous": "Anterior"
	        },
        }
    });
} );


  </script>
 
			</div>
				</div>