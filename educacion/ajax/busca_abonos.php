<?php

error_reporting(0);
include("../config/conec.php");
$id_pagos=$_POST['id_pagos'];
$tabonos=0.00;
$cabonos=0;
$nombre_alumno=mysqli_query($db,"Select alumnos.*, pagos.* from alumnos, pagos where pagos.idalumno_p=alumnos.id_alumno and pagos.id_pagos='$id_pagos'");
while($busca=mysqli_fetch_array($nombre_alumno)){
  $nombre_a=$busca['pnombre_a'];
  $snombre_a=$busca['snombre_a'];
  $apellido_a=$busca['papellido_a'];
  $sapellido_a=$busca['sapellido_a'];
}

 $cuentas=mysqli_query($db,"Select * from pagos_detalle where id_pago='$id_pagos'");
 if(mysqli_num_rows($cuentas)>0){

   echo "<h4>Pagos registrados | Alumno: ".$nombre_a." ".$snombre_a." ".$apellido_a." ".$sapellido_a."</h4>";
   echo "<table id='tabla_articulos' class='table table-striped  table-hover' >
          <thead>   
          <tr style='background-color: #2A6968; color: #FFFFFF;'>
          ";
   echo "<th>Fecha</th>";
   echo "<th>Monto.</th>";
   echo "</tr>";
   echo "</thead>";
   echo "<tbody>";
    while($tr=mysqli_fetch_array($cuentas)){
      echo "<tr>";
      $tabonos+=$tr['abono_d'];
      $cabonos++;
      echo "<td>".$tr['fecha_abono']."</td>";
      echo "<td>L. ".number_format($tr['abono_d'],2)."</td>";

      echo "</tr>";
    }
   echo "<tr>";
   echo "<td><b>TOTALES<b></td>";
   echo "<td><b>L. ".number_format($tabonos,2)." | #Pagos: ".$cabonos."</b></td>";
   echo "</tr>";
   echo '</tbody>';
   echo "</table>";
 }else{
   echo "<div class='callout callout-danger'>No se encontraron registros de abonos de este cliente...</div>";
 }

?>