

<?php 
//include("principal.php");
 ?>
	<?php 
function historialactas(){
require_once("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("config/conexion.php");//Contiene funcion que conecta a la base de datos


     ?>
 

	<div class="right_col" role="main" id="main" ><!-- page content -->
 <div class="" >
            <div class="page-title" >
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >
                  	<?php 
//include("modal/realizar_pago.php");
//include("modal/modalOs.php");
//include("modal/modalnuevoproducto.php");

                     ?>
                	 
             </div>
         </div>    

<!--otro-->

        <div class="x_panel" >
                        <div class="x_title" >
                           
                        <h2>Historial Actas</h2>

                            <div  class="clearfix" ></div>
                        </div>

                        <script>
    $(document).on('ready',function(){

      $('#btn-ingresar').click(function(){
        var fechai=$('input[name=fechai]');
          var fechaf=$('input[name=fechaf]');
          
        var url = "ajax/buscaactas.php";                                      

        if (fechai.val()=='') {
      alert('Seleccione una fecha a consultar');
      return false;
    } else {
      $("#fechai").attr('required',false);
      document.getElementById("fechai").style.border="";
      document.getElementById("fechai").style.background="";
    }

      if (fechaf.val()=='') {
      alert('Seleccione una fecha a consultar');
      return false;
    } else {
      $("#fechaf").attr('required',false);
      document.getElementById("fechaf").style.border="";
      document.getElementById("fechaf").style.background="";
    }

        $.ajax({                        
           type: "POST",                 
           url: url,                    
           data: 'fechai='+fechai.val()+'&fechaf='+fechaf.val(),
           success: function(data)            
           {
             $('#resp').html(data);           
           }
         });
      });
    });
    </script>
            <script src="plugins/printarea/jquery.printarea.js"></script>

<script>
        function print1(){
   $("#resp").printArea();
}
</script>
  </head>
  <body>
    <form id="formulario" method="post" >
   
            <div class="form-group">
                <label for="user_name" class="col-sm-1 control-label">Fecha Inicio</label>
                <div class="col-sm-2">
        <input type="date" class="form-control inp" id="fechai" name="fechai"  required tabindex="4">
                </div>
              </div>
            <div class="form-group">
                <label for="user_name" class="col-sm-1 control-label">Fecha Final</label>
                <div class="col-sm-2">
        <input type="date" class="form-control inp" id="fechaf" name="fechaf"  required tabindex="5">
                </div>
              </div>

       <button type = "button" class = "btn btn-primary"  id="btn-ingresar" title="Buscar"><span class = "glyphicon glyphicon-search"></span>
    </button> 
 

    </form>
      <div id="comprobarid"></div>
    <div id="resp"></div>

<?php 

  
 $sal1=mysqli_query($con,"SELECT * FROM descripcion_pago where id_detalle='1'");
 while($row1=mysqli_fetch_array($sal1)){

        $id_detalle=$row1['id_detalle'];
        $descripcion=$row1['descripcion'];
        $monto=$row1['monto'];
       }
 ?>
 

    
    </div>
    </div>
  </div>

        </div>
        <!--generales-->
</div>
</div>
 

                        <script>

function impresion(){
   var fechai=document.getElementById('fechai').value;
     var fechaf=document.getElementById('fechaf').value;
   

 VentanaCentrada('pdf/reporteria/actas.php?f1='+fechai+'&f2='+fechaf,'Factura','','1024','768','true');
 }
    </script>


<?php 
//include("footer.php");
}
 ?>
  <script src="js/VentanaCentrada.js" type="text/javascript"></script>
 




	
