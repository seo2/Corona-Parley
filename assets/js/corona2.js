var	nombre, apellido, rut, edad, region, comuna, telefono, email, disponible, pasaporte, quiero, posID;
var etapa = 0;	
function reiniciar(){

	/*
	
	paceOptions = {
	      elements: false,
	      selectors: '#profundidad'
	    };
	Pace.on('hide', function(){
		$('#home').removeClass('hide');
		$('#profundidad').removeClass('hide');
		$('footer').removeClass('hide');
	});  
	*/
	
	$('#home').removeClass('hide');
	$('#profundidad').removeClass('hide');
	$('footer').removeClass('hide');
	
	$.fn.moveIt = function(){
	  var $window = $(window);
	  var instances = [];
	  
	  $(this).each(function(){
	    instances.push(new moveItItem($(this)));
	  });
	  
	  window.onscroll = function(){
	    var scrollTop = $window.scrollTop();
	    instances.forEach(function(inst){
	      inst.update(scrollTop);
	    });
	  }
	}
	
	var moveItItem = function(el){
	  this.el = $(el);
	  this.speed = parseInt(this.el.attr('data-scroll-speed'));
	};
	
	moveItItem.prototype.update = function(scrollTop){
	  this.el.css('transform', 'translateY(' + -(scrollTop / this.speed) + 'px)');
	};
	
	$(function(){
	  $('[data-scroll-speed]').moveIt();
	});
	
	$('select').material_select();
	
	
	$('a.scroll').click(function(){
		$('html, body').animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top
		}, 500);
		return false;
	});
	
	
	
	$('#p6 a.next').click(function(){
		$('#paso'+etapa).hide();
		$('#paso').removeClass('hide');
		etapa++;
		$('#paso span').html(etapa+'/12');
		$('#paso'+etapa).fadeIn();
		$('html, body').animate({
			scrollTop: $( '#paso' ).offset().top
		}, 500);
		
		//$('#profundidad').css('height','5000px');
	});
	
	var limit = 4;
	$('#paso4 input').on('change', function(evt) {
	   if($('#paso4 input:checked').length > limit) {
	       this.checked = false;
	   }
	});
	
	var limit2 = 3;
	$('#paso5 input').on('change', function(evt) {
	   if($('#paso5 input:checked').length > limit2) {
	       this.checked = false;
	   }
	});
	
	$('.materialize-textarea').characterCounter();
	
	var ancho = $(window).width();
	console.log(ancho);
	
	$(window).scroll(function (event) {
		var scroll = $(window).scrollTop();
		console.log(scroll);
		
		if(ancho < 768){
			if(scroll>=800){
				$('.p2').removeClass('hide');
			}
			if(scroll>=1100){
				$('#l2').removeClass('hide');
			}
			if(scroll>=1500){
				$('#dos-tercios').removeClass('hide');
				$('#l3').removeClass('hide');
			}
			if(scroll>=1750){
				$('#toneladas').removeClass('hide');
			}
			if(scroll>=2000){
				$('#l4').removeClass('hide');
			}
			if(scroll>=2250){
				$('#coronaseune').removeClass('hide');
			}
			if(scroll>=2600){
				$('#l5').removeClass('hide');
			}
			if(scroll>=2700){
// 				$('#paso0').removeClass('hide');
				$('#etapa3a').removeClass('hide');
			}
		}else{
			if(scroll>=1470){
				$('.p2').removeClass('hide');
			}
			if(scroll>=1840){
				$('#l2').removeClass('hide');
			}
			if(scroll>=2100){
				$('#dos-tercios').removeClass('hide');
				$('#l3').removeClass('hide');
			}
			if(scroll>=2500){
				$('#toneladas').removeClass('hide');
			}
			if(scroll>=2700){
				$('#l4').removeClass('hide');
			}
			if(scroll>=2900){
				$('#coronaseune').removeClass('hide');
			}
			if(scroll>=3500){
				$('#l5').removeClass('hide');
			}
			if(scroll>=3600){
// 				$('#paso0').removeClass('hide');
				$('#etapa3a').removeClass('hide');
			}
		}	
	});
	
	
	var error = 0;
	
	$('#formDatos').on("submit", function(e) {
	  	e.preventDefault();
	  
		$('#progreso').removeClass('hide');
		
	  	nombre 		= $('#nombre').val();
	  	apellido 	= $('#apellido').val();
	  	rut 		= $('#rut').val();
	  	edad 		= $('#edad').val();
	  	region 		= $('#region').val();
	  	comuna 		= $('#comuna').val();
	  	telefono 	= $('#telefono').val();
	  	email 		= $('#email').val();
	  	disponible 	= $('#disponible').val();
	  	pasaporte 	= $('#pasaporte').val();
	  	quiero 		= $('#quiero').val();
	
		if(nombre==''){
			Materialize.toast('Debes ingresar el nombre', 4000);
			$('#nombre').addClass('invalid');
			error = 1;
		}
	
		if(apellido==''){
			Materialize.toast('Debes ingresar el apellido', 4000);
			$('#apellido').addClass('invalid');
			error = 1;
		}	
	
		if(rut==''){
			Materialize.toast('Debes ingresar el RUT', 4000);
			$('#rut').addClass('invalid');
			error = 1;
		}	
	
		if(edad==''){
			Materialize.toast('Debes ingresar la edad', 4000);
			$('#edad').addClass('invalid');
			error = 1;
		}
	
		if(region==''){
			Materialize.toast('Debes seleccionar la región', 4000);
			$('#region').parent().addClass('invalid');
			error = 1;
		}
	
		if(comuna==''){
			Materialize.toast('Debes seleccionar la ciudad', 4000);
			$('#comuna').parent().addClass('invalid');
			error = 1;
		}
	
		if(telefono==''){
			Materialize.toast('Debes ingresar el teléfono', 4000);
			$('#telefono').addClass('invalid');
			error = 1;
		}
	
		if(email==''){
			Materialize.toast('Debes ingresar el email', 4000);
			$('#email').addClass('invalid');
			error = 1;
		}
	  
		if($('#rut').hasClass('invalid')){
			Materialize.toast('RUT invalido', 4000);
			$('#rut').addClass('invalid');
			error = 1;
		}
	  
	  
	  	if(error==0){  
		    $.ajax({
		    	url:  $('#formDatos').attr('action'),
				type: "POST",
	            data: $('#formDatos').serialize(),
	            success: function(data) {		   
				    console.log(data);  
					error = 0;
				    if(data=='error'){
					    Materialize.toast('Ha ocurrido un error, por favor vuelve a intentarlo.', 4000) // 4000 is the duration of the toast
					  	$('#progreso').addClass('hide');
					  	return;
				    }else if(data=='existe'){
					    posID = data;
					    $('.posID').val(posID);			    
					  	$('#btnEnviar').removeClass('hide');
					  	$('#progreso').addClass('hide');
					  	$('#paso2').hide();
						$('#paso').removeClass('hide');
						$('#paso span').hide();
						$('#paso12').fadeIn();
						etapa = 12;
						$('#paso span').html(etapa+'/12');
						$('html, body').animate({
							scrollTop: $( '#paso' ).offset().top
						}, 500);
				    }else{	
					    posID = data;
					    $('.posID').val(posID);			    
					  	$('#btnEnviar').removeClass('hide');
					  	$('#progreso').addClass('hide');
					  	$('#formDatos')[0].reset();
					  	$('#paso'+etapa).hide();
						$('#paso').removeClass('hide');
						etapa++;
						$('#paso span').html(etapa+'/12');
						$('#paso'+etapa).fadeIn();
						$('html, body').animate({
							scrollTop: $( '#paso' ).offset().top
						}, 500);
		
						//$('#profundidad').css('height','4500px');
				    }   
				    
		    	}
		    });	  	
	  	}else{ 	
		  	$('#progreso').addClass('hide');
			Materialize.toast('Debes completar el formulario', 4000);
			error = 0;
		  	return;
		}
	});
	
	    
	$("#rut, #elrut")
	  .rut({formatOn: 'keyup', validateOn: 'keyup'})
	  .on('rutInvalido', function(){ 
	    $(this).removeClass("valid");
	    $(this).addClass("invalid");
	    error = 1;
	  })
	  .on('rutValido', function(){ 
	    $(this).removeClass("invalid");
	    $(this).addClass("valid");
	    error = 0;
	  });
	  
	$("#region").bind("change", function() {
	    GetComunas($(this).val());
	});	
	
	function GetComunas(regionID) {
	  if (regionID > 0) {
	        $("#comuna").get(0).options.length = 0;
	        $("#comuna").get(0).options[0] = new Option("Cargando Comunas...", "-1"); 
	 	    $.ajax({
	            type: "POST",
	            url: "ajax/comunas.php",
	            data: { "regionID": regionID },
	            success: function(msg) {
		            console.log(msg);
	                $("#comuna").get(0).options.length = 0;
	                $("#comuna").get(0).options[0] = new Option("-- Selecciona Comuna --", ""); 
	                
	                $.each(msg.comunas, function(index, item) {
	                    $("#comuna").get(0).options[$("#comuna").get(0).options.length] = new Option(item.Display, item.Value);
	                });
	                
					$('select').material_select();
	            },
	            error: function(xhr, status, error) {
					//alert(status);
	        	}
	        });
	    }
	    else {
	        $("#comuna").get(0).options.length = 0;
	    }
	}
	  
	 
	$('#formP1').on("submit", function(e) {
	  	e.preventDefault();
		
	  	posP1 = $('input[name=posP1]:checked').val()
	  	console.log(posP1);
		if(posP1){
		}else{
			Materialize.toast('Debes seleccionar una opción', 4000);
			$('input[name=posP1]').addClass('invalid');
			error = 1;
		}
	
	  
	  	if(error==0){  
		    $.ajax({
		    	url:  $('#formP1').attr('action'),
				type: "POST",
	            data: $('#formP1').serialize(),
	            success: function(data) {		   
				    console.log(data);  
				    if(data=='error'){
					    Materialize.toast('Ha ocurrido un error, por favor vuelve a intentarlo.', 4000) // 4000 is the duration of the toast
						error = 0;
					  	$('#progreso').addClass('hide');
					  	return;
				    }else{				    
					  	$('#formP1')[0].reset();
					  	$('#paso'+etapa).hide();
						$('#paso').removeClass('hide');
						etapa++;
						$('#paso span').html(etapa+'/12');
						$('#paso'+etapa).fadeIn();
						$('html, body').animate({
							scrollTop: $( '#paso' ).offset().top
						}, 500);
						error = 0;
				    }   
		    	}
		    });	  	
	  	}else{ 	
			Materialize.toast('Debes completar el formulario', 4000);
			error = 0;
		  	return;
		}
	}); 
	
	$('#formP2').on("submit", function(e) {
	  	e.preventDefault();
		
		var limit = 4;
	   if($('#paso4 input:checked').length < limit) {
			Materialize.toast('Debes seleccionar al menos 4 aspectos', 4000);
			error = 1;
	   }
	  
	  	if(error==0){  
		    $.ajax({
		    	url:  $('#formP2').attr('action'),
				type: "POST",
	            data: $('#formP2').serialize(),
	            success: function(data) {		   
				    console.log(data);  
				    if(data=='error'){
					    Materialize.toast('Ha ocurrido un error, por favor vuelve a intentarlo.', 4000) // 4000 is the duration of the toast
						error = 0;
					  	$('#progreso').addClass('hide');
					  	return;
				    }else{				    
					  	$('#formP2')[0].reset();
					  	$('#paso'+etapa).hide();
						$('#paso').removeClass('hide');
						etapa++;
						$('#paso span').html(etapa+'/12');
						$('#paso'+etapa).fadeIn();
						$('html, body').animate({
							scrollTop: $( '#paso' ).offset().top
						}, 500);
						error = 0;
						//$('#profundidad').css('height','4800px');
				    }   
		    	}
		    });	  	
	  	}else{ 	
			Materialize.toast('Debes completar el formulario', 4000);
			error = 0;
		  	return;
		}
	}); 
	
	$('#formP3').on("submit", function(e) {
	  	e.preventDefault();
		
		var limit = 3;
	   if($('#paso5 input:checked').length < limit) {
			Materialize.toast('Debes seleccionar al menos 3 frases', 4000);
			error = 1;
	   }
	  
	  	if(error==0){  
		    $.ajax({
		    	url:  $('#formP3').attr('action'),
				type: "POST",
	            data: $('#formP3').serialize(),
	            success: function(data) {		   
				    console.log(data);  
				    if(data=='error'){
					    Materialize.toast('Ha ocurrido un error, por favor vuelve a intentarlo.', 4000) // 4000 is the duration of the toast
						error = 0;
					  	$('#progreso').addClass('hide');
					  	return;
				    }else{				    
					  	$('#formP3')[0].reset();
					  	$('#paso'+etapa).hide();
						$('#paso').removeClass('hide');
						etapa++;
						$('#paso span').html(etapa+'/12');
						$('#paso'+etapa).fadeIn();
						$('html, body').animate({
							scrollTop: $( '#paso' ).offset().top
						}, 500);
						//$('#profundidad').css('height','4400px');
						error = 0;
				    }   
		    	}
		    });	  	
	  	}else{ 	
			Materialize.toast('Debes completar el formulario', 4000);
			error = 0;
		  	return;
		}
	}); 
	 
	$('#formP4').on("submit", function(e) {
	  	e.preventDefault();
		
	  	posP4 = $('input[name=posP4]:checked').val();
	  	
		if(posP4){
		
		}else{
			Materialize.toast('Debes seleccionar una opción', 4000);
			$('input[name=posP4]').addClass('invalid');
			error = 1;
		}
	
	  
	  	if(error==0){  
		    $.ajax({
		    	url:  $('#formP4').attr('action'),
				type: "POST",
	            data: $('#formP4').serialize(),
	            success: function(data) {		   
				    console.log(data);  
				    if(data=='error'){
					    Materialize.toast('Ha ocurrido un error, por favor vuelve a intentarlo.', 4000) // 4000 is the duration of the toast
						error = 0;
					  	$('#progreso').addClass('hide');
					  	return;
				    }else{				    
					  	$('#formP4')[0].reset();
					  	$('#paso'+etapa).hide();
						$('#paso').removeClass('hide');
						etapa++;
						$('#paso span').html(etapa+'/12');
						$('#paso'+etapa).fadeIn();
						$('html, body').animate({
							scrollTop: $( '#paso' ).offset().top
						}, 500);
						$('input#input_text, textarea').characterCounter();
						error = 0;
						//$('#profundidad').css('height','4500px');
						$('.materialize-textarea').characterCounter();
				    }   
		    	}
		    });	  	
	  	}else{ 	
			Materialize.toast('Debes completar el formulario', 4000);
			error = 0;
		  	return;
		}
	}); 
	
	$('#formP5').on("submit", function(e) {
	  	e.preventDefault();
		console.log('P5');
	  	posP5 = $('#posP5').val();
	  	console.log(posP5);
		if(posP5){
			
		}else{
			Materialize.toast('Debes describir tus actividades.', 4000);
			$('#posP5').addClass('invalid');
			error = 1;
		}
	
	  
	  	if(error==0){  
		    $.ajax({
		    	url:  $('#formP5').attr('action'),
				type: "POST",
	            data: $('#formP5').serialize(),
	            success: function(data) {		   
				    console.log(data);  
				    if(data=='error'){
					    Materialize.toast('Ha ocurrido un error, por favor vuelve a intentarlo.', 4000) // 4000 is the duration of the toast
						error = 0;
					  	$('#progreso').addClass('hide');
					  	return;
				    }else{				    
					  	$('#formP5')[0].reset();
					  	$('#paso'+etapa).hide();
						$('#paso').removeClass('hide');
						etapa++;
						$('#paso span').html(etapa+'/12');
						$('#paso'+etapa).fadeIn();
						$('html, body').animate({
							scrollTop: $( '#paso' ).offset().top
						}, 500);
						//$('#profundidad').css('height','4800px');
						error = 0;
				    }   
		    	}
		    });	  	
	  	}else{ 	
			Materialize.toast('Debes completar el formulario', 4000);
			error = 0;
		  	return;
		}
	}); 
	
	
	 $('#formP6').on("submit", function(e) {
	  	e.preventDefault();
		
		var limit = 1;
	   if($('#paso8 input:checked').length < limit) {
			Materialize.toast('Debes seleccionar al menos 1 opción', 4000);
			error = 1;
	   }
	  
	  	if(error==0){  
		    $.ajax({
		    	url:  $('#formP6').attr('action'),
				type: "POST",
	            data: $('#formP6').serialize(),
	            success: function(data) {		   
				    console.log(data);  
				    if(data=='error'){
					    Materialize.toast('Ha ocurrido un error, por favor vuelve a intentarlo.', 4000) // 4000 is the duration of the toast
						error = 0;
					  	$('#progreso').addClass('hide');
					  	return;
				    }else{				    
					  	$('#formP6')[0].reset();
					  	$('#paso'+etapa).hide();
						$('#paso').removeClass('hide');
						etapa++;
						$('#paso span').html(etapa+'/12');
						$('#paso'+etapa).fadeIn();
						$('html, body').animate({
							scrollTop: $( '#paso' ).offset().top
						}, 500);
						$('input#input_text, textarea').characterCounter();
	//					$('#profundidad').css('height','4500px');
						error = 0;
						
						$('.materialize-textarea').characterCounter();
				    }   
		    	}
		    });	  	
	  	}else{ 	
			Materialize.toast('Debes completar el formulario', 4000);
			error = 0;
		  	return;
		}
	}); 
	 
	
	
	 
	 $('#formP7').on("submit", function(e) {
	  	e.preventDefault();
		
	  	posP7 = $('#posP7').val();
	  	console.log(posP7);
		if(posP7){
			
		}else{
			Materialize.toast('Debes describir tu relación con el océano.', 4000);
			$('#posP7').addClass('invalid');
			error = 1;
		}
	
	  
	  	if(error==0){  
		    $.ajax({
		    	url:  $('#formP7').attr('action'),
				type: "POST",
	            data: $('#formP7').serialize(),
	            success: function(data) {		   
				    console.log(data);  
				    if(data=='error'){
					    Materialize.toast('Ha ocurrido un error, por favor vuelve a intentarlo.', 4000) // 4000 is the duration of the toast
						error = 0;
					  	$('#progreso').addClass('hide');
					  	return;
				    }else{				    
					  	$('#formP7')[0].reset();
					  	$('#paso'+etapa).hide();
						$('#paso').removeClass('hide');
						etapa++;
						$('#paso span').html(etapa+'/12');
						$('#paso'+etapa).fadeIn();
						$('html, body').animate({
							scrollTop: $( '#paso' ).offset().top
						}, 500);
						$('input#input_text, textarea').characterCounter();
						error = 0;
				    }   
		    	}
		    });	  	
	  	}else{ 	
			Materialize.toast('Debes completar el formulario', 4000);
			error = 0;
		  	return;
		}
	}); 
	 
	 $('#formP8').on("submit", function(e) {
	  	e.preventDefault();
		
	  	posP8 = $('#posP8').val();
	  	console.log(posP8);
		if(posP8){
			
		}else{
			Materialize.toast('Debes escribir por qué.', 4000);
			$('#posP8').addClass('invalid');
			error = 1;
		}
	
	  
	  	if(error==0){  
		    $.ajax({
		    	url:  $('#formP8').attr('action'),
				type: "POST",
	            data: $('#formP8').serialize(),
	            success: function(data) {		   
				    console.log(data);  
				    if(data=='error'){
					    Materialize.toast('Ha ocurrido un error, por favor vuelve a intentarlo.', 4000) // 4000 is the duration of the toast
						error = 0;
					  	$('#progreso').addClass('hide');
					  	return;
				    }else{				    
					  	$('#formP8')[0].reset();
					  	$('#paso'+etapa).hide();
						$('#paso').removeClass('hide');
						etapa++;
						$('#paso span').html(etapa+'/12');
						$('#paso'+etapa).fadeIn();
						$('html, body').animate({
							scrollTop: $( '#paso' ).offset().top
						}, 500);
						error = 0;
				    }   
		    	}
		    });	  	
	  	}else{ 	
			Materialize.toast('Debes completar el formulario', 4000);
			error = 0;
		  	return;
		}
	}); 
	
	
	$('a.icon').on("click", function(e) {
	//   	e.preventDefault();
		
	  	posID = $('.posID').val();	
	    $.ajax({
	    	url:  'ajax/actualizaP9.php',
			type: "POST",
	        data: {'posID':posID, posShare: 1},
	        success: function(data) {		   
			    console.log(data);  
			    if(data=='error'){
				    Materialize.toast('Ha ocurrido un error, por favor vuelve a intentarlo.', 4000) // 4000 is the duration of the toast
					error = 0;
				  	$('#progreso').addClass('hide');
				  	return;
			    }else{			
				    if(etapa>5 && etapa <12){
					  	$('#paso'+etapa).hide();
						$('#paso').removeClass('hide');
						etapa++;
						$('#paso span').html(etapa+'/12');
						$('#paso'+etapa).fadeIn();
						$('html, body').animate({
							scrollTop: $( '#paso' ).offset().top
						}, 500);
						error = 0;
/*
					    function() { 
					      fbq('track', 'Registro Exitoso', {
					        content_name: 'Se ha completado el formulario', 
					        content_category: 'Formulario de Registro'
					      });  
					    }
*/        
				    }	
				        
			    }   
	    	}
	    });	 
	}); 
	
	
	
}

	function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u=http://voluntariosporeloceano.cl/&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}
	
	function tw_click() {u=location.href;t=document.title;window.open('https://twitter.com/intent/tweet?text=http://voluntariosporeloceano.cl/&hashtags=VoluntariosPorElOceano','sharer','toolbar=0,status=0,width=626,height=436');return false;}

 reiniciar();
 
 $('#busca-nombre').on("submit", function(e) {
	e.preventDefault();
	$("#busca-nombre button").html('<i class="fa fa fa-spinner fa-spin"></i>');
	elrut = $('#elrut').val();
	
	$.post('completar.php?rut='+elrut, function(data){
		pines = $(data).find("#lospasos");
		$('#p6').html( $(pines).hide().fadeIn(1000));
		$("#busca-nombre button").html('BUSCAR');
		
		$('#paso').removeClass('hide');
		etapa = 2;
		$('#paso span').html(etapa+'/12');
		reiniciar();
		
	});
});

$('a.votar').on('click',function(){
	
	uid			= $(this).data('uid');
	voto		= $(this).data('voto');
	voton		= $(this).attr('id');
	votos		= $('#votos'+voto+' span').html();
	
	$.ajax({
    	url:  'ajax/graba_voto.php',
		type: "POST",
        data: {'oauth_uid':uid, 'voto': voto},
        success: function(data) {		   
		    console.log(data);  
		    if(data=='1'){
			    Materialize.toast('Tu voto ha sido registrado.', 4000) // 4000 is the duration of the toast
				error = 0;
				$('.caja_voton').html('<a href="javascript:void(0);" class="btn waves-effect waves-light disabled" target="_blank" dataLayer.push({"event": "Votar"});>Ya votaste</a>');
				votos = parseInt(votos) + 1;
				$('#votos'+voto+' span').html(votos);
			  	return;
		    }else if(data=="2"){	
			    Materialize.toast('Ya has votado por este video.', 4000) // 4000 is the duration of the toast
				error = 1;
			  	return;
		    }else{
			    Materialize.toast('Ha ocurrido un error, por favor vuelve a intentarlo. 11', 4000) // 4000 is the duration of the toast
				error = 1;
			  	return;
		    }   
    	}
    });	

	
});