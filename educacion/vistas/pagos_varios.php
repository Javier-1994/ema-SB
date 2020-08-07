<style>
  .bordes{
border-top: 0px;
border-left: 0px;
  }
  .bordesf{
border-top: 1px;
border-left: 1px;
border-right:  1px;
border-bottom: 1px;
  }
  .letra{
font-weight: bold;
  }
  table{
    border-collapse: collapse;
  }

   .centra{
    text-align: center;
  }
</style>
<page backtop="10mm" backbottom="10mm" backleft="10mm" backright="10mm" style="font-size: 10pt; font-family: arial" >
        
  
    <table cellspacing="0" style="width: 100%; font-size: 14pt;" >
<tr>
          <td style="width: 15%; color: #444444;">
 <img style="width: 40%;" src="../../img/logo1.png" >
  </td>

         <td style="width:60%; color:#131212; font-weight: bold; " class="bordes">
         <?php 
         $fecha=date("d-m-Y");
       $sql2=mysqli_query($db, "SELECT * from alumnos where id_alumno='$alumno'");
   

while ($row2=mysqli_fetch_array($sql2))
  {
  $primern=$row2["pnombre_a"];
    $segundo=$row2["snombre_a"];
      $primera=$row2["papellido_a"];
        $segundoa=$row2["sapellido_a"];
        // $idalumno=$row2["Idalumno"];
       
} 
echo ucwords($primern." ".$segundo." ".$primera." ".$segundoa); ?>
      <
       
      </td>
        <td style="width:25%; font-size: 12px;">Fecha Emisión <?php echo $fecha; ?></td>
        </tr>
          
   
    </table>
    
       <br>
    
  
 
     <table cellspacing="0" style="width:100%;  text-align: left; font-size: 10pt; " border="1" >
    <tr class="bordesf">
         <td style="width:33%; text-align: center;" class="letra" >Descripcion</td> 
         <td style="width:33%; text-align: center;" class="letra">Fecha</td>
         <td style="width:33%; text-align: center;" class="letra">Monto</td>
    </tr>
 <!-- $strsql = "SELECT alumnos.*, pagos.*,meses.* FROM alumnos ,pagos,meses WHERE pagos.idalumno_p='$alumno' AND alumnos.id_alumno=pagos.idalumno_p AND estado2='1'"; -->
<?php
$sumador_total=0;
//SELECT * FROM test WHERE course_date BETWEEN '2015-01-09' AND '2015-10-01'
$sql=mysqli_query($db, "select * from alumnos a, pagos_varios pv, descripcion_pago dp where a.id_alumno=pv.alumnoid and pv.id_pago=dp.id_detalle and estado_varios='2' and pv.alumnoid='$alumno' and fa='$fa'");

while ($row=mysqli_fetch_array($sql))
{ 

 $id_pago=$row["id_pago"];
  $id_alumno=$row["id_alumno"];
  $pnombre=$row['pnombre_a'];
  $papellido=$row['papellido_a'];
  $total_pago=$row['total'];
  $descripcion=$row['descripcion'];
  $fechaa=$row['fecha_varios'];


$sumador_total+=$total_pago;
?>

<tr>

         <td class="centra"><?php echo($descripcion); ?></td>
         <td class="centra"><?php echo($fechaa); ?></td>
        <td class="centra"><?php echo($total_pago); ?></td>
        
         

    </tr>
    
  
<?php 
} 
?>
<tr>
         
        <td colspan="1" style="background:#2A6968; color: #FFFFFF;"></td>
        <td colspan="1" style="background:#2A6968; color: #FFFFFF;"></td>
        <td style="text-align: center; background:#2A6968; color: #FFFFFF;">Total Pagado L. <?php echo number_format($sumador_total,2,".",",");  ?> </td>

</tr>
<TR>
  
</TR>


</table>
<p align="left"> 
          _
 </p>
<p align="left"> 
          FIRMA Y SELLO. ________________________ 
 </p>


</page>

