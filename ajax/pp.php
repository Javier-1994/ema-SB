<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fqactura</title>
</head>
<body>
	<form action="">
<input type="hidden" value="10" name="numero_factura" id="numero_factura">
  <input type="button" onclick="imprimir();" id="nueva_orden" value="imprimir">
</form>
</body>
</html>

<script>

  function imprimir(){

 
     var numero_factura=document.getElementById('numero_factura').value;
   

 VentanaCentrada('pdf/reporteria/factura.php?numero_factura='+numero_factura,'Factura','','1024','768','true');
  ///  window.setTimeout('location.href="factura.php" ',1000);
    }
</script>

<script src="js/VentanaCentrada.js" type="text/javascript"></script>
  
