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
      	<meta name="description" content="Súmate a los voluntarios por el océano y limpiemos las playas de Chile.">
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
		<link type="text/css" rel="stylesheet" href="assets/css/corona2.css?v=2.1"  media="screen,projection"/>
      
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@cerveza_corona">
		<meta name="twitter:title" content="Corona y Parley están buscando a 4 voluntarios.">
		<meta name="twitter:description" content="Súmate a los voluntarios por el océano y limpiemos las playas de Chile.">
		<meta name="twitter:image" content="https://s219687.gridserver.com/clientes/modo/corona/parley/assets/img/IMAGEN_COMPARTIR-VXOWEB.jpg">      

		<meta property="og:type" content="article">
		<meta property="og:title" content="Corona: Voluntarios por el Océano">
		<meta property="og:site_name" content="Corona: Voluntarios por el Océano">
		<meta property="og:url" content="https://s219687.gridserver.com/clientes/modo/corona/parley/">
		<meta property="og:image" content="https://s219687.gridserver.com/clientes/modo/corona/parley/assets/img/IMAGEN_COMPARTIR-VXOWEB.jpg">
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

    <body class="voluntarios">
		<a href="index.php" class="voluntarios-volver"><img src="assets/mapas/volver.png" class="responsive-img"></a>
	    
    	<div class="container">
			<div class="row animated fadeInDown">
				<div class="col s12 m8 offset-m2 center-align">
					<div id="foto1" class="voluntario">
						<img src="assets/img/jose_tomas_pumarino.jpg" class="voluntarios-img">
						<div class="resena">
							<div class="row">
								<div class="col s12 m10 offset-m1">
									<div class="row">
										<div class="col s4 center-align valign-wrapper nombre">
											<p class="amarillo">José Tomás Pumarino</p>
										</div>
										<div class="col s8 center-align valign-wrapper">
											<p>Soy Jose Tomás Pumarino, tengo 25 años, Ingeniero Comercial mención economía de la Universidad de Chile, trabajo como investigador en el Observatorio de Sostenibilidad de la Facultad de Economía y Negocios de la Universidad de Chile y como Analista de Desarrollo Comercial en ESACHS.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="foto2" class="voluntario">
						<img src="assets/img/benjamin_simon.jpg" class="voluntarios-img">
						<div class="resena">
							<div class="row">
								<div class="col s12 m10 offset-m1">
									<div class="row">
										<div class="col s4 center-align valign-wrapper nombre">
											<p class="amarillo">Benjamín Simón</p>
										</div>
										<div class="col s8 center-align">
											<p>Soy Benjamín Simon, Estudiante de Ingeniería Comercial de la Universidad Adolfo Ibáñez, me encuentro saliendo del Magíster de Innovación y Emprendimiento. Tengo 25 años y me declaro un fiel amante de la naturaleza. Me dedico a un emprendimiento dedicado a transformar la industria textil, la cual es la segunda más contaminante del mundo.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="foto3" class="voluntario">
						<img src="assets/img/esteban_ramos.jpg" class="voluntarios-img">
						<div class="resena">
							<div class="row">
								<div class="col s12 m10 offset-m1">
									<div class="row">
										<div class="col s4 center-align valign-wrapper nombre">
											<p class="amarillo">Esteban Ramos</p>
										</div>
										<div class="col s8 center-align">
											<p>Mi nombre es Esteban Ramos, nací en la ciudad de Antofagasta y tengo 21 años. Actualmente vivo en Puerto Montt y estudio Ingeniería en Expediciones y Ecoturismo en la Universidad San Sebastian, en donde imparten la mención de navegación. Llevo un año trabajando en el Parque Nacional Vicente Perez Rosales ofreciendo nuestro programa turístico junto a la empresa PetroAventura.
</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="foto4" class="voluntario">
						<img src="assets/img/valeria_fuentes.jpg" class="voluntarios-img">
						<div class="resena">
							<div class="row">
								<div class="col s12 m10 offset-m1">
									<div class="row">
										<div class="col s4 center-align valign-wrapper nombre">
											<p class="amarillo">Valeria Fuentes</p>
										</div>
										<div class="col s8 center-align">
											<p>Soy Valeria Fuentes Briones, tengo 26 años, Cineasta y fotógrafa, amante de la naturaleza, trabajo para mi productora audiovisual Pejeperro Films, con la que desarrollamos proyectos con interés socioambiental.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    	</div>
	    
 		<footer class="page-footer hide">
          <div class="container">
            <div class="row">
              <div class="col s12 center-align">
                <h6><a href="Limpieza_de_Playas_Chile_bases_concurso.pdf" target="_blank" class="">bases legales</a> <!-- · <a href="javascript:void(0);" target="_blank" class="">términos y condiciones</a> --> <!-- · <a href="faq.php" target="_blank" class="">PREGUNTAS FRECUENTES</a> --></h6>
                <h5>
	                <a href="https://www.instagram.com/cerveza_corona/" target="_blank" class=""><i class="fa fa-instagram" aria-hidden="true"></i></a> 
					<a href="https://www.facebook.com/cervezacoronachileoficial" target="_blank" class=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a> 
					<a href="https://twitter.com/cerveza_corona?lang=es" target="_blank" class=""><i class="fa fa-twitter" aria-hidden="true"></i></a> 
					<a href="https://www.youtube.com/user/CervezaCoronaChile" target="_blank" class=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				</h5>
                <p class="">Cerveza Corona <?php echo date("Y"); ?></p>
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
      <script type="text/javascript" src="assets/js/corona2.js?v=1.8.2"></script>
    </body>
  </html>
        