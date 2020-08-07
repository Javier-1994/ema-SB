$(document).ready(function(){
			load(1);
		});
function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/tablaasignacionesm.php?action=ajax&page='+page+'&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					/*div para cargar los datos en formulario(proveedores)*/$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');

					

				}
			})
		}


$(document).ready(function () {
	$('#agregarasignacion').click(function () {
    	var idmaestro=$('select[name=idmaestro]');
    	var periodo=$('input[name=periodo]');
		var asignatura_uno=$('select[name=asignatura_uno]');
		var asignatura_dos=$('select[name=asignatura_dos]');
		var asignatura_tres=$('select[name=asignatura_tres]');

		if (idmaestro.val()=='') {
			document.getElementById("idmaestro").style.border="2px solid red";
			document.getElementById("idmaestro").style.background="#F3F1F1";
			document.getElementById("idmaestro").focus();
			return false;
		} else {
			$("#idmaestro").attr('required',false);
			document.getElementById("idmaestro").style.border="";
			document.getElementById("idmaestro").style.background="";
		}

		if (periodo==""){
			  alert("No hay Periodo Academico activo");
			  $("#periodo").focus();
			  return false;
		  }

		if (asignatura_uno.val()=='0') {
			$("#asignatura_uno").attr('required',true);
			document.getElementById("asignatura_uno").style.border="2px solid red";
			document.getElementById("asignatura_uno").style.background="#F3F1F1";
			document.getElementById("asignatura_uno").focus();
			return false;
		} else {
			$("#asignatura_uno").attr('required',false);
			document.getElementById("asignatura_uno").style.border="";
			document.getElementById("asignatura_uno").style.background="";
		}

		if (asignatura_dos.val()=='0') {
			$("#asignatura_dos").attr('required',true);
			document.getElementById("asignatura_dos").style.border="2px solid red";
			document.getElementById("asignatura_dos").style.background="#F3F1F1";
			document.getElementById("asignatura_dos").focus();
			return false;
		} else {
			$("#asignatura_dos").attr('required',false);
			document.getElementById("asignatura_dos").style.border="";
			document.getElementById("asignatura_dos").style.background="";
		}

		if (asignatura_tres.val()=='0') {
			$("#asignatura_tres").attr('required',true);
			document.getElementById("asignatura_tres").style.border="2px solid red";
			document.getElementById("asignatura_tres").style.background="#F3F1F1";
			document.getElementById("asignatura_tres").focus();
			return false;
		} else {
			$("#asignatura_tres").attr('required',false);
			document.getElementById("asignatura_tres").style.border="";
			document.getElementById("asignatura_tres").style.background="";
		}	
		
		var data = '&idmaestro=' + idmaestro.val() + '&periodo=' + periodo.val()+ '&asignatura_uno=' + asignatura_uno.val() + '&asignatura_dos=' + asignatura_dos.val() + '&asignatura_tres=' + asignatura_tres.val();
		
		$.ajax({
			
			type: "POST",

			url: "ajax/guardarasignacionm.php",	

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


//Editar y Consultar
//---------------------------------------------------------------------------------------------

$('#dataUpdat').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		  var id_asignaciones= button.data('idasignacionesp') 
		  var idmaestrop = button.data('maestrop') 
		  var idcursop = button.data('cursop') 
		  var idmateriap = button.data('asignaturap') 

	 var modal = $(this)
		  modal.find('.modal-title').text('Editar Datos de la asignacion : '+id_asignaciones)
		  modal.find('.modal-body #idasignacionm').val(id_asignaciones)
		  modal.find('.modal-body #maestrop').val(idmaestrop)
		  modal.find('.modal-body #asignaturap').val(idmateriap)
		  $('.alert').hide();//Oculto alert
		})


$('#dataConsult').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		  var id_asignaciones= button.data('idasignaciones') 
		  var idmaestro = button.data('maestroc') 
		  var curso = button.data('cursoc')
		  var materia = button.data('nombreasigc')
		  //var agregado= button.data('agregado')//usuario que lo agrego
		 // var fecha = button.data('fecha')//fecha que fue agregado
		 // var modificado = button.data('modificado')//usuario que lo modifico por ultima vez
		  //var fecha_modifica = button.data('fecha_modifica')//fecha de modificacion 
		   
		 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Consulta Datos de : '+idmaestro)
		  modal.find('.modal-body #idasignaciones').val(id_asignaciones)
		  modal.find('.modal-body #maestroc').val(idmaestro)
		  modal.find('.modal-body #cursoc').val(curso)
		  modal.find('.modal-body #materiac').val(materia)
		  $('.alert').hide();//Oculto alert
		})



$(document).ready(function () {
	$('#Updatedasignaciones').click(function () {
	    var idasignaciones=$('input[name=idasignacionm]');
		var maestrop=$('select[name=maestrop]');
		var asignaturap=$('select[name=asignaturap]');
		
	if (maestrop.val()=='0') {
		("#maestrop").attr('required',true);
			document.getElementById("maestrop").style.border="2px solid red";
			document.getElementById("maestrop").style.background="#F3F1F1";
			document.getElementById("maestrop").focus();
			return false;
		} else {
			$("#maestrop").attr('required',false);
			document.getElementById("maestrop").style.border="";
			document.getElementById("maestrop").style.background="";
		}

		if (asignaturap.val()=='0') {
			$("#asignaturap").attr('required',true);
			document.getElementById("asignaturap").style.border="2px solid red";
			document.getElementById("asignaturap").style.background="#F3F1F1";
			document.getElementById("asignaturap").focus();
			return false;
		} else {
			$("#asignaturap").attr('required',false);
			document.getElementById("asignaturap").style.border="";
			document.getElementById("asignaturap").style.background="";
		}
		
		
var data =  'idasignaciones=' + idasignaciones.val() + '&maestrop=' + maestrop.val() + '&asignaturap=' + asignaturap.val();
		
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
			//	$('#dataUpdate').modal('hide');
				load(1);		
			}		
		});
				
		return false;

	});	
});



