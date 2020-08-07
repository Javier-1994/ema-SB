
<?php
require_once("../config/conec.php");//Contiene funcion que conecta a la base de datos

?>
<?php
   $id_pago = $_POST['id_pago'];
   $sql2=mysqli_query($db, "select * from pagos where id_pagos='$id_pago'");

while ($row2=mysqli_fetch_array($sql2))
  {
  $tipo_pago=$row2["tipo_pago"];
  $pendiente=$row2["pendiente"];
  $total_pago=$row2["total_pago"];
  $abono_p=$row2["abono_p"];
   
//  $fecha=date("d/m/Y", strtotime($row2['fecha']));
if ($tipo_pago=="Pendiente") {
	echo "
        <div class='input-group'>
                 <span class='input-group-addon' style='background:#2A6968; color: white;' ><i class='fa fa-num'></i> Tipo de Pago: </span>
                 <select id='tipo' name='tipo' class='form-control pull-center' onclick='tipo_pago();'
                  onkeyup='tipo_pago();'>
                    <option value=''>Tipo de pago...</option>
                    <option value='Credito'>Credito</option> 
                    <option value='Contado'>Contado</option>
                  </select>
              </div>



<div class='form-group' id='adelanto_pago' style='display: none;'>
            <br>
             <div class='input-group'>
            <label class='col-sm-4 control-label'>Abono:</label>
             <div class='col-sm-7'>
              <input type='text' class='form-control' id='ad' name='ad' onkeyup='pago_estudiante();'>
             </div>
             </div>

 <div class='form-group'>
  <label class='col-sm-4 control-label'>Total Abonado:</label>
             <div class='col-sm-7'>
              <input type='text' class='form-control' id='totalabonado' name='totalabonado' value='".$abono_p."' disabled>
 </div>
      </div>     

       <div class='input-group'>     
             <label class='col-sm-4 control-label'>Saldo Pendiente:</label>
             <div class='col-sm-7'>
              <input type='text' class='form-control' id='saldop' name='saldop' value='".$pendiente."' disabled >

                </div>
             </div>

 <div class='input-group'>   
             <label class='col-sm-4 control-label'>Total Pago:</label>
             <div class='col-sm-7'>
            
                <input type='text' class='form-control' id='monto_pago' name='monto_pago' value='".$total_pago."' disabled>
 <input type='hidden' class='form-control' id='calculo' name='calculo' value='".$abono_p."'>

             </div>
           </div>
        
          
<div class='form-group' id='total_cuota' style='display: none;'>
           
             <div class='input-group'>   
             <div class='col-sm-7'>
              <input type='hidden' class='form-control' id='cancela_rrtotal'>
             </div>
</div>

           </div>
  ";
	}


///////////////
	if ($tipo_pago=="Credito") {
	echo "
    
<div class='input-group' style='display: none;'>
                 <span class='input-group-addon' style='background:#2A6968; color: white;' ><i class='fa fa-num'></i> Tipo de Pago: </span>
                 <select id='tipo' name='tipo' class='form-control pull-center' onclick='tipo_pago();'
                  onkeyup='tipo_pago();'>
                    
                    <option value='Credito'>Credito</option> 
                    
                  </select>
              </div>


<div  id='adelanto_pago' >
           <div class='form-group'>
            <label class='col-sm-4 control-label'>Abono:</label>
             <div class='col-sm-7'>
              <input type='text' class='form-control' id='ad' name='ad' onkeyup='pago_estudiante();'>
             </div>
             </div>
<div class='form-group'>
  <label class='col-sm-4 control-label'>Total Abonado:</label>
             <div class='col-sm-7'>
              <input type='text' class='form-control' id='totalabonado' name='totalabonado' value='".$abono_p."' disabled>
 </div>
 </div>
                <div class='form-group'>
             <label class='col-sm-4 control-label'>Saldo Pendiente:</label>
             <div class='col-sm-7'>
              <input type='text' class='form-control' id='saldop' name='saldop' value='".$pendiente."' disabled >

                </div>
             </div>

 <div class='form-group'>
             <label class='col-sm-4 control-label'>Total Pago:</label>
             <div class='col-sm-7'>
              <input type='text' class='form-control' id='monto_pago' name='monto_pago' value='".$total_pago."' disabled>
 <input type='hidden' class='form-control' id='calculo' name='calculo' value='".$abono_p."'>
  </div>
             </div>

           </div>
 
  ";
	

     } 
     } 

     ?>