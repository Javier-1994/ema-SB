<?php
session_start();
if(isset($_SESSION['usuario'])&&(($_SESSION['tipo']=='1') || ($_SESSION['tipo']=='3'))&&($_SESSION['estado'])) {  
 ?>
<?php

require("config/class_conecta_mysql.php");
$db=new ConexionMySQL();  
require("config/funciones.php");

$numero=test_input($_POST['numero_t']);

$cadena="Select distinct id_usuario_modifico, fecha_creacion, num_factura, total from factura_venta where estado='procesado' and id_usuario_modifico='$numero' order by Id_facturav";
$exec=$db->consulta($cadena);
if($db->numero_de_registros($exec)>0){
  echo "<div class='box-danger' id='tabla_compras'>";
  echo "<div class='box-header with-border'>";
  echo "<h4 class='box-title'>Ventas Realizadas Por Usuario...</h4>";
  echo "</div>";
  echo "<div class='box-body'>";
   echo "    <table id='tabla_ventas' class='table table-striped  table-hover' >
          <thead>   
          <tr style='background-color: #2A6968; color: #FFFFFF;'>
         ";
    echo "<th>Usuario</th>";
    echo "<th>Fecha</th>";   
    echo "<th># Factura</th>";
    echo "<th>Producto</th>";
    echo "<th>Cantidad</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
   while($dato=$db->buscar_array($exec)){
      $usuario=$dato['id_usuario_modifico'];
      $fecha=$dato['fecha_creacion'];
      $n=$dato['num_factura'];
      $total=$dato['total'];
      $elid=$n;
       echo "<td> ".$usuario."</td>";
       echo "<td>".$fecha."</td>";
       echo "<td>".$n."</td>";
       echo "<td>L. ".$total."</td>";
       echo "<td><button class='btn btn-xs btn-primary confirmacion' id='".$elid."' onclick='muestra_detalle(this.id);'><i class='fa fa-search'></i> Detalles.</button></td>";
     echo "</tr>";
   }
   echo "</tbody>";
   echo "</table>";
  echo "</div>";
  echo "</div>";
}else{
  echo "<div class='callout callout-danger'>No se encontraron registros de compras...</div>";
}
 
?>
<?php 
} else { 
    header("location: index.php");
} 

 ?>