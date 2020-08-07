<?php
require_once("../config/conec.php");//Contiene funcion que conecta a la base de datos

?>
<?php
    $alumno = $_POST['idalumno'];

    $sql_existe=mysqli_query($db,"SELECT COUNT(*) as existe FROM pagos WHERE idalumno_p='$alumno' ") or die(mysqli_error());
$row1=mysqli_fetch_array($sql_existe);
if ($row1['existe']>=1) {

 
  
   $sql2=mysqli_query($db, "select * from alumnos a, pagos p, meses m  where
 a.id_alumno=p.idalumno_p and p.idalumno_p='$alumno'");


while ($row2=mysqli_fetch_array($sql2))
  {
  $primern=$row2["pnombre_a"];
    $segundo=$row2["snombre_a"];
      $primera=$row2["papellido_a"];
        $segundoa=$row2["sapellido_a"];
         $estado2=$row2["estado2"];
          // $estado2=$row2["estado_pago"];
//  $fecha=date("d/m/Y", strtotime($row2['fecha']));

     } 
     
     $sql3=mysqli_query($db,"SELECT COUNT(*) as existe FROM pagos WHERE idalumno_p='$alumno' and estado2='1'") or die(mysqli_error());
$row3=mysqli_fetch_array($sql3);
if ($row3['existe']==0) {
  echo '<span id="correcto">No tiene cuotas pendientes</span>';
  
  }   
?>
<?php
     $fecha=date("Y");

      ?>
      <h4><?php echo "Año ".$fecha."-".$primern." ".$segundo." ".$primera." ".$segundoa; ?></h4>

      <?php 
}else{
echo '<span id="incorrecto">Alumno No existe</span>';
}
       ?>
      
<div class="table-responsive">
  
<style>
  #correcto{
    color: green;
    font-weight: bold;
  }

  #incorrecto{
    color: #F3032B;
    font-weight: bold;
  }
</style>
  <div class="col-md-12">

<table class="table table table-striped  table-hover" >
    <tr  style="background-color: #2A6968;color: #FFFFFF;"   >
         <td>Abono</td> 
         <td>Saldo Pendiente</td>
        <td>Cuota Mensual</td>
         <td>Mes</td>
          <td>Estado</td>    
        <td>Acciones</td> 
     
    </tr>
 <!-- $strsql = "SELECT alumnos., pagos.,meses.* FROM alumnos ,pagos,meses WHERE pagos.idalumno_p='$alumno' AND alumnos.id_alumno=pagos.idalumno_p AND estado2='1'"; -->
<?php
$sumador_total=0;

$sql=mysqli_query($db, "select * from alumnos a, pagos p, meses m  where
 a.id_alumno=p.idalumno_p and m.id_mes=p.mes_pago and estado2='1' and p.idalumno_p='$alumno'");

while ($row=mysqli_fetch_array($sql))
  {
  $id_pagos=$row["id_pagos"];
  $id_alumno=$row["id_alumno"];
  $pnombre=$row['pnombre_a'];
  $papellido=$row['papellido_a'];
  $mes=$row['mes'];
  $abono_p=$row['abono_p'];
  $pendiente=$row['pendiente'];
  $total_pago=$row['total_pago'];
    $fecha=$row['fecha'];
     $fecha_a=$row['fecha_a'];
      $fecha_an=$row['fecha_an'];
      $estado_pago=$row['estado_pago'];



$sumador_total+=$total_pago;




?>

<tr>

        <td><?php echo('L. '.$abono_p); ?></td>
        <td><?php echo('L. '.$pendiente); ?></td>
         <td><?php echo('L. '.$total_pago); ?></td>
          <td><?php echo($mes); ?></td>
           <td><?php echo($estado_pago); ?></td>
        
         <td>
         
         <button title="Pagar" type="button" class="btn btn-success" data-toggle="modal" data-target="#data_pagosr" 
         data-id_pagos="<?php echo $row['id_pagos']?>" data-saldop="<?php echo $row['pendiente']?>"
          data-monto_pago="<?php echo $row['total_pago']?>" data-mes="<?php echo $row['mes']?>" 
          data-totalabonado="<?php echo $row['abono_p']?>" data-calculo="<?php echo $row['abono_p']?>"
 id="<?php echo $row['id_pagos'];?>" onclick="vtipo(this.id);" >
         <span class = "glyphicon glyphicon-circle-arrow-right"></span></button> 
         </td>

    </tr>
    
  
<?php 
} 
?>
<tr>
        <td colspan="2" style="text-align: center; background:#2A6968; color: #FFFFFF;">Total Pago </td>
    
    
        <td style="background:#2A6968; color: #FFFFFF;">L. <?php echo number_format($sumador_total,2,".",","); ?></td>
        <td colspan="5" style="background:#2A6968; color: #FFFFFF;"></td>
    </tr>
</table>
</div>
</div>
<!--  <p><h2>Pagos realizados por el Alumno: <?php echo $nombre_m." ".$snombre_m." ".$apellido_m." ".$spellido_m;?></h2></p>
-->