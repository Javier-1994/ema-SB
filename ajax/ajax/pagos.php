

<?php 
//include("principal.php");
 ?>
	<?php 
function apagos(){
require_once("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("config/conexion.php");//Contiene funcion que conecta a la base de datos


     ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>   

	<div class="right_col" role="main" id="main" ><!-- page content -->
 <div class="" >
            <div class="page-title" >
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >
                  	<?php 
include("modal/realizar_pago.php");
//include("modal/modalOs.php");
//include("modal/modalnuevoproducto.php");

                     ?>
                	 
             </div>
         </div>    

<!--otro-->

        <div class="x_panel" >
                        <div class="x_title" >
                           <ul class="nav navbar-right panel_toolbox"  >

     <button type='button' class="btn btn-success" data-toggle="modal" data-target="#cambiomatricula"><span class="icon-user-plus nuevo"></span> Actualizar Mensualidad</button>
                                
                            </ul>
                        <h2>Buscar cuotas de pagos por alumno</h2>

                            <div  class="clearfix" ></div>
                        </div>

                        <script>
    $(document).on('ready',function(){

      $('#btn-ingresar').click(function(){
        var alumno=$('input[name=idalumno]');
        var url = "ajax/buscarpagos.php";                                      

        if (alumno.val()=='') {
      alert('Seleccione un alumno para revisar sus cuotas!..');
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
    </script>
           

<script>
        function print1(){
   $("#resp").printArea();
}
</script>
  </head>
  <body>
    <form id="formulario" method="post" >
    <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Buscar Alumno</label>
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
 <div class="modal fade" id="cambiomatricula" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="lim();"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Editar Periodo</h4>
      </div>
      <div class="modal-body">
      <form  class="form-horizontal" method="post">
      <div id="comprobaridd"></div>
  
<input type="hidden" class="form-control inp" id="id_detalle" name="id_detalle" value="<?php echo $id_detalle; ?>">

<div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Descripcion</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="desciprcion_matricula" name="desciprcion_matricula" 
 value="<?php echo $descripcion; ?>" placeholder="Descripcion" autocomplete="off" required tabindex="1" 
 disabled>
                  </div>
                </div>


                <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Monto</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="monto_matricula" name="monto_matricula"
 value="<?php echo $monto; ?>" placeholder="Monto" autocomplete="off" required tabindex="3">
                  </div>
                </div>
      
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" id="limp" data-dismiss="modal">Cerrar</button>
      <button type="reset" class="btn btn-danger" >Limpiar</button>
      <button type="submit" class="btn btn-primary" id="updatematricula">Actualizar datos</button>
      </div>
      </form>
    </div>
    </div>
  </div>

        </div>
        <!--generales-->
</div>
</div>
 

 <script type="text/javascript"  src="js/pagos.js"></script>



<?php 
//include("footer.php");
}
 ?>
  




	
