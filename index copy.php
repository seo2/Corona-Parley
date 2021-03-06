<?php
// Include FB config file && User class
require_once 'fbConfig.php';
require_once 'user.php';

$conectado = 0;

if(isset($accessToken)){
    if(isset($_SESSION['facebook_access_token'])){
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }else{
        // Put short-lived access token in session
        $_SESSION['facebook_access_token'] = (string) $accessToken;
        
          // OAuth 2.0 client handler helps to manage access tokens
        $oAuth2Client = $fb->getOAuth2Client();
        
        // Exchanges a short-lived access token for a long-lived one
        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
        $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
        
        // Set default access token to be used in script
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }
    
    // Redirect the user back to the same page if url has "code" parameter in query string
    if(isset($_GET['code'])){
        header('Location: ./');
    }
    
    // Getting user facebook profile info
    try {
        $profileRequest = $fb->get('/me?fields=name,first_name,last_name,email,link,gender,locale,picture');
        $fbUserProfile = $profileRequest->getGraphNode()->asArray();
    } catch(FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        session_destroy();
        // Redirect user back to app login page
        header("Location: ./");
        exit;
    } catch(FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }
    
    // Initialize User class
    $user = new User();
    
    // Insert or update user data to the database
    $fbUserData = array(
        'oauth_provider'=> 'facebook',
        'oauth_uid'     => $fbUserProfile['id'],
        'first_name'    => $fbUserProfile['first_name'],
        'last_name'     => $fbUserProfile['last_name'],
        'email'         => $fbUserProfile['email'],
        'gender'        => $fbUserProfile['gender'],
        'locale'        => $fbUserProfile['locale'],
        'picture'       => $fbUserProfile['picture']['url'],
        'link'          => $fbUserProfile['link']
    );
    $userData = $user->checkUser($fbUserData);
    
    // Put user data into session
    $_SESSION['userData'] = $userData;
    
    // Get logout url
    $logoutURL = $helper->getLogoutUrl($accessToken, $redirectURL.'logout.php');
    
    // Render facebook profile data
    if(!empty($userData)){
/*
        $output  = '<h1>Facebook Profile Details </h1>';
        $output .= '<img src="'.$userData['picture'].'">';
        $output .= '<br/>Facebook ID : ' . $userData['oauth_uid'];
        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        $output .= '<br/>Email : ' . $userData['email'];
        $output .= '<br/>Gender : ' . $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Facebook';
        $output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Facebook Page</a>';
        $output .= '<br/>Logout from <a href="'.$logoutURL.'">Facebook</a>'; 
*/
		$conectado = 1;

    }else{
/*         $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>'; */
       

    }
    
}else{
    // Get login url
    $loginURL = $helper->getLoginUrl($redirectURL, $fbPermissions);
    
    // Render facebook login button
    $output = '<a href="'.htmlspecialchars($loginURL).'" class="btn btn-primary btn-azul" href="#" role="button">inicia con facebook</a>';
}
?>
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
							<div class="col s12 m6 offset-m3" data-scroll-speed="2">
								<img src="assets/img/logos_VxO_sitio_blanco.png" class="responsive-img animated fadeInDown logo">
							</div>
						</div>
					</div>
				</div>
				<div class="row center-align">
					<div class="col s12 m8 offset-m2" data-scroll-speed="3">
						<img src="assets/img/txt-home.png" class="responsive-img">
					</div>
				</div>
			</div>
			
			<a href="#profundidad" id="baja1" class="baja scroll" ><img src="assets/img/flecha-baja.png" class="responsive-img animated bounceInUp" data-scroll-speed="2" onclick="dataLayer.push({'event': 'Bajar'});"></a>
			
	    </section>
	    
	    <section id="profundidad" class="hide">
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
		    <div id="p3">
		    	<div class="container hide" id="dos-tercios"  >
					
					<div class="row animated fadeInUp">
						<div class="col m6 offset-m3">	
							<img src="assets/img/dostercios.png" class="responsive-img">	
						</div>
					</div>
					<div class="row animated fadeInDown">
						<div class="col m6 offset-m4">
							<p class="left-align animated fadeIn principal">Por lo menos dos tercios del aire que respiramos son generados por el océano. Si lo seguimos contaminando con plástico, nos quedaremos sin oxígeno.</p>			
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
			<div id="p6">
				<?php include('voluntarios.php'); ?>
				<?php include('verano.php'); ?>
		    </div>		    
	    </section>	    
	    
 		<footer class="page-footer hide">
          <div class="container">
            <div class="row">
              <div class="col s12 center-align">
                <h6><a href="Corona_Voluntarios_por_el_Oceano_bases_concurso_2017_v3.pdf" target="_blank" class="">bases legales</a> <!-- · <a href="javascript:void(0);" target="_blank" class="">términos y condiciones</a> --> <!-- · <a href="faq.php" target="_blank" class="">PREGUNTAS FRECUENTES</a> --></h6>
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
      <script type="text/javascript" src="assets/js/corona2.js?v=1.6"></script>
<?php 
	if($conectado==1){ 
?>	
	<script>
		$('.p2').removeClass('hide');
		$('#l2').removeClass('hide');
		$('#dos-tercios').removeClass('hide');
		$('#l3').removeClass('hide');
		$('#toneladas').removeClass('hide');
		$('#l4').removeClass('hide');
		$('#coronaseune').removeClass('hide');
		$('#l5').removeClass('hide');
		$('#etapa3a').removeClass('hide');
		$('html,body').animate({
			scrollTop: $("#etapa3a").offset().top},
		'slow');
	</script>
<?php 		
	}	
 ?>
      
      
    </body>
  </html>
        