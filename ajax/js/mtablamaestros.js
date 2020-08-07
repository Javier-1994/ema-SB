$(document).ready(function(){
			load(1);
		});
function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/tablamaestros.php?action=ajax&page='+page+'&q='+q,
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
	$('#agregarmaestros').click(function () {
    	var nombre_m=$('input[name=nombre_m]');
		var apellido_m=$('input[name=apellido_m]');
		var identidad_m=$('input[name=identidad_m]');
		var telefono_m=$('input[name=telefono_m]');
		var estado_m=$('select[name=estado_m]');	
	   	

		if (nombre_m.val()=='') {
			$("#nombre_m").attr('required',true);
			document.getElementById("nombre_m").style.border="2px solid red";
			document.getElementById("nombre_m").style.background="#F3F1F1";
            document.getElementById("nombre_m").focus();
			return false;
		} else {
			$("#nombre_m").attr('required',false);
			document.getElementById("nombre_m").style.border="";
			document.getElementById("nombre_m").style.background="";
		}

		if (apellido_m.val()=='') {
			$("#apellido_m").attr('required',true);
			document.getElementById("apellido_m").style.border="2px solid red";
			document.getElementById("apellido_m").style.background="#F3F1F1";
			document.getElementById("apellido_m").focus();
			return false;
		} else {
			$("#apellido_m").attr('required',false);
			document.getElementById("apellido_m").style.border="";
			document.getElementById("apellido_m").style.background="";
		}

		if (identidad_m.val()=='') {
			$("#identidad_m").attr('required',true);
			document.getElementById("identidad_m").style.border="2px solid red";
			document.getElementById("identidad_m").style.background="#F3F1F1";
			document.getElementById("identidad_m").focus();
			return false;
		} else {
			$("#identidad_m").attr('required',false);
			document.getElementById("identidad_m").style.border="";
			document.getElementById("identidad_m").style.background="";
		}

		if (telefono_m.val()=='') {
			$("#telefono_m").attr('required',true);
			document.getElementById("telefono_m").style.border="2px solid red";
				document.getElementById("telefono_m").style.background="#F3F1F1";
			document.getElementById("telefono_m").focus();
			return false;
		} else {
			$("#telefono_m").attr('required',false);
			document.getElementById("telefono_m").style.border="";
		document.getElementById("telefono_m").style.background="";
		}
		
		
if (estado_m.val()=='') {
			$("#estado_m").attr('required',true);
			document.getElementById("estado_m").style.border="2px solid red";
				document.getElementById("estado_m").style.background="#F3F1F1";
			document.getElementById("estado_m").focus();
			return false;
		} else {
			$("#estado_m").attr('required',false);
			document.getElementById("estado_m").style.border="";
			document.getElementById("estado_m").style.background="";
		}


		
		var data = '&nombre_m=' + nombre_m.val() + '&apellido_m=' + apellido_m.val() + '&identidad_m=' + identidad_m.val() + '&telefono_m=' + telefono_m.val() + '&estado_m=' + estado_m.val();
		
		$.ajax({
			
			type: "POST",

			url: "ajax/guardarmaestros.php",	

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
		    var idmaestro= button.data('idmaestro') 
		  var identidad = button.data('identidadp') 
		  var nombre = button.data('nombrep') 
		  var apellido = button.data('apellidop') 
		    var telefono = button.data('telefonop') 
		   var estadoe = button.data('estadoe') 
		//  var cantidad = button.data('cantidadp') 
		  //  var proveedor = button.data('proveedorp') 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Editar Datos de : '+nombre)
		  modal.find('.modal-body #idmaestro').val(idmaestro)
		  modal.find('.modal-body #identidadp').val(identidad)
		  modal.find('.modal-body #nombrep').val(nombre)
		  modal.find('.modal-body #apellidop').val(apellido)
		  modal.find('.modal-body #telefonop').val(telefono)
		  modal.find('.modal-body #estadoe').val(estadoe)
		
		//  modal.find('.modal-body #proveedorp').val(proveedor) 
		  $('.alert').hide();//Oculto alert
		})


$('#dataConsult').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		   var idmaestro= button.data('idmaestro') 
		  var identidad = button.data('identidadp') 
		  var nombre = button.data('nombrep') 
		  var apellido = button.data('apellidop') 
		    var telefono = button.data('telefonop') 
		   var estado = button.data('estadop')  
		  //var agregado= button.data('agregado')//usuario que lo agrego
		 // var fecha = button.data('fecha')//fecha que fue agregado
		 // var modificado = button.data('modificado')//usuario que lo modifico por ultima vez
		  //var fecha_modifica = button.data('fecha_modifica')//fecha de modificacion 
		   
		 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Consulta Datos de : '+nombre)
		    modal.find('.modal-body #idmaestro').val(idmaestro)
		 modal.find('.modal-body #identidadp').val(identidad)
		  modal.find('.modal-body #nombrep').val(nombre)
		  modal.find('.modal-body #apellidop').val(apellido)
		  modal.find('.modal-body #telefonop').val(telefono)
		  modal.find('.modal-body #estadop').val(estado)
//		  modal.find('.modal-body #agregado').val(agregado)
//		  modal.find('.modal-body #fecha').val(fecha)
//		  modal.find('.modal-body #modificado').val(modificado)
//		  modal.find('.modal-body #fecha_modifica').val(fecha_modifica)
		
		
		 
		  $('.alert').hide();//Oculto alert
		})



$(document).ready(function () {
	$('#Updatedmaestros').click(function () {
var idmaestro=$('input[name=idmaestro]');
		var nombrep=$('input[name=nombrep]');
		var apellidop=$('input[name=apellidop]');
		var identidadp=$('input[name=identidadp]');
		var telefonop=$('input[name=telefonop]');
		var estadop=$('select[name=estadoe]');
		
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
		
		if (estadop.val()=='') {
			$("#estadop").attr('required',true);
			document.getElementById("estadop").style.border="2px solid red";
				document.getElementById("estadop").style.background="#F3F1F1";
			document.getElementById("estadop").focus();
			return false;
		} else {
			$("#estadop").attr('required',false);
			document.getElementById("estadop").style.border="";
			document.getElementById("estadop").style.background="";
		}

		

		
var data =  'idmaestro=' + idmaestro.val() + '&nombrep=' + nombrep.val() + '&apellidop=' + apellidop.val() + '&identidadp=' + identidadp.val() + '&telefonop=' + telefonop.val() + '&estadop=' + estadop.val();
		
	//var data = 'rtnp=' + rtnp.val() + '&nombrep=' + nombrep.val() + '&direccionp=' + direccionp.val() + '&telefonop=' + telefonop.val();
		$.ajax({
			
			type: "POST",

			url: "ajax/editmaestros.php",	

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

