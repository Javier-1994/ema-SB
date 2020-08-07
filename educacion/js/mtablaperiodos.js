$(document).ready(function(){
			load(1);
		});
function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/tablaperiodos.php?action=ajax&page='+page+'&q='+q,
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
	$('#agregarperiodo').click(function () {
    	var periodo=$('input[name=codigo_p]');
		var fecha=$('input[name=y]');
	   	

		if (periodo.val()=='') {
			$("#codigo_p").attr('required',true);
			document.getElementById("codigo_p").style.border="2px solid red";
			document.getElementById("codigo_p").style.background="#F3F1F1";
            document.getElementById("codigo_p").focus();
			return false;
		} else {
			$("#codigo_p").attr('required',false);
			document.getElementById("codigo_p").style.border="";
			document.getElementById("codigo_p").style.background="";
		}

		

		
		var data = '&periodo=' + periodo.val() + '&fecha=' + fecha.val();
		
		$.ajax({
			
			type: "POST",

			url: "ajax/guardarperiodos.php",	

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
		    var id_periodo= button.data('id_periodo') 
		  var codigo = button.data('codigo_pe') 
  var date = button.data('date') 
  var cod_periodo = button.data('estado_peri') 
		  //  var proveedor = button.data('proveedorp') 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Editar Periodo : '+codigo)
		    modal.find('.modal-body #id_periodo').val(id_periodo)
		  modal.find('.modal-body #codigo_pe').val(codigo)
		    modal.find('.modal-body #date').val(date)
		        modal.find('.modal-body #estado_peri').val(cod_periodo)
		//  modal.find('.modal-body #proveedorp').val(proveedor) 
		  $('.alert').hide();//Oculto alert
		})

//dete
$('#dataf').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
 var codigo = button.data('codigo_pe') 
		  var codigopp = butt1on.data('codigo_final') 
  
	 var modal = $(this)
		  modal.find('.modal-title').text('Cerrar Periodo Academico : '+codigo)
		  modal.find('.modal-body #codigo_final').val(codigopp)
		   modal.find('.modal-body #codigo').val(codigo)
		   
		//  modal.find('.modal-body #proveedorp').val(proveedor) 
		  $('.alert').hide();//Oculto alert
		})

$(document).ready(function () {
	$('#Updatedperiodo').click(function () {
     var idperiodo=$('input[name=id_periodo]');
	 var codigo_periodo=$('input[name=codigo_pe]');
	 var estado=$('select[name=estado_peri');
		
	if (codigo_periodo.val()=='') {
			$("#codigo_pe").attr('required',true);
			document.getElementById("codigo_pe").style.border="2px solid red";
			document.getElementById("codigo_pe").style.background="#F3F1F1";
            document.getElementById("codigo_pe").focus();
			return false;
		} else {
			$("#codigo_pe").attr('required',false);
			document.getElementById("codigo_pe").style.border="";
			document.getElementById("codigo_pe").style.background="";
		}

		if (estado.val()=='') {
			$("#estado_peri").attr('required',true);
			document.getElementById("estado_peri").style.border="2px solid red";
			document.getElementById("estado_peri").style.background="#F3F1F1";
			document.getElementById("estado_peri").focus();
			return false;
		} else {
			$("#estado_peri").attr('required',false);
			document.getElementById("estado_peri").style.border="";
			document.getElementById("estado_peri").style.background="";
		}
		
		
var data =  'idperiodo=' + idperiodo.val() + '&codigo_pe=' + codigo_periodo.val() + '&estado=' + estado.val();
		
	//var data = 'rtnp=' + rtnp.val() + '&nombrep=' + nombrep.val() + '&direccionp=' + direccionp.val() + '&telefonop=' + telefonop.val();
		$.ajax({
			
			type: "POST",

			url: "ajax/editperiodos.php",	

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
	$('#finalizar_periodo').click(function () {
     var idperiodo=$('input[name=codigo_final]');
     var cod_periodo=$('input[name=codigo]');
		

		if (cod_periodo.val()=='') {
			$("#codigo").attr('required',true);
			document.getElementById("codigo").style.border="2px solid red";
			document.getElementById("codigo").style.background="#F3F1F1";
			document.getElementById("codigo").focus();
			return false;
		} else {
			$("#codigo").attr('required',false);
			document.getElementById("codigo").style.border="";
			document.getElementById("codigo").style.background="";
		}
	
var data =  'idperiodo=' + idperiodo.val() + '&codigo=' + cod_periodo.val();
		
	//var data = 'rtnp=' + rtnp.val() + '&nombrep=' + nombrep.val() + '&direccionp=' + direccionp.val() + '&telefonop=' + telefonop.val();
		$.ajax({
			
			type: "POST",

			url: "ajax/finalizar_periodo.php",	

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

