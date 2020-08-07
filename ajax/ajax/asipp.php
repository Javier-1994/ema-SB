	<?php   
session_start();
if(isset($_SESSION['usuario'])&&($_SESSION['tipo'])&&($_SESSION['estado'])) { 

	include("../config/conec.php");
	include("fun.php");
	 ?>
		<?php

	//	$asignatura = $_GET['asignatura'];
		$fechai = $_GET['fechai'];
		$fechaf = $_GET['fechaf'];
		

		$range = 0;
		if($_GET["fechai"]<=$_GET["fechaf"]){
			$range= ((strtotime($_GET["fechaf"])-strtotime($_GET["fechai"]))+(24*60*60)) /(24*60*60);
			if($range>31){
				echo "<p class='alert alert-danger'>El Rango Maximo es 31 Dias.</p>";
				exit(0);
			}
		}else{
			echo "<p class='alert alert-danger'>Rango Invalido</p>";
			exit(0);
		}
		/*$alumns = PersonData::getAll();
		if(count($alumns)>0){
			// si hay usuarios*/

			
			?>

			

			Lista
			
<div class="table-responsive">
	<table class="table table-bordered table-hover">
			<thead>
				
			<th>Nombre</th>
<?php for($i=0;$i<$range;$i++):?>
	<th>
			<?php echo date("d-M",strtotime($_GET["fechai"])+($i*(24*60*60)));?>
			</th>
		<?php endfor;?>
			</thead>
			
			

		
			
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
			for($i=0;$i<$range;$i++):
					$date_at= date("Y-m-d",strtotime($_GET["fechai"])+($i*(24*60*60)));
				//	$date_at1= date("Y-m-d",strtotime($_GET["fechaf"])+($i*(24*60*60)));
					$asist = AssistanceData::getByPD($id_alumno,$date_at);
					/*$sql1=mysqli_query($db, "SELECT * from asistencia asis where asis.fecha BETWEEN '$fechai' and '$fechaf' and asis.idalumno='$id_alumno'");
					*/
					/*$sql1=mysqli_query($db,"SELECT *from asistencia a where a.fecha='$date_at' 
						and a.idalumno='$id_alumno'");
					while ($row1=mysqli_fetch_array($sql1)){
						 $tipo=$row1["tipo"];
						*/
				//	$idalumno=$row1["idalumno"];
					    
					//  $fecha=$row1["fecha"];
					  	 
				//$tipo++;*/

					// $row1++;
/*if($tipo!=null){

						if($tipo==''){ 
							
							$tipoa="nada";
						}
						if($tipo==1){ 
							
							$tipoa="<i class='fa fa-check'></i>";
						}
						else if($tipo==2){
							 $tipoa="<i class='fa fa-remove'></i>"; 
						// echo "<i class='fa fa-remove'></i>"; 
						}
						
						}
							
					}*/
						?>


				<td>
				<?php

			//	echo $tipoa;
	
					if($asist!=null){
						if($asist->tipo==1){ echo "<i class='fa fa-check'></i>"; }
						else if($asist->tipo==2){ echo "<i class='fa fa-remove'></i>"; }
						else if($asist->tipo==3){ echo "R"; }
						else if($asist->tipo==4){ echo "J"; }
						
					}	
				?>
				

				</td>

			<?php
			
			 	//}
			endfor; 
		

	?>
				</tr>
				<?php
}
			
			//}
echo "</table>";

/*
		}else{
			echo "<p class='alert alert-danger'>No hay Grupos</p>";
		}
*/

		?>	
		</div>	
<?php 
} else { 
    header("location: login.php");
} 
 ?>