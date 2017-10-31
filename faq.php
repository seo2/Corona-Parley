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
		<link type="text/css" rel="stylesheet" href="assets/css/corona2.css?v=1.3.3"  media="screen,projection"/>
      
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
			
		<script type="text/javascript" src="assets/js/js.cookie.js"></script>
		<script>
			console.log(Cookies.get('oldenough'));
			if(Cookies.get('oldenough')!='1'){
				window.location.href = "agegate.php";
			}
			
		</script>


		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108488388-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-108488388-1');
		</script>     
      
    </head>
    <body class="faq">
	    
	    <section id="profundidad" class="hide">
		    <div id="p1">
			    <div id="mancha1" data-scroll-speed="4">
			    	<img src="assets/img/mancha-1.png" class="responsive-img">
			    </div>
			    <div id="mancha2" data-scroll-speed="3">
			    	<img src="assets/img/mancha-1.png" class="responsive-img">
			    </div>
			    <div id="mancha3" data-scroll-speed="3">
			    	<img src="assets/img/mancha-1.png" class="responsive-img">
			    </div>
		    	<div class="container" id="porque">
					<div class="row" >
						<div class="col s12">
							<div class="row">
								<div class="col s4 offset-s4">
									<img src="assets/img/logo-voluntarios.png" class="responsive-img animated fadeInDown">
								</div>
							</div>
						</div>
					</div>
					<div class="row pregunta">
						<div class="col s12">
							<h1 class="center-align"><i>PREGUNTAS FRECUENTES</i></h1>
							
							<h2 class="center-align">1.¿Qué es Voluntarios Por El Océano?</h2>
							<p class="center-align animated fadeIn">Es una campaña que realiza Cerveza Corona Chile,  para fomentar la protección y<br> cuidado de playas de Chile, enfocada en los desechos plásticos.<br>
Es por lo anterior que realizaremos una convocatoria y selección de 4<br> voluntarios para que viajen a Islas Maldivas a aprender sobre la protección<br> de playas y volver a aplicar todo lo aprendido en las costas de Chile.</p>	
	
 
							<h2 class="center-align">2. ¿Cómo puedo ser un Voluntario Por El Océano?</h2>
							
							<p class="center-align animated fadeIn">Para ser parte de Voluntarios Por El Océano y viajar a Islas Maldivas deberás<br>ingresar tus datos en www.VoluntariosPorElOceano.cl y convencernos de por<br> qué quieres ser uno de los 4 Voluntarios Por El Océano. Puedes postular hasta el<br> 22 de noviembre. <br>
							El siguiente paso agendaremos una entrevista personal, donde seleccionaremos a<br> los mejores candidatos. El 7 de diciembre, se anunciarán los pre-seleccionados<br> por nuestro jurado. Si fuiste seleccionado, entrarás a la segunda etapa de<br> selección donde deberás hacer un video, que será sometido a votación pública en<br> nuestro sitio web.<br>
							A partir del 7 de diciembre hasta el 17 de diciembre será la etapa de votación,<br> donde los 4 videos más votados, ganarán y viajarán a Islas Maldivas a descubrir<br> cómo cuidar nuestros océanos.<br> 
							El 18 de diciembre, se anunciarán a los 4 ganadores en la página de Facebook y en<br> el sitio web. Recuerda que todos los días podemos ser Voluntarios Por El Océano,<br> tomando conciencia y protegiendo nuestras costas del plástico.</p>
 


<h2 class="center-align">3. ¿Qué harán los 4  voluntarios después del viaje a Islas Maldivas?</h2>
 
<p class="center-align animated fadeIn">A la vuelta del viaje, los 4 voluntarios estarán listos para ser los agentes de<br> cambio, y junto a Corona, ayudarán a inspirar y difundir sobre la problemática,<br> además contribuirán al cuidado y limpieza de las costas de nuestro país.<br>Este compromiso prevé una remuneración.</p>

<h2 class="center-align">3B) ¿que pasa si yo tengo un trabajo, puedo participar igual?</h2>

<p class="center-align animated fadeIn">Si, por supuesto, ya que el compromiso requerido se adaptará a tus<br>disponibilidades horarias.</p>



<h2 class="center-align">4. ¿Cuáles son los requisitos?</h2>

<p class="center-align animated fadeIn">Para postular primero debes tener la voluntad de querer ser Voluntario y<br>proteger las costas chilenas. Otros requisitos legales es que debes ser mayor de<br>edad, tener pasaporte vigente hasta Julio del 2018 al momento de viajar y ser<br>residente chileno.</p>



<h2 class="center-align">5.¿Cuánto dura Voluntario por el Océano?</h2>

<p class="center-align animated fadeIn">Si bien la campaña de Voluntarios Por El Océano empieza en octubre 2017, la idea<br>es que el trabajo de cuidado y protección de nuestras playas sea entre todos y<br>constante durante el tiempo.</p>



<h2 class="center-align">6.¿Cuáles son los objetivos?</h2>

<p class="center-align animated fadeIn">No es ningún misterio que las playas se encuentran en peligro. Por eso que el<br>objetivo es que se haga un trabajo sostenido y se naturalice el cuidado de playas<br>en nuestra sociedad. Suena ambicioso, pero es muy posible.</p>



<h2 class="center-align">7. ¿Se combate solo plástico?</h2>

<p class="center-align animated fadeIn">En una etapa inicial sí, ya que es la amenaza principal en estos momentos. En el futuro cercano esperamos poder proteger a las playas de todos los elementos que la contaminan y sea un trabajo constante entre todos.</p>



<h2 class="center-align">8. ¿En qué lugar puedo conseguir más información sobre la iniciativa sobre la protecciones de los Océanos?</h2>

<p class="center-align animated fadeIn">En esta web podrás encontrar toda la información que buscas para poder ser<br>voluntario y más.  También en <a href="http://www.coronaxparley.com/" target="_blank">www.CoronaXParley.com</a> podrás conocer de la<br>alianza que tiene Corona y Parley sobre la protección y cuidado de playas<br>en el mundo.</p>



<h2 class="center-align">9. ¿Tengo que pagar para postular?</h2>

<p class="center-align animated fadeIn">No, no hay que pagar para postular a ser un Voluntario Por El Océano. Regístrate<br>de manera gratuita y postula en esta web.</p>

						</div>
					</div>
					<div class="row" >
						<div class="col s12 m10 offset-m1">
							<div class="row">
								<div class="col s4 offset-s4">
									<img src="assets/img/logo-blanco_2.png" class="responsive-img animated fadeInDown">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<h2 class="center-align">1. ¿Qué es la alianza entre Corona y Parley For The Oceans?</h2>

							<p class="center-align animated fadeIn">Corona y Parley for the Oceans anunciaron una alianza global para hacer<br> 
frente a la contaminación marina por plástico. Un compromiso para proteger <br>
100 Islas de la contaminación marina por plástico para 2020 y convertirlas<br>en símbolos de cambio. 
</p>

							<h2 class="center-align">2. Sobre Parley for the Oceans</h2>

							<p class="center-align animated fadeIn">Parley es la red de colaboración donde creadores, pensadores y líderes se unen<br> para generar consciencia en torno a la belleza y fragilidad de nuestros océanos;<br> y colaborar en estrategias que pongan un alto a su destrucción. Basada en Nueva<br> York, Parley es reconocida por cambiar el concepto de sustentabilidad por “Eco<br> Innovación” un concepto realizado a través de sus colaboraciones de alto nivel y<br> la introducción de Ocean Plastic™, una gama de materiales Premium para las<br> industrias deportivas y de lujo hechas de desperdicio plástico marino reciclado.</p>

							<h2 class="center-align">3. ¿Por qué decidió Corona embarcarse en esta alianza?</h2>

							<p class="center-align animated fadeIn">Corona es una marca que nació en la playa, rodeada por el océano.<br> 
Existe para inspirar al mundo a desconectarse de la rutina y reconectar <br>
con su naturaleza esencial. Como una marca que celebra la vida al aire libre<br> 
y que considera a la playa y a los océanos como su hogar, Corona está comprometida con proteger su tierra natal. Pero este hogar está<br> 
en grave peligro.</p>							
						</div>
					</div>
		    	</div>
		    </div>
	    </section>	    
	    
 		<footer class="page-footer hide">
          <div class="container">
            <div class="row">
              <div class="col s12 center-align">
                <h6><a href="Corona_Voluntarios_por_el_Oceano_bases_concurso_2017_v3.pdf" target="_blank" class="white-text">bases legales</a> <!-- · <a href="javascript:void(0);" target="_blank" class="white-text">términos y condiciones</a> --> · <a href="javascript:void(0);" target="_blank" class="white-text">PREGUNTAS FRECUENTES</a></h6>
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
      <script type="text/javascript" src="assets/js/corona.js?v=1.3.5"></script>
    </body>
  </html>
        