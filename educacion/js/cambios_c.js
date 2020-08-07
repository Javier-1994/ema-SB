$(document).ready(function(){
			load(1);
		});
function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/cambios_costo.php?action=ajax&page='+page+'&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					/*div para cargar los datos en formulario(proveedores)*/$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');


					
				}
			})
		}

	