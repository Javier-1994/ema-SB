
<?php
require_once("../config/conec.php");//Contiene funcion que conecta a la base de datos

?>
<?php
    $vpago = $_POST['vpago'];
   $sql2=mysqli_query($db, "select * from descripcion_pago d, pagos_varios p where
 d.id_detalle=p.id_pago and p.id_pago='$vpago'");

while ($row2=mysqli_fetch_array($sql2))
  {
  $primern=$row2["descripcion"];
  
          $estado=$row2["estado_varios"];
//  $fecha=date("d/m/Y", strtotime($row2['fecha']));

     } 

     $sql3=mysqli_query($db,"SELECT COUNT(*) as existe FROM pagos_varios WHERE id_pago='$vpago'") or die(mysqli_error());
$row3=mysqli_fetch_array($sql3);
if ($row3['existe']>1) {
 echo "<h4> Alumnos que han Realizado Pago de ".$primern."</h4>";
  ?>
  
<?php
}
if ($row3['existe']==0){
 echo "<span id='correcto'>No se ha realizado ningún pago</span>";
}
  

      ?>
      
      

  
<style>
  #correcto{
    color: green;
    font-weight: bold;
  }
</style>
<div class="table-responsive">
  <div class="col-md-12">

<table class="table table table-striped  table-hover" >
    <tr  style="background-color: #2A6968;color: #FFFFFF;"   >
         <td>Nombre Alumno</td> 
         <td>Fecha</td>
     
    </tr>
 <!-- $strsql = "SELECT alumnos.*, pagos.*,meses.* FROM alumnos ,pagos,meses WHERE pagos.idalumno_p='$alumno' AND alumnos.id_alumno=pagos.idalumno_p AND estado2='1'"; -->
<?php
$sumador_total=0;
$fecha=date('Y');
$sql=mysqli_query($db, "select * from alumnos a, pagos_varios p,descripcion_pago d where
 a.id_alumno=p.alumnoid and d.id_detalle=p.id_pago and p.id_pago='$vpago' and p.fa='$fecha'");

while ($row=mysqli_fetch_array($sql))
  {
  $pnombre_a=$row["pnombre_a"];
  $snombre_a=$row["snombre_a"];
    $papellido_a=$row["papellido_a"];
      $sapellido_a=$row["sapellido_a"];
        $fecha_varios=date("d/m/Y", strtotime($row['fecha_varios']));
?>

<tr>

        <td><?php echo $pnombre_a." ".$snombre_a." ".$papellido_a." ".$sapellido_a; ?></td>
          <td><?php echo $fecha_varios; ?></td>
   <tr>
    
  
<?php 
} 
?>

</table>
</div>
</div>
<!--  <p><h2>Pagos realizados por el Alumno: <?php echo $nombre_m." ".$snombre_m." ".$apellido_m." ".$spellido_m;?></h2></p>
-->