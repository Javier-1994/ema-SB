$(document).ready(function(){
			load(1);
		});
function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/tablaacta.php?action=ajax&page='+page+'&q='+q,
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
	$('#agregaractas').click(function () {
    	var idalumno=$('input[name=idalumno]');
		var fecha_a=$('input[name=fecha_a]');
		var descripcion_a=$('textarea[name=descripcion_a]');

			if (idalumno.val()=='') {
        alert("Seleccione un Alumno por favor");
			return false;
		} else {
			$("#idalumno").attr('required',false);
			document.getElementById("idalumno").style.border="";
			document.getElementById("idalumno").style.background="";
		}
		
		if (fecha_a.val()=='') {
			$("#fecha_a").attr('required',true);
			document.getElementById("fecha_a").style.border="2px solid red";
			document.getElementById("fecha_a").style.background="#F3F1F1";
            document.getElementById("fecha_a").focus();
			return false;
		} else {
			$("#fecha_a").attr('required',false);
			document.getElementById("fecha_a").style.border="";
			document.getElementById("fecha_a").style.background="";
		}

		if (descripcion_a.val()=='') {
			$("#descripcion_a").attr('required',true);
			document.getElementById("descripcion_a").style.border="2px solid red";
			document.getElementById("descripcion_a").style.background="#F3F1F1";
			document.getElementById("descripcion_a").focus();
			return false;
		} else {
			$("#descripcion_a").attr('required',false);
			document.getElementById("descripcion_a").style.border="";
			document.getElementById("descripcion_a").style.background="";
		}

		
		var data = '&idalumno=' + idalumno.val() + '&fecha_a=' + fecha_a.val() + '&descripcion_a=' + descripcion_a.val();
		
		$.ajax({
			
			type: "POST",

			url: "ajax/guardaracta.php",	

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
//Consultar y Editar



$('#dataUpdat').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget)
		  var idactae = button.data('actae') 
		  var idalumnoe= button.data('idalumnoe') 
		  var fechae = button.data('fechae') 
		  var descripcione = button.data('descripcione') 
		//  var cantidad = button.data('cantidadp') 
		  //  var proveedor = button.data('proveedorp') 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Editar Datos de acta: '+ idactae)
		  modal.find('.modal-body #idacta').val(idactae)
		    modal.find('.modal-body #idalumnoe').val(idalumnoe)
		  modal.find('.modal-body #fechae').val(fechae)
		  modal.find('.modal-body #descripcione').val(descripcione)
		//  modal.find('.modal-body #proveedorp').val(proveedor) 
		  $('.alert').hide();//Oculto alert
		})


$('#dataConsult').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		  var idactap= button.data('idactap') 
		  var idalumnop= button.data('idalumnop') 
		  var fechap= button.data('fechap') 
		  var descripcionp = button.data('descripcionp')
		 // var cantidad = button.data('cantidadp') 
		 // var agregado= button.data('agregado')//usuario que lo agrego
		 // var fecha = button.data('fecha')//fecha que fue agregado
		 // var modificado = button.data('modificado')//usuario que lo modifico por ultima vez
		 // var fecha_modifica = button.data('fecha_modifica')//fecha de modificacion 
		   
		 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Consulta Datos de la acta: '+idactap)
		  modal.find('.modal-body #idalumnop').val(idalumnop)
		  modal.find('.modal-body #fechap').val(fechap)
		  modal.find('.modal-body #descripcionp').val(descripcionp)
				 
		  $('.alert').hide();//Oculto alert
		})


$(document).ready(function () {
	$('#Updatedactas').click(function () {
	   var idactae= $('input[name=idacta]');	
	   var idalumnoed= $('select[name=idalumnoe]');	 
	   var fechaed =$('input[name=fechae]');	
	   var descripcioned =$('textarea[name=descripcione]');		
		
	if (idalumnoed.val()=='') {
			$("#idalumnoe").attr('required',true);
			document.getElementById("idalumnoe").style.border="2px solid red";
			document.getElementById("idalumnoe").style.background="#F3F1F1";
            document.getElementById("idalumnoe").focus();
			return false;
		} else {
			$("#idalumnoe").attr('required',false);
			document.getElementById("idalumnoe").style.border="";
			document.getElementById("idalumnoe").style.background="";
		}

		if (fechaed.val()=='') {
			$("#fechae").attr('required',true);
			document.getElementById("fechae").style.border="2px solid red";
			document.getElementById("fechae").style.background="#F3F1F1";
            document.getElementById("fechae").focus();
			return false;
		} else {
			$("#fechae").attr('required',false);
			document.getElementById("fechae").style.border="";
			document.getElementById("fechae").style.background="";
		}

		if (descripcioned.val()=='') {
			$("#descripcione").attr('required',true);
			document.getElementById("descripcione").style.border="2px solid red";
			document.getElementById("descripcione").style.background="#F3F1F1";
            document.getElementById("descripcione").focus();
			return false;
		} else {
			$("#descripcione").attr('required',false);
			document.getElementById("descripcione").style.border="";
			document.getElementById("descripcione").style.background="";
		}

		
var data =  '&idactae=' + idactae.val() + '&idalumnoed=' + idalumnoed.val() + '&fechaed=' + fechaed.val() + '&descripcioned=' + descripcioned.val();
		
	//var data = 'rtnp=' + rtnp.val() + '&nombrep=' + nombrep.val() + '&direccionp=' + direccionp.val() + '&telefonop=' + telefonop.val();
		$.ajax({
			
			type: "POST",

			url: "ajax/editactas.php",	

			data: data,		

			// Con esta idencargado me permite entrar a validar.php y 
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