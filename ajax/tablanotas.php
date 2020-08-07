

<?php 
	session_start();
    require_once("../config/db.php");
	require_once("../config/conexion.php");
	$docente=$_SESSION['usuario'];
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
								
								<table class="table table-hover text-center" id="grado">
									<thead>
										<tr style="background-color: #2A6968;color: #FFFFFF;">

											<th class="text-center">Docente a Cargo</th>
											<th class="text-center">Periodo</th>
											<th class="text-center">Materia asignada</th>
											<th class="text-center">Acciones</th>
											
										</tr>
									</thead>
									<tbody>
								<?php
	
								      if ($_SESSION['tipo']=='1') {
								        // $sql1="SELECT a.id_asignaciones,c.id_Curso,c.nombre_c As Curso,asig.Id_Materia,asig.nombre_asig AS asignatura,m.identidad_m,m.nombre_m AS Docente, m.apellido_m as Docente_A FROM curso c INNER JOIN(asignatura asig INNER JOIN(maestros m INNER JOIN asignacionesm a ON m.identidad_m=a.idmaestro)ON asig.id_asignatura=a.id_asignatura)ON c.id_Curso=asig.idcurso";
								        $sql1="SELECT  asignacionesm.*, maestros.* FROM asignacionesm, maestros WHERE asignacionesm.idmaestro=maestros.identidad_m AND asignacionesm.estado_m='1'";
								      }

								      if ($_SESSION['tipo']=='2') {
								         // $sql1="SELECT a.id_asignaciones,c.id_Curso,c.nombre_c As Curso,asig.id_asignatura,asig.nombre_asig AS asignatura,m.identidad_m,m.nombre_m AS Docente, m.apellido_m as Docente_A FROM curso c INNER JOIN(asignatura asig INNER JOIN(maestros m INNER JOIN asignacionesm a ON m.identidad_m=a.idmaestro)ON asig.id_asignatura=a.id_asignatura)ON c.id_Curso=asig.idcurso WHERE a.idmaestro='$docente'";
								      	$sql1="SELECT  asignacionesm.*, maestros.* FROM asignacionesm, maestros WHERE asignacionesm.idmaestro=maestros.identidad_m AND asignacionesm.idmaestro='$docente' AND asignacionesm.estado_m='1'";
								      }

								
 
        					    $query=mysqli_query($con,$sql1);


 
								while ($row=mysqli_fetch_array($query)){
			                        $id_asignaciones=$row['id_asignaciones'];
									$idmaestro=$row['idmaestro'];
									$nombremaestro=$row['nombre_m'];
									$apellidomaestro=$row['apellido_m'];
									$periodo=$row['idperiodo'];
								    $estado=$row['estado_m'];
								    $asignatura=$row['asignatura_a'];
								    $materia_uno=mysqli_query($con,"SELECT asignatura.*, curso.* FROM asignatura, curso WHERE asignatura.id_asignatura='$asignatura' AND asignatura.idcurso=curso.id_curso");
									while ($row1=mysqli_fetch_array($materia_uno)){
										$asig_uno=$row1['nombre_asig'];
										$curso_uno=$row1['nombre_c'];
										$id_asig=$row1['id_asignatura'];
									

								 //    $asignatura_uno=$row['asignatura_uno'];
								 //    $asignatura_dos=$row['asignatura_dos'];
								 //    $asignatura_tres=$row['asignatura_tres'];
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
?>	
										<tr>
											<td><?php echo $nombremaestro.' '.$apellidomaestro;?></td>
                        					<td><?php echo $periodo; ?></td>
                        					<td><?php echo $asig_uno.'-'.$curso_uno;?></td> 
											<!-- <td><?php echo $asig_uno.'-'.$curso_uno.', '.$asig_dos.'-'.$curso_dos.', '.$asig_tres.'-'.$curso_tres;?></td> -->

										    <td>
											 <a class="btn btn-default" href='ingreso_notas.php?numasignacion=<?php echo $id_asignaciones;?>'><i class="zmdi zmdi-floppy"></i>Gestionar Notas</a>


										    </td> 
										</tr>
								<?php
								 }
								 }
								?>
								</tbody>
								</table>
							</div>
							

			 <!--libreriad para tablas-->
  <script src="js/data/jquery.dataTables.min.js"></script>
   <script src="js/data/dataTables.bootstrap.min.js"></script>
  <script > 
$(document).ready(function() {
    $('#grado').DataTable({
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





<!-- 
				<input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataUpdat" data-idalumno="<?php echo $row['id_alumno']?>"data-pnombrep="<?php echo $row['pnombre_a']?>" data-snombrep="<?php echo $row['snombre_a']?>" data-papellidop="<?php echo $row['papellido_a']?>" data-sapellidop="<?php echo $row['sapellido_a']?>" data-identidadp="<?php echo $row['identidad_a']?>" 
data-direccionp= "<?php echo $row['direccion_a']?>" data-idencargadop="<?php echo $row['id_encargado']?>" value="Editar">

<input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataConsult" data-idalumno="<?php echo $row['id_alumno']?>" data-pnombrep="<?php echo $row['pnombre_a']?>" data-snombrep="<?php echo $row['snombre_a']?>" data-papellidop="<?php echo $row['papellido_a']?>"  data-sapellidop="<?php echo $row['sapellido_a']?>"  data-identidadp="<?php echo $row['identidad_a']?>" 
data-direccionp= "<?php echo $row['direccion_a']?>" data-idencargadop="<?php echo $row['nombre_e']?>" value="Consultar"> -->
