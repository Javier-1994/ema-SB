$(document).ready(function(){
			load(1);
		});
function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/tablaencargado.php?action=ajax&page='+page+'&q='+q,
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
	$('#agregarencargado').click(function () {
    	var nombre_e=$('input[name=nombre_e]');
		var apellido_e=$('input[name=apellido_e]');
		var identidad_e=$('input[name=identidad_e]');
		var telefono_e=$('input[name=telefono_e]');
		var tipo_e=$('select[name=tipo_e]');	
	   	

		if (nombre_e.val()=='') {
			$("#nombre_e").attr('required',true);
			document.getElementById("nombre_e").style.border="2px solid red";
			document.getElementById("nombre_e").style.background="#F3F1F1";
            document.getElementById("nombre_e").focus();
			return false;
		} else {
			$("#nombre_e").attr('required',false);
			document.getElementById("nombre_e").style.border="";
			document.getElementById("nombre_e").style.background="";
		}

		if (apellido_e.val()=='') {
			$("#apellido_e").attr('required',true);
			document.getElementById("apellido_e").style.border="2px solid red";
			document.getElementById("apellido_e").style.background="#F3F1F1";
			document.getElementById("apellido_e").focus();
			return false;
		} else {
			$("#apellido_e").attr('required',false);
			document.getElementById("apellido_e").style.border="";
			document.getElementById("apellido_e").style.background="";
		}

		if (identidad_e.val()=='') {
			$("#identidad_e").attr('required',true);
			document.getElementById("identidad_e").style.border="2px solid red";
			document.getElementById("identidad_e").style.background="#F3F1F1";
			document.getElementById("identidad_e").focus();
			return false;
		} else {
			$("#identidad_e").attr('required',false);
			document.getElementById("identidad_e").style.border="";
			document.getElementById("identidad_e").style.background="";
		}

		if (telefono_e.val()=='') {
			$("#telefono_e").attr('required',true);
			document.getElementById("telefono_e").style.border="2px solid red";
				document.getElementById("telefono_e").style.background="#F3F1F1";
			document.getElementById("telefono_e").focus();
			return false;
		} else {
			$("#telefono_e").attr('required',false);
			document.getElementById("telefono_e").style.border="";
		document.getElementById("telefono_e").style.background="";
		}
		
		
if (tipo_e.val()=='') {
			$("#tipo_e").attr('required',true);
			document.getElementById("tipo_e").style.border="2px solid red";
				document.getElementById("tipo_e").style.background="#F3F1F1";
			document.getElementById("tipo_e").focus();
			return false;
		} else {
			$("#tipo_e").attr('required',false);
			document.getElementById("tipo_e").style.border="";
			document.getElementById("tipo_e").style.background="";
		}


		
		var data = '&nombre_e=' + nombre_e.val() + '&apellido_e=' + apellido_e.val() + '&identidad_e=' + identidad_e.val() + '&telefono_e=' + telefono_e.val() + '&tipo_e=' + tipo_e.val();
		
		$.ajax({
			
			type: "POST",

			url: "ajax/guardarencargado.php",	

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


//Consultar y Editar

$('#dataUpdat').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		    var idencargados= button.data('idencargados') 
		  var identidad = button.data('identidadp') 
		  var nombre = button.data('nombrep') 
		  var apellido = button.data('apellidop') 
		    var telefono = button.data('telefonop') 
		   var tipo = button.data('tipop') 
		//  var cantidad = button.data('cantidadp') 
		  //  var proveedor = button.data('proveedorp') 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Editar Datos de : '+nombre)
		    modal.find('.modal-body #idencargados').val(idencargados)
		  modal.find('.modal-body #identidadp').val(identidad)
		  modal.find('.modal-body #nombrep').val(nombre)
		  modal.find('.modal-body #apellidop').val(apellido)
		  modal.find('.modal-body #telefonop').val(telefono)
		  modal.find('.modal-body #tipop').val(tipo)
		
		//  modal.find('.modal-body #proveedorp').val(proveedor) 
		  $('.alert').hide();//Oculto alert
		})


$('#dataConsult').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		   var idencargados= button.data('idencargados') 
		  var identidad = button.data('identidadp') 
		  var nombre = button.data('nombrep') 
		  var apellido = button.data('apellidop') 
		    var telefono = button.data('telefonop') 
		   var tipo = button.data('tipop')  
		  //var agregado= button.data('agregado')//usuario que lo agrego
		 // var fecha = button.data('fecha')//fecha que fue agregado
		 // var modificado = button.data('modificado')//usuario que lo modifico por ultima vez
		  //var fecha_modifica = button.data('fecha_modifica')//fecha de modificacion 
		   
		 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Consulta Datos de : '+nombre)
		    modal.find('.modal-body #idencargados').val(idencargados)
		 modal.find('.modal-body #identidadp').val(identidad)
		  modal.find('.modal-body #nombrep').val(nombre)
		  modal.find('.modal-body #apellidop').val(apellido)
		  modal.find('.modal-body #telefonop').val(telefono)
		  modal.find('.modal-body #tipop').val(tipo)
//		  modal.find('.modal-body #agregado').val(agregado)
//		  modal.find('.modal-body #fecha').val(fecha)
//		  modal.find('.modal-body #modificado').val(modificado)
//		  modal.find('.modal-body #fecha_modifica').val(fecha_modifica)
		
		
		 
		  $('.alert').hide();//Oculto alert
		})
		
					
$(document).ready(function () {
	$('#Updatedencargados').click(function () {
var idencargados=$('input[name=idencargados]');
		var nombrep=$('input[name=nombrep]');
		var apellidop=$('input[name=apellidop]');
		var identidadp=$('input[name=identidadp]');
		var telefonop=$('input[name=telefonop]');
		var tipop=$('select[name=tipop]');
		
	if (nombrep.val()=='') {
			$("#nombrep").attr('required',true);
			document.getElementById("nombrep").style.border="2px solid red";
			document.getElementById("nombrep").style.background="#F3F1F1";
            document.getElementById("nombrep").focus();
			return false;
		} else {
			$("#nombrep").attr('required',false);
			document.getElementById("nombrep").style.border="";
			document.getElementById("nombrep").style.background="";
		}

		if (apellidop.val()=='') {
			$("#apellidop").attr('required',true);
			document.getElementById("apellidop").style.border="2px solid red";
			document.getElementById("apellidop").style.background="#F3F1F1";
			document.getElementById("apellidop").focus();
			return false;
		} else {
			$("#apellidop").attr('required',false);
			document.getElementById("apellidop").style.border="";
			document.getElementById("apellidop").style.background="";
		}

		if (identidadp.val()=='') {
			$("#identidadp").attr('required',true);
			document.getElementById("identidadp").style.border="2px solid red";
			document.getElementById("identidadp").style.background="#F3F1F1";
			document.getElementById("identidadp").focus();
			return false;
		} else {
			$("#identidadp").attr('required',false);
			document.getElementById("identidadp").style.border="";
			document.getElementById("identidadp").style.background="";
		}

		if (telefonop.val()=='') {
			$("#telefonop").attr('required',true);
			document.getElementById("telefonop").style.border="2px solid red";
				document.getElementById("telefonop").style.background="#F3F1F1";
			document.getElementById("telefonop").focus();
			return false;
		} else {
			$("#telefonop").attr('required',false);
			document.getElementById("telefonop").style.border="";
			document.getElementById("telefonop").style.background="";
		}
		
		if (tipop.val()=='') {
			$("#tipop").attr('required',true);
			document.getElementById("tipop").style.border="2px solid red";
				document.getElementById("tipop").style.background="#F3F1F1";
			document.getElementById("tipop").focus();
			return false;
		} else {
			$("#tipop").attr('required',false);
			document.getElementById("tipop").style.border="";
			document.getElementById("tipop").style.background="";
		}

		

		
var data =  'idencargados=' + idencargados.val() + '&nombrep=' + nombrep.val() + '&apellidop=' + apellidop.val() + '&identidadp=' + identidadp.val() + '&telefonop=' + telefonop.val() + '&tipop=' + tipop.val();
		
	//var data = 'rtnp=' + rtnp.val() + '&nombrep=' + nombrep.val() + '&direccionp=' + direccionp.val() + '&telefonop=' + telefonop.val();
		$.ajax({
			
			type: "POST",

			url: "ajax/editencargados.php",	

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

