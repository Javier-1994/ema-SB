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
			<th>Identidad</th>
			<th>Dirección</th>
			<th>Encargado</th>
			
			
			<th width="20%">Acciones</th>
					
				</tr>
					</thead>	
				<tbody>
				<?php
	//$Table="Productos p, usuarios u WHERE p.id_usuario=u.id_usuarios";
					$Table="SELECT alumnos.id_alumno, alumnos.pnombre_a, alumnos.snombre_a,alumnos.papellido_a,alumnos.sapellido_a,alumnos.identidad_a,alumnos.direccion_a,alumnos.idencargado, encargados.id_encargado,encargados.nombre_e
					 FROM alumnos
	INNER JOIN encargados ON alumnos.idencargado=encargados.id_encargado";

$sql1=$Table;
 
         $query=mysqli_query($con,$sql1);


 
while ($row=mysqli_fetch_array($query)){
                        $ide=$row['id_alumno'];
						$pnombre_a=$row['pnombre_a'];
						$snombre_a=$row['snombre_a'];
						$papellido_a=$row['papellido_a'];
						$sapellido_a=$row['sapellido_a'];
						$identidad_a=$row['identidad_a'];
						$direccion_a=$row['direccion_a'];
						$idencargado=$row['idencargado'];
						$nombre_e=$row['nombre_e'];
						
						 
?>	
			<tr>
                    <td><?php echo  $pnombre_a." ".$snombre_a." ".$papellido_a." ".$sapellido_a; ?></td>
					<td><?php echo $identidad_a; ?></td>
					<td><?php echo $direccion_a; ?></td>
					<td><?php echo $nombre_e; ?></td>
																	
					<td ><span class="pull-right">

 <input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataUpdat" data-idalumno="<?php echo $row['id_alumno']?>"data-pnombrep="<?php echo $row['pnombre_a']?>" data-snombrep="<?php echo $row['snombre_a']?>" data-papellidop="<?php echo $row['papellido_a']?>" data-sapellidop="<?php echo $row['sapellido_a']?>" data-identidadp="<?php echo $row['identidad_a']?>" 
data-direccionp= "<?php echo $row['direccion_a']?>" data-idencargadop="<?php echo $row['id_encargado']?>" value="Editar">

<input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataConsult" data-idalumno="<?php echo $row['id_alumno']?>" data-pnombrep="<?php echo $row['pnombre_a']?>" data-snombrep="<?php echo $row['snombre_a']?>" data-papellidop="<?php echo $row['papellido_a']?>"  data-sapellidop="<?php echo $row['sapellido_a']?>"  data-identidadp="<?php echo $row['identidad_a']?>" 
data-direccionp= "<?php echo $row['direccion_a']?>" data-idencargadop="<?php echo $row['nombre_e']?>" value="Consultar">

						
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