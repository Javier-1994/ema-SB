$(document).ready(function(){
			load(1);
		});
function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/tablamatriculas.php?action=ajax&page='+page+'&q='+q,
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
	$('#agregarmatricula').click(function () {
    	var nombre=$('input[name=idalumno]');
		var curso=$('input[name=idcurso]');
		var matricula=$('select[name=matricula]');
		var activo=$('input[name=activo]');
		var fecha=$('input[name=y]');
		
		//var cantidad=$('input[name=cantidad]');
		
	   	

		if (nombre.val()=='') {
        alert("Seleccione un Alumno por favor");
			return false;
		} else {
			$("#idalumno").attr('required',false);
			document.getElementById("idalumno").style.border="";
			document.getElementById("idalumno").style.background="";
		}

		if (curso.val()=='') {
			$("#idcurso").attr('required',true);
		    alert("Seleccione un Curso por favor");
			return false;
		} else {
			$("#idcurso").attr('required',false);
			document.getElementById("idcurso").style.border="";
			document.getElementById("idcurso").style.background="";
		}


if (matricula.val()=='') {
			$("#matricula").attr('required',true);
			document.getElementById("matricula").style.border="2px solid red";
			document.getElementById("matricula").style.background="#F3F1F1";
			document.getElementById("matricula").focus();
			return false;
		} else {
			$("#matricula").attr('required',false);
			document.getElementById("matricula").style.border="";
			document.getElementById("matricula").style.background="";
		}

 if (activo==""){
			  alert("No hay Periodo Academico Activo");
			  $("#activo").focus();
			  return false;
		  }

		
		var data = '&idalumno=' + nombre.val() + '&activo=' + activo.val() + '&idcurso=' + curso.val() + '&fecha=' + fecha.val() + '&matricula=' + matricula.val();
		
		$.ajax({
			
			type: "POST",

			url: "ajax/guardarmatricula.php",	

			data: data,		

			// Con esta linea me permite entrar a validar.php y 
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


//Editar y consultar

$('#dataUpdat').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		  var idmatricula= button.data('id_matricula') 
		  var nombre = button.data('nombrea') 
		   var nombrep = button.data('nombrep') 
		  var curso = button.data('cursoa') 
		  var periodo = button.data('periodoa') 
		  var tipo = button.data('tipom') 
		//  var cantidad = button.data('cantidadp') 
		  //  var proveedor = button.data('proveedorp') 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Editar Datos de la Matricula')
		  modal.find('.modal-body #id_matricula').val(idmatricula)
		  modal.find('.modal-body #nombrea').val(nombre)
		  modal.find('.modal-body #cursoa').val(curso)
		  modal.find('.modal-body #periodoa').val(periodo)
		  modal.find('.modal-body #tipom').val(tipo)
		
		  modal.find('.modal-body #nombrep').val(nombrep)
		
		//  modal.find('.modal-body #proveedorp').val(proveedor) 
		  $('.alert').hide();//Oculto alert
		})


$('#dataConsult').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		  var idmatricula= button.data('idmatricula') 
		  var nombre = button.data('nombrea') 
		  var curso = button.data('cursoa') 
		  var periodo = button.data('periodoa') 
		  var tipo = button.data('tipom') 
		   
		 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Consulta de datos de la matricula : '+nombre)
		    modal.find('.modal-body #nombrea').val(nombre)
		  modal.find('.modal-body #cursoa').val(curso)
		  modal.find('.modal-body #periodoa').val(periodo)
		  modal.find('.modal-body #tipom').val(tipo)
		
		
		 
		  $('.alert').hide();//Oculto alert
		})



$(document).ready(function () {
	$('#Updatedmatricula').click(function () {
var idmatricula=$('input[name=id_matricula]');
		var nombrea=$('select[name=nombrea]');
		var cursoa=$('select[name=cursoa]');
		//var periodoa=$('input[name=periodoa]');
		var tipom=$('select[name=tipom]');
		
	if (nombrea.val()=='') {
			$("#nombrea").attr('required',true);
			document.getElementById("nombrea").style.border="2px solid red";
			document.getElementById("nombrea").style.background="#F3F1F1";
            document.getElementById("nombrea").focus();
			return false;
		} else {
			$("#nombrea").attr('required',false);
			document.getElementById("nombrea").style.border="";
			document.getElementById("nombrea").style.background="";
		}

		if (cursoa.val()=='') {
		$("#cursoa").attr('required',true);
			document.getElementById("cursoa").style.border="2px solid red";
			document.getElementById("cursoa").style.background="#F3F1F1";
            document.getElementById("cursoa").focus();
			return false;
		} else {
			$("#cursoa").attr('required',false);
			document.getElementById("cursoa").style.border="";
			document.getElementById("cursoa").style.background="";
		}

		/*if (periodoa.val()=='') {
			$("#periodoa").attr('required',true);
			document.getElementById("periodoa").style.border="2px solid red";
			document.getElementById("periodoa").style.background="#F3F1F1";
			document.getElementById("periodoa").focus();
			return false;
		} else {
			$("#periodoa").attr('required',false);
			document.getElementById("periodoa").style.border="";
			document.getElementById("periodoa").style.background="";
		}*/

		if (tipom.val()=='') {
			$("#tipom").attr('required',true);
			document.getElementById("tipom").style.border="2px solid red";
				document.getElementById("tipom").style.background="#F3F1F1";
			document.getElementById("tipom").focus();
			return false;
		} else {
			$("#tipom").attr('required',false);
			document.getElementById("tipom").style.border="";
			document.getElementById("tipom").style.background="";
		}
		
	
		
var data =  'idmatricula=' + idmatricula.val() + '&nombrea=' + nombrea.val() + '&cursoa=' + cursoa.val() +  '&tipom=' + tipom.val();
		
	//var data = 'rtnp=' + rtnp.val() + '&nombrea=' + nombrea.val() + '&direccionp=' + direccionp.val() + '&telefonop=' + telefonop.val();
		$.ajax({
			
			type: "POST",

			url: "ajax/editmatricula.php",	

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





$(document).ready(function () {
	$('#cerrar_matricula').click(function () {
		//alert("URURURUR");
    	var fecha=$('input[name=fecha]');
		


		
		var data = 'fecha=' + fecha.val();
		
		$.ajax({
			
			type: "POST",

			url: "ajax/close_matricula.php",	

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

