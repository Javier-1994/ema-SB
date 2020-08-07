
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
			<th>Costo</th>
			<th>Precio</th>
			<th>Codigo</th>
			<th>Linea</th>
			<th>Cantidad</th>
			
			
			
			<th width="20%">Acciones</th>
					
				</tr>
					</thead>	
				<tbody>
				<?php
	//$Table="Productos p, usuarios u WHERE p.id_usuario=u.id_usuarios";
					$Table="producto";

$sql1="SELECT * FROM  $Table";
 
         $query=mysqli_query($con,$sql1);


 
while ($row=mysqli_fetch_array($query)){
$idp=$row['id_producto'];
						$nombre=$row['nombre_prod'];
						$costo=$row['costo'];
						$precio=$row['precio'];
						$cod_producto=$row['cod_producto'];
						$linea=$row['linea'];
						$cantidad=$row['cantidad'];
						
						//$hora=date("g:i:s a",strtotime($row["hora"]));
                      	$usuario=$row['id_usuario'];
						$usuariom=$row['id_usuario_modifica'];
                       $fecha=date("d/m/Y", strtotime($row['fecha_creacion']));
                        $fecham=date("d/m/Y", strtotime($row['fecha_modifica']));
					

?>	
				<tr>
                         <td><?php echo $nombre;?></td>
						<td><?php echo $costo; ?></td>
						<td><?php echo $precio; ?></td>
						<td><?php echo $cod_producto; ?></td>
						<td><?php echo $linea; ?></td>
						<td><?php echo $cantidad; ?></td>
															
					<td ><span class="pull-right">

 <input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataUpdat" data-idprod="<?php echo $row['id_producto']?>"data-nombrep="<?php echo $row['nombre_prod']?>" data-costop="<?php echo $row['costo']?>" data-preciop="<?php echo $row['precio']?>" 
data-codigop= "<?php echo $row['cod_producto']?>" data-lineap="<?php echo $row['linea']?>" data-cantidadp="<?php echo $row['cantidad']?>"  value="Editar">

<input type="button" class="btn btn-default" data-toggle="modal" data-target="#dataConsult" data-idp="<?php echo $row['id_producto']?>"
data-nombrep="<?php echo $row['nombre_prod']?>" data-costop="<?php echo $row['costo']?>"  data-preciop="<?php echo $row['precio']?>" 
data-codigop= "<?php echo $row['cod_producto']?>" data-lineap="<?php echo $row['linea']?>" data-cantidadp="<?php echo $row['cantidad']?>" value="Consultar" data-agregado="<?php echo $row['id_usuario']?>" data-fecha="<?php echo $fecha?>" data-modificado="<?php echo $usuariom?>" data-fecha_modifica="<?php echo $fecham?>">


						
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
		
