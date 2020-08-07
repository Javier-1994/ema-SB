
    <?php 
function consultaasistencia(){
  ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>   

    <div class="right_col" role="main"  ><!-- page content -->
 
            <div class="page-title">
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >

                    <?php 
include("modal/registro_cursos.php");
include("modal/editcursos.php");
include("modal/consultarcursos.php");

                     ?>
                     
             </div>
         </div>    

    <!-- contenido-->

<!---->


  <!--otro-->
  <h3>Reporte Asistencia</h3>

        <div class="x_panel" >
                        <div class="x_title" >
                       
  
                            <div  class="clearfix" ></div>
                        </div>
   
       
 <div class="outer_div"></div><!-- div cargar los Datos de js/mostrartabla -->
        <!-- contenido-->

                        <script>
    $(document).on('ready',function(){

      $('#btn-ingresar').click(function(){
        var fechai=$('input[name=fechai]');
        var fechaf=$('input[name=fechaf]');
        var asignatura=$('select[name=id_asignatura]');
               
        var url = "ajax/asipp.php";                                      

        
     if (fechai.val()=='') {
      alert('Seleccione Fecha');
      return false;
    } else {
      $("#fechai").attr('required',false);
      document.getElementById("fechai").style.border="";
      document.getElementById("fechai").style.background="";
    }

    if (fechaf.val()=='') {
      alert('Seleccione Fecha');
      return false;
    } else {
      $("#fechaf").attr('required',false);
      document.getElementById("fechaf").style.border="";
      document.getElementById("fechaf").style.background="";
    }

        $.ajax({                        
           type: "GET",                 
           url: url,                    
           data: 'asignatura='+asignatura.val()+'&fechai='+fechai.val()+'&fechaf='+fechaf.val(),
           success: function(data)            
           {
             $('#resp').html(data);           
           }
         });
      });
    });
    </script>


          <div class="form-group">
                <label for="user_name" class="col-sm-1 control-label">Fecha Inicio</label>
                <div class="col-sm-2">

           <input type="date" name="fechai" id="fechai" class="form-control" value="<?php echo date("Y-m-d");?>">
        </div>
        </div> 

<div class="form-group">
                <label for="user_name" class="col-sm-1 control-label">Fecha Final</label>
                <div class="col-sm-2">

           <input type="date" name="fechaf" id="fechaf" class="form-control" value="<?php echo date("Y-m-d");?>">
        </div>
        </div> 

          <button type = "button" class = "btn btn-primary"  id="btn-ingresar" title="Buscar"><span class = "glyphicon glyphicon-search"></span>
    </button> 
        </div>
        <div id="resp"></div>
        <!--generales-->
</div>



 



</script>



 <?php 
}
  ?>
  