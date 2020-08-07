

<?php 
//include("principal.php");
 ?>
	<?php 
function apagosv(){
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
                           
                        <h2>Cancelar Pagos Varios </h2>

                            <div  class="clearfix" ></div>
                        </div>

                        <script>
    $(document).on('ready',function(){

      $('#btn-ingresar').click(function(){
        var alumno=$('input[name=idalumno]');
        var url = "ajax/buscavarios.php";                                      

        if (alumno.val()=='') {
      alert('Seleccione un alumno para realizar pago');
      return false;
    } else {
      $("#idalumno").attr('required',false);
      document.getElementById("idalumno").style.border="";
      document.getElementById("idalumno").style.background="";
    }
        
        $.ajax({                        
           type: "POST",                 
           url: url,                    
           data: 'idalumno='+alumno.val(),
           success: function(data)            
           {
             $('#resp').html(data);
                        
           }
         });
      });

    });


    $(document).on('ready',function(){

      $('#btn-verpago').click(function(){
        var vpago=$('input[name=vpago]');
        var url = "ajax/busca_variospagos.php";                                      

        if (vpago.val()=='') {
      alert('Seleccione un pago a consultar');
      return false;
    } else {
      $("#vpago").attr('required',false);
      document.getElementById("vpago").style.border="";
      document.getElementById("vpago").style.background="";
    }
        
        $.ajax({                        
           type: "POST",                 
           url: url,                    
           data: 'vpago='+vpago.val(),
           success: function(data)            
           {
             $('#resp1').html(data);
                        
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
                <label for="user_name" class="col-sm-2 control-label">Buscar Alumno</label>
                <div class="col-sm-4">
               <input type="text" class="form-control" name="idalumno"  list="idalumno" placeholder="Ingrese el nombre o identidad"   required>

      <datalist id="idalumno">
       <select id="idalumno"  name="idalumno" autocomplete="off">
            <?php

/*
 $alu=mysqli_query($con,"SELECT a.pnombre_a,a.papellido_a,a.identidad_a FROM alumnos a, matricula m where a.id_alumno=m.idalumno and estado_ma='1'") 
           or die(mysqli_error());
              while ($fila=mysqli_fetch_row($alu)) {
               echo "<option value='".$fila['0']."'> ".$fila['1']." ".$fila['3']." - ".$fila['5']."</option>";*/

           $alu=mysqli_query($con,"SELECT a.id_alumno, a.pnombre_a,a.snombre_a,a.papellido_a,a.sapellido_a,a.identidad_a FROM alumnos a, matricula m where a.id_alumno=m.idalumno and estado_ma='1'") 
           or die(mysqli_error());
              while ($fila=mysqli_fetch_row($alu)) {
               echo "<option value='".$fila['0']."'> ".$fila['1']." ".$fila['3']." - ".$fila['5']."</option>";
              }
            ?>
      </select>   
      </datalist>
          </div>
            </div>
             <button type = "button" class = "btn btn-primary"  id="btn-ingresar" title="Buscar"><span class = "glyphicon glyphicon-search"></span>
          </button> 
          <button type = "reset" id="reset" class = "btn btn-success" title="Limpiar"><span class = "glyphicon glyphicon-refresh"><span></button>
 
    

      <div id="comprobarid"></div>
         <div id="resp"></div>

      <button type="submit" class="btn btn-primary" id="pagarvarios">Pagar</button>
      
      </form>
    <hr>
    <form action="">
    <div class="form-group">
                <label for="user_name" class="col-sm-2 control-label">Buscar Pagos Realializados</label>
                <div class="col-sm-4">
               <input type="text" class="form-control" name="vpago"  list="vpago" placeholder="Ingrese el nombre o identidad"   required>

      <datalist id="vpago">
       <select id="vpago"  name="vpago" autocomplete="off">
            <?php

/*
 $alu=mysqli_query($con,"SELECT a.pnombre_a,a.papellido_a,a.identidad_a FROM alumnos a, matricula m where a.id_alumno=m.idalumno and estado_ma='1'") 
           or die(mysqli_error());
              while ($fila=mysqli_fetch_row($alu)) {
               echo "<option value='".$fila['0']."'> ".$fila['1']." ".$fila['3']." - ".$fila['5']."</option>";*/

           $alu=mysqli_query($con,"SELECT p.id_detalle,p.descripcion FROM descripcion_pago p where estado='1'") 
           or die(mysqli_error());
              while ($fila=mysqli_fetch_row($alu)) {
               echo "<option value='".$fila['0']."'> ".$fila['1']."</option>";
              }
            ?>
      </select>   
      </datalist>
          </div>
            </div>

 <button type = "button" class = "btn btn-primary"  id="btn-verpago" title="Buscar"><span class = "glyphicon glyphicon-search"></span>
          </button> 
          <button type = "reset" id="reset" class = "btn btn-success" title="Limpiar"><span class = "glyphicon glyphicon-refresh"><span></button>

             <div id="resp1"></div>
</form>
        </div>
        <!--generales-->
</div>
</div>
 

 <script type="text/javascript"  src="js/pagovarios.js"></script>
<script type="text/javascript">
  document.getElementById("pagarvarios").style.visibility="hidden";
</script>


<?php 
//include("footer.php");
}
 ?>
  




	
