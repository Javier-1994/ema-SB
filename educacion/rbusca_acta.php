

<?php
session_start();
if(isset($_SESSION['usuario'])&&($_SESSION['tipo'])&&($_SESSION['estado'])) { 
 
require('config/conec.php');

$fechai=$_POST['fechai'];
$fechaf=$_POST['fechaf'];

$busca=mysqli_query($db,"Select actas.*, alumnos.* from actas, alumnos where fecha_a>='$fechai' and fecha_a<='$fechaf' and actas.idalumno=alumnos.id_alumno");
if(mysqli_fetch_row($busca)>0){
  echo "<div class='box box-primary print7'>";

  echo "<h4 class='box-title aqui '></h4>";
  echo "</div>";
  echo "<div class='box-body' id='reportes_gastos'>";
  echo "<h4>Actas por Alumno</h4>";
  echo "<br>";
  echo "<table class='table table-hover table-responsive' id='gastos_registrados'>";
     echo "<thead>";
     echo "<tr>";
     echo "<th>Numero</th>";
     echo "<th>Fecha</th>";
     echo "<th>Alumno</th>";
     echo "<th>Descripcion</th>";

  

     echo "</tr>";
     echo "<tbody>";
    while($re=mysqli_fetch_array($busca)){
      echo "<tr>";
      echo "<td>".$re['id_acta']."</td>";
      echo "<td>".$re['fecha_a']."</td>";
      echo "<td>".$re['pnombre_a']." ".$re['papellido_a']."</td>";
      echo "<td>".$re['descripcion_a']."</td>";
       echo "</tr>";
    }
   echo "</tbody>";
   echo "</table>";
 
  echo "</div>";
}else{
  echo "<div class='callout callout-danger'>No hay gastos registrados en este rango de fechas...</div>";
}
}else{
   header("Location: index.php");
}
?>





