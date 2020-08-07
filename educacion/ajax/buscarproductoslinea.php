


<?php


require_once("../config/conn.php");//Contiene funcion que conecta a la base de datos

?>
<?php
    $linea = $_POST['linea'];
    //$SSDATE = explode('/', $SDATE);
   // $START_DATE = $SSDATE[2]."-".$SSDATE[0]."-".$SSDATE[1];
   // echo('<h3>'.$START_DATE.'</h3>');
    
   
    
    //SELECT * FROM test WHERE course_date BETWEEN '2015-01-09' AND '2015-10-01'
    
    $sumador_total=0;
      
  $strsql = "SELECT * FROM matricula WHERE tipo_m='$tipo_m'";
  $rs = mysql_query($strsql) or die(mysql_error());
  $row = mysql_fetch_assoc($rs);
  $total_rows = mysql_num_rows($rs);
  //print_r($row);

        
?>

<div class="table-responsive">
  
</div>
  <div class="col-md-12">
<table class="table table table-striped  table-hover" >
    <tr  style="background-color: #2A6968;color: #FFFFFF;"   >
        <td>Codigo Producto</td>
        <td>Nombre Producto</td>
         
     
    </tr>

<?php if ($total_rows > 0) {

        do {
             $total=$row['idcurso'];


?>
<tr>
        <td><?php echo($row['idcurso']); ?></td>
         <td><?php echo($row['periodo']); ?></td>
       
          
          </td>

    </tr>
    <br>
    <button class='btn btn-primary no-print' onclick='print1();'><i class='fa fa-print'></i> Imprimir.</button>
    <?php 
  

     ?>
<?php
 } while ( $row = mysql_fetch_assoc($rs) );
        mysql_free_result($rs);

 ?>
 
<?php
    } 

    else {
?>
    <tr>
        <td colspan="3" style="text-align: center;">No existe productos con la tipo_m Seleccionada.</td>
    </tr>

<?php } ?>
</table>
</div>
