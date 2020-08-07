
<?php
require_once("../config/conec.php");//Contiene funcion que conecta a la base de datos

?>
<?php
    $alumno = $_POST['idalumno'];
     $anio = $_POST['anio'];
     $sql_existe=mysqli_query($db,"SELECT COUNT(*) as existe FROM alumnos WHERE id_alumno='$alumno'") or die(mysqli_error());
$row1=mysqli_fetch_array($sql_existe);
if ($row1['existe']==1){

   $sql2=mysqli_query($db, "SELECT * from alumnos where id_alumno='$alumno'");

while ($row2=mysqli_fetch_array($sql2))
  {
   
  $primern=$row2["pnombre_a"];
    $segundo=$row2["snombre_a"];
      $primera=$row2["papellido_a"];
        $segundoa=$row2["sapellido_a"];
       
     }
      ?>

<ul class="nav navbar-right panel_toolbox"  >
                              <button type='button' id="Imprimirhistorial" onclick="imprimirhi();"><span class="icon-user-plus nuevo">
              </span>Imprimir Historial</button>
                              
                          </ul>



      <h4><?php echo $primern." ".$segundo." ".$primera." ".$segundoa; ?>
      
      </h4>
      
      <?php

}
if ($row1['existe']==0){
echo '<span id="incorrecto">Alumno No existe</span>';
}
       ?>
 

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
<div class="table-responsive">
<div class="col-md-12">
<table class="table table table-striped  table-hover" >
    <tr  style="background-color: #2A6968;color: #FFFFFF;"   >
         <td>Descripción</td> 
         <td>Monto</td>
        <td>fecha</td>
         
    </tr>
 <!-- $strsql = "SELECT alumnos.*, pagos.*,meses.* FROM alumnos ,pagos,meses WHERE pagos.idalumno_p='$alumno' AND alumnos.id_alumno=pagos.idalumno_p AND estado2='1'"; -->
<?php
$sumador_total=0;
//SELECT * FROM test WHERE course_date BETWEEN '2015-01-09' AND '2015-10-01'
$sql=mysqli_query($db, "SELECT * from pagos_varios p,alumnos a,descripcion_pago d where 
  p.alumnoid=a.id_alumno and p.id_pago=d.id_detalle and p.alumnoid='$alumno' and fa='$anio'");

while ($row=mysqli_fetch_array($sql))
  {
  $descripcion=$row["descripcion"];
  $monto=$row["monto"];
  $fecha_varios=date("d/m/Y", strtotime($row['fecha_varios']));
  
?>
<tr>
    <td><?php echo $descripcion; ?></td>
      <td><?php echo number_format($monto,2); ?></td>
        <td><?php echo $fecha_varios; ?></td>
            
    </tr>
    
  
<?php 
} 
?>

</table>
</div>
</div>
<!--  <p><h2>Pagos realizados por el Alumno: <?php echo $nombre_m." ".$snombre_m." ".$apellido_m." ".$spellido_m;?></h2></p>
-->

<script>

//  function imprimitr(){

 
//     var numero_factura=document.getElementById('numero_factura').value;
   

 //VentanaCentrada('factura.php?numero_factura='+numero_factura,'Factura','','1024','768','true');
  ///  window.setTimeout('location.href="factura.php" ',1000);
    }
</script>