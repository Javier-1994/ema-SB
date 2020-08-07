<?php
session_start();
if(isset($_SESSION['usuario'])&&($_SESSION['tipo'])&&($_SESSION['estado'])) { 

//include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado

require_once("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once("../config/conexion.php");//Contiene funcion que conecta a la base de datos
/*$id=$_POST['codigo'];

$cantidad=$_POST['cantidad'];
$precio_venta=$_POST['costou'];
$total_d=$_POST['monto'];
$total=$_POST['total'];
$subtotal=$_POST['subtotal'];
$descuento=$_POST['descuento'];
$descuentoa=$_POST['descuentoa'];

$expediente=$_POST['expediente'];
$fecha=$_POST['fecha'];*/
//$numero_asignacion=$_POST['id_asignaciones'];
 $docentee=$_SESSION['usuario'];
?>

			<div class="table-responsive">

		<table id="tabla_asistencia" class="table table-striped table-bordered">
<thead>   
<tr>
	<th  style="text-align: center;" class="prueba" ></th>
	<th  style="text-align: center;" class="prueba" ></th>
	<th  style="text-align: center;" class="prueba" ></th>
	<th  style="text-align: center;">Nombre Alumno</th>
	<th   style="text-align: center;">Tipo Asistencia</th>
</tr>
</thead>
<tbody>

<?php

/*$sql=mysqli_query($con,"select * from alumnos a, asignacionesm asig,matricula m,curso c,asignatura asi,maestros ma where
 a.id_alumno=m.idalumno and c.id_curso=asi.idcurso and asig.asignatura_a=asi.id_asignatura and
asig.idmaestro=ma.identidad_m and m.idcurso=c.codigo_c
  and asig.id_asignaciones='$numero_asignacion'");*/

/*$sql=mysqli_query($con,"SELECT distinct a.id_alumno,a.pnombre_a,a.snombre_a,a.papellido_a,a.sapellido_a,asig.idperiodo,asi.id_asignatura,ma.identidad_m,m.idalumno from alumnos a, asignatura asi,matricula m,asignacionesm asig,maestros ma,periodo p,curso c where a.id_alumno=m.idalumno and asig.idmaestro=ma.identidad_m and m.idcurso=c.codigo_c
   and asig.idmaestro='$docente' ");

and c.id_curso=asi.idcurso and asig.asignatura_a=asi.id_asignatura and
asig.idmaestro=ma.identidad_m and m.idcurso=c.codigo_c 
  and asig.idmaestro='$docentee'
   */

  /* $sql=mysqli_query($con,"SELECT distinct a.id_alumno,a.pnombre_a,a.snombre_a,a.papellido_a,a.sapellido_a,asig.idperiodo,asi.id_asignatura,ma.identidad_m,m.idalumno,asig.idmaestro,asig.asignatura_a,asig.idmaestro from alumnos a, asignacionesm asig,matricula m,curso c,asignatura asi,maestros ma where
 a.id_alumno=m.idalumno and m.estado_ma='1' and m.idcurso=c.codigo_c and asi.idcurso=c.id_curso and asig.asignatura_a=asi.id_asignatura and asig.idmaestro=ma.identidad_m and asig.estado_m='1' and asig.idmaestro='$docentee'");*/

  $sql=mysqli_query($con,"SELECT distinct asig.idmaestro,m.idalumno,a.pnombre_a,a.snombre_a,a.papellido_a,a.sapellido_a,asig.idperiodo from alumnos a, asignacionesm asig,matricula m,curso c,asignatura asi,maestros ma where asig.idmaestro=ma.identidad_m and asi.id_asignatura=asig.asignatura_a and c.id_curso=asi.idcurso and m.idcurso=c.codigo_c and m.idalumno=a.id_alumno and asig.estado_m ='1' and asig.idmaestro='$docentee'");


while ($row=mysqli_fetch_array($sql)){
	$idalumno=$row['idalumno'];
	//$id_asignatura=$row['id_asignatura'];
	$id_maestro=$row['idmaestro'];
	$idperiodo=$row['idperiodo'];
	$pnombre_a=$row['pnombre_a'];
	$snombre_a=$row['snombre_a'];
	$papellido_a=$row['papellido_a'];
	$sapellido_a=$row['sapellido_a'];

	?>	
					<tr>
						
					<td class="prueba">
						
								
<input  type="text" class="form-control " style="text-align:right"  id="idalumno_<?php echo $idalumno; ?>" 
 value="<?php echo $idalumno; ?>" size="5" >
	 </td>
		
<td class="prueba">
					
<input type="text" class="form-control " style="text-align:right"  id="idmaestro_<?php echo $idalumno; ?>" placeholder="0" size="5" value="<?php echo $id_maestro; ?>" ></td>

<td class="prueba">				
<input type="text" class="form-control" style="text-align:right"  id="idperiodo_<?php echo $idalumno; ?>" placeholder="0" size="5"value="<?php echo $idperiodo; ?>" ></td>

<td><?php echo $pnombre_a." ".$snombre_a." ".$papellido_a." ".$sapellido_a ?></td>
		<td>
			<select name="tipoasistencia" id="tipoa_<?php echo $idalumno; ?>" class='form-control' 
onchange="agregara('<?php echo $idalumno ?>')" >
   <option selected>--Selecione--</option>
   <option value='1'>Asistencia</option>
   <option value='2'>Falta</option>
</select>
		</td>

					</tr>			
					
					<?php
				}
				?>
				

					
				</tr>
				</tbody>
				<?php
	//$idalumno=$row['idalumno'];
	//$codigo=$row['id_producto'];
//$sql=mysqli_query($con,"select * from alumnos");
/*

while ($row=mysqli_fetch_array($sql))
	{
	echo "<tr id='tr'>";
echo "<td ><input type='text' class='form-control' id='idalumno_".$row['id_alumno']."' value='".$row['id_alumno']."'></td>";
echo "<td ><input type='text' class='form-control' id='idasignatura' value='".$row['id_asignatura']."'></td>";
echo "<td ><input type='text' class='form-control' id='idperiodo' value='".$row['idperiodo']."'></td>";
echo "<td ><input type='text' class='form-control' id='idmaestro' value='".$row['id_maestro']."'></td>";

$idd=$row['id_alumno'];

//echo "<td>".$row['pnombre_a'].' '.$row['snombre_a'].' '.$row['papellido_a'].' '.$row['sapellido_a']."</td>";
echo "<td><select name='tipoasistencia' id='tipoasistencia' class='form-control' 
onchange='agregara('".$row['id_alumno']."');' >
   <option selected>--Selecione--</option>
   <option value='1'>Asistencia</option>
   <option value='2'>Falta</option>
   <option value='3'>Retraso</option>
   <option value='4'>Justificacion</option></select></td>";



/*echo "<td class='text-center' ><button class='btn btn-sm btn-danger' id='".$idd."' 
onclick='pasalista1(this.id);' title='Eliminar item' ><i class='feather icon-trash-2'></i></button>";*/
//echo "</tr>";*/



//}
	
?>
	 
</table>
</div>
	 <?php 
} else { 
    header("location: login.php");
} 
 ?>