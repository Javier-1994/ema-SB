$(document).ready(function () {
	$('#cambio').click(function () {

		var id_usuario=$('input[name=id_usuario]');
		var ant=$('input[name=ant]');
        var cambio_pass=$('input[name=cambio_pass]');
           var antigua=$('input[name=antigua]');
              


		

		if (id_usuario.val()=='') {
			$("#id_usuario").attr('required',true);
			document.getElementById("id_usuario").style.border="2px solid red";
				document.getElementById("id_usuario").style.background="#F3F1F1";
			document.getElementById("id_usuario").focus();
			return false;
		} else {
			$("#id_usuario").attr('required',false);
			document.getElementById("id_usuario").style.border="";
			document.getElementById("id_usuario").style.background="";
		}


if (ant.val()=='') {
			$("#ant").attr('required',true);
			document.getElementById("ant").style.border="2px solid red";
				document.getElementById("ant").style.background="#F3F1F1";
			document.getElementById("ant").focus();
			return false;
		} else {
			$("#ant").attr('required',false);
			document.getElementById("ant").style.border="";
			document.getElementById("ant").style.background="";
		}


if (cambio_pass.val()=='') {
			$("#cambio_pass").attr('required',true);
			document.getElementById("cambio_pass").style.border="2px solid red";
				document.getElementById("cambio_pass").style.background="#F3F1F1";
			document.getElementById("cambio_pass").focus();
			return false;
		} else {
			$("#cambio_pass").attr('required',false);
			document.getElementById("cambio_pass").style.border="";
			document.getElementById("cambio_pass").style.background="";
		}
		
		var data = 'id_usuario=' + id_usuario.val()+'&cambio_pass=' + cambio_pass.val()+'&antigua=' + antigua.val()+'&ant='+ ant.val();
		
		$.ajax({
			
			type: "POST",

			url: "ajax/edit_pass.php",	

			data: data,		

			// Con esta linea me permite entrar a validar.php y 
			//mostrar el mensaje
			dataType: "html",
			
			cache: false,
			//success
			success: function (data) {
				$('#comprobarid').fadeIn(1000);
				$("#comprobarid").html(data);	
					
			}		
		});
				
		return false;

	});	
});
