

<?php 
//include("principal.php");
 ?>
	<?php 
function historialn(){
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
                           
                        <h2>Historial Notas</h2>

                            <div  class="clearfix" ></div>
                        </div>

                        <script>
    $(document).on('ready',function(){

      $('#btn-ingresar').click(function(){
        var alumno=$('input[name=idalumno]');
            var fechai=$('input[name=fechai]');
                var fechaf=$('input[name=fechaf]');
        var url = "ajax/buscahistorial.php";                                      

        if (alumno.val()=='') {
      alert('Seleccione un alumno a consultar');
      return false;
    } else {
      $("#idalumno").attr('required',false);
      document.getElementById("idalumno").style.border="";
      document.getElementById("idalumno").style.background="";
    }

     if (fechai.val()=='') {
      alert('Seleccione fecha a consultar');
      return false;
    } else {
      $("#fechai").attr('required',false);
      document.getElementById("fechai").style.border="";
      document.getElementById("fechai").style.background="";
    }

     if (fechaf.val()=='') {
      alert('Seleccione fecha a consultar');
      return false;
    } else {
      $("#fechaf").attr('required',false);
      document.getElementById("fechaf").style.border="";
      document.getElementById("fechaf").style.background="";
    }
        
        $.ajax({                        
           type: "POST",                 
           url: url,                    
           data: 'idalumno='+alumno.val()+'&fechai='+fechai.val()+'&fechaf='+fechaf.val(),
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
    <form class="form-horizontal" id="formulario" method="post" >
    <div class="form-group">
                <label for="user_name" class="col-sm-1 control-label">Buscar Alumno</label>
                <div class="col-sm-3">
               <input type="text" class="form-control" name="idalumno" id="id" list="idalumno" placeholder="Ingrese el nombre o identidad"   required>

      <datalist id="idalumno">
       <select id="idalumno"  name="idalumno" autocomplete="off">
            <?php

/*
 $alu=mysqli_query($con,"SELECT a.pnombre_a,a.papellido_a,a.identidad_a FROM alumnos a, matricula m where a.id_alumno=m.idalumno and estado_ma='1'") 
           or die(mysqli_error());
              while ($fila=mysqli_fetch_row($alu)) {
               echo "<option value='".$fila['0']."'> ".$fila['1']." ".$fila['3']." - ".$fila['5']."</option>";*/

           $alu=mysqli_query($con,"SELECT DISTINCT a.id_alumno, a.pnombre_a,a.snombre_a,a.papellido_a,a.sapellido_a,a.identidad_a FROM alumnos a, notas n where a.id_alumno=n.Idalumno") 
           or die(mysqli_error());
              while ($fila=mysqli_fetch_row($alu)) {
               echo "<option value='".$fila['0']."'> ".$fila['1']." ".$fila['3']." - ".$fila['5']."</option>";
              }
            ?>
      </select>   
      </datalist>
          </div>
             </div>


  <div class="form-group">
                <label for="user_name" class="col-sm-1 control-label">Fecha Inicio</label>
                <div class="col-sm-3">
        <input type="date" class="form-control inp input-sm" id="fechai" name="fechai"  required tabindex="4">
                </div>
              </div>
            <div class="form-group">
                <label for="user_name" class="col-sm-1 control-label">Fecha Final</label>
                <div class="col-sm-3">
        <input type="date" class="form-control inp" id="fechaf" name="fechaf"  required tabindex="5">
                </div>
              </div>

       <button type = "button" class = "btn btn-primary"  id="btn-ingresar" title="Buscar"><span class = "glyphicon glyphicon-search"></span>
    </button> 
    <button type = "reset" id="reset" class = "btn btn-success" title="Limpiar"><span class = "glyphicon glyphicon-refresh"><span></button>

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
function imprimirhi(){

 
     var alumno=document.getElementById('id').value;
       var fechai=document.getElementById('fechai').value;
         var fechaf=document.getElementById('fechaf').value;
   

 VentanaCentrada('pdf/reporteria/historial.php?id='+alumno+'&fechai='+fechai+'&fechaf='+fechaf,'Factura','','1024','768','true');

  ///  window.setTimeout('location.href="factura.php" ',1000);
    }
    </script>

<?php 
//include("footer.php");
}
 ?>
  <script src="js/VentanaCentrada.js" type="text/javascript"></script>
 




	
