$(document).ready(function(){
			load(1);
		});
function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/tablaalumnos.php?action=ajax&page='+page+'&q='+q,
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
	$('#agregaralumnos').click(function () {
    	var pnombre_a=$('input[name=pnombre_a]');
		var snombre_a=$('input[name=snombre_a]');
		var papellido_a=$('input[name=papellido_a]');
		var sapellido_a=$('input[name=sapellido_a]');
		var identidad_a=$('input[name=identidad_a]');
		var direccion_a=$('input[name=direccion_a]');
		var idencargado=$('select[name=idencargado]');	
	   	

		if (pnombre_a.val()=='') {
			$("#pnombre_a").attr('required',true);
			document.getElementById("pnombre_a").style.border="2px solid red";
			document.getElementById("pnombre_a").style.background="#F3F1F1";
            document.getElementById("pnombre_a").focus();
			return false;
		} else {
			$("#pnombre_a").attr('required',false);
			document.getElementById("pnombre_a").style.border="";
			document.getElementById("pnombre_a").style.background="";
		}

	

		if (papellido_a.val()=='') {
			$("#papellido_a").attr('required',true);
			document.getElementById("papellido_a").style.border="2px solid red";
			document.getElementById("papellido_a").style.background="#F3F1F1";
			document.getElementById("papellido_a").focus();
			return false;
		} else {
			$("#papellido_a").attr('required',false);
			document.getElementById("papellido_a").style.border="";
			document.getElementById("papellido_a").style.background="";
		}

		
if (identidad_a.val()=='') {
			$("#identidad_a").attr('required',true);
			document.getElementById("identidad_a").style.border="2px solid red";
			document.getElementById("identidad_a").style.background="#F3F1F1";
            document.getElementById("identidad_a").focus();
			return false;
		} else {
			$("#identidad_a").attr('required',false);
			document.getElementById("identidad_a").style.border="";
			document.getElementById("identidad_a").style.background="";
		}

if (direccion_a.val()=='') {
			$("#direccion_a").attr('required',true);
			document.getElementById("direccion_a").style.border="2px solid red";
			document.getElementById("direccion_a").style.background="#F3F1F1";
            document.getElementById("direccion_a").focus();
			return false;
		} else {
			$("#direccion_a").attr('required',false);
			document.getElementById("direccion_a").style.border="";
			document.getElementById("direccion_a").style.background="";
		}
		
if (idencargado.val()=='') {
			$("#idencargado").attr('required',true);
			document.getElementById("idencargado").style.border="2px solid red";
				document.getElementById("idencargado").style.background="#F3F1F1";
			document.getElementById("idencargado").focus();
			return false;
		} else {
			$("#idencargado").attr('required',false);
			document.getElementById("idencargado").style.border="";
			document.getElementById("idencargado").style.background="";
		}

		
		
		var data = '&pnombre_a=' + pnombre_a.val() + '&snombre_a=' + snombre_a.val() + '&papellido_a=' + papellido_a.val() +  '&sapellido_a=' + sapellido_a.val() + '&identidad_a=' + identidad_a.val() + '&direccion_a=' + direccion_a.val() + '&idencargado=' + idencargado.val();
		
		$.ajax({
			
			type: "POST",

			url: "ajax/guardaralumno.php",	

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
		    var idalumno= button.data('idalumno') 
		  var pnombre_a = button.data('pnombrep') 
		  var snombre_a = button.data('snombrep') 
		  var papellido_a = button.data('papellidop') 
		  var sapellido_a = button.data('sapellidop') 
		  var identidad_a = button.data('identidadp') 
		  var direccion_a = button.data('direccionp') 
		   var idencargado = button.data('idencargadop') 
		//  var cantidad = button.data('cantidadp') 
		  //  var proveedor = button.data('proveedorp') 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Editar Datos de : '+pnombre_a +" "+ snombre_a)
		    modal.find('.modal-body #idalumno').val(idalumno)
		  modal.find('.modal-body #pnombrep').val(pnombre_a)
		  modal.find('.modal-body #snombrep').val(snombre_a)
		   modal.find('.modal-body #papellidop').val(papellido_a)
		  modal.find('.modal-body #sapellidop').val(sapellido_a)
		  modal.find('.modal-body #identidadp').val(identidad_a)
		  modal.find('.modal-body #direccionp').val(direccion_a)
		  modal.find('.modal-body #idencargadop').val(idencargado)
		
		//  modal.find('.modal-body #proveedorp').val(proveedor) 
		  $('.alert').hide();//Oculto alert
		})


$('#dataConsult').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		   var idalumno= button.data('idalumno') 
		  var pnombrep= button.data('pnombrep') 
		  var snombre_a = button.data('snombrep')
		   var papellido_a = button.data('papellidop') 
		  var sapellido_a = button.data('sapellidop')  
		  var identidad_a = button.data('identidadp') 
		    var direccion_a = button.data('direccionp') 
		   var idencargadop = button.data('idencargadop') 
		 // var cantidad = button.data('cantidadp') 
		 // var agregado= button.data('agregado')//usuario que lo agrego
		 // var fecha = button.data('fecha')//fecha que fue agregado
		 // var modificado = button.data('modificado')//usuario que lo modifico por ultima vez
		 // var fecha_modifica = button.data('fecha_modifica')//fecha de modificacion 
		   
		 
		
	 var modal = $(this)
		  modal.find('.modal-title').text('Consulta Datos de : '+pnombrep +" "+ snombre_a)
		    modal.find('.modal-body #idalumno').val(idalumno)
		 modal.find('.modal-body #pnombrep').val(pnombrep)
		  modal.find('.modal-body #snombrep').val(snombre_a)
		 modal.find('.modal-body #papellidop').val(papellido_a)
		  modal.find('.modal-body #sapellidop').val(sapellido_a)
		  modal.find('.modal-body #identidadp').val(identidad_a)
		  modal.find('.modal-body #direccionp').val(direccion_a)
		  modal.find('.modal-body #idencargadop').val(idencargadop)
//		  modal.find('.modal-body #agregado').val(agregado)
//		  modal.find('.modal-body #fecha').val(fecha)
//		  modal.find('.modal-body #modificado').val(modificado)
//		  modal.find('.modal-body #fecha_modifica').val(fecha_modifica)
		
				 
		  $('.alert').hide();//Oculto alert
		})



$(document).ready(function () {
	$('#Updatedalumnos').click(function () {
		
	   var idalumno= $('input[name=idalumno]');	 
		  var pnombrep =$('input[name=pnombrep]');	
		  var snombrep =$('input[name=snombrep]');	
		   var papellidop =$('input[name=papellidop]');	
		  var sapellidop = $('input[name=sapellidop]');	 
		  var identidadp = $('input[name=identidadp]');	
		    var direccionp = $('input[name=direccionp]');	
		   var idencargadop = $('select[name=idencargadop]');	
		
	if (pnombrep.val()=='') {
			$("#pnombrep").attr('required',true);
			document.getElementById("pnombrep").style.border="2px solid red";
			document.getElementById("pnombrep").style.background="#F3F1F1";
            document.getElementById("pnombrep").focus();
			return false;
		} else {
			$("#pnombrep").attr('required',false);
			document.getElementById("pnombrep").style.border="";
			document.getElementById("pnombrep").style.background="";
		}

	

		if (papellidop.val()=='') {
			$("#papellidop").attr('required',true);
			document.getElementById("papellidop").style.border="2px solid red";
			document.getElementById("papellidop").style.background="#F3F1F1";
            document.getElementById("papellidop").focus();
			return false;
		} else {
			$("#papellidop").attr('required',false);
			document.getElementById("papellidop").style.border="";
			document.getElementById("papellidop").style.background="";
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

		if (direccionp.val()=='') {
			$("#direccionp").attr('required',true);
			document.getElementById("direccionp").style.border="2px solid red";
			document.getElementById("direccionp").style.background="#F3F1F1";
			document.getElementById("direccionp").focus();
			return false;
		} else {
			$("#direccionp").attr('required',false);
			document.getElementById("direccionp").style.border="";
			document.getElementById("direccionp").style.background="";
		}

	if (idencargadop.val()=='') {
			$("#idencargadop").attr('required',true);
			document.getElementById("idencargadop").style.border="2px solid red";
				document.getElementById("idencargadop").style.background="#F3F1F1";
			document.getElementById("idencargadop").focus();
			return false;
		} else {
			$("#idencargadop").attr('required',false);
			document.getElementById("idencargadop").style.border="";
			document.getElementById("idencargadop").style.background="";
		}

		
		

		
var data =  'idalumno=' + idalumno.val() + '&pnombrep=' + pnombrep.val() + '&snombrep=' + snombrep.val() + '&papellidop=' + papellidop.val() + '&sapellidop=' + sapellidop.val() +  '&identidadp=' + identidadp.val() + '&direccionp=' + direccionp.val() + '&idencargadop=' + idencargadop.val();
		
	//var data = 'rtnp=' + rtnp.val() + '&nombrep=' + nombrep.val() + '&direccionp=' + direccionp.val() + '&telefonop=' + telefonop.val();
		$.ajax({
			
			type: "POST",

			url: "ajax/editalumnos.php",	

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

