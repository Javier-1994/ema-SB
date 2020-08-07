

    <?php 
function reportes(){
  ?>
     

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>   

    <div class="right_col" role="main"  ><!-- page content -->

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
   
    <?php include "./class_lib/links.php"; ?>
    <link rel="stylesheet" href="plugins/select2/select2.min.css">
    <link rel="stylesheet" href="plugins/printarea/jquery.printarea.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  </head>
  


<div role="tabpanel" class="tab-pane active" id="gastos1">
    </br>

    <div class="panel panel-danger">
     

      <div class="panel-body">
        <section class="content-header">
          <h1>
            Alumnos con que tienen actas:
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> </a></li>
            <li class="active">Reportes</li>
          </ol>
        </section>
        <h3 class='box-title'>Fecha(as):</h3>

 <label>Fechas:</label>

<button class="btn btn-default pull-left" id="daterange-btn">
                        <i class="fa fa-calendar"></i> Seleccione:
                        <i class="fa fa-caret-down"></i>
                      </button>
<button class='btn btn-primary no-print' onclick='print_gastoc();'><i class='fa fa-print'></i> Imprimir</button></h4>

 <button class='btn btn-primary pull-right' onclick='busca_acta();'><i class='fa fa-search'></i> Buscar</button>


<div class="form-group">
                    <div class="input-group">
                    </div>
                    <span class='fe'></span>
                    <input type='hidden'  class='form-control' id='fi' value=''>
                    <input type="hidden"  class='form-control' id='ff' value=''>
            </div><!-- /.form group -->
          <div class='col-md-9'>
          <div id='data'>
          </div>
          </div>
      </div> <!-- /panel-body -->
    </div> <!-- /panel -->  

</div>
</div>



    <!-- REQUIRED JS SCRIPTS -->
    <div class="MsjAjaxForm"></div>
    <?php include "./class_lib/scripts.php"; ?>
    <script src="plugins/select2/select2.full.min.js"></script>
    <script src="plugins/datepicker/js/bootstrap-datepicker.js"></script>
    <script src="plugins/datepicker/locales/bootstrap-datepicker.es.min.js"></script>
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script src="plugins/noty/packaged/jquery.noty.packaged.min.js"></script>
    <script src="dist/js/source_report.js"></script>
    <script src="plugins/printarea/jquery.printarea.js"></script>
  </body>
</html>

<script type="text/javascript">
 function print_gastoc(){
  $("#data").printArea();
}
/**********************************************************************************/
</script>

</script>

</script>





 <?php 
}
  ?>
  


