$(document).ready(function () {
	//alert('Funciono');
	//$('#usuario').click(function () {
	//$('#usuario').mouseover(function () {
	//$('#usuario').keypress(function () {
	//$('#usuario').blur(function () {
	$('#usuario').keyup(function () {		
	 	//alert('Hola');
	 });
	$('#ingresar').click(function () {
		var usuario=$('input[name=usuario]');
		var pass=$('input[name=pass]');

		if (usuario.val()=='') {
			$("#usuario").attr('required',true);
			document.getElementById("usuario").style.border="2px solid red";
			document.getElementById("usuario").focus();
			return false;
		} else {
			$("#usuario").attr('required',false);
			document.getElementById("usuario").style.border="";
		}

		if (pass.val()=='') {
			$("#pass").attr('required',true);
			document.getElementById("pass").style.border="2px solid red";
			document.getElementById("pass").focus();
			return false;	
		} else {
			$("#pass").attr('required',false);
			document.getElementById("pass").style.border="";
		}

		var data = 'usuario=' + usuario.val() + '&pass=' + pass.val();
		
		$.ajax({
			
			type: "POST",

			url: "validacion.php",		

			data: data,		

			// Con esta linea me permite entrar a validar.php y 
			//mostrar el mensaje
			dataType: "html",
			
			cache: false,
			
			//success
			success: function (data) {
				$('#resultado').fadeIn(2000);
				$('#resultado').fadeOut(6000 );
				$("#resultado").html(data);		
			}		
		});
				
		return false;

	});
});

