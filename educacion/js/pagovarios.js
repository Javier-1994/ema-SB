//Editar y Consultar
//---------------------------------------------------------------------------------------------

$(document).ready(function () {
  $('#pagarvarios').click(function () {
      var idalumno=$('input[name=idalumno]');
       var variosp=$('select[name=variosp]');
       
   
    if (idalumno.val()=='') {
      alert('Seleccione un alumno para realizar pago');
      return false;
    } else {
      $("#idalumno").attr('required',false);
      document.getElementById("idalumno").style.border="";
      document.getElementById("idalumno").style.background="";
    }
    
    
 if (variosp.val()=='') {
      alert('Seleccione pago a realizar');
      return false;
    } else {
      $("#variosp").attr('required',false);
      document.getElementById("variosp").style.border="";
      document.getElementById("variosp").style.background="";

    }
    

var data =  'idalumno=' + idalumno.val() + '&variosp=' + variosp.val();
    
  //var data = 'rtnp=' + rtnp.val() + '&maestrop=' + maestrop.val() + '&direccionp=' + direccionp.val() + '&telefonop=' + telefonop.val();
    $.ajax({
      
      type: "POST",

      url: "ajax/realizapagosvarios.php",  

      data: data,   

      // Con esta linea me permite entrar a validar.php y 
      //mostrar el mensaje
      dataType: "html",
      
      cache: false,
      
      //success
      success: function (data) {
        $('#comprobarid').fadeIn(1000);
        $("#comprobarid").html(data);  
     //  $('#data_pagosr').modal('hide');
      //  buscarpagos();  
  
      }   
    });
        
    return false;

  }); 
});


function buscarpagos(){
        var alumno=$('input[name=idalumno]');
        var url = "ajax/buscavarios.php";                                      

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

 
