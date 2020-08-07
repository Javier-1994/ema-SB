
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
			<th>Codigo</th>	
			
			<th width="20%">Acciones</th>
					
				</tr>
					</thead>	
				<tbody>
				<?php
	//$Table="Productos p, usuarios u WHERE p.id_usuario=u.id_usuarios";
					$Table="curso";

$sql1="SELECT * FROM  $Table";
 
         $query=mysqli_query($con,$sql1);


 
while ($row=mysqli_fetch_array($query)){
$id_curso=$row['id_curso'];
						$nombre_c=$row['nombre_c'];
						$codigo_c=$row['codigo_c'];
						
						//$hora=date("g:i:s a",strtotime($row["hora"]));
                    //  	$usuario=$row['id_usuario'];
					//	$usuariom=$row['id_usuario_modifica'];
                      // $fecha=date("d/m/Y", strtotime($row['fecha_creacion']));
                        //$fecham=date("d/m/Y", strtotime($row['fecha_modifica']));
					

?>	
				<tr>
                         <td><?php echo $nombre_c;?></td>
						<td><?php echo $codigo_c; ?></td>
				
															
					<td ><span class="pull-right">

 <input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataUpdat" data-idcurso="<?php echo $row['id_curso']?>"data-nombrep="<?php echo $row['nombre_c']?>" data-codigop="<?php echo $row['codigo_c']?>" value="Editar">

<input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataConsult" data-idcurso="<?php echo $row['id_curso']?>" data-nombrep="<?php echo $row['nombre_c']?>" data-codigop="<?php echo $row['codigo_c']?>" value="Consultar">


						
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
		
 