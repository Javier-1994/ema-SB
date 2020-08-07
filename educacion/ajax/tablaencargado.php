
<?php

	require_once("../config/db.php");
	require_once("../config/conexion.php");

			?>

<style>
	
  .boton_personalizado{
    text-decoration: none;
    padding: 2px;
    font-weight: 600;
    font-size: 10px;
    color: #ffffff;
    background-color:#DBD9D9;
    border-radius: 6px;
    border: 2px solid #0B0A0A;
  }
  .boton_personalizado:hover{
    color: #1883ba;
    background-color: #ffffff;
  }


</style>
			<div class="table-responsive">
		
			<div class="col-md-12">
				<table id="farmacia" class="table table-striped  table-hover" >
			  	<thead>		
				<tr style="background-color: #2A6968;color: #FFFFFF;">
		
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Identidad</th>
			<th>Teléfono</th>
			<th>Tipo</th>
			
			
			<th width="20%">Acciones</th>
					
				</tr>
					</thead>	
				<tbody>
				<?php
	//$Table="Productos p, usuarios u WHERE p.id_usuario=u.id_usuarios";
					$Table="encargados";

$sql1="SELECT * FROM  $Table";
 
         $query=mysqli_query($con,$sql1);


 
while ($row=mysqli_fetch_array($query)){
$ide=$row['id_encargado'];
						$nombre_e=$row['nombre_e'];
						$apellido_e=$row['apellido_e'];
						$identidad_e=$row['identidad_e'];
						$telefono_e=$row['telefono_e'];
						$tipo_e=$row['tipo_e'];
						
						//$hora=date("g:i:s a",strtotime($row["hora"]));
                    //  	$usuario=$row['id_usuario'];
					//	$usuariom=$row['id_usuario_modifica'];
                      // $fecha=date("d/m/Y", strtotime($row['fecha_creacion']));
                        //$fecham=date("d/m/Y", strtotime($row['fecha_modifica']));
					

?>	
				<tr>
                         <td><?php echo $nombre_e;?></td>
						<td><?php echo $apellido_e; ?></td>
						<td><?php echo $identidad_e; ?></td>
						<td><?php echo $telefono_e; ?></td>
						<td><?php echo $tipo_e; ?></td>
															
					<td ><span class="pull-right">

<input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataUpdat" data-idencargados="<?php echo $row['id_encargado']?>"data-nombrep="<?php echo $row['nombre_e']?>" data-apellidop="<?php echo $row['apellido_e']?>" data-identidadp="<?php echo $row['identidad_e']?>" 
data-telefonop= "<?php echo $row['telefono_e']?>" data-tipop="<?php echo $row['tipo_e']?>" value="Editar">

<input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataConsult" data-idencargados="<?php echo $row['id_encargado']?>" data-nombrep="<?php echo $row['nombre_e']?>" data-apellidop="<?php echo $row['apellido_e']?>"  data-identidadp="<?php echo $row['identidad_e']?>" 
data-telefonop= "<?php echo $row['telefono_e']?>" data-tipop="<?php echo $row['tipo_e']?>" value="Consultar">
					
						
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
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
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
		
 