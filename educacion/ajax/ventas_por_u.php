<?php 

require_once("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once("config/conexion.php");//Contiene funcion que conecta a la base de datos

 ?>

<?php 
//include("principal.php");
 ?>

    <?php 
function aventas_u(){


     ?>
    <div class="right_col" role="main"  ><!-- page content -->
 <div class="" >
            <div class="page-title" >
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12" >

                    <?php 
include("modal/editarp.php");
                     ?>
                     
             </div>
         </div>    

    <!-- contenido-->

<!---->
        <section class="content-header">
          <h1>
            Matriculados por periodo.
          </h1>
          <ol class="breadcrumb">
           
          </ol>
        </section>

          <section class="content">

          <!-- Your Page Content Here -->
          <div class='row'>
         <div class='col-md-6'>
         <div class='box-primary'>
         <div class='box-header with-border'>
         <h4 class='title'>Busqueda.</h4>
         </div>
         <div class='box-body'>
         <form class='form-horizontal'>
         <div class='form-group'>
            <label for="tipo_buscar" class="col-sm-4 control-label">Buscar por:</label>
             <div class="col-sm-6">
                <select class='form-control' id='tipo_buscar'>
                <option value='1'>Periodo.</option>
                <option value='2'>General.</option>
                </select>
             </div>
          </div>
          </form>
         </div>
         <div class='box-footer'>
         <button type='button' class='btn btn-primary btn-raised pull-right' onclick='genera_opcion();'><i class='fa fa-thumbs-up'></i> Continuar...</button>
         </div>
         </div>
         </div>
         <div class='col-md-6'>
         <div id='pone_opcion'></div>
         </div>
         </div>
         <div class='row'>
         <div class='col-md-12'>
         <div id='data'></div>
         </div>
         </div>
        </section><!-- /.content -->


        <div class="modal fade" id ="modal_detalle_pedido" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
        <div class="modal-content">
          <div id="imprime_factura">
          <div class="modal-header" style="background:#2A6968; color: white;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title nuticket"></h4>
          </div>
          <div class="modal-body">
            <div id='detalle_de_pedido'></div>
          </div>
          </div>

          <div class="modal-footer">
         <button class='btn btn-primary no-print' onclick='print1();'><i class='fa fa-print'></i> Imprimir.</button>
           <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


              <div class="modal fade" id ="modal_agregar_producto" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title nuticket"></h4>
          </div>
          <div class="modal-body">
            <div id='detalle_de_producto'></div>

           <div class='box-primary'>
           <h3 class='box-title'>Articulo.</h3>
           </div>
           <div class='box-body'>
           <div class='input-group'>
             <span class='input-group-addon '><i class='fa fa-barcode'></i> Producto:</span>
             <input type='text' list='producto' name='producto' class='form-control pull-right' id='codigo'  onchange='busca_articulo();'
             style='font-size:20px; text-align:center; color:blue; font-weight: bold;' placeholder='Codigo o nombre del producto...' >
            </div>
            <br>
            <div class='input-group'>
             <span class='input-group-addon'><i class='fa fa-code'></i> Desc.:</span>
             <input type='text' class='form-control pull-right' id='descripcion' value='' disabled>
            </div>
            <br>
            <div class='input-group'>
             <span class='input-group-addon'><i class='fa fa-usd'></i> Costo:</span>
              <input type="text" class="form-control pull-right cantidades" id="costo"
             data-inputmask="'alias': 'numeric', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'placeholder': '0'"
             style="font-size:20px; text-align:center; color:blue; font-weight: bold;" disabled>
            </div>
            <br>
            <div class='input-group'>
             <span class='input-group-addon bg-green'><i class='fa fa-calculator'></i> Cantidad:</span>
             <input type='text' class='form-control pull-right cantidades' id='cantidad_producto'
             data-inputmask="'alias': 'numeric', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'placeholder': '0'"
             style="font-size:20px; text-align:center; color:blue; font-weight: bold;" disabled>
            </div>
            <br>
            <div class='btn-group'>
            <button class='btn btn-primary' type='button' onclick='procesa_pedido();' id='add-article' disabled><i class='fa fa-download'></i> Agregar...</button>
            <button class='btn btn-danger' type='button' onclick='cancela_add();' id='btn-cancel-article' disabled><i class='fa fa-times'></i> Cancelar...</button>
            </div>
           </div>
           <br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

  <div id='impresion_de_ticket' class='print'></div>


</div>
</div>
        
       <?php
require('config/class_conecta_mysql.php');
$db=new ConexionMySQL();

// $cadena="Select * from usuarios where tipo=2 and tipo=1";
$cadena="Select * from usuarios where tipo='1' or tipo='3'";
$exec=$db->consulta($cadena);

?>

      <datalist id="usuarios">
       <select id="usuarios"  name="usuarios">
            <?php 
              while ($fila=mysql_fetch_row($exec)) {
               echo "<option value='".$fila['2']."'>".$fila['0']."-".$fila['2']."</option>";
              }
            ?>
      </select>   

      </datalist>




       <div class="MsjAjaxForm"></div>
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <script src="plugins/select2/select2.full.min.js"></script>
    <script src="plugins/datepicker/js/bootstrap-datepicker.js"></script>
    <script src="plugins/datepicker/locales/bootstrap-datepicker.es.min.js"></script>
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/noty/packaged/jquery.noty.packaged.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="plugins/printarea/jquery.printarea.js"></script>
<!--     <script src="plugins/number/jquery.inputmask.bundle.js"></script> -->
    <script src="./js/Ventas/source_venta_u.js"></script>

<?php 
//include("footer.php");
}
function obtenerNuevoId(){
        include ('config/conexion.php');
        $sql = "SELECT MAX(num_factura)+1 AS Nuevo FROM detalle_compra";
        $queryNuevo=mysqli_query($con, $sql) or die(mysqli_error());
        $rowNuevo=mysqli_fetch_array($queryNuevo);
        if (is_null($rowNuevo['Nuevo'])) {
            $rowNuevo['Nuevo'] = 1;
        }
        return $rowNuevo['Nuevo'];
    }
 ?>


  