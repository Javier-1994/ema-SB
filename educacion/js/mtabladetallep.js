$(document).ready(function(){
			load(1);
		});
function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/tabladetalle.php?action=ajax&page='+page+'&q='+q,
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
	$('#agregardescripcion').click(function () {
    	var descripcion=$('input[name=descripcion]');
		var monto=$('input[name=monto_m]');
		//var cantidad=$('input[name=cantidad]');
		
		if (descripcion.val()=='') {
        $("#descripcion").attr('required',true);
			document.getElementById("descripcion").style.border="2px solid red";
			document.getElementById("descripcion").style.background="#F3F1F1";
			document.getElementById("descripcion").focus();
			return false;
		} else {
			$("#descripcion").attr('required',false);
			document.getElementById("descripcion").style.border="";
			document.getElementById("descripcion").style.background="";
		}

		if (monto.val()=='') {
			$("#monto_m").attr('required',true);
			document.getElementById("monto_m").style.border="2px solid red";
			document.getElementById("monto_m").style.background="#F3F1F1";
			document.getElementById("monto_m").focus();
			return false;
		} else {
			$("#monto_m").attr('required',false);
			document.getElementById("monto_m").style.border="";
			document.getElementById("monto_m").style.background="";
		}
		
		var data = 'descripcion=' + descripcion.val() + '&monto=' + monto.val();
		
		$.ajax({
			
			type: "POST",

			url: "ajax/guardardetalle.php",	

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
		  var iddetallee= button.data('id_detalle') 
		  var descripcione= button.data('descripcione')
		  var montoe= button.data('montoe')
	 var quita= button.data('quita')
	

	 var modal = $(this)
		  modal.find('.modal-title').text('Editar datos del detalle: '+descripcione)
		  modal.find('.modal-body #iddetallee').val(iddetallee)
		  modal.find('.modal-body #descripcione').val(descripcione)
		  modal.find('.modal-body #montoe').val(montoe)
		   modal.find('.modal-body #quita').val(quita)
		  $('.alert').hide();//Oculto alert
		})


$('#dataConsult').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		  var iddetallec= button.data('id_detalle') 
		  var descripcionc= button.data('descripcionc')
		  var montoc= button.data('montoc')
	
	 var modal = $(this)
		  modal.find('.modal-title').text('Consulta de datos del detalle: '+descripcionc)
		  modal.find('.modal-body #descripcionc').val(descripcionc)
		  modal.find('.modal-body #montoc').val('L. '+montoc)
		 
		  $('.alert').hide();//Oculto alert
		})



$(document).ready(function () {
	$('#Updatedetalle').click(function () {
		var id_detalle=$('input[name=iddetallee]');
		var descripcion=$('input[name=descripcione]');
		var monto=$('input[name=montoe]');
		var quita=$('select[name=quita]');
		
	if (descripcion.val()=='') {
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

		if (monto.val()=='') {
		$("#montoe").attr('required',true);
			document.getElementById("montoe").style.border="2px solid red";
			document.getElementById("montoe").style.background="#F3F1F1";
            document.getElementById("montoe").focus();
			return false;
		} else {
			$("#montoe").attr('required',false);
			document.getElementById("montoe").style.border="";
			document.getElementById("montoe").style.background="";
		}
	
		
var data =  'iddetalle=' + id_detalle.val() + '&descripcione=' + descripcion.val() + '&montoe=' + monto.val()+ '&quita=' + quita.val();
		
	//var data = 'rtnp=' + rtnp.val() + '&nombrea=' + nombrea.val() + '&direccionp=' + direccionp.val() + '&telefonop=' + telefonop.val();
		$.ajax({
			
			type: "POST",

			url: "ajax/editardetalle.php",	

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