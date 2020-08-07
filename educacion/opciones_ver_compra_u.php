<?php 
session_start();
if(isset($_SESSION['usuario'])&&(($_SESSION['tipo']=='1') || ($_SESSION['tipo']=='2'))&&($_SESSION['estado'])) {  
 ?>
<?php
$option=$_POST['option'];

if($option=='1'){
 echo "<div class='box-primary'>";
echo "<div class='box-header with-border'>";
echo "<h4 class='box-title'>Ingresa el nombre del Periodo.</h4>";
echo "</div>";

echo "<div class='box-body'>";
echo "<form class='form-horizontal'>";

   echo "<div class='form-group'>";
   echo "<label for='numero_ticket' class='col-sm-3 control-label'>Nombre de Periodo:</label>";
   echo "<div class='col-sm-4'>";
   echo "<input type='text' list='usuarios' name='usuarios' class='form-control usuarios' id='numero_ticket'>";
   echo "</div>";
   echo "</div>";
 echo "</form>";
echo "</div>";

echo "<div class='box-footer'>";
echo "<button class='btn btn-primary pull-right' onclick='busca_compra_numero();' id='btn-busca'><i class='fa fa-search'></i> Buscar...</button>";
echo "</div>";

echo "</div>";
}
?>

<?php 
} else { 
    header("location: index.php");
} 

 ?>

