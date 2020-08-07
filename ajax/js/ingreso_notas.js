$(document).ready(function(){
      load(1);
    });
function load(page){
      var q= $("#q").val();
      $("#loader").fadeIn('slow');
      $.ajax({
        url:'./ajax/tablaingreso_notas.php?action=ajax&page='+page+'&q='+q,
         beforeSend: function(objeto){
         $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
        },
        success:function(data){
          /*div para cargar los datos en formulario(proveedores)*/$(".outer_div").html(data).fadeIn('slow');
          $('#loader').html('');

          

        }
      })
    }

    $('#data_notas').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var idalumno= button.data('idalumno') 
      var pnombre_a = button.data('nombre1alumno') 
      var snombre_a = button.data('nombre2alumno') 
      var papellido_a = button.data('apellido1alumno') 
      var sapellido_a = button.data('apellido2alumno')
      var materia = button.data('materia') 
      var curso = button.data('curso')
      var idnotas = button.data('idnotas')
      var idmateria = button.data('idmateria') 
      var idcurso = button.data('idcurso')
      var conducta = button.data('conducta')
      var asistencia = button.data('asistencia')
      var acum1 = button.data('acum1')
      var acum2 = button.data('acum2')
      var acum3 = button.data('acum3')
      var prueba1 = button.data('prueba1')
      var prueba2 = button.data('prueba2')
      var prueba3 = button.data('prueba3')
      var examen = button.data('examen')
      var idperiodo = button.data('idperiodo')
       var nota_total = button.data('nota_total')
       var recuperacion = button.data('recuperacion')

      var modal = $(this)
      modal.find('.modal-title').text('Gestionar notas del Alumno: '+pnombre_a +" "+snombre_a+" "+papellido_a+" "+ sapellido_a)
      modal.find('.modal-body #materia').val(materia)
      modal.find('.modal-body #curso').val(curso)
      modal.find('.modal-body #idalumno').val(idalumno)
      modal.find('.modal-body #idnotas').val(idnotas) 
      modal.find('.modal-body #idmateria').val(idmateria)
      modal.find('.modal-body #idcurso').val(idcurso)
      modal.find('.modal-body #conducta').val(conducta)
      modal.find('.modal-body #asistencia').val(asistencia)
      modal.find('.modal-body #acum1').val(acum1)
      modal.find('.modal-body #acum2').val(acum2)
      modal.find('.modal-body #acum3').val(acum3)
      modal.find('.modal-body #prueba1').val(prueba1)
      modal.find('.modal-body #prueba2').val(prueba2)
      modal.find('.modal-body #prueba3').val(prueba3)  
      modal.find('.modal-body #examen').val(examen)
      modal.find('.modal-body #idperiodo').val(idperiodo)
       modal.find('.modal-body #nota_total').val(nota_total)
          modal.find('.modal-body #recuperacion').val(recuperacion)
      $('.alert').hide();//Oculto alert
    })


    $(document).ready(function () {
  $('#agregarnotas').click(function () {
    var idalumno=$('input[name=idalumno]');
    var idmateria=$('input[name=idmateria]');
    var idperiodo=$('input[name=idperiodo]');
    var idnotas=$('input[name=idnotas]');
    var idnotas=$('input[name=idnotas]');
    var idnotas=$('input[name=idnotas]');
    var conducta=$('input[name=conducta]');
    var asistencia=$('input[name=asistencia]');
    var acum1=$('input[name=acum1]');
    var acum2=$('input[name=acum2]');
    var acum3=$('input[name=acum3]');
    var prueba1=$('input[name=prueba1]');
    var prueba2=$('input[name=prueba2]');
    var prueba3=$('input[name=prueba3]');
    var examen=$('input[name=examen]'); 
     var nota_total=$('input[name=nota_total]');
      var recuperacion=$('input[name=recuperacion]');  
      

//     if (conducta.val()=='') {
//       $("#conducta").attr('required',true);
//       document.getElementById("conducta").style.border="2px solid red";
//       document.getElementById("conducta").style.background="#F3F1F1";
//             document.getElementById("conducta").focus();
//       return false;
//     } else {
//       $("#conducta").attr('required',false);
//       document.getElementById("conducta").style.border="";
//       document.getElementById("conducta").style.background="";
//     }

//     if (asistencia.val()=='') {
//       $("#asistencia").attr('required',true);
//       document.getElementById("asistencia").style.border="2px solid red";
//       document.getElementById("asistencia").style.background="#F3F1F1";
//       document.getElementById("asistencia").focus();
//       return false;
//     } else {
//       $("#asistencia").attr('required',false);
//       document.getElementById("asistencia").style.border="";
//       document.getElementById("asistencia").style.background="";
//     }

//     if (acum1.val()=='') {
//       $("#acum1").attr('required',true);
//       document.getElementById("acum1").style.border="2px solid red";
//       document.getElementById("acum1").style.background="#F3F1F1";
//       document.getElementById("acum1").focus();
//       return false;
//     } else {
//       $("#acum1").attr('required',false);
//       document.getElementById("acum1").style.border="";
//       document.getElementById("acum1").style.background="";
//     }

//     if (acum2.val()=='') {
//       $("#acum2").attr('required',true);
//       document.getElementById("acum2").style.border="2px solid red";
//         document.getElementById("acum2").style.background="#F3F1F1";
//       document.getElementById("acum2").focus();
//       return false;
//     } else {
//       $("#acum2").attr('required',false);
//       document.getElementById("acum2").style.border="";
//     document.getElementById("acum2").style.background="";
//     }
    
// if (acum3.val()=='') {
//       $("#acum3").attr('required',true);
//       document.getElementById("acum3").style.border="2px solid red";
//       document.getElementById("acum3").style.background="#F3F1F1";
//             document.getElementById("acum3").focus();
//       return false;
//     } else {
//       $("#acum3").attr('required',false);
//       document.getElementById("acum3").style.border="";
//       document.getElementById("acum3").style.background="";
//     }

// if (prueba1.val()=='') {
//       $("#prueba1").attr('required',true);
//       document.getElementById("prueba1").style.border="2px solid red";
//       document.getElementById("prueba1").style.background="#F3F1F1";
//             document.getElementById("prueba1").focus();
//       return false;
//     } else {
//       $("#prueba1").attr('required',false);
//       document.getElementById("prueba1").style.border="";
//       document.getElementById("prueba1").style.background="";
//     }
    
// if (prueba2.val()=='') {
//       $("#prueba2").attr('required',true);
//       document.getElementById("prueba2").style.border="2px solid red";
//         document.getElementById("prueba2").style.background="#F3F1F1";
//       document.getElementById("prueba2").focus();
//       return false;
//     } else {
//       $("#prueba2").attr('required',false);
//       document.getElementById("prueba2").style.border="";
//       document.getElementById("prueba2").style.background="";
//     }


// if (prueba3.val()=='') {
//       $("#prueba3").attr('required',true);
//       document.getElementById("prueba3").style.border="2px solid red";
//         document.getElementById("prueba3").style.background="#F3F1F1";
//       document.getElementById("prueba3").focus();
//       return false;
//     } else {
//       $("#prueba3").attr('required',false);
//       document.getElementById("prueba3").style.border="";
//       document.getElementById("prueba3").style.background="";
//     }

// if (examen.val()=='') {
//       $("#examen").attr('required',true);
//       document.getElementById("examen").style.border="2px solid red";
//         document.getElementById("examen").style.background="#F3F1F1";
//       document.getElementById("examen").focus();
//       return false;
//     } else {
//       $("#examen").attr('required',false);
//       document.getElementById("examen").style.border="";
//       document.getElementById("examen").style.background="";
//     }    
    
    var data = 'idnotas=' + idnotas.val() + '&idalumno=' + idalumno.val() +'&idmateria=' + idmateria.val() + '&idperiodo=' + idperiodo.val() + '&conducta=' + conducta.val() + '&asistencia=' + asistencia.val() + '&acum1=' + acum1.val() +  '&acum2=' + acum2.val() + '&acum3=' + acum3.val() + '&prueba1=' + prueba1.val() + '&prueba2=' + prueba2.val()+ '&prueba3=' + prueba3.val()+ '&examen=' + examen.val()+ '&nota_total=' + nota_total.val()
    + '&recuperacion=' + recuperacion.val();
    
    $.ajax({
      
      type: "POST",

      url: "ajax/guardarnotas.php",  

      data: data,   

      // Con esta tipo_e me permite entrar a validar.php y 
      //mostrar el mensaje
      dataType: "html",
      
      cache: false,
      //success
      success: function (data) {
        $('#comprobarid').fadeIn(1000);
        $("#comprobarid").html(data); 
        load(1);    
      }   
    });
        
    return false;

  }); 
});



function calculanota() {
 var conducta=document.getElementById('conducta').value;
  var asistencia=document.getElementById('asistencia').value;
   var acum1=document.getElementById('acum1').value;
    var acum2=document.getElementById('acum2').value;
 var acum3=document.getElementById('acum3').value;
  var prueba1=document.getElementById('prueba1').value;
   var prueba2=document.getElementById('prueba2').value;
    var prueba3=document.getElementById('prueba3').value;
    var examen=document.getElementById('examen').value;


if (conducta=='') {
    var conducta1=0;  
  }
  if (conducta!='') {
    var conducta1=parseFloat(conducta);
  }


if (asistencia=='') {
    var asistencia1=0;  
  }
  if (asistencia!='') {
    var asistencia1=parseFloat(asistencia);
  }


if (acum1=='') {
    var acuml1=0;  
  }
  if (acum1!='') {
    var acuml1=parseFloat(acum1);
  }

if (acum2=='') {
    var acuml2=0;  
  }
  if (acum2!='') {
    var acuml2=parseFloat(acum2);
  }

if (acum3=='') {
    var acuml3=0;  
  }
  if (acum3!='') {
    var acuml3=parseFloat(acum3);
  }


if (prueba1=='') {
    var pruebaa1=0;  
  }
  if (prueba1!='') {
    var pruebaa1=parseFloat(prueba1);
  }


if (prueba2=='') {
    var pruebaa2=0;  
  }
  if (prueba2!='') {
    var pruebaa2=parseFloat(prueba2);
  }

if (prueba3=='') {
    var pruebaa3=0;  
  }
  if (prueba3!='') {
    var pruebaa3=parseFloat(prueba3);
  }


if (examen=='') {
    var examen1=0;  
  }
  if (examen!='') {
    var examen1=parseFloat(examen);
  }


var total=(conducta1+asistencia1+acuml1+acuml2+acuml3+pruebaa1+pruebaa2+pruebaa3+examen1);
  $("#nota_total").val(total.toFixed(2)).value;


}

