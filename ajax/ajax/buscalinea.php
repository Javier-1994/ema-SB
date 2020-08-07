

<?php 
//include("principal.php");
 ?>
	<?php 
function buscalineas(){
require_once("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("config/conexion.php");//Contiene funcion que conecta a la base de datos


     ?>
   
	<div class="right_col" role="main"  ><!-- page content -->
 <div class="" >
            <div class="page-title" >
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >
                  	<?php 
//include("modal/consultain.php");
//include("modal/modalOs.php");
//include("modal/modalnuevoproducto.php");

                     ?>
                	 
             </div>
         </div>    

<!--otro-->

        <div class="x_panel" >
                        <div class="x_title" >
                        <h2>Buscar Matriculados por Periodo</h2>

                            <div  class="clearfix" ></div>
                        </div>

                        <script>
    $(document).on('ready',function(){

      $('#btn-ingresar').click(function(){
        var url = "ajax/buscarproductoslinea.php";                                      

        $.ajax({                        
           type: "POST",                 
           url: url,                    
           data: $("#formulario").serialize(),
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
                <label for="user_name" class="col-sm-3 control-label">Buscar Periodo</label>
                <div class="col-sm-4">
              <select class="form-control input-sm"  id="linea" name="linea">
       <option value="0" selected>-Seleccione el Periodo-</option>
                  <?php
                    $sql_vendedor=mysqli_query($con,"select * from matricula order by tipo_m");
                    while ($rw=mysqli_fetch_array($sql_vendedor)){
                      $idalumno=$rw["idalumno"];
                      $tipo_m=$rw["tipo_m"];
                     
                      ?>
                      <option value="<?php echo $tipo_m?>" ><?php echo $tipo_m?></option>
                      <?php
                    }
                  ?>
                  </select>          
          </div>
             </div>
       <button type = "button" class = "btn btn-primary"  id="btn-ingresar"><span class = "glyphicon glyphicon-search"></span>
    </button> 
    <button type = "reset" id="reset" class = "btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></button>

    </form>
    
    <div id="resp"></div>

        </div>
        <!--generales-->
</div>
</div>




<?php 
//include("footer.php");
}
 ?>
  




	
