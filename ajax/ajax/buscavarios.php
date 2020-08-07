
<?php
require_once("../config/conec.php");//Contiene funcion que conecta a la base de datos

?>
<?php
   $alumno = $_POST['idalumno'];
  $sql_existe=mysqli_query($db,"SELECT COUNT(*) as existe FROM alumnos WHERE id_alumno='$alumno' ") or die(mysqli_error());
$row1=mysqli_fetch_array($sql_existe);
if ($row1['existe']==1) {


 
   $sql2=mysqli_query($db, "select * from alumnos  where
 id_alumno='$alumno' ");

while ($row2=mysqli_fetch_array($sql2))
  {
  $primern=$row2["pnombre_a"];
    $segundo=$row2["snombre_a"];
      $primera=$row2["papellido_a"];
        $segundoa=$row2["sapellido_a"];
         
//  $fecha=date("d/m/Y", strtotime($row2['fecha']));

     } 

     $fecha=date("Y");

      ?>
       <!-- <ul class="nav navbar-right panel_toolbox"  >
                              <button type='button' id="Imprimirhistorial" onclick="impresion();"><span class="icon-user-plus nuevo">
              </span>Imprimir Historial</button> -->
                              
                          </ul> 
      <h4><?php echo "Año ".$fecha."-".$primern." ".$segundo." ".$primera." ".$segundoa; ?></h4>

      <?php 

       ?>
      <script>
        document.getElementById("pagarvarios").style.visibility="visible";
      </script>
<div class="table-responsive">
  
 <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Pago</label>
                <div class="col-sm-8">
              <select class="form-control input-sm"  id="variosp" name="variosp">
       <option value="" selected>-Seleccione Pago-</option>
                  <?php
                    $sql_vendedor=mysqli_query($db,"select * from descripcion_pago where estado='1' order by descripcion ");
                    while ($rw=mysqli_fetch_array($sql_vendedor)){
                      $id_detalle=$rw["id_detalle"];
                      $descripcion=$rw["descripcion"];
                     
                      ?>
                      <option value="<?php echo $id_detalle?>" ><?php echo $descripcion?></option>
                      <?php
                    }
                  ?>
                  </select>          
          </div>
             </div>
 
</div>
<!--  <p><h2>Pagos realizados por el Alumno: <?php echo $nombre_m." ".$snombre_m." ".$apellido_m." ".$spellido_m;?></h2></p>
-->
<?php  
}else{
echo '<span id="incorrecto">Alumno No existe</span>';

?>
 <script>
        document.getElementById("pagarvarios").style.visibility="hidden";
      </script>
<?php 
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
  .centra{
    text-align: center;
  }
</style>

