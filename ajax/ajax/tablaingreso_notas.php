<?php 
	session_start();
    require_once("../config/db.php");
	require_once("../config/conexion.php");
	$numasignacion=$_SESSION['numasignacion'];
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

											<th class="text-center">Alumno</th>
											<th class="text-center">Curso</th>
											<th class="text-center">Materia</th>
											<th class="text-center">Acciones</th>
											
										</tr>
									</thead>
									<tbody>
								<?php
	
								    $sql1="SELECT alumnos.id_alumno, alumnos.pnombre_a as Nombre1_Alumno, asignacionesm.idperiodo as Periodo, alumnos.snombre_a as Nombre2_Alumno, alumnos.papellido_a as Apellido1_Alumno, alumnos.sapellido_a as Apellido2_Alumno, matricula.idalumno,  asignacionesm.asignatura_a, curso.codigo_c, curso.nombre_c as Grado, asignatura.id_asignatura, asignatura.nombre_asig as Materia FROM alumnos, matricula, asignacionesm, curso, asignatura WHERE matricula.idalumno=alumnos.id_alumno AND matricula.idcurso=curso.codigo_c AND asignacionesm.asignatura_a=asignatura.id_asignatura AND asignatura.idcurso=curso.id_curso AND asignacionesm.id_asignaciones='$numasignacion'";
								
 
        					    $query=mysqli_query($con,$sql1);


 
								while ($row=mysqli_fetch_array($query)){
										$idalumno=$row['id_alumno'];
										$idperiodo=$row['Periodo'];
										$idcurso=$row['codigo_c'];
										$idmateria=$row['id_asignatura'];
										$nombrealumno=$row['Nombre1_Alumno'];//
										$nombre2alumno=$row['Nombre2_Alumno'];//
										$apellidoalumno=$row['Apellido1_Alumno'];//
										$apellid2oalumno=$row['Apellido2_Alumno'];//
										$carrera=$row['Grado'];
										$materia=$row['Materia'];

										$materiaid=mysqli_query($con,"SELECT * FROM notas WHERE  Idmateria='$idmateria' and Idalumno='$idalumno'");

											$row3=mysqli_fetch_array($materiaid);
											$id_notas=$row3['Idnotas'];
											$conducta=$row3['conducta'];
											$asistencia=$row3['asistencia'];
											$acum1=$row3['acum1'];
											$acum2=$row3['acum2'];
											$acum3=$row3['acum3'];
											$prueba1=$row3['prueba1'];
											$prueba2=$row3['prueba2'];
											$prueba3=$row3['prueba3'];
											$examen=$row3['examen'];
											$total=$row3['total'];
											$recuperacion=$row3['nota_recuperacion'];
										


?>	
										<tr>
											<td><?php echo $nombrealumno." ".$nombre2alumno." ".$apellidoalumno." ".$apellid2oalumno;?></td>
											<td><?php echo $carrera;?></td>
										    <td><?php echo $materia;?></td>
											
											
											
											 <td>

											  <input type="button" class="btn btn-default" data-toggle="modal" data-target="#data_notas" 
													data-idalumno="<?php echo $idalumno;?>"
													data-nombre1alumno="<?php echo $nombrealumno;?>"
													data-nombre2alumno="<?php echo $nombre2alumno;?>"
													data-apellido1alumno="<?php echo $apellidoalumno;?>"
													data-apellido2alumno="<?php echo $apellid2oalumno;?>"
													data-curso="<?php echo $carrera;?>"
													data-idnotas="<?php echo $id_notas;?>"
													data-idperiodo="<?php echo $idperiodo;?>"
													data-idcurso="<?php echo $idcurso;?>"
													data-materia="<?php echo $materia;?>"
													data-idmateria="<?php echo $idmateria;?>"
													data-conducta="<?php echo $conducta;?>"
													data-asistencia="<?php echo $asistencia;?>"
													data-acum1="<?php echo $acum1;?>"
													data-acum2="<?php echo $acum2;?>"
													data-acum3="<?php echo $acum3;?>"
													data-prueba1="<?php echo $prueba1;?>"
													data-prueba2="<?php echo $prueba2;?>"
													data-prueba3="<?php echo $prueba3;?>"
													data-examen="<?php echo $examen;?>"
														data-nota_total="<?php echo $total;?>"
														data-recuperacion="<?php echo $recuperacion;?>"
													value="Ingresar Notas">
											</td> 

										</tr>
								<?php
								
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