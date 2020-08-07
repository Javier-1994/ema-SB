<?php
session_start();
if(isset($_SESSION['usuario'])&&(($_SESSION['tipo']=='1') || ($_SESSION['tipo']=='3'))&&($_SESSION['estado'])) { 
 ?>
<?php 
require("config/class_conecta_mysql.php");
$db=new ConexionMySQL(); 
require("config/funciones.php");

$monto1=0.00;

$cadena="Select distinct fecha_creacion, num_factura from factura_venta where estado='procesado'";
$exec=$db->consulta($cadena);
if($db->numero_de_registros($exec)>0){
  echo "<div class='box-danger' id='tabla_compras'>";
  echo "<div class='box-header with-border'>";
  echo "<h4 class='box-title'>Compras Realizadas...</h4>";
  echo "</div>";
  echo "<div class='box-body'>";
   echo "    <table id='tabla_ventas' class='table table-striped  table-hover' >
          <thead>   
          <tr style='background-color: #2A6968; color: #FFFFFF;'>
         ";
    echo "<th>Fecha</th>";   
    echo "<th># Factura</th>";
    echo "<th>Monto</th>";
    echo "<th>Operacion</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
   while($dato=$db->buscar_array($exec)){
      $fecha=$dato['fecha_creacion'];
      $n=$dato['num_factura'];
      $elid=$n;
       echo "<td>".$fecha."</td>";
       echo "<td>".$n."</td>";
      $busca="Select distinct total as monto from factura_venta where num_factura='$n'";
      $exec2=$db->consulta($busca);
      while($dato2=$db->buscar_array($exec2)){
         $monto1=$dato2['monto'];
      }
     echo "<td>$ ".number_format($monto1,2)."</td>";

     if($db->numero_de_registros($busca_cancelacion)>0){
       echo "<td><button class='btn btn-xs btn-primary confirmacion' id='".$elid."' onclick='muestra_detalle(this.id);'><i class='fa fa-search'></i> Detalles.</button></td>";
      }else{
     echo "<td><button class='btn btn-xs btn-danger confirmacion' id='".$elid."' onclick='anular_venta(this.id);'><i class='fa fa-times'></i> Cancelar.</button>
           <button class='btn btn-xs btn-primary confirmacion' id='".$elid."' onclick='muestra_detalle(this.id);'><i class='fa fa-search'></i> Detalles.</button
           </td>";
       }
     $monto1=0.00;
     echo "</tr>";
   }
   echo "</tbody>";
   echo "</table>";
  echo "</div>";
  echo "</div>";
}else{
  echo "<div class='callout callout-danger'>No se encontraron registros de ventas...</div>";
}

 ?>
<?php 
} else { 
    header("location: index.php");
} 

 ?>