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
</style>
<page backtop="10mm" backbottom="10mm" backleft="10mm" backright="10mm" style="font-size: 10pt; font-family: arial" >
        
  
    <table cellspacing="0" style="width: 100%; font-size: 14pt;" >
<tr>
          <td style="width: 20%; color: #444444;">
 <img style="width: 40%;" src="../../img/logo1.png" >
  </td>

         <td style="width:60%; color:#131212; font-weight: bold;text-align: center; " >
      <p>ACTAS CAFFIN</p>
       
      </td>
        
        </tr>
          
   
    </table>
    
       <br>
    
  
 
     <table cellspacing="0" style="width:100%;  text-align: left; font-size: 10pt; " border="1" >
    <tr class="bordesf">
         <td style="width:30%;text-align: center;"  class="letra">Alumno</td> 
         <td style="width:55%;text-align: center;" class="letra">Motivo Acta</td>
        <td style="width:15%;text-align: center;" class="letra">Fecha</td>
           
    </tr>
 <!-- $strsql = "SELECT alumnos.*, pagos.*,meses.* FROM alumnos ,pagos,meses WHERE pagos.idalumno_p='$alumno' AND alumnos.id_alumno=pagos.idalumno_p AND estado2='1'"; -->
 <?php
$sql=mysqli_query($db, "SELECT * from actas ac,alumnos a where ac.fecha_a BETWEEN '$fechai' and '$fechaf' 
 and  ac.idalumno=a.id_alumno ");

while ($row=mysqli_fetch_array($sql))
  {
    $primern=$row["pnombre_a"];
    $segundo=$row["snombre_a"];
      $primera=$row["papellido_a"];
        $segundoa=$row["sapellido_a"];
  $descripcion=$row["descripcion_a"];
  $fecha_varios=date("d/m/Y", strtotime($row['fecha_a']));
  
?>
<tr>
    <td style="width:30%;"><?php echo $primern." ".$segundo." ".$primera." ".$segundoa;?></td>
    <td style="width:55%;"><?php echo $descripcion; ?></td>
        <td style="width:15%;"><?php echo $fecha_varios; ?></td>
            
        


    </tr>
    
  
<?php 
} 
?>

</table>

  
  
</page>

