
<?php
require_once("../config/conec.php");//Contiene funcion que conecta a la base de datos

?>
<?php
    
     $fechai = $_POST['fechai'];
     $fechaf = $_POST['fechaf'];
    
   ?>

         <ul class="nav navbar-right panel_toolbox"  >
                              <button type='button' id="Imprimirhistorial" onclick="impresion();"><span class="icon-user-plus nuevo">
              </span>Imprimir Historial</button>
                              
                          </ul> 
   <br>
         <br>
   
<style>
  #correcto{
    color: green;
    font-weight: bold;
  }
</style>
<div class="table-responsive">

  <div class="col-md-12">

<table class="table table table-striped  table-hover" style="width: 100%">
    <tr  style="background-color:#2A6968;color: #FFFFFF;"   >
         <td style="width:20%;">Nombre Alumno</td> 
        <td style="width:60%;">Motivo Acta</td> 
        <td style="width:10%;">Fecha</td>
         
    </tr>
 <!-- $strsql = "SELECT alumnos.*, pagos.*,meses.* FROM alumnos ,pagos,meses WHERE pagos.idalumno_p='$alumno' AND alumnos.id_alumno=pagos.idalumno_p AND estado2='1'"; -->
<?php
$sumador_total=0;
//SELECT * FROM test WHERE course_date BETWEEN '2015-01-09' AND '2015-10-01'
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
    <td><?php echo $primern." ".$segundo." ".$primera." ".$segundoa;?></td>
    <td><?php echo $descripcion; ?></td>
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


  
</script>