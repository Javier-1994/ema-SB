$(document).ready(function(){
			load(1);
		});
function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/buscar_usuario.php?action=ajax&page='+page+'&q='+q,
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
	$('#agregar_usuario').click(function () {

		var nombre=$('input[name=nombre]');
		var usuario=$('input[name=usuario]');
		var pass=$('input[name=pass]');

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

		if (usuario.val()=='') {
			$("#usuario").attr('required',true);
			document.getElementById("usuario").style.border="2px solid red";
			document.getElementById("usuario").style.background="#F3F1F1";
			document.getElementById("usuario").focus();
			return false;
		} else {
			$("#usuario").attr('required',false);
			document.getElementById("usuario").style.border="";
			document.getElementById("usuario").style.background="";
		}

		if (pass.val()=='') {
			$("#pass").attr('required',true);
			document.getElementById("pass").style.border="2px solid red";
			document.getElementById("pass").style.background="#F3F1F1";
			document.getElementById("pass").focus();
			return false;
		} else {
			$("#pass").attr('required',false);
			document.getElementById("pass").style.border="";
			document.getElementById("pass").style.background="";
		}

	
		
		var data = 'nombre=' + nombre.val() + '&usuario=' + usuario.val() + '&pass=' + pass.val();
		
		$.ajax({
			
			type: "POST",

			url: "ajax/registro_usuario.php",	

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

//mostrar os datos en  ventana modal

$('#debaja_usuario').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) 
		    var id_usuario = button.data('id_usuario')  
		  var nombreu = button.data('nombreu') 
		    var usuariou = button.data('usuariou') 
		
		  var estadou = button.data('estadou') 
		 
		

		
	 var modal = $(this)
		  modal.find('.modal-title').text('Editar Usuario : '+usuariou)
		    modal.find('.modal-body #id_usuario').val(id_usuario)
		  modal.find('.modal-body #nombreu').val(nombreu)
		     modal.find('.modal-body #usuariou').val(usuariou)
		   modal.find('.modal-body #estadou').val(estadou)
		    
		    
		     
		
		 
		  $('.alert').hide();//Oculto alert
		})





//update
	

$(document).ready(function () {
	$('#debaja_u').click(function () {
	var id_usuario=$('input[name=id_usuario]');
    var estadou=$('select[name=estadou]');


if (estadou.val()=='') {
			$("#estadou").attr('required',true);
			document.getElementById("estadou").style.border="2px solid red";
				document.getElementById("estadou").style.background="#F3F1F1";
			document.getElementById("estadou").focus();
			return false;
		} else {
			$("#estadou").attr('required',false);
			document.getElementById("estadou").style.border="";
			document.getElementById("estadou").style.background="";
		}
		
		var data = 'id_usuario=' + id_usuario.val()+'&estadou=' + estadou.val();
		
		$.ajax({
			
			type: "POST",

			url: "ajax/editu.php",	

			data: data,		

			// Con esta linea me permite entrar a validar.php y 
			//mostrar el mensaje
			dataType: "html",
			
			cache: false,
			//success
			success: function (data) {
				$('#comprobaridd').fadeIn(1000);
				$("#comprobaridd").html(data);	
				load(1);		
			}		
		});
				
		return false;

	});	
});


/*
function validar(){
  var validado = true;
  elementos = document.getElementsByClassName("inputFormu");
  for(i=0;i<elementos.length;i++){
    if(elementos[i].value == "" || elementos[i].value == null){
    validado = false
    }
  }
  if(validado){
  document.getElementById("agregar").disabled = false;
  
  }else{
     document.getElementById("agregar").disabled = true;
  //Salta un alert cada vez que escribes y hay un campo vacio
  //alert("Hay campos vacios")   
  }
}
*/

