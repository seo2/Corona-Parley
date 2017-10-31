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
		<link type="text/css" rel="stylesheet" href="assets/css/corona2.css?v=1.7"  media="screen,projection"/>
		
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

    <body class="agegate">	    
	    <section id="agegate">
			<div class="container">
				<div class="row">
					<div class="col m8 offset-m2">
						<div class="row" id="logohome">
							<div class="col s12">
								<img src="assets/img/logos_VxO_sitio_blanco.png" class="responsive-img animated fadeInDown logo">
							</div>
						</div>
					</div>
				</div>
				<div class="row center-align">
					<div class="col s12">
						<div class="row" style="margin-bottom: 0;">
							<div class="col s12">
								<h2>para ver este sitio debes ser mayor de edad</h2>
							</div>
						</div>	
						<div class="row">
							<div class="col s12 m6 offset-m3" >
								<form action="agegate.php" method="post" accept-charset="utf-8" class="row" id="formAge">
									<div class="col s10 offset-s1 m8 offset-m0">
										<div id="cajafecha" class="row">
											<input type="text" placeholder="DD"  	id="DD"		class="col s3 number diames autotab" maxlength="2" size="2">
											<input type="text" placeholder="MM"  	id="MM"		class="col s3 number diames autotab" maxlength="2" size="2">
											<input type="text" placeholder="AAAA"	id="AAAA" 	class="col s6 number" maxlength="4" size="4">
										</div>
									</div>
									<div class="col s6 offset-s3 m4 offset-m0">
										<button class="btn waves-effect waves-light" type="submit" id="btnForm">Aceptar</button>
									</div>
									
								</form>
							</div>
						</div>						
					</div>
				</div>
			</div>
	    </section>
	    
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="assets/js/materialize.min.js"></script>     
		<script type="text/javascript" src="assets/js/jquery.rut.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.autotab.min.js"></script>
		<script type="text/javascript" src="assets/js/js.cookie.js"></script>
		<script type="text/javascript" src="assets/js/corona2.js?v=1.5"></script>
		<script>
			$.autotab({ tabOnSelect: true });
            $('.number').autotab('filter', 'number');

			function getAge(dateString) 
			{
			    var today = new Date();
			    var birthDate = new Date(dateString);
			    var age = today.getFullYear() - birthDate.getFullYear();
			    var m = today.getMonth() - birthDate.getMonth();
			    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
			    {
			        age--;
			    }
			    return age;
			}
			
			var dateString;

			$('#formAge').on("submit", function(e) {
			  	e.preventDefault();
				
			  	dd = $('#DD').val();
			  	mm = $('#MM').val();
			  	aa = $('#AAAA').val();
			
			  	dateString = aa+"-"+mm+"-"+dd;
			  	
			  	edad = getAge(dateString);
			  	
			  	console.log(edad);
			  	
			  	if(edad>17){
				  	Cookies.set('oldenough', '1', { expires: 7, path: '' });
				  	window.location.href = "index.php";
			  	}else{
				  	alert('Lo sentimos, debes ser mayor de edad para acceder.');
			  	}
			  	
			});             
            
            
            
		</script>
	</body>
</html>
        