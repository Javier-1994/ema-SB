$(document).ready(function(){
			load(1);
		});
function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/tablaprod.php?action=ajax&page='+page+'&q='+q,
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
	$('#agregarpro').click(function () {
    	var nombre=$('input[name=nombre]');
		var costo=$('input[name=costo]');
		var precio=$('input[name=precio]');
		var codigo=$('input[name=codigo]');
		var linea=$('select[name=linea]');
		//var cantidad=$('input[name=cantidad]');
		
	   	

		if (nombre.val()=='') {
			$("#nombre").attr('required',true);
			document.getElementById("nombre").style.border="2px solid red";
			document.getElementById("nombre").style.background="#F3F1F1";
            document.getElementById("nombre").focus();
			return false;
		} else {
			$("#nombre").attr('required',false);
			document.getElementById("nombre").style.border="";
			document.getElementById("nombre").style.background="";
		}

		if (costo.val()=='') {
			$("#costo").attr('required',true);
			document.getElementById("costo").style.border="2px solid red";
			document.getElementById("costo").style.background="#F3F1F1";
			document.getElementById("costo").focus();
			return false;
		} else {
			$("#costo").attr('required',false);
			document.getElementById("costo").style.border="";
			document.getElementById("costo").style.background="";
		}

		if (precio.val()=='') {
			$("#precio").attr('required',true);
			document.getElementById("precio").style.border="2px solid red";
			document.getElementById("precio").style.background="#F3F1F1";
			document.getElementById("precio").focus();
			return false;
		} else {
			$("#precio").attr('required',false);
			document.getElementById("precio").style.border="";
			document.getElementById("precio").style.background="";
		}

		if (codigo.val()=='') {
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
		
		
	if (linea.val()=='0') {
alert("Llena esta chunchada");
			return false;
		} else {
			$("#linea").attr('required',false);
			document.getElementById("linea").style.border="";
			document.getElementById("linea").style.background="";
		}



		
		var data = '&nombre=' + nombre.val() + '&costo=' + costo.val() + '&precio=' + precio.val() + '&codigo=' + codigo.val() + '&linea=' + linea.val();
		
		$.ajax({
			
			type: "POST",

			url: "ajax/guardarprod.php",	

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




$('#dataUpdat').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		    var idprod= button.data('idprod') 
		  var codigo = button.data('codigop') 
		  var nombre = button.data('nombrep') 
		  var costo = button.data('costop') 
		    var precio = button.data('preciop') 
		   var linea = button.data('lineap') 
		//  var cantidad = button.data('cantidadp') 
		  //  var proveedor = button.data('proveedorp') 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Editar Datos de : '+nombre)
		    modal.find('.modal-body #idprod').val(idprod)
		  modal.find('.modal-body #codigop').val(codigo)
		  modal.find('.modal-body #nombrep').val(nombre)
		  modal.find('.modal-body #costop').val(costo)
		  modal.find('.modal-body #preciop').val(precio)
		  modal.find('.modal-body #lineap').val(linea)
		
		//  modal.find('.modal-body #proveedorp').val(proveedor) 
		  $('.alert').hide();//Oculto alert
		})


$('#dataConsult').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		   var idprod= button.data('idprod') 
		  var codigo = button.data('codigop') 
		  var nombre = button.data('nombrep') 
		  var costo = button.data('costop') 
		    var precio = button.data('preciop') 
		   var linea = button.data('lineap') 
		  var cantidad = button.data('cantidadp') 
		  var agregado= button.data('agregado')//usuario que lo agrego
		  var fecha = button.data('fecha')//fecha que fue agregado
		  var modificado = button.data('modificado')//usuario que lo modifico por ultima vez
		  var fecha_modifica = button.data('fecha_modifica')//fecha de modificacion 
		   
		 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Consulta Datos de : '+nombre)
		    modal.find('.modal-body #idprod').val(idprod)
		 modal.find('.modal-body #codigop').val(codigo)
		  modal.find('.modal-body #nombrep').val(nombre)
		  modal.find('.modal-body #costop').val(costo)
		  modal.find('.modal-body #preciop').val(precio)
		  modal.find('.modal-body #lineap').val(linea)
		  modal.find('.modal-body #cantidadp').val(cantidad)
		  modal.find('.modal-body #agregado').val(agregado)
		  modal.find('.modal-body #fecha').val(fecha)
		  modal.find('.modal-body #modificado').val(modificado)
		  modal.find('.modal-body #fecha_modifica').val(fecha_modifica)
		
		
		 
		  $('.alert').hide();//Oculto alert
		})



$(document).ready(function () {
	$('#Updatedprod').click(function () {
var idprod=$('input[name=idprod]');
		var nombrep=$('input[name=nombrep]');
		var costop=$('input[name=costop]');
		var preciop=$('input[name=preciop]');
		var codigop=$('input[name=codigop]');
		var lineap=$('select[name=lineap]');
		var costo_an=$('input[name=costo_an]');
		var precio_an=$('input[name=precio_an]');
		
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

		if (costop.val()=='') {
			$("#costop").attr('required',true);
			document.getElementById("costop").style.border="2px solid red";
			document.getElementById("costop").style.background="#F3F1F1";
			document.getElementById("costop").focus();
			return false;
		} else {
			$("#costop").attr('required',false);
			document.getElementById("costop").style.border="";
			document.getElementById("costop").style.background="";
		}

		if (preciop.val()=='') {
			$("#preciop").attr('required',true);
			document.getElementById("preciop").style.border="2px solid red";
			document.getElementById("preciop").style.background="#F3F1F1";
			document.getElementById("preciop").focus();
			return false;
		} else {
			$("#preciop").attr('required',false);
			document.getElementById("preciop").style.border="";
			document.getElementById("preciop").style.background="";
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
		
		if (lineap.val()=='') {
			$("#lineap").attr('required',true);
			document.getElementById("lineap").style.border="2px solid red";
				document.getElementById("lineap").style.background="#F3F1F1";
			document.getElementById("lineap").focus();
			return false;
		} else {
			$("#lineap").attr('required',false);
			document.getElementById("lineap").style.border="";
			document.getElementById("lineap").style.background="";
		}

		

		
var data =  'idprod=' + idprod.val() + '&nombrep=' + nombrep.val() + '&costop=' + costop.val() + '&preciop=' + preciop.val() + '&codigop=' + codigop.val() + '&lineap=' + lineap.val() + '&costo_an=' + costo_an.val() + '&precio_an=' + precio_an.val();
		
	//var data = 'rtnp=' + rtnp.val() + '&nombrep=' + nombrep.val() + '&direccionp=' + direccionp.val() + '&telefonop=' + telefonop.val();
		$.ajax({
			
			type: "POST",

			url: "ajax/editproducto.php",	

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