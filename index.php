<?php
	require_once("ajax/_lib/config.php");
	require_once("ajax/_lib/MysqliDb.php");
	$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);

	require_once 'Mobile_Detect.php';
	$detect = new Mobile_Detect;

	$deviceType 	= ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
	$scriptVersion 	= $detect->getScriptVersion();

?>
<!DOCTYPE html>
  <html>
    <head>

      <!--Let browser know website is optimized for mobile-->
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
      
      <title>Corona: Voluntarios por el Océano</title>
      <meta name="description" content="Viaja a Islas Maldivas y descubre cómo puedes ayudar a combatir la contaminación de plásticos en nuestros océanos.">
		<meta name="robots" content="index, nofollow">
		<meta name="author" content="Cerveza Corona">
      <script src="https://use.fontawesome.com/3dcd2ef12b.js"></script>
	  <link rel="icon" type="image/png" href="assets/img/favicon.png" />
      <script src="assets/js/pace.js"></script>
	  <link href="assets/css/pace-theme-big-counter.css" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="assets/css/animate.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="assets/css/corona.css?v=1.3.3"  media="screen,projection"/>
      
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@cerveza_corona">
		<meta name="twitter:title" content="Corona y Parley están buscando a 4 voluntarios.">
		<meta name="twitter:description" content="Viaja a Islas Maldivas y descubre cómo puedes ayudar a combatir la contaminación de plásticos en nuestros océanos.">
		<meta name="twitter:image" content="https://s219687.gridserver.com/clientes/modo/corona/parley/assets/img/imagen_kv_web.jpg">      

		<meta property="og:type" content="article">
		<meta property="og:title" content="Corona: Voluntarios por el Océano">
		<meta property="og:site_name" content="Corona: Voluntarios por el Océano">
		<meta property="og:url" content="https://s219687.gridserver.com/clientes/modo/corona/parley/">
		<meta property="og:image" content="https://s219687.gridserver.com/clientes/modo/corona/parley/assets/img/imagen_kv_web.jpg">
		<meta property="article:published_time" content="2017-10-23">
		<meta property="article:author" content="http://cervezacorona.cl">      

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108488388-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-108488388-1');
		</script>     
      
    </head>

    <body>
	    
	    <section id="home" class="hide">
		    <img src="assets/img/nubes.png" id="nubes" class="animated fadeInLeft" data-scroll-speed="5">
		    <div id="redes" data-scroll-speed="8">
		    	<p class="center-align animated fadeIn"><a href="https://www.facebook.com/cervezacoronachileoficial" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> <a href="https://twitter.com/cerveza_corona?lang=es" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></p>
		    </div>
		    
			<div class="container">
				<div class="row">
					<div class="col m8 offset-m2">
						<div class="row" style="margin-bottom: 0;">
							<div class="col s6 offset-s3"data-scroll-speed="2">
								<img src="assets/img/logo-home.png" class="responsive-img animated fadeInDown">
							</div>
						</div>
					</div>
				</div>
				<div class="row center-align">
					<div class="col s12">
						<div class="row" style="margin-bottom: 0;">
							<div class="col s12" data-scroll-speed="3">
								<h1>Viaja a Islas Maldivas</h1>
							</div>
						</div>	
						<div class="row">
							<div class="col m8 offset-m2"data-scroll-speed="4">
								<p class="animated fadeIn">y descubre cÓmo puedes ayudar a combatir la contaminación de PLÁSTICOS 
EN nuestros océanos</p>
															</div>
						</div>						
					</div>
				</div>
			</div>
			
			<a href="#profundidad" id="baja1" class="baja scroll" ><img src="assets/img/flecha-baja.png" class="responsive-img animated bounceInUp"></a>
			
	    </section>
	    
	    <section id="profundidad" class="hide">
		    <div id="p1">
			    <div id="mancha1" data-scroll-speed="4">
			    	<img src="assets/img/mancha-1.png" class="responsive-img">
			    </div>
		    	<div class="container" id="porque" data-scroll-speed="5">
					<div class="row" >
						<div class="col s10 offset-s1 m6 offset-m3">
							<div class="row">
								<div class="col s4 offset-s4">
									<img src="assets/img/logo-blanco.png" class="responsive-img animated fadeInDown">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<h2 class="center-align">¿Por qué EL OCÉANO nos necesita?</h2>
							<p class="center-align animated fadeIn">Corona y Parley están buscando a 4 voluntarios<br>por el océano para viajar a islas maldivas, donde<br>durante una semana conocerán cómo proteger<br>nuestros océanos, y de qué manera aplicarlo en<br>las playas de Chile.</p>			
						</div>
					</div>
		    	</div>
		    </div>
		    <div id="l1" data-scroll-speed="6">
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    </div>
		    <div id="mancha2" data-scroll-speed="3">
		    	<img src="assets/img/mancha-1.png" class="responsive-img">
		    </div>
		    <div id="p2">
		    	<div class="container" id="cada-metro" data-scroll-speed="5">
					<div class="row" >
						<div class="col m6 offset-m3">
							<div class="row">
								<div class="col s4">
									<img src="assets/img/ico-basurero.png" class="responsive-img animated fadeInUp hide p2">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col m6 offset-m3">
							<h2 class="left-align animated fadeInUp p2 hide">Por cada metro</h2>
							<p class="right-align puntos animated fadeInDown hide p2" >. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</p>
							<p class="right-align animated fadeInDown hide p2 principal">de costa en el mundo, hay 16 bolsas<br>
								de supermercado llenas de basura<br>
								que entran al océano.</p>			
						</div>
					</div>
		    	</div>
		    </div>
		    <div id="l2" data-scroll-speed="6" class="animated fadeIn hide">
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    </div>
		    <div id="mancha3" data-scroll-speed="3">
		    	<img src="assets/img/mancha-1.png" class="responsive-img">
		    </div>
		    <div id="p3">
		    	<div class="container hide" id="dos-tercios" data-scroll-speed="5" >
					
					<div class="row animated fadeInUp">
						<div class="col m6 offset-m3">	
							<img src="assets/img/dostercios.png" class="responsive-img">	
						</div>
					</div>
					<div class="row animated fadeInDown">
						<div class="col m6 offset-m4">
							<p class="left-align animated fadeIn principal">de nuestro oxígeno vienen<br>
								del océano, si lo llenamos de<br>
								plástico no podremos<br>
								respirar.</p>			
						</div>
					</div>
		    	</div>
		    </div>
		    <div id="l3" data-scroll-speed="6" class="animated fadeIn hide">
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    </div>
		    <div id="p4">
		    	<div class="container hide" id="toneladas" data-scroll-speed="5">
					<div class="row animated fadeInRight">
						<div class="col m6 offset-m3">
							<h2 class="left-align">25 Mil Toneladas</h2>			
						</div>
					</div>
					<div class="row animated fadeInLeft">
						<div class="col s8 offset-s4 m6 offset-m6">
							<p class="left-align animated fadeIn principal">
								de plásticos anuales son<br>
								arrojadas al océano desde<br>
								las costas chilenas. <span>DIARIO LA TERCERA 2015</span></p>			
						</div>
					</div>
					<img src="assets/img/circulo.png" id="circulo" data-scroll-speed="4" class="animated fadeIn">
		    	</div>
		    </div>
		    <div id="l4" data-scroll-speed="4" class="animated fadeIn hide">
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    </div>
		    <div id="mancha4" data-scroll-speed="3">
		    	<img src="assets/img/mancha-1.png" class="responsive-img">
		    </div>		
			<div id="p5">
		    	<div class="container hide" id="coronaseune" data-scroll-speed="5">
			    	<div class="row animated bounceInDown">
						<div class="col m8 offset-m2">
							<div class="row">
								<div class="col s6 offset-s3 m4 offset-m4">
									<img src="assets/img/logo-blanco_2.png" class="responsive-img">		
								</div>
							</div>
						</div>
			    	</div>
					<div class="row animated fadeIn">
						<div class="col m9 offset-m3">
							<h2 class="left-align">ES POR ESO QUE CORONA SE<br>UNE A PARLEY</h2>			
						</div>
					</div>
					<div class="row animated fadeIn Down">
						<div class="col m6 offset-m3">
							<p class="left-align animated fadeIn principal">
								Parley es una organización y una<br>
								red de colaboración global que<br>
								busca generar conciencia para<br>
								enfrentar la crisis de desechos<br>
								plásticos en nuestros océanos.</p>			
						</div>
					</div>
			    	<p class="right-align animated fadeInRight puntos" id="l5a">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</p>
			    	<p class="right-align animated fadeInLeft puntos" id="l5b">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</p>
		    	</div>
		    </div>
		    <div id="l5" data-scroll-speed="4" class="animated fadeIn hide">
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    	<p class="puntos center-align">.</p>
		    </div>
		    <div id="mancha5" data-scroll-speed="3">
		    	<img src="assets/img/mancha-1.png" class="responsive-img">
		    </div>		
			<div id="p6">
				<div class="container hide center-align" data-scroll-speed="5" id="paso">
					<span>0/11</span>
				</div>
				
		    	<div class="container hide" id="paso0" data-scroll-speed="5">
			    	<div class="row animated fadeInUp">
						<div class="col m10 offset-m1">
							<div class="row">
								<div class="col s6 offset-s3 m4 offset-m4">
									<img src="assets/img/logo-voluntarios.png" class="responsive-img">		
								</div>
							</div>
						</div>
			    	</div>
					<div class="row animated fadeInDown">
						<div class="col s12 center-align">
							<h2>¿QUIERES SER UNO DE LOS<br>VOLUNTARIOS POR EL OCEANO?</h2>	
							<a href="javascript:void(0);" class="btn waves-effect waves-light next" data-next="#paso1">Postula aquí</a>		
						</div>
					</div>
		    	</div>
		    	<div class="container" id="paso1" style="display:none;" data-scroll-speed="5">
					<div class="row">
						<div class="col s12 m8 offset-m2 center-align">
							<h2>conoce las tres<br>etapas de postulación</h2>	
						</div>
					</div>
					<div class="row">
						<div class="col s12 m6 offset-m3 center-align">
							<p>1.- Deberás ingresar tus datos en un formulario y convencernos del porqué quieres ser uno de los 4 voluntarios por el océano. El equipo de Corona y Parley pre-seleccionarán los candidatos que avanzarán a la siguiente etapa.</p>
 
							<p>2.- En la segunda etapa agendaremos una entrevista personal y los 10 mejores candidatos serán invitados a grabar un video, que será sometido a votación pública. Los 4 videos más votados, ganarán y viajarán a las Islas Maldivas a descubrir cómo cuidar nuestros océanos.</p>

							<p>3.- A LA VUELTA DEL VIAJE LOS 4 VOLUNTARIOS ESTARÁN LISTOS PARA SER LOS AGENTES DE CAMBIO, Y JUNTO A CORONA (QUE REMUNERARÁ A LOS GANADORES), CONTRIBUIRÁN AL CUIDADO Y LIMPIEZA DE LAS COSTAS DE NUESTRO PAÍS.</p>
</p>
							<a href="javascript:void(0);" class="btn waves-effect waves-light next">Siguiente</a>		
						</div>
					</div>
		    	</div>
		    	<div class="container" id="paso2" style="display:none;" data-scroll-speed="5">
					<div class="row">
						<div class="col s12 m8 offset-m2 center-align">
							<h2>AHORA, INGRESA TUS DATOS<br>PERSONALES</h2>	
						</div>
					</div>
					<div class="row">
						<form class="col s12 m6 offset-m3" id="formDatos" action="ajax/graba.php">
							<div class="row">
								<div class="input-field col s12">
									<input id="nombre" type="text" name="nombre" >
									<label for="nombre">Nombre</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="apellido" type="text" name="apellido" >
									<label for="apellido">Apellido</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="rut" type="text" name="rut" >
									<label for="rut">Rut</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="edad" type="number" name="edad" >
									<label for="edad">Edad</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<select id="region" name="region" >
										<option value="" selected>REGIÓN</option>
										<?php
									  	$resultado = $db->rawQuery('select * from region');
										if($resultado){
											foreach ($resultado as $r) {
												$region_id   = $r["region_id"];
												$region_nombre  = $r["region_nombre"];
										?>
										<option value="<?php echo $region_id; ?>"><?php echo $region_nombre; ?></option>
											<?php
													}
												}
											?>
									</select>
<!-- 									<label for="region">REGIÓN</label> -->
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<select id="comuna" name="comuna" >
				                		<option value="">CIUDAD</option>
									</select>									
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="telefono" type="text" name="telefono" >
									<label for="telefono">Teléfono</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="email" type="email" name="email" >
									<label for="email">Email</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">	
								    <p>
								      <input type="checkbox" id="disponible"  name="disponible" value="1"/>
								      <label for="disponible">¿Estás disponible para viajar una semana en Enero a las Islas Maldivas?</label>
								    </p>
								    <p>
								      <input type="checkbox" id="pasaporte"  name="pasaporte" value="1"/>
								      <label for="pasaporte">¿Tienes pasaporte vigente hasta Julio del 2018?</label>
								    </p>
								    <p>
								      <input type="checkbox" id="quiero" name="quiero" value="1"/>
								      <label for="quiero">Quiero suscribirme para recibir información de voluntarios por el océano en mi correo</label>
								    </p>
								</div>
							</div>
							<div class="row hide" id="progreso">
								<div class="col s12">
									<div class="progress">
										<div class="indeterminate"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnForm">Siguiente</button>
								</div>
							</div>
						</form>
					</div>
		    	</div>
		    	<div class="container" id="paso3" style="display:none;" data-scroll-speed="5">
					<div class="row">
						<div class="col s12 m8 offset-m2 center-align">
							<h3>Indica si estás de acuerdo o no con la siguiente afirmación:</h3>
							<h2>“Me gusta estar al aire libre, siento que es algo indispensable para mi vida”</h2>	
						</div>
					</div>
					<div class="row">
						<form class="col s12 m6 offset-m3" action="ajax/actualizaP1.php" id="formP1">
							<div class="row">
								<div class="col s12 center-align">	
									<p>
										<input class="with-gap" name="posP1" type="radio" id="test1" value="1" />
									    <label for="test1">Totalmente de acuerdo</label>
									</p>	
									<p>
										<input class="with-gap" name="posP1" type="radio" id="test2" value="2" />
									    <label for="test2">Algo de acuerdo</label>
									</p>	
									<p>
										<input class="with-gap" name="posP1" type="radio" id="test3" value="3"  />
									    <label for="test3">Ni de acuerdo ni en desacuerdo</label>
									</p>	
									<p>
										<input class="with-gap" name="posP1" type="radio" id="test4" value="4" />
									    <label for="test4">Algo en desacuerdo</label>
									</p>	
									<p>
										<input class="with-gap" name="posP1" type="radio" id="test5" value="5" />
									    <label for="test5">Totalmente en desacuerdo</label>
									</p>
									<input type="hidden" class="posID" name="posID">
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnP1">Siguiente</button>
								</div>
							</div>
						</form>
					</div>
		    	</div>
		    	<div class="container" id="paso4" style="display:none;" data-scroll-speed="5">
					<div class="row">
						<div class="col s12 m8 offset-m2 center-align">
							<!-- <h3>Indica si estás de acuerdo o no con la siguiente afirmación:</h3> -->
							<h2>De los siguientes aspectos, selecciona cuáles son para ti los 4 de mayor relevancia: </h2>	
						</div>
					</div>
					<div class="row">
						<form class="col s12 m6 offset-m3" action="ajax/actualizaP2.php" id="formP2">
							
							<div class="row">
								<div class="col s12 center-align">	
								    <p>
								      <input type="checkbox" id="trabajar"  name="posP2a" value="1"/>
								      <label for="trabajar">Trabajar</label>
								    </p>
								    <p>
								      <input type="checkbox" id="viajar"  name="posP2b" value="1"/>
								      <label for="viajar">Viajar</label>
								    </p>
								    <p>
								      <input type="checkbox" id="tiempo" name="posP2c" value="1"/>
								      <label for="tiempo">Pasar tiempo con mi familia/amigos</label>
								    </p>
								    <p>
								      <input type="checkbox" id="conocer" name="posP2d" value="1"/>
								      <label for="conocer">Conocer gente nueva</label>
								    </p>
								    <p>
								      <input type="checkbox" id="carretear" name="posP2e" value="1"/>
								      <label for="carretear">Carretear</label>
								    </p>
								    <p>
								      <input type="checkbox" id="practicar" name="posP2f" value="1"/>
								      <label for="practicar">Practicar algún deporte</label>
								    </p>
								    <p>
								      <input type="checkbox" id="realizar" name="posP2g" value="1"/>
								      <label for="realizar">Realizar alguna actividad artística</label>
								    </p>
									<input type="hidden" class="posID" name="posID">
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnP2">Siguiente</button>
								</div>
							</div>
						</form>
					</div>
		    	</div>
		    	<div class="container" id="paso5" style="display:none;" data-scroll-speed="5">
					<div class="row">
						<div class="col s12 m8 offset-m2 center-align">
							<!-- <h3>Indica si estás de acuerdo o no con la siguiente afirmación:</h3> -->
							<h2>De las siguientes frases, selecciona las tres con las cuales te sientes más identificado: </h2>	
						</div>
					</div>
					<div class="row">
						<form class="col s12 m6 offset-m3" action="ajax/actualizaP3.php" id="formP3">
							<div class="row">
								<div class="col s12 center-align">	
								    <p>
								      <input type="checkbox" id="expresar"  name="posP3a" value="1"/>
								      <label for="expresar">Expresar mis ideas y compartirlas con los demás para inspirarlos/motivarlos</label>
								    </p>
								    <p>
								      <input type="checkbox" id="diversas"  name="posP3b" value="1"/>
								      <label for="diversas">Conocer acerca de las diversas culturas y sus estilos de vida diferentes</label>
								    </p>
								    <p>
								      <input type="checkbox" id="destino" name="posP3c" value="1"/>
								      <label for="destino">Destino mucho tiempo conectado a las redes sociales</label>
								    </p>
								    <p>
								      <input type="checkbox" id="prefiero" name="posP3d" value="1"/>
								      <label for="prefiero">Prefiero salir a discoteques y pubs cuando carreteo</label>
								    </p>
								    <p>
								      <input type="checkbox" id="acatar" name="posP3e" value="1"/>
								      <label for="acatar">Es muy importante para mí acatar las normas sociales</label>
								    </p>
								    <p>
								      <input type="checkbox" id="vivir" name="posP3f" value="1"/>
								      <label for="vivir">Vivir la experiencia de grandes festivales, por ej de música, arte, deportes, etc…</label>
								    </p>
								    <p>
								      <input type="checkbox" id="deportes" name="posP3g" value="1"/>
								      <label for="deportes">Practicar deportes al aire libre</label>
								    </p>
								    <p>
								      <input type="checkbox" id="pienso" name="posP3h" value="1"/>
								      <label for="pienso">Pienso que el éxito consiste en convertirte en una celebridad</label>
								    </p>
								    <p>
								      <input type="checkbox" id="populares" name="posP3i" value="1"/>
								      <label for="populares">Me gusta viajar a sitios populares, que están de moda</label>
								    </p>
								    <p>
								      <input type="checkbox" id="sencilla" name="posP3j" value="1"/>
								      <label for="sencilla">Me gusta llevar una vida sencilla, cómoda pero sin grandes lujos </label>
								    </p>
									<input type="hidden" class="posID" name="posID">
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnP3">Siguiente</button>
								</div>
							</div>
						</form>
					</div>
		    	</div>
		    	<div class="container" id="paso6" style="display:none;" data-scroll-speed="5">
					<div class="row">
						<div class="col s12 m8 offset-m2 center-align">
							<h2>¿Cuán involucrado estás con el cuidado del medio ambiente? </h2>	
						</div>
					</div>
					<div class="row">
						<form class="col s12 m6 offset-m3" action="ajax/actualizaP4.php" id="formP4">
							
							<div class="row">
								<div class="col s12 center-align">	
									<p>
										<input class="with-gap" name="posP4" type="radio" id="paso6a" value="1" />
									    <label for="paso6a">Mucho, dedico parte de mi vida al voluntariado </label>
									</p>	
									<p>
										<input class="with-gap" name="posP4" type="radio" id="paso6b" value="2"  />
									    <label for="paso6b">Bastante, he participado en causas sociales</label>
									</p>	
									<p>
										<input class="with-gap" name="posP4" type="radio" id="paso6c" value="3" />
									    <label for="paso6c">Poco, pero me gustaría involucrarme más</label>
									</p>	
									<p>
										<input class="with-gap" name="posP4" type="radio" id="paso6d" value="4" />
									    <label for="paso6d">Nada, no me preocupa en lo absoluto</label>
									</p>
									<input type="hidden" class="posID" name="posID">
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnP4">Siguiente</button>
								</div>
							</div>
						</form>
					</div>
		    	</div>
		    	<div class="container" id="paso7" style="display:none;" data-scroll-speed="5">
					<div class="row">
						<div class="col s12 m8 offset-m2 center-align">
							<h2>¿Qué actividades cotidianas realizas para preservar el cuidado del medio ambiente? </h2>	
						</div>
					</div>
					<div class="row">
						<form class="col s12 m6 offset-m3" action="ajax/actualizaP5.php" id="formP5">
							  <div class="row">
							        <div class="input-field col s12">
							          <textarea id="posP5" class="materialize-textarea" data-length="1500" name="posP5"></textarea>
									  <input type="hidden" class="posID" name="posID">
							        </div>
							  </div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnP5">Siguiente</button>
								</div>
							</div>
						</form>
					</div>
		    	</div>
		    	<div class="container" id="paso8" style="display:none;" data-scroll-speed="5">
					<div class="row">
						<div class="col s12 m8 offset-m2 center-align">
							<h2>De las siguientes problemáticas ambientales, selecciona cuáles de ellas representan una preocupación para tí.</h2>
							<h3>Selecciona todas las que apliquen:</h3>	
						</div>
					</div>
					<div class="row">
						<form class="col s12 m6 offset-m3" action="ajax/actualizaP6.php" id="formP6">
							
							<div class="row">
								<div class="col s12 center-align">	
								    <p>
								      <input type="checkbox" id="atmosferica"  name="posP6a" value="1"/>
								      <label for="atmosferica">Contaminación atmosférica</label>
								    </p>
								    <p>
								      <input type="checkbox" id="deforestacion"  name="posP6b" value="1"/>
								      <label for="deforestacion">Deforestación</label>
								    </p>
								    <p>
								      <input type="checkbox" id="oceanica" name="posP6c" value="1"/>
								      <label for="oceanica">Contaminación oceánica</label>
								    </p>
								    <p>
								      <input type="checkbox" id="ozono" name="posP6d" value="1"/>
								      <label for="ozono">Deterioro de la capa de ozono</label>
								    </p>
								    <p>
								      <input type="checkbox" id="desertizacion" name="posP6e" value="1"/>
								      <label for="desertizacion">Desertización</label>
								    </p>
								    <p>
								      <input type="checkbox" id="suelos" name="posP6f" value="1"/>
								      <label for="suelos">Agotamiento de los suelos</label>
								    </p>
								    <p>
								      <input type="checkbox" id="radiactivos" name="posP6g" value="1"/>
								      <label for="radiactivos">Generación de desechos radiactivos</label>
								    </p>
								    <p>
								      <input type="checkbox" id="ninguna" name="posP6h" value="1"/>
								      <label for="ninguna">Ninguna</label>
								    </p>
									  <input type="hidden" class="posID" name="posID">
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnP5">Siguiente</button>
								</div>
							</div>
						</form>
					</div>
		    	</div>
		    	<div class="container" id="paso9" style="display:none;" data-scroll-speed="5">
					<div class="row">
						<div class="col s12 m8 offset-m2 center-align">
							<h2>Cuéntanos cuál es tu relación con el Océano</h2>	
						</div>
					</div>
					<div class="row">
						<form class="col s12 m6 offset-m3" action="ajax/actualizaP7.php" id="formP7">
							      <div class="row">
							        <div class="input-field col s12">
							          <textarea id="posP7" class="materialize-textarea" data-length="1500" name="posP7"></textarea>
									  <input type="hidden" class="posID" name="posID">
							        </div>
							  </div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnP5">Siguiente</button>
								</div>
							</div>
						</form>
					</div>
		    	</div>
		    	<div class="container" id="paso10" style="display:none;" data-scroll-speed="5">
					<div class="row">
						<div class="col s12 m8 offset-m2 center-align">
							<h2>¿Por qué eres la persona indicada para representar a Corona en su causa por la limpieza de Océanos? </h2>	
						</div>
					</div>
					<div class="row">
						<form class="col s12 m6 offset-m3" action="ajax/actualizaP8.php" id="formP8">
							  <div class="row">
							        <div class="input-field col s12">
							          <textarea id="posP8" class="materialize-textarea" data-length="1500" name="posP8"></textarea>
									  <input type="hidden" class="posID" name="posID">
							        </div>
							  </div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnP5">Siguiente</button>
								</div>
							</div>
						</form>
					</div>
		    	</div>
		    	<div class="container" id="paso11" style="display:none;" data-scroll-speed="5">
					<div class="row">
						<div class="col s12 m8 offset-m2 center-align">
							<img src="assets/img/imagen_kv_web.jpg" class="responsive-img">	
						</div>
					</div>
					<div class="row">
						<div class="col s12 center-align">
							 <p class="comparte">Comparte esta imagen usando <span>#voluntariosporeloceano</span><br>
							 para completar tu postulación.</p>
						</div>
					</div>
					 <div class="row">
				        <div class="col s12 center-align">
				          <a class="icon" href="whatsapp://send?text=https://s219687.gridserver.com/clientes/modo/corona/parley/" data-action="share/whatsapp/share" >
				            <i class="fa fa-whatsapp circle green"></i>
				          </a>
				
				          
					          <a class="icon" href="javascript:void(0);" rel="nofollow" title="Click to share this post on Twitter" onclick="return tw_click();" >
				            <i class="fa fa-twitter circle blue"></i>
				          </a>
				
				          <a class="icon" href="javascript:void(0);" rel="nofollow" onclick="return fbs_click();" target="_blank" >
				            <i class="fa fa-facebook circle blue darken-4"></i>
				          </a>

			
				          
				        </div> <!-- /.col -->
				      </div> <!-- /.row -->
		    	</div>
		    </div>		    
	    </section>	    
	    
 		<footer class="page-footer hide">
          <div class="container">
            <div class="row">
              <div class="col s12 center-align">
                <h6><a href="javascript:void(0);" target="_blank" class="white-text">bases legales</a> · <a href="javascript:void(0);" target="_blank" class="white-text">términos y condiciones</a> · <a href="javascript:void(0);" target="_blank" class="white-text">PREGUNTAS FRECUENTES</a></h6>
                <p class="grey-text text-lighten-4">Corona 2017</p>
                <h5>
	                <a href="https://www.instagram.com/cerveza_corona/" target="_blank" class="white-text"><i class="fa fa-instagram" aria-hidden="true"></i></a> 
					<a href="https://www.facebook.com/cervezacoronachileoficial" target="_blank" class="white-text"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> 
					<a href="https://twitter.com/cerveza_corona?lang=es" target="_blank" class="white-text"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
					<a href="https://www.youtube.com/user/CervezaCoronaChile" target="_blank" class="white-text"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				</h5>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            
            </div>
          </div>
        </footer>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>     
      <script type="text/javascript" src="assets/js/jquery.rut.min.js"></script>
      <script type="text/javascript" src="assets/js/corona.js?v=1.3.4"></script>
    </body>
  </html>
        