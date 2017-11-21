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
<!--
		<script src="assets/js/pace.js"></script>
		<link href="assets/css/pace-theme-big-counter.css" rel="stylesheet" />
-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="assets/css/animate.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="assets/css/corona2.css?v=1.8"  media="screen,projection"/>
      
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@cerveza_corona">
		<meta name="twitter:title" content="Corona y Parley están buscando a 4 voluntarios.">
		<meta name="twitter:description" content="Viaja a Islas Maldivas y descubre cómo puedes ayudar a combatir la contaminación de plásticos en nuestros océanos.">
		<meta name="twitter:image" content="http://voluntariosporeloceano.cl/assets/img/imagen_kv_web.jpg?v=2">      

		<meta property="og:type" content="article">
		<meta property="og:title" content="Corona: Voluntarios por el Océano">
		<meta property="og:site_name" content="Corona: Voluntarios por el Océano">
		<meta property="og:url" content="http://voluntariosporeloceano.cl/">
		<meta property="og:image" content="http://voluntariosporeloceano.cl/assets/img/imagen_kv_web.jpg?v=2">
		<meta property="article:published_time" content="2017-10-23">
		<meta property="article:author" content="http://cervezacorona.cl">      
			
		<script type="text/javascript" src="assets/js/js.cookie.js"></script>
		<script>
			console.log(Cookies.get('oldenough'));
			if(Cookies.get('oldenough')!='1'){
				window.location.href = "agegate.php";
			}
			
		</script>

		<!-- Facebook Pixel Code -->
		<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window,document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		 fbq('init', '534792470230801'); 
		fbq('track', 'PageView');
		</script>
		<noscript>
		 <img height="1" width="1" 
		src="https://www.facebook.com/tr?id=534792470230801&ev=PageView
		&noscript=1"/>
		</noscript>
		<!-- End Facebook Pixel Code -->

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108488388-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-108488388-1');
		</script>     
      
    </head>

    <body class="home">
	    
	    <section id="home" class="hide">
<!-- 		    <img src="assets/img/nubes.png" id="nubes" class="animated fadeInLeft" > -->
		    <div id="redes" data-scroll-speed="8">
		    	<p class="center-align animated fadeIn"><a href="https://www.facebook.com/cervezacoronachileoficial" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> <a href="https://twitter.com/cerveza_corona?lang=es" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></p>
		    </div>
		    
			<div class="container">
				<div class="row">
					<div class="col m8 offset-m2">
						<div class="row" id="logohome">
							<div class="col s12"data-scroll-speed="2">
<!-- 								<img src="assets/img/logos_VxO_sitio.png" class="responsive-img animated fadeInDown"> -->
								<img src="assets/img/logos_VxO_sitio_blanco.png" class="responsive-img animated fadeInDown logo">
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
			
			<a href="#profundidad" id="baja1" class="baja scroll" ><img src="assets/img/flecha-baja.png" class="responsive-img animated bounceInUp" data-scroll-speed="2" onclick="dataLayer.push({'event': 'Bajar'});"></a>
			
	    </section>
	    
	    <section id="profundidad" class="hide">
		    <div id="p1">
			    <div id="mancha1" data-scroll-speed="4">
			    	<img src="assets/img/mancha-1.png" class="responsive-img">
			    </div>
		    	<div class="container" id="porque">
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
							<h2 class="center-align">Los Océanos necesitan nuestra ayuda</h2>
							<p class="center-align animated fadeIn">
								CORONA Y PARLEY ESTÁN BUSCANDO A 4 VOLUNTARIOS<br>
								POR EL OCÉANO PARA VIAJAR A ISLAS MALDIVAS Y<br>
								PARTICIPAR EN PARLEY OCEAN SCHOOL, DONDE<br>
								APRENDERAN CÓMO PROTEGER NUESTROS OCÉANOS,<br>
								Y COMO APLICARLO EN LAS PLAYAS DE CHILE.</p>			
						</div>
					</div>
		    	</div>
		    </div>
		    <div id="l1">
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
		    	<div class="container" id="cada-metro">
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
							<h2 class="left-align animated fadeInUp p2 hide">Si las tendencias actuales</h2>
							<p class="right-align puntos animated fadeInDown hide p2" >. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</p>
							<p class="right-align animated fadeInDown hide p2 principal">de contaminación marina continúan,<br> en el 2050, el océano<br>tendrá más plástico que peces</p>			
						</div>
					</div>
		    	</div>
		    </div>
		    <div id="l2" class="animated fadeIn hide">
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
		    	<div class="container hide" id="dos-tercios"  >
					
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
		    <div id="l3"  class="animated fadeIn hide">
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
		    	<div class="container hide" id="toneladas" >
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
					<img src="assets/img/circulo.png" id="circulo"  class="animated fadeIn">
		    	</div>
		    </div>
		    <div id="l4"  class="animated fadeIn hide">
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
		    	<div class="container hide" id="coronaseune" >
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
								Parley es la red de colaboración<br>
								donde creadores, pensadores y líderes<br>
								se unen para generar consciencia<br>
								en torno a la belleza y fragilidad<br>
								de nuestros océanos; y colaborar<br>
								en estrategias que pongan un alto<br>
								a su destrucción. <br>
								<a href="http://www.parley.tv" target="_blank">www.parley.tv</a></p>	
								
						</div>
					</div>
			    	<p class="right-align animated fadeInRight puntos" id="l5a">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</p>
			    	<p class="right-align animated fadeInLeft puntos" id="l5b">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</p>
		    	</div>
		    </div>
		    <div id="l5"class="animated fadeIn hide">
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
				<?php include('etapa2.php'); ?>
		    </div>		    
	    </section>	    
	    
 		<footer class="page-footer hide">
          <div class="container">
            <div class="row">
              <div class="col s12 center-align">
                <h6><a href="Corona_Voluntarios_por_el_Oceano_bases_concurso_2017_v3.pdf" target="_blank" class="white-text">bases legales</a> <!-- · <a href="javascript:void(0);" target="_blank" class="white-text">términos y condiciones</a> --> · <a href="faq.php" target="_blank" class="white-text">PREGUNTAS FRECUENTES</a></h6>
                <p class="grey-text text-lighten-4">Cerveza Corona 2017</p>
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
      <script type="text/javascript" src="assets/js/corona2.js?v=1.6"></script>
    </body>
  </html>
        