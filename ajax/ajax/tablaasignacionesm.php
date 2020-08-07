
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
		
			<th>Maestro</th>
			
			<th>Asignatura asignada</th>
			
			<th width="20%">Acciones</th>
					
				</tr>
					</thead>	
				<tbody>
				<?php
		
$Table="SELECT DISTINCT asignacionesm.*, maestros.* FROM asignacionesm, maestros WHERE asignacionesm.idmaestro=maestros.identidad_m AND asignacionesm.estado_m='1' order by asignacionesm.idmaestro ";


$sql1=$Table;
 
         $query=mysqli_query($con,$sql1);


 
while ($row=mysqli_fetch_array($query)){
                        $id_asignaciones=$row['id_asignaciones'];
						$idmaestro=$row['idmaestro'];
						$nombremaestro=$row['nombre_m'];
						$apellidomaestro=$row['apellido_m'];
					
					    $estado=$row['estado_m'];
					    $asignatura=$row['asignatura_a'];



					    // $asignatura_uno=$row['asignatura_uno'];
					    // $asignatura_dos=$row['asignatura_dos'];
					    // $asignatura_tres=$row['asignatura_tres'];
						// $materia_uno=mysqli_query($con,"SELECT asignatura.*, curso.* FROM asignatura, curso WHERE asignatura.id_asignatura='$asignatura_uno' AND asignatura.idcurso=curso.id_curso");
						// while ($row1=mysqli_fetch_array($materia_uno)){
						// 	$asig_uno=$row1['nombre_asig'];
						// 	$curso_uno=$row1['nombre_c'];
						// }
						// $materia_dos=mysqli_query($con,"SELECT asignatura.*, curso.* FROM asignatura, curso WHERE asignatura.id_asignatura='$asignatura_dos' AND asignatura.idcurso=curso.id_curso");
						// while ($row2=mysqli_fetch_array($materia_dos)){
						// 	$asig_dos=$row2['nombre_asig'];
						// 	$curso_dos=$row2['nombre_c'];
						// }
						// $materia_tres=mysqli_query($con,"SELECT asignatura.*, curso.* FROM asignatura, curso WHERE asignatura.id_asignatura='$asignatura_tres' AND asignatura.idcurso=curso.id_curso");
						// while ($row3=mysqli_fetch_array($materia_tres)){
						// 	$asig_tres=$row3['nombre_asig'];
						// 	$curso_tres=$row3['nombre_c'];
						// }

						
					
						   // $id_asignaciones=$row['id_asignaciones'];
						   // $nombremaestro=$row['idmaestro'];
						   // $periodo=$row['idperiodo'];
						   // $id_asignaciones=$row['id_asignaciones'];
						   // $nombreasignaturauno=$row['asignatura_uno'];
						   // $nombreasignaturados=$row['asignatura_dos'];
						   // $nombreasignaturatres=$row['asignatura_tres'];





?>	
				<tr>
                        <td><?php echo $nombremaestro.' '.$apellidomaestro;?></td>
                   

                        <td>
                        	<?php 
                        $materia=mysqli_query($con,"SELECT asignatura.*, curso.* FROM asignatura, curso WHERE asignatura.id_asignatura='$asignatura' AND asignatura.idcurso=curso.id_curso");
						while ($row1=mysqli_fetch_array($materia)){
							$asig_uno=$row1['nombre_asig'];
							$curso_uno=$row1['nombre_c'];
						
                        	echo $asig_uno.'-'.$curso_uno;
                        }
                        	?>
                        		
                        	</td>
						<!-- <td><?php echo $asig_uno.'-'.$curso_uno.', '.$asig_dos.'-'.$curso_dos.', '.$asig_tres.'-'.$curso_tres;?></td> -->
															
					<td ><span class="pull-right">

 <input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataUpdat" 
     data-idasignacionesp="<?php echo $row['id_asignaciones']?>" 
     data-maestrop="<?php echo $row['idmaestro']?>" 
         data-asignaturap="<?php echo $row['asignatura_a']?>" 
     data-nombreasigp="<?php echo $asig_uno;?>"
     value="Editar">

<input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataConsult" 
	 data-idasignaciones="<?php echo $row['id_asignaciones']?>" 
	 data-maestroc="<?php echo  $row['nombre_m']." ".$row['apellido_m'] ?>" 
	 data-cursoc="<?php echo $curso_uno;?>" 
	 data-nombreasigc="<?php echo $asig_uno;?>"
	 value="Consultar">

						
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
		
 