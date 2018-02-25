sitio = 'http://seo2.cl/clientes/cloudcore/';
oldseats = 0;

$.validator.addMethod("rut", function(value, element) {
  return this.optional(element) || $.Rut.validar(value);
}, "Este campo debe ser un rut valido.");

$.validator.addMethod("valueNotEquals", function(value, element, arg){
return arg != value;
}, "Debes seleccionar una opción");


$("#loginForm").validate({

	submitHandler: function(form) {
		$("#loginBtn").html('<i class="fa fa fa-spinner fa-spin"></i> Ingresando');

		$.ajax({
            type: "POST",
            url: "ajax/login.php",
            data: $("#loginForm").serialize(),
            success: function(msg) {
            	console.log(msg);
            	if(msg==1){
	            	window.location.replace('index.php');
            	}else{
                	sweetAlert("Oops...", "Los datos de usuario son erroneos.", "error");
					$("#loginBtn").html('Ingresar');
            	}
            },
            error: function(xhr, status, error) {
				//alert(status);
			}
		
		
		});

	    //form.submit();
	}
}); // fin validate

$('a#logoutBtn').on('click', function() {
	swal({
	  title: "Realmente desea cerrar la sesión?",
	  text: "",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonClass: "btn-blue",
	  confirmButtonText: "Si",
	  cancelButtonText: "No",
	  closeOnConfirm: true,
	  closeOnCancel: true
	},
	function(isConfirm) {
		if (isConfirm) {
	    	var url = "logout.php";
	    	$.ajax({
	           type: "POST",
	           url: url,
	            success: function(data) {
					console.log(data);
					if(data == "logout") {
						window.location.replace('login.php');
					}else{
						swal('Ha ocurrido un error, por favor vuelva a intentarlo.');
					}
	            }
	         });
		} else {
		    txt = "You pressed Cancel!";
		}
	});
});




// manejo de sesión
var refreshSn = function ()
	{	console.log('entra refresh!');
	    var time = 60000; // 1 mins
	    setTimeout(
	        function ()
	        {
		        console.log('refresh');
	        $.ajax({
	           url: "ajax/refresh_session.php",
	           cache: false,
	           success: function(msg) {
		          console.log(msg);
	           },
	           complete: function () {refreshSn();}
	        });
	    },
	    time
	);
};
refreshSn();


$("#formGanador").validate({
	  submitHandler: function(form) {
		$("#btnSubir").html('<i class="fa fa fa-spinner fa-spin"></i>');

		var data = $('#formGanador').serialize();

		$.ajax({
            type: "POST",
            url: "ajax/ganador.php",
            data: data,
            success: function(msg) {
				console.log(msg);
            	if(msg=='ok'){
            						
	            	swal({   title: "¡Excelente!",   text: "Se ha agregado el ganador",   type: "success",     confirmButtonColor: "#DD6B55",   confirmButtonText: "OK",   cancelButtonText: "Ir a lista de requerimientos",  showCancelButton: false,   closeOnConfirm: false,   closeOnCancel: false , allowOutsideClick: true}, 
	            	function(isConfirm){   
	            	if (isConfirm) {  
	            		window.location.replace("ganadores.php");   
	            	} else {     
	            		window.location.replace(sitio+"/tareas.php");      
	            	} });
            	}else{
					swal('Ha ocurrido un error, por favor vuelva a intentarlo.');
            	}
            	$("#btnSubir").html('<i class="fa fa-dot-circle-o"></i> Guardar');
            	
            },
            error: function(xhr, status, error) {
				//alert(status);
			}
		
		
		});
	}
}); // fin validate
 
$('a.btn-enviar').on('click', function() {
	var posID = $(this).data('id');
	var nombre = $(this).data('nombre');
	var botonenviar 	= '#enviar-'+posID;
	var botonenviando 	= '#enviando-'+posID;
	var estado 			= '#estado-'+posID;
			
	$(botonenviar).addClass('hide');
	$(botonenviando).removeClass('hide');
	swal({
	  title: "Enviar correo a "+nombre,
	  text: "Esto dejará a este voluntario como seleccionado para la fecha y lugar acordado.",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonClass: "btn-blue",
	  confirmButtonText: "Si",
	  cancelButtonText: "No",
	  closeOnConfirm: true,
	  closeOnCancel: true
	},
	function(isConfirm) {
		if (isConfirm) {
			
	    	var url = "ajax/envia-mail.php";
	    	$.ajax({
	           type: "POST",
	           url: url,
			   data: { "posID": posID },
	            success: function(data) {
					console.log(data);
					if(data == "1") {
						swal('Se ha enviado el correo');
						$(estado).removeClass('hide');
					}else{
						swal('Ha ocurrido un error, por favor vuelva a intentarlo.');
						$(botonenviar).removeClass('hide');
						$(botonenviando).addClass('hide');
					}
	            }
	         });
		} else {
		    txt = "You pressed Cancel!";
			$(botonenviar).removeClass('hide');
			$(botonenviando).addClass('hide');
		}
	});
});

$("#formExcel").validate({
	  submitHandler: function(form) {
		$("#btnSubir").html('<i class="fa fa fa-spinner fa-spin"></i> Guardando');

		// obtengo el archivo a subir
		var inputFileImage 	= document.getElementById("upload");
		var file 			= inputFileImage.files[0];
		var data 			= new FormData();
		data.append('archivo',file);
		
		var other_data = $('#formExcel').serializeArray();
		$.each(other_data,function(key,input){
			data.append(input.name,input.value);
		});
		
		$.ajax({
            type: "POST",
            url: "ajax/subirExcel.php",
            contentType:false,
            data: data,
            processData:false,
            cache:false,
            success: function(msg) {
				console.log(msg);
            		if(msg=='ok'){swal({   title: "¡Excelente!",   text: "El archivo se ha subido correctamente. ¿Qué desea hacer ahora?",   type: "success",     confirmButtonColor: "#DD6B55",   confirmButtonText: "lista de requerimientos",   cancelButtonText: "Ir al dashboard",  showCancelButton: true,   closeOnConfirm: false,   closeOnCancel: false , allowOutsideClick: true}, 
	            	function(isConfirm){   
	            	if (isConfirm) {  
	            		window.location.replace("tareas.php");  
	            	} else {     
	            		window.location.replace("index.php");     
	            	} });
            	}else{
					swal('Ha ocurrido un error, por favor vuelva a intentarlo.');
            	}
            	$("#btnSubir").html('<i class="fa fa-dot-circle-o"></i> Guardar');
            },
            error: function(xhr, status, error) {
				//alert(status);
			}
		
		
		});
	}
}); // fin validate


