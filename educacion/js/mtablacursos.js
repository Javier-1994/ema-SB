$(document).ready(function(){
			load(1);
		});
function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/tablacursos.php?action=ajax&page='+page+'&q='+q,
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
	$('#agregarcursos').click(function () {
    	var nombre_c=$('input[name=nombre_c]');
		var codigo_c=$('input[name=codigo_c]');
	   	

		if (nombre_c.val()=='') {
			$("#nombre_c").attr('required',true);
			document.getElementById("nombre_c").style.border="2px solid red";
			document.getElementById("nombre_c").style.background="#F3F1F1";
            document.getElementById("nombre_c").focus();
			return false;
		} else {
			$("#nombre_c").attr('required',false);
			document.getElementById("nombre_c").style.border="";
			document.getElementById("nombre_c").style.background="";
		}

		if (codigo_c.val()=='') {
			$("#codigo_c").attr('required',true);
			document.getElementById("codigo_c").style.border="2px solid red";
			document.getElementById("codigo_c").style.background="#F3F1F1";
			document.getElementById("codigo_c").focus();
			return false;
		} else {
			$("#codigo_c").attr('required',false);
			document.getElementById("codigo_c").style.border="";
			document.getElementById("codigo_c").style.background="";
		}

		
		var data = '&nombre_c=' + nombre_c.val() + '&codigo_c=' + codigo_c.val();
		
		$.ajax({
			
			type: "POST",

			url: "ajax/guardarcursos.php",	

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
		    var id_curso= button.data('idcurso') 
		  var nombre = button.data('nombrep') 
		  var codigo = button.data('codigop') 
		//  var cantidad = button.data('cantidadp') 
		  //  var proveedor = button.data('proveedorp') 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Editar Datos de : '+nombre)
		    modal.find('.modal-body #idcurso').val(id_curso)
		  modal.find('.modal-body #nombrep').val(nombre)
		  modal.find('.modal-body #codigop').val(codigo)
		//  modal.find('.modal-body #proveedorp').val(proveedor) 
		  $('.alert').hide();//Oculto alert
		})


$('#dataConsult').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		   var id_curso= button.data('idcurso') 
		  var nombre = button.data('nombrep') 
		  var codigo = button.data('codigop') 
		  //var agregado= button.data('agregado')//usuario que lo agrego
		 // var fecha = button.data('fecha')//fecha que fue agregado
		 // var modificado = button.data('modificado')//usuario que lo modifico por ultima vez
		  //var fecha_modifica = button.data('fecha_modifica')//fecha de modificacion 
		   
		 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Consulta Datos de : '+nombre)
		    modal.find('.modal-body #idcurso').val(id_curso)
		  modal.find('.modal-body #nombrep').val(nombre)
		  modal.find('.modal-body #codigop').val(codigo)
//		  modal.find('.modal-body #agregado').val(agregado)
//		  modal.find('.modal-body #fecha').val(fecha)
//		  modal.find('.modal-body #modificado').val(modificado)
//		  modal.find('.modal-body #fecha_modifica').val(fecha_modifica)
		
		
		 
		  $('.alert').hide();//Oculto alert
		})



$(document).ready(function () {
	$('#Updatedcursos').click(function () {
var idcurso=$('input[name=idcurso]');
		var nombrep=$('input[name=nombrep]');
		var codigop=$('input[name=codigop]');
		
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

		if (codigop.val()=='') {
			$("#codigop").attr('required',true);
			document.getElementById("codigop").style.border="2px solid red";
			document.getElementById("codigop").style.background="#F3F1F1";
			document.getElementById("codigop").focus();
			return false;
		} else {
			$("#codigop").attr('required',false);
			document.getElementById("codigop").style.border="";
			document.getElementById("codigop").style.background="";
		}
		
		
var data =  'idcurso=' + idcurso.val() + '&nombrep=' + nombrep.val() + '&codigop=' + codigop.val();
		
	//var data = 'rtnp=' + rtnp.val() + '&nombrep=' + nombrep.val() + '&direccionp=' + direccionp.val() + '&telefonop=' + telefonop.val();
		$.ajax({
			
			type: "POST",

			url: "ajax/editcurso.php",	

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

