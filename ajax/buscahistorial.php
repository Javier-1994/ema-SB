<?php
require_once("../config/conec.php");//Contiene funcion que conecta a la base de datos

?>
<?php
    $alumno = $_POST['idalumno'];
     $fechai = $_POST['fechai'];
     $fechaf = $_POST['fechaf'];
    
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
      <h4><?php echo $primern." ".$segundo." ".$primera." ".$segundoa; ?>
        <ul class="nav navbar-right panel_toolbox"  >
                                <button type='button' id="Imprimirhistorial" onclick="imprimirhi();"><span class="icon-user-plus nuevo">
                </span>Imprimir Historial</button>
                                
                            </ul>
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
         <td>Codigo</td> 
         <td>Clase</td>
         <td>Curso</td>
        <td>Periodo</td>
         <td>Nota Final</td>
          <td>Nota Recuperación</td>
           <td>Nota Final</td>
          <td>Estado</td>    
    </tr>
 <!-- $strsql = "SELECT alumnos., pagos.,meses.* FROM alumnos ,pagos,meses WHERE pagos.idalumno_p='$alumno' AND alumnos.id_alumno=pagos.idalumno_p AND estado2='1'"; -->
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
</div>
</div>
<!--  <p><h2>Pagos realizados por el Alumno: <?php echo $nombre_m." ".$snombre_m." ".$apellido_m." ".$spellido_m;?></h2></p>
-->

<script>

  function imprimitr(){

 
     var numero_factura=document.getElementById('numero_factura').value;
   

 VentanaCentrada('factura.php?numero_factura='+numero_factura,'Historial','','1024','768','true');
  ///  window.setTimeout('location.href="factura.php" ',1000);
    }
</script>