$(document).ready(function(){
			load(1);
		});
function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/tablaasignatura.php?action=ajax&page='+page+'&q='+q,
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
	$('#agregarasignatura').click(function () {
    	var nombre_asig=$('input[name=nombre_asig]');
		var codigo_asig=$('input[name=codigo_asig]');
		var idcurso=$('select[name=idcurso]');
	

		if (nombre_asig.val()=='') {
			$("#nombre_asig").attr('required',true);
			document.getElementById("nombre_asig").style.border="2px solid red";
			document.getElementById("nombre_asig").style.background="#F3F1F1";
            document.getElementById("nombre_asig").focus();
			return false;
		} else {
			$("#nombre_asig").attr('required',false);
			document.getElementById("nombre_asig").style.border="";
			document.getElementById("nombre_asig").style.background="";
		}

		if (codigo_asig.val()=='') {
			$("#codigo_asig").attr('required',true);
			document.getElementById("codigo_asig").style.border="2px solid red";
			document.getElementById("codigo_asig").style.background="#F3F1F1";
			document.getElementById("codigo_asig").focus();
			return false;
		} else {
			$("#codigo_asig").attr('required',false);
			document.getElementById("codigo_asig").style.border="";
			document.getElementById("codigo_asig").style.background="";
		}

		if (idcurso.val()=='0') {
			$("#idcurso").attr('required',true);
			document.getElementById("idcurso").style.border="2px solid red";
			document.getElementById("idcurso").style.background="#F3F1F1";
			document.getElementById("idcurso").focus();
			return false;
		} else {
			$("#idcurso").attr('required',false);
			document.getElementById("idcurso").style.border="";
			document.getElementById("idcurso").style.background="";
		}

		
		var data = '&nombre_asig=' + nombre_asig.val() + '&codigo_asig=' + codigo_asig.val() + '&idcurso=' + idcurso.val();
		
		$.ajax({
			
			type: "POST",

			url: "ajax/guardarasignatura.php",	

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
		    var idasignatura= button.data('idasignatura') 
		  var nombre_asig = button.data('nombre_asigp') 
		  var codigo_asig = button.data('codigo_asigp') 
		   var idcurso = button.data('idcursoe')
		   var estadop = button.data('estadop') 
		//  var cantidad = button.data('cantidadp') 
		  //  var proveedor = button.data('proveedorp') 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Editar Datos de : '+nombre_asig)
		    modal.find('.modal-body #idasignatura').val(idasignatura)
		  modal.find('.modal-body #nombre_asigp').val(nombre_asig)
		  modal.find('.modal-body #codigo_asigp').val(codigo_asig)
		  modal.find('.modal-body #idcursoe').val(idcurso)
		  modal.find('.modal-body #estadop').val(estadop)
		
		//  modal.find('.modal-body #proveedorp').val(proveedor) 
		  $('.alert').hide();//Oculto alert
		})


$('#dataConsult').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		   var idasignatura= button.data('idasignatura') 
		  var nombre_asigp= button.data('nombre_asigp') 
		  var codigo_asigp = button.data('codigo_asigp') 
		   var idcursop = button.data('cursop')
		   var estadop = button.data('estadop') 
		 // var cantidad = button.data('cantidadp') 
		 // var agregado= button.data('agregado')//usuario que lo agrego
		 // var fecha = button.data('fecha')//fecha que fue agregado
		 // var modificado = button.data('modificado')//usuario que lo modifico por ultima vez
		 // var fecha_modifica = button.data('fecha_modifica')//fecha de modificacion 
		   
		 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Consulta Datos de : '+nombre_asigp)
		  modal.find('.modal-body #nombre_asigp').val(nombre_asigp)
		  modal.find('.modal-body #codigo_asigp').val(codigo_asigp)
		  modal.find('.modal-body #idcursop').val(idcursop)
		  modal.find('.modal-body #estadop').val(estadop)
//		  modal.find('.modal-body #agregado').val(agregado)
//		  modal.find('.modal-body #fecha').val(fecha)
//		  modal.find('.modal-body #modificado').val(modificado)
//		  modal.find('.modal-body #fecha_modifica').val(fecha_modifica)
		
				 
		  $('.alert').hide();//Oculto alert
		})



$(document).ready(function () {
	$('#Updatedasignatura').click(function () {
		
	       var idasignatura =$('input[name=idasignatura]');	 
		   var nombre_asigp =$('input[name=nombre_asigp]');	
		   var codigo_asigp =$('input[name=codigo_asigp]');	
		   var idcursoe = $('select[name=idcursoe]');	
		   var estadop = $('select[name=estadop]');
		
	if (nombre_asigp.val()=='') {
			$("#nombre_asigp").attr('required',true);
			document.getElementById("nombre_asigp").style.border="2px solid red";
			document.getElementById("nombre_asigp").style.background="#F3F1F1";
            document.getElementById("nombre_asigp").focus();
			return false;
		} else {
			$("#nombre_asigp").attr('required',false);
			document.getElementById("nombre_asigp").style.border="";
			document.getElementById("nombre_asigp").style.background="";
		}

		if (codigo_asigp.val()=='') {
			$("#codigo_asigp").attr('required',true);
			document.getElementById("codigo_asigp").style.border="2px solid red";
			document.getElementById("codigo_asigp").style.background="#F3F1F1";
            document.getElementById("codigo_asigp").focus();
			return false;
		} else {
			$("#codigo_asigp").attr('required',false);
			document.getElementById("codigo_asigp").style.border="";
			document.getElementById("codigo_asigp").style.background="";
		}

	if (idcursoe.val()=='') {
			$("#idcursoe").attr('required',true);
			document.getElementById("idcursoe").style.border="2px solid red";
				document.getElementById("idcursoe").style.background="#F3F1F1";
			document.getElementById("idcursoe").focus();
			return false;
		} else {
			$("#idcursoe").attr('required',false);
			document.getElementById("idcursoe").style.border="";
			document.getElementById("idcursoe").style.background="";
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

		
var data =  'idasignatura=' + idasignatura.val() + '&nombre_asigp=' + nombre_asigp.val() + '&codigo_asigp=' + codigo_asigp.val() + '&idcursop=' + idcursoe.val() + '&estadop=' + estadop.val();
		
	//var data = 'rtnp=' + rtnp.val() + '&nombrep=' + nombrep.val() + '&direccionp=' + direccionp.val() + '&telefonop=' + telefonop.val();
		$.ajax({
			
			type: "POST",

			url: "ajax/editasignatura.php",	

			data: data,		

			// Con esta idcurso me permite entrar a validar.php y 
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

