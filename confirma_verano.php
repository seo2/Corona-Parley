<?php
	require_once("ajax/_lib/config.php");
	require_once("ajax/_lib/MysqliDb.php");
	$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	
	$posID		= filter_var($_GET["posID"], FILTER_SANITIZE_STRING);
	$ami		= filter_var($_GET["ami"], FILTER_SANITIZE_STRING);
	


	require_once 'Mobile_Detect.php';
	$detect = new Mobile_Detect;

	$deviceType 	= ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
	$scriptVersion 	= $detect->getScriptVersion();

		$ok = 0;
		$resultado = $db->rawQuery('select * from verano where posID='.$posID.' and enviado = 1');
		if($resultado){
			foreach ($resultado as $r) {
				$posID 		= $r["posID"]; 
				$posNom 	= $r["posNom"]; 	
				$posApe 	= $r["posApe"]; 	
				$posRut 	= $r["posRut"]; 	
				$posMail 	= $r["posMail"]; 	
				$posFono 	= $r["posFono"]; 	
				$posReg 	= $r["posReg"];	
				$posNomAmi 	= $r["posNomAmi"]; 	
				$posMailAmi = $r["posMailAmi"]; 	
				$posFonoAmi	= $r["posFonoAmi"]; 	
				$posFecha 	= $r["posFecha"]; 	
				$posFecha2 	= $r["posFecha2"]; 
				$posEst 	= $r["posEst"]; 	
				$posTS 		= $r["posTS"]; 	
				$posPlaya 	= $r["posPlaya"]; 	
				$ok 		= 1;
			}
		}  
	
		
	
		function laplaya($laplaya){
			if($laplaya=="Arica"){
				$playa = "Arica";
			}elseif($laplaya=="Iquique"){
				$playa = "Iquique";
			}elseif($laplaya=="Antofagasta"){
				$playa = "Antofagasta";
			}elseif($laplaya=="Caldera"){
				$playa = "Caldera";
			}elseif($laplaya=="BahaInglesa"){
				$playa = "Bahía Inglesa";
			}elseif($laplaya=="Totoralillo"){
				$playa = "Totoralillo";
			}elseif($laplaya=="Quintero"){
				$playa = "Quintero";
			}elseif($laplaya=="Guanaqueros"){
				$playa = "Guanaqueros";
			}elseif($laplaya=="Maitencillo"){
				$playa = "Maitencillo";
			}elseif($laplaya=="Pichilemu"){
				$playa = "Pichilemu";
			}elseif($laplaya=="Puertecillo"){
				$playa = "Puertecillo";
			}elseif($laplaya=="Valdivia"){
				$playa = "Valdivia";
			}elseif($laplaya=="Cobquecura"){
				$playa = "Cobquecura";
			}elseif($laplaya=="Chilo"){		
				$playa = "Chiloé";
			}elseif($laplaya=="Curanipe"){		
				$playa = "Curanipe";
			}elseif($laplaya=="Concn"){		
				$playa = "Concón";
			}elseif($laplaya=="La Serena"){		
				$playa = "La Serena";
			}	
			return $playa;
		}



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
<!--
		<script>
			console.log(Cookies.get('oldenough'));
			if(Cookies.get('oldenough')!='1'){
				window.location.href = "agegate.php";
			}
			
		</script>
-->

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
		     <div id="redes" data-scroll-speed="8">
		    	<p class="center-align animated fadeIn">
	                <a href="https://www.instagram.com/cerveza_corona/" target="_blank" class=""><i class="fa fa-instagram" aria-hidden="true"></i></a> 
			    	<a href="https://www.facebook.com/cervezacoronachileoficial" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> 
			    	<a href="https://twitter.com/cerveza_corona?lang=es" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="https://www.youtube.com/user/CervezaCoronaChile" target="_blank" class=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>			    
			    </p>
		    </div>
		    
			<div class="container">
				<div class="row">
					<div class="col m8 offset-m2">
						<div class="row" id="logohome">
							<div class="col s12 m6 offset-m3" data-scroll-speed="2">
								<img src="assets/img/logos_VxO_sitio_blanco.png" class="responsive-img animated fadeInDown logo">
							</div>
						</div>
					</div>
				</div>
				<?php if($ok==1){ ?>
				<div class="row center-align">
					<div class="col s12">
						<div class="row" style="margin-bottom: 0;">
							<div class="col s12" data-scroll-speed="3">
								
								<?php if($_GET["ami"]){ ?>
								<h1>Hola <?php echo $posNomAmi; ?>, gracias por confirmar.</h1>
								<?php 
	
										$data = Array (
											"posEstAmi" 	=> 1
										);									
										$db->where ('posID', $posID);
										$db->where ('enviado', 1);
										if ($db->update ('verano', $data)){
											//echo $posID;
										}else{
											//echo 'error';
										}	
									
									
									}else{ ?>
								<h1>Hola <?php echo $posNom; ?>, gracias por confirmar.</h1>
								<?php 
										$data = Array (
											"posEst" 	=> 1
										);
										
										$db->where ('posID', $posID);
										$db->where ('enviado', 1);
										if ($db->update ('verano', $data)){
											//echo $posID;
										}else{
											//echo 'error';
										}										
									
									
									} ?>
							</div>
						</div>	
						<div class="row">
							<div class="col m8 offset-m2"data-scroll-speed="4">
								<?php if($posFecha2){
									$posFecha = $posFecha2;
								} ?>
								<p class="animated fadeIn">Te esperamos en <?php echo laplaya($posPlaya); ?> el <?php echo $posFecha; ?></p>
							</div>
						</div>						
					</div>
				</div>
				<?php }else{ ?>
				<div class="row center-align">
					<div class="col s12">
						<div class="row" style="margin-bottom: 0;">
							<div class="col s12" data-scroll-speed="3">
								<h1>Lo sentimos.</h1>
							</div>
						</div>	
						<div class="row">
							<div class="col m8 offset-m2"data-scroll-speed="4">
								<p class="animated fadeIn">Debes esperar el mail de confirmación.</p>
							</div>
						</div>						
					</div>
				</div>
				<?php } ?>
				<div class="row">
					<div class="col s12 m4 offset-m4 center-align">
						<a href="index.php" class="btn waves-effect waves-light">IR AL SITIO</a>
					</div>
				</div>
			</div>
			
	    </section>
	    
	    
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
        