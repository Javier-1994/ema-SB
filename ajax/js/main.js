$(document).ready(function(){
	$(".btn-exit-system").on("click", function(e){
		e.preventDefault();
		var urlDir=$(this).attr("href");
		swal({
		  title: '¿Estás seguro?',
		  text: "Quieres salir del sistema y finalizar la sesión actual",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '0d0d0d',
		  cancelButtonColor: 'b3b5bb',
		  confirmButtonText: 'Si, Salir',
		  cancelButtonText: 'Cancelar'
		}).then(function () {
		  window.location.href=urlDir;
		});
	});
});