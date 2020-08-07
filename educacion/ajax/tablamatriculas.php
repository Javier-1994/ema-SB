
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
			<th>Identidad</th>
			<th>Curso</th>
			<th>Estado</th>
			
			
			<th width="20%">Acciones</th>
					
				</tr>
					</thead>	
				<tbody>
				<?php
	//$Table="Productos p, usuarios u WHERE p.id_usuario=u.id_usuarios";
					$Table="SELECT matricula.*,alumnos.* FROM matricula, alumnos WHERE matricula.idalumno=alumnos.id_alumno AND matricula.estado_ma='1'";

$sql1="$Table";
 
         $query=mysqli_query($con,$sql1);


 
while ($row=mysqli_fetch_array($query)){
$ide=$row['id_matricula'];
						$nombre_m=$row['pnombre_a'];
						$snombre_m=$row['snombre_a'];
						$apellido_m=$row['papellido_a'];
						$spellido_m=$row['sapellido_a'];
						$idcurso=$row['idcurso'];
						$identidad_m=$row['identidad_a'];
						$estado_m=$row['tipo_m'];
					


						//$hora=date("g:i:s a",strtotime($row["hora"]));
                    //  	$usuario=$row['id_usuario'];
					//	$usuariom=$row['id_usuario_modifica'];
                      // $fecha=date("d/m/Y", strtotime($row['fecha_creacion']));
                        //$fecham=date("d/m/Y", strtotime($row['fecha_modifica']));
					

?>	
				<tr>
                    <td><?php echo $nombre_m." ".$snombre_m." ".$apellido_m." ".$spellido_m;?></td>
					<td><?php echo $identidad_m; ?></td>
					<td><?php echo $idcurso; ?></td>
					<td><?php echo $estado_m; ?></td>
															
					<td ><span class="pull-right">

 <input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataUpdat" 
data-id_matricula="<?php echo $row['id_matricula']?>"
data-nombrea="<?php echo $row['idalumno']?>"
data-cursoa="<?php echo $row['idcurso']?>"
data-tipom="<?php echo $row['tipo_m']?>"
data-activop="<?php echo $row['fecha']?>"
  value="Editar">

<input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataConsult" 
data-idmatricula="<?php echo $row['id_matricula']?>"
data-nombrea="<?php echo $nombre_m." ".$snombre_m." ".$apellido_m." ".$spellido_m;?>"
data-cursoa="<?php echo $row['idcurso']?>"
data-tipom="<?php echo $row['tipo_m']?>"
data-activop="<?php echo $row['fecha']?>"
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
		
 