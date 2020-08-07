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
          <td style="width: 15%; color: #444444;">
 <img style="width: 40%;" src="../../img/logo1.png" >
  </td>

         <td style="width:60%; color:#131212; font-weight: bold; " class="bordes">
         <?php 
         date_default_timezone_set("America/Tegucigalpa");
         $fecha=date("d-m-Y");
       $sql2=mysqli_query($db, "SELECT * from alumnos a,notas n where a.id_alumno=n.Idalumno and n.Idalumno='$alumno'");

while ($row2=mysqli_fetch_array($sql2))
  {
   
  $primern=$row2["pnombre_a"];
    $segundo=$row2["snombre_a"];
      $primera=$row2["papellido_a"];
        $segundoa=$row2["sapellido_a"];
         $idalumno=$row2["Idalumno"];
       
} 
echo ucwords($primern." ".$segundo." ".$primera." ".$segundoa); ?>
      
       
      </td>
        <td style="width:25%; font-size: 12px;">Fecha Emisión <?php echo $fecha; ?></td>
        </tr>
          
   
    </table>
    
       <br>
    
  
 
     <table cellspacing="0" style="width:100%;  text-align: left; font-size: 10pt; " border="1" >
    <tr class="bordesf">
         <td style="width:10%; text-align: center;"  class="letra">Codigo</td> 
         <td style="width:25%;" class="letra">Asignatura</td>
         <td style="width:11%; text-align: center;" class="letra">Curso</td>
        <td style="width:15%; text-align: center;" class="letra">Periodo</td>
         <td style="width:6%; text-align: center;" class="letra">Nota Final</td>
         <td style="width:14%; text-align: center;" class="letra">Nota Recuperacíon</td>
         <td style="width:6%; text-align: center;" class="letra">Nota Final</td>
          <td style="width:13%; text-align: center;" class="letra">Estado</td>    
    </tr>
 <!-- $strsql = "SELECT alumnos.*, pagos.*,meses.* FROM alumnos ,pagos,meses WHERE pagos.idalumno_p='$alumno' AND alumnos.id_alumno=pagos.idalumno_p AND estado2='1'"; -->
<?php
$sumador_total=0;
//SELECT * FROM test WHERE course_date BETWEEN '2015-01-09' AND '2015-10-01'
$sql=mysqli_query($db, "SELECT * from notas n,alumnos a,periodo p,asignatura asig,curso c where  n.fecha_notas BETWEEN 
  '$fechai' and '$fechaf' and n.Idalumno=a.id_alumno and p.id_periodo=n.Idperiodo and n.Idmateria=asig.id_asignatura
  and c.id_curso=asig.idcurso and n.Idalumno='$alumno' and estado_n='2'");

while ($row=mysqli_fetch_array($sql))
  {
  $codigo_asig=$row["codigo_asig"];
  $nombre_asig=$row["nombre_asig"];
  $periodo=$row['codigo_p'];
  $anio=$row['anio_p'];
  $total=$row['total'];
  $nombre_c=$row['nombre_c'];
   $nota_recuperacion=$row['nota_recuperacion'];
  $estado=$row['estado_clase'];
 if ($nota_recuperacion=='0') {
  $nota_recuperacion='';
 $nota_final=$total;
 }else{
  $nota_final=$nota_recuperacion;
 }



?>

<tr>
    <td><?php echo $codigo_asig; ?></td>
      <td><?php echo $nombre_asig; ?></td>
       <td><?php echo $nombre_c; ?></td>
        <td><?php echo $periodo." ".$anio; ?></td>
            <td><?php echo round($total); ?></td>
             <td><?php echo ($nota_recuperacion); ?></td>
              <td><?php echo round($nota_final); ?></td>
 <td><?php echo $estado; ?></td>
        

    </tr>
    
  
<?php 
} 
?>

</table>

  
  
</page>

