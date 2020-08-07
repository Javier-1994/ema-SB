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
		
			<th>Nombre Alumno</th>
			<th>Fecha</th>
			<th>Descripción</th>
			
			
			<th width="20%">Acciones</th>
					
				</tr>
					</thead>	
				<tbody>
				<?php
	//$Table="Productos p, usuarios u WHERE p.id_usuario=u.id_usuarios";
					$Table="SELECT actas.id_acta,actas.idalumno,actas.fecha_a,actas.descripcion_a,alumnos.id_alumno,alumnos.pnombre_a,alumnos.snombre_a,alumnos.papellido_a,alumnos.sapellido_a
					 FROM actas
	INNER JOIN alumnos ON actas.idalumno=alumnos.id_alumno";

$sql1=$Table;
 
         $query=mysqli_query($con,$sql1);
 
while ($row=mysqli_fetch_array($query)){
                        $idacta=$row['id_acta'];
						$idalumno=$row['idalumno'];
						$pnombre_a=$row['pnombre_a'];
					    $papellido_a=$row['papellido_a'];
						$fecha_a=$row['fecha_a'];
						$descripcion_a=$row['descripcion_a'];
						
						 
?>	
	
                   
					<td><?php echo  $pnombre_a." ".$papellido_a;?></td>
					<td><?php echo $fecha_a; ?></td>
					<td><?php echo $descripcion_a; ?></td>
					
																	
					<td ><span class="pull-right">

 <input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataUpdat" data-idacta="<?php echo $row['id_acta']?>"data-actae="<?php echo $row['id_acta']?>" data-idalumnoe="<?php echo $row['idalumno']?>" data-fechae="<?php echo $row['fecha_a']?>" data-descripcione="<?php echo $row['descripcion_a']?>" value="Editar">

<input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataConsult" data-idactap="<?php echo $row['id_acta']?>" data-idalumnop="<?php echo $row['pnombre_a']." ".$row['papellido_a'] ?>" data-fechap="<?php echo $row['fecha_a']?>" data-descripcionp="<?php echo $row['descripcion_a']?>" value="Consultar">

						
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