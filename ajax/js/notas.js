$(document).ready(function(){
      load(1);
    });
function load(page){
      var q= $("#q").val();
      $("#loader").fadeIn('slow');
      $.ajax({
        url:'./ajax/tablanotas.php?action=ajax&page='+page+'&q='+q,
         beforeSend: function(objeto){
         $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
        },
        success:function(data){
          /*div para cargar los datos en formulario(proveedores)*/$(".outer_div").html(data).fadeIn('slow');
          $('#loader').html('');

          

        }
      })
    }


window.onload = function () {
    Cargara();    
}

function Cargara()
{
    $('.datagrid').load('ajax/detalle_a.php');    
}


//Editar y Consultar
//---------------------------------------------------------------------------------------------



$('#data_pagosr').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var id_asignaciones= button.data('id_asignaciones') 
      var maestroa = button.data('maestroa') 
      var idmaestro = button.data('idmaestroa') 
      var idperiodo = button.data('idperiodo')
      var asignatura_uno = button.data('materia_uno')
      var asignatura_dos = button.data('materia_dos')
      var asignatura_tres = button.data('materia_tres')
      var curso_uno = button.data('curso_uno')
      var curso_dos = button.data('curso_dos')
      var curso_tres = button.data('curso_tres')
       
     
    
   var modal = $(this)
       modal.find('.modal-title').text(' Clases Asignadas al docente : '+maestroa) 
       document.getElementById('materia1').innerHTML=asignatura_uno; 
       document.getElementById('materia2').innerHTML=asignatura_dos; 
       document.getElementById('materia3').innerHTML=asignatura_tres;  
       document.getElementById('curso1').innerHTML=curso_uno; 
       document.getElementById('curso2').innerHTML=curso_dos; 
       document.getElementById('curso3').innerHTML=curso_tres;     
       document.getElementById('docente').innerHTML=maestroa;
       document.getElementById('docente2').innerHTML=maestroa;
       document.getElementById('docente3').innerHTML=maestroa; 

       modal.find('.modal-body #id_asignaciones').val(id_asignaciones);
//      modal.find('.modal-body #modificado').val(modificado)
//      modal.find('.modal-body #fecha_modifica').val(fecha_modifica)
    
    
     
      $('.alert').hide();//Oculto alert
    })

////

$('#close_notas').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var id_periodoclose= button.data('id_periodoclose') 
      var codigoasignatura = button.data('codigoasignatura') 
      
     
    
   var modal = $(this)
      // modal.find('.modal-title').text(' Clases Asignadas al docente : '+maestroa) 
       modal.find('.modal-body #id_periodoclose').val(id_periodoclose);
       modal.find('.modal-body #codigoasignatura').val(codigoasignatura);
       

      // modal.find('.modal-body #id_asignaciones').val(id_asignaciones);
//      modal.find('.modal-body #modificado').val(modificado)
//      modal.find('.modal-body #fecha_modifica').val(fecha_modifica)
    
    
     
      $('.alert').hide();//Oculto alert
    })


///

$(document).ready(function () {
  $('#Updatedasignaciones').click(function () {
    var idasignaciones=$('input[name=idasignacionm]');
    var maestrop=$('select[name=maestrop]');
    var cursop=$('select[name=cursop]');
    
  if (maestrop.val()=='') {
    alert("Agrega un maestro por favor");
      return false;
    } else {
      $("#maestrop").attr('required',false);
      document.getElementById("maestrop").style.border="";
      document.getElementById("maestrop").style.background="";
    }

    if (cursop.val()=='') {
      $("#cursop").attr('required',true);
      document.getElementById("cursop").style.border="2px solid red";
      document.getElementById("cursop").style.background="#F3F1F1";
      document.getElementById("cursop").focus();
      return false;
    } else {
      $("#cursop").attr('required',false);
      document.getElementById("cursop").style.border="";
      document.getElementById("cursop").style.background="";
    }
    
    
var data =  'idasignaciones=' + idasignaciones.val() + '&maestrop=' + maestrop.val() + '&cursop=' + cursop.val();
    
  //var data = 'rtnp=' + rtnp.val() + '&maestrop=' + maestrop.val() + '&direccionp=' + direccionp.val() + '&telefonop=' + telefonop.val();
    $.ajax({
      
      type: "POST",

      url: "ajax/editasignacionesm.php",  

      data: data,   

      // Con esta linea me permite entrar a validar.php y 
      //mostrar el mensaje
      dataType: "html",
      
      cache: false,
      
      //success
      success: function (data) {
        $('#actualizaDatos').fadeIn(1000);
        $("#actualizaDatos").html(data);  
      //  $('#dataUpdate').modal('hide');
        load(1);    
      }   
    });
        
    return false;

  }); 
});
/*
  function agarra_asignacion(){
   var $asignacion = $('#id_asignaciones').val();
    return $asignacion;
  }*/
function tomaasitencia(id_asignaciones){
      $.ajax({
        type: "POST",
        url: "./ajax/detalle_a.php",
        data: "id_asignaciones="+id_asignaciones,
     beforeSend: function(objeto){
      $("#resultados").html("Mensaje: Cargando...");
      },
        success: function(datos){
    $("#resultados").html(datos);
    }
      });

    }
$(document).ready(function () {
  $('#cerrar_cuadro').click(function () {
    var periodo=$('input[name=id_periodoclose]');
    var asignatura=$('select[name=codigoasignatura]');
  
    
var data =  'periodo=' + periodo.val() + '&asignatura=' + asignatura.val();
    
  //var data = 'rtnp=' + rtnp.val() + '&maestrop=' + maestrop.val() + '&direccionp=' + direccionp.val() + '&telefonop=' + telefonop.val();
    $.ajax({
      
      type: "POST",

      url: "ajax/close_notas.php",  

      data: data,   

      // Con esta linea me permite entrar a validar.php y 
      //mostrar el mensaje
      dataType: "html",
      
      cache: false,
      
      //success
      success: function (data) {
        $('#actualizaDatoss').fadeIn(1000);
        $("#actualizaDatoss").html(data);  
      //  $('#dataUpdate').modal('hide');
     // alert("dd");
       // load(1);    
      }   
    });
        
    return false;

  }); 
});

function pasalista(){
  
  /*//var fecha = document.getElementById("fecha").value;

 if(fecha==''){
 $("#fecha").attr('required',true);
    document.getElementById("fecha").style.border="2px solid red";
    document.getElementById("fecha").style.background="#F3F1F1";
    document.getElementById("fecha").focus();
return false;
} else{
    $("#fecha").attr('required',false);
    document.getElementById("fecha").style.border="";
    document.getElementById("fecha").style.background="";
  }
*/
    $('#tabla_asistencia > tbody > #tr').each(function(){
   var idalumno = $(this).find('#idalumno').val(); 
 //  var idasignatura = $(this).find('#idasignatura').val();
   //var idperiodo= $(this).find('#idperiodo').val();
   // var idmaestro= $(this).find('#idmaestro').val();
  var tipoa= $(this).find('#tipoasistencia').val(); 

   $.ajax({
     beforeSend: function(){
     },
     url: 'ajax/as.php',
     type: 'POST',
     data: 'idalumno='+idalumno+'&tipoa='+tipoa,
   
     //data: 'idalumno='+idalumno+'&idasignatura='+idasignatura+'&idperiodo='+idperiodo+'&idmaestro='+idmaestro+'&tipoa='+tipoa,
     success: function(x){

     },

   });
 });

}

function agregara(id)
    {
      var idalumno=document.getElementById('idalumno_'+id).value;
     var idmaestro=document.getElementById('idmaestro_'+id).value;
    var idperiodo=document.getElementById('idperiodo_'+id).value;
      var tipo=document.getElementById('tipoa_'+id).value;
    var fecha=document.getElementById('fecha').value;
     // var precio=document.getElementById('precio_'+id).value;
      //Inicia validacion

if (fecha==""){
        alert("Ingrese fecha !");
        $("#fecha").focus();
        //   $("#tipoa").val("");
        return false;
      }

      
      //Fin validacion
      $.ajax({
        type: "POST",
        url: "./ajax/as.php",
        data: "idalumno="+idalumno+"&tipoa="+tipo+"&idmaestro="+idmaestro+"&idperiodo="+idperiodo+"&fecha="+fecha,
     beforeSend: function(objeto){
      $("#resultados1").html("Mensaje: Cargando...");
      },
        success: function(datos){
    $("#resultados1").html(datos);
   //load(1);
    }
      });
       event.preventDefault();
    }
    
