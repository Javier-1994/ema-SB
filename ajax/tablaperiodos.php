
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
			
			<th>Período</th>
			<th>Año</th>
			<th>Estado</th>
			<th>Estado</th>	
			
			<th width="18%">Acciones</th>
					
				</tr>
					</thead>	
				<tbody>
				<?php
$Table="SELECT * FROM periodo WHERE estado_p<'3'";
					

$sql1="$Table";
 
         $query=mysqli_query($con,$sql1);


 
while ($row=mysqli_fetch_array($query)){
$id_periodo=$row['id_periodo'];
						$codigo_p=$row['codigo_p'];
						$date=$row['anio_p'];
						$estado=$row['estado_p'];

						if ($estado=='1') {
							$auto='ACTIVO';
						}
						if ($estado=='2') {
							$auto='INACTIVO';
						}
						
						//$hora=date("g:i:s a",strtotime($row["hora"]));
                    //  	$usuario=$row['id_usuario'];
					//	$usuariom=$row['id_usuario_modifica'];
                      // $fecha=date("d/m/Y", strtotime($row['fecha_creacion']));
                        //$fecham=date("d/m/Y", strtotime($row['fecha_modifica']));
					

?>	
				<tr>
                        <td><?php echo $codigo_p;?></td>
						<td><?php echo $date; ?></td>
						<td><?php echo $estado; ?></td>
						<td><?php echo $auto; ?></td>

				
															
					<td ><span class="pull-right">

 <input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataUpdat" data-id_periodo="<?php echo $row['id_periodo']?>" data-codigo_pe="<?php echo $row['codigo_p']?>" data-date="<?php echo $row['anio_p']?>" data-estado_peri="<?php echo $row['estado_p']?>" value="Editar">
 


 <!--<input type="button" class="btn btn-default" data-toggle="modal" data-target="#datafinal" data-codigo_final="<?php echo $row['id_periodo']?>" data-codigo_pe="<?php echo $row['codigo_p']?>"  value="Cerra Periodo">-->


					
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
		
 