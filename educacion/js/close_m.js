

$(document).ready(function () {
	$('#cerrar_matricula').click(function () {
    	var fecha=$('input[name=fecha]');
		


		
		var data = 'fecha=' + fecha.val();
		
		$.ajax({
			
			type: "POST",

			url: "ajax/close_matricula.php",	

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

