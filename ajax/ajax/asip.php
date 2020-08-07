	<?php   
session_start();
if(isset($_SESSION['usuario'])&&($_SESSION['tipo'])&&($_SESSION['estado'])) { 

	include("../config/conec.php");
	 ?>
		<?php

		$asignatura = $_GET['asignatura'];
		$fechai = $_GET['fechai'];
		$fechaf = $_GET['fechaf'];
		
		/*$alumns = PersonData::getAll();
		if(count($alumns)>0){
			// si hay usuarios*/

			
			?>

			

			Lista
			</div>

<table class="table table-bordered table-hover">
			<thead>
				
			<th>Nombre</th>
			<th colspan="2" style="text-align: center;">Ene</th>
			<th colspan="2" style="text-align: center;">Feb</th>
			<th colspan="2" style="text-align: center;">Mar</th>
			<th colspan="2" style="text-align: center;">Abr</th>
			<th colspan="2" style="text-align: center;">May</th>
			<th colspan="2" style="text-align: center;">Jun</th>
			<th colspan="2" style="text-align: center;">Jul</th>
			<th colspan="2" style="text-align: center;">Ago</th>
			<th colspan="2" style="text-align: center;">Sep</th>
			<th colspan="2" style="text-align: center;">Oct</th>
			<th colspan="2" style="text-align: center;">Nov</th>
			<th colspan="2" style="text-align: center;">Dic</th>



		
			</thead>
			<tr>
			<td></td>
			<td>A</td>
			<td>F</td>

			<td>A</td>
			<td>F</td>
			
			
			<td>A</td>
			<td>F</td>
			
		
			<td>A</td>
			<td>F</td>
			
			<td>A</td>
			<td>F</td>
		

			<td>A</td>
			<td>F</td>
		
			<td>A</td>
			<td>F</td>

			
			<td>A</td>
			<td>F</td>

			
			<td>A</td>
			<td>F</td>

		
			<td>A</td>
			<td>F</td>
			
			
			<td>A</td>
			<td>F</td>
			

			<td>A</td>
			<td>F</td>
			
			</tr>

			<?php
			//foreach($alumns as $al){
				//$alumn = $al;
			 $usuariom=$_SESSION['usuario'];
			$sql=mysqli_query($db, "SELECT distinct a.id_alumno,a.pnombre_a,a.pnombre_a,a.snombre_a,a.papellido_a from alumnos a,asistencia asis where 
  a.id_alumno=asis.idalumno and asis.idmaestro='$usuariom' ");

while ($row=mysqli_fetch_array($sql))
  {
  $id_alumno=$row["id_alumno"];
  $pnombre_a=$row["pnombre_a"];
  $snombre_a=$row["snombre_a"];
  $papellido_a=$row['papellido_a'];
 
			//	$values = array(""=>"Sin seleccion","1"=>"Asistencia","2"=>"Falta","3"=>"Retardo","4"=>"Justificacion");
				?>
				<tr>
				<td style="width:250px;"><?php echo $pnombre_a." ".$snombre_a; ?></td>
			<?php 
			/*for($i=0;$i<$range;$i++):
					$date_at= date("Y-m-d",strtotime($_GET["fechai"])+($i*(24*60*60)));
					$date_at1= date("Y-m-d",strtotime($_GET["fechaf"])+($i*(24*60*60)));*/
					//$asist = AssistanceData::getByPD($alumn->id,$date_at);
					/*$sql1=mysqli_query($db, "SELECT * from asistencia asis where asis.fecha BETWEEN '$fechai' and '$fechaf' and asis.idalumno='$id_alumno'");
					*/
					$sql1=mysqli_query($db,"SELECT a.idalumno,a.tipo,count(tipo) from asistencia a where
						 idalumno='$id_alumno'  ");
					while ($row1=mysqli_fetch_array($sql1)){
						 $idalumno=$row1["idalumno"];
					     $tipo=$row1["tipo"];
					///  $fecha=$row1["fecha"];
					  //if($tipo!=null){
					/*
						if($tipo==1){ 
							
							$tipoa="<i class='fa fa-check'></i>";
						}
						else if($tipo==2){
							 $tipoa="<i class='fa fa-remove'></i>"; 
						// echo "<i class='fa fa-remove'></i>"; 
						}
						else if($tipo==3){
						 $tipoa="R";
						  }
						else if($tipo==4){
                   $tipoa="J";
						  }*/
						
					
						?>


				<td >
				<?php
				echo $tipo;
				?>

				</td>
			<?php
			 }	
		}

	?>
				</tr>
				<?php

			
			//}
echo "</table>";

/*
		}else{
			echo "<p class='alert alert-danger'>No hay Grupos</p>";
		}
*/

		?>		
<?php 
} else { 
    header("location: login.php");
} 
 ?>