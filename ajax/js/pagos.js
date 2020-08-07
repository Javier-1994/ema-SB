//Editar y Consultar
//---------------------------------------------------------------------------------------------

$('#data_pagosr').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var id_pagos= button.data('id_pagos') 
      var alumno= button.data('alumno')
      var monto_pago = button.data('monto_pago') 
   var mes = button.data('mes') 
   var saldop = button.data('saldop')
     var totalabonado = button.data('totalabonado') 
      var calculo = button.data('calculo') 
     
    
   var modal = $(this)
    
       modal.find('.modal-body #id_pagos').val(id_pagos)
       modal.find('.modal-body #monto_pago').val(monto_pago)
        modal.find('.modal-body #mes').val(mes)
          modal.find('.modal-body #saldop').val(saldop)
           modal.find('.modal-body #totalabonado').val(totalabonado)
              modal.find('.modal-body #calculo').val(calculo)
      
   
       

      $('.alert').hide();//Oculto alert
    })



$(document).ready(function () {
  $('#agregapago').click(function () {
    var id_pagos=$('input[name=id_pagos]');
      var tipo=$('select[name=tipo]');
    var ad=$('input[name=ad]');
    var saldop=$('input[name=saldop]');
    var monto_pago=$('input[name=monto_pago]');
    
if (tipo.val()=='') {
      $("#tipo").attr('required',true);
      document.getElementById("tipo").style.border="2px solid red";
      document.getElementById("tipo").style.background="#F3F1F1";
      document.getElementById("tipo").focus();
      return false;
    } else {
      $("#tipo").attr('required',false);
      document.getElementById("tipo").style.border="";
      document.getElementById("tipo").style.background="";
    }
    
    
    
 if (tipo.val()=='Credito') {

   if (ad.val()=='') {
      $("#ad").attr('required',true);
      document.getElementById("ad").style.border="2px solid red";
      document.getElementById("ad").style.background="#F3F1F1";
      document.getElementById("ad").focus();
      return false;
    } else {
      $("#ad").attr('required',false);
      document.getElementById("ad").style.border="";
      document.getElementById("ad").style.background="";
    }

    }
    
    
var data =  'id_pagos=' + id_pagos.val() + '&ad=' + ad.val() + '&saldop=' + saldop.val() + '&monto_pago=' + monto_pago.val()+'&tipo=' + tipo.val();
    
  //var data = 'rtnp=' + rtnp.val() + '&maestrop=' + maestrop.val() + '&direccionp=' + direccionp.val() + '&telefonop=' + telefonop.val();
    $.ajax({
      
      type: "POST",

      url: "ajax/realizarpagos.php",  

      data: data,   

      // Con esta linea me permite entrar a validar.php y 
      //mostrar el mensaje
      dataType: "html",
      
      cache: false,
      
      //success
      success: function (data) {
        $('#comprobarid').fadeIn(1000);
        $("#comprobarid").html(data);  
       $('#data_pagosr').modal('hide');
        buscarpagos();  
      }   
    });
        
    return false;

  }); 
});


function buscarpagos(){
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
        }

   function vtipo(id_pagos)
    {
      $.ajax({
        type: "POST",
        url: "./ajax/busca_pago.php",
        data: "id_pago="+id_pagos,
     beforeSend: function(objeto){
      $("#resultados").html("Mensaje: Cargando...");
      },
        success: function(datos){
    $("#resultados").html(datos);
    }
      });

    }


/*
function revisa_pagos(id_pagos){
      var id_pagos=id_pagos;
      //alert(ti);
      $.ajax({
          beforeSend: function(){
            $("#detalle_pagos").html("Buscando...");
           },
          url: 'ajax/busca_abonos.php',
          type: 'POST',
          data: 'id_pagos='+id_pagos,
          success: function(x1){
            $("#detalle_pagos").html(x1);
            $("#modal_revisa_pagos").modal({
             show:true,
             backdrop: 'static',
             keyboard: false
            });
           },
           error: function(jqXHR,estado,error){
            alert("Ocurrio un error, reporte a soporte..." +estado+"     "+error);
           }
           });
    }

*/
function tipo_pago(){
   if ($("#tipo").val()=='') {
 
    document.getElementById("adelanto_pago").style.display = "none";
    document.getElementById("total_cuota").style.display = "none";
   }
   if ($("#tipo").val()=='Credito') {
   //  document.getElementById("total_cuota").value="";
    document.getElementById("total_cuota").style.display = "none";
    document.getElementById("adelanto_pago").style.display = "block";
   }

      if ($("#tipo").val()=='Contado') {
       // document.getElementById("ad").value="1";
    document.getElementById("total_cuota").style.display = "block";
    document.getElementById("adelanto_pago").style.display = "none";
   }
  }


function pago_estudiante() {
  var ad=document.getElementById('ad').value;
  var monto=document.getElementById('calculo').value;
  var total=document.getElementById('monto_pago').value;
   // var abono=document.getElementById('totalabonado').value;

if (ad=='') {
    var total_adelanto=0;  
  }
  if (ad!='') {
    var total_adelanto=parseFloat(ad);
  }

if (monto=='') {
    var saldo_pendiente=0;  
  }
  if (monto!='') {
    var saldo_pendiente=parseFloat(monto);
  }


if (total=='') {
    var total1=0;  
  }
  if (total!='') {
    var total1=parseFloat(total);
  }

/*
if (abono=='') {
    var abono1=0;  
  }
  if (abono!='') {
    var abono1=parseFloat(abono);
  }
*/

var totalab=(saldo_pendiente +total_adelanto);
  $("#totalabonado").val(totalab.toFixed(2)).value;

var pend=(total1-totalab);
  $("#saldop").val(pend.toFixed(2)).value;

 if(pend>=0){
   document.getElementById("agregapago").disabled = false;
 
  }else{
     document.getElementById("agregapago").disabled = true;
    
  }


}


$(document).ready(function () {
  $('#updatematricula').click(function () {
    var id_detalle=$('input[name=id_detalle]');
      var descipcion_matricula=$('input[name=descipcion_matricula]');
    var monto_matricula=$('input[name=monto_matricula]');
  
    if (monto_matricula.val()=='') {
      $("#monto_matricula").attr('required',true);
      document.getElementById("monto_matricula").style.border="2px solid red";
      document.getElementById("monto_matricula").style.background="#F3F1F1";
      document.getElementById("monto_matricula").focus();
      return false;
    } else {
      $("#monto_matricula").attr('required',false);
      document.getElementById("monto_matricula").style.border="";
      document.getElementById("monto_matricula").style.background="";
    }
    
var data =  'id_detalle=' + id_detalle.val() +'&monto_matricula=' + monto_matricula.val();
    
  //var data = 'rtnp=' + rtnp.val() + '&maestrop=' + maestrop.val() + '&direccionp=' + direccionp.val() + '&telefonop=' + telefonop.val();
    $.ajax({
      
      type: "POST",

      url: "ajax/update_matricula.php",  

      data: data,   

      // Con esta linea me permite entrar a validar.php y 
      //mostrar el mensaje
      dataType: "html",
      
      cache: false,
      
      //success
      success: function (data) {
        $('#comprobaridd').fadeIn(1000);
        $("#comprobaridd").html(data);  
      //  $('#dataUpdate').modal('hide');
        
      }   
    });
        
    return false;

  }); 
});
