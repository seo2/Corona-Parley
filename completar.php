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
		<link type="text/css" rel="stylesheet" href="assets/css/corona2.css?v=1.4.1"  media="screen,projection"/>
      
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

    <body class="home">
	    
	    
	    <section id="profundidad" class="hide">

			<div id="p6">
				<div id="lospasos">
<?php
		$ok = 0;
		$rut = $_GET['rut'];
		$participante = $db->rawQuery('select * from postulantes where posRut LIKE "'.$rut.'"');
		if($participante){
			foreach ($participante as $p) {
				$posID		= $p["posID"];
				$posNom  	= $p["posNom"];
				$posApe  	= $p["posApe"];
				$posRut  	= $p["posRut"];
				$posEdad  	= $p["posEdad"];
				$posMail  	= $p["posMail"];
				$posFono 	= $p["posFono"];
				$posReg  	= $p["posReg"];
				$posCom  	= $p["posCom"];
				$posDis  	= $p["posDis"];
				$posPas  	= $p["posPas"];
				$posQuiero  = $p["posQuiero"];
				$posEst  	= $p["posEst"];
				$posTS  	= $p["posTS"];
				$posP1		= $p["posP1"];
				$posP2a 	= $p["posP2a"];
				$posP2b 	= $p["posP2b"];
				$posP2c 	= $p["posP2c"];
				$posP2d 	= $p["posP2d"];
				$posP2e 	= $p["posP2e"];
				$posP2f 	= $p["posP2f"];
				$posP2g 	= $p["posP2g"];   
				$posP3a 	= $p["posP3a"]; 
				$posP3b 	= $p["posP3b"]; 
				$posP3c 	= $p["posP3c"]; 
				$posP3d 	= $p["posP3d"]; 
				$posP3e 	= $p["posP3e"]; 
				$posP3f 	= $p["posP3f"]; 
				$posP3g 	= $p["posP3g"]; 
				$posP3h 	= $p["posP3h"]; 
				$posP3i 	= $p["posP3i"]; 
				$posP3j 	= $p["posP3j"]; 
				$posP4 		= $p["posP4"]; 
				$posP5 		= $p["posP5"]; 
				$posP6a 	= $p["posP6a"]; 
				$posP6b 	= $p["posP6b"]; 
				$posP6c 	= $p["posP6c"]; 
				$posP6d 	= $p["posP6d"]; 
				$posP6e 	= $p["posP6e"]; 
				$posP6f 	= $p["posP6f"]; 
				$posP6g 	= $p["posP6g"]; 
				$posP6h 	= $p["posP6h"]; 
				$posP7 		= $p["posP7"]; 
				$posP8 		= $p["posP8"]; 
				$posShare 	= $p["posShare"]; 		
				$ok = 1;
			}
		}  
	
		if($ok==1){
		
	?>					
					<div class="container hide center-align"  id="paso">
						<span>0/11</span>
					</div>
			    	<div class="container" id="paso2" >
						<div class="row">
							<div class="col s12 m8 offset-m2 center-align">
								<h2>AHORA, ACTUALIZA TUS DATOS<br>PERSONALES</h2>	
							</div>
						</div>
						<div class="row">
							<form class="col s12 m6 offset-m3" id="formDatos" action="ajax/actualiza.php">
								<div class="row">
									<div class="input-field col s12">
										<input id="nombre" type="text" name="nombre" value="<?php echo $posNom; ?>">
										<label for="nombre" class="active">Nombre</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="apellido" type="text" name="apellido" value="<?php echo $posApe; ?>">
										<label for="apellido" class="active">Apellido</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="rut" type="text" name="rut" value="<?php echo $posRut; ?>">
										<label for="rut" class="active">Rut</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="edad" type="number" name="edad" value="<?php echo $posEdad; ?>">
										<label for="edad" class="active">Edad</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<select id="region" name="region" >
											<option value="" <?php if($posReg == "" ){ ?>selected<?php } ?>>REGIÓN</option>
											<?php
										  	$resultado = $db->rawQuery('select * from region');
											if($resultado){
												foreach ($resultado as $r) {
													$region_id   = $r["region_id"];
													$region_nombre  = $r["region_nombre"];
											?>
											<option value="<?php echo $region_id; ?>" <?php if($posReg == $region_id ){ ?>selected<?php } ?>><?php echo $region_nombre; ?></option>
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
					                		<option value="" <?php if($posCom == "" ){ ?>selected<?php } ?>>CIUDAD</option>
											<?php
										  	$resultado = $db->rawQuery('SELECT comuna_id, comuna_nombre FROM provincia p INNER JOIN comuna c ON p.provincia_id = c.comuna_provincia_id WHERE provincia_region_id = ? ORDER BY comuna_nombre ASC', Array ($posReg));
											if($resultado){
												foreach ($resultado as $r) {
													$comuna_id   	= $r["comuna_id"];
													$comuna_nombre  = $r["comuna_nombre"]; 
											?>
											<option value="<?php echo $comuna_id; ?>" <?php if($posCom == $comuna_id ){ ?>selected<?php } ?>><?php echo $comuna_nombre; ?></option>
												<?php
														}
													}
												?>				                		
										</select>									
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="telefono" type="text" name="telefono" value="<?php echo $posFono; ?>">
										<label for="telefono" class="active">Teléfono</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="email" type="email" name="email" value="<?php echo $posMail; ?>" >
										<label for="email" class="active">Email</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12 center-align">	
									    <p>
									      <input type="checkbox" id="disponible"  name="disponible" value="1" <?php if($posDis == 1 ){ ?>checked<?php } ?>/>
									      <label for="disponible">¿Estás disponible para viajar una semana en Enero a las Islas Maldivas?</label>
									    </p>
									    <p>
									      <input type="checkbox" id="pasaporte"  name="pasaporte" value="1" <?php if($posPas == 1 ){ ?>checked<?php } ?>/>
									      <label for="pasaporte">¿Tienes pasaporte vigente hasta Julio del 2018?</label>
									    </p>
									    <p>
									      <input type="checkbox" id="quiero" name="quiero" value="1" <?php if($posQuiero == 1 ){ ?>checked<?php } ?>/>
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
										<input type="hidden" name="posID" value="<?php echo $posID; ?>">
								<div class="row">
									<div class="col s12 center-align">
										<button class="btn waves-effect waves-light" type="submit" id="btnForm">Siguiente</button>
									</div>
								</div>
							</form>
						</div>
			    	</div>
			    	<div class="container" id="paso3" style="display:none;" >
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
											<input class="with-gap" name="posP1" type="radio" id="test1" value="1" <?php if($posP1 == 1 ){ ?>checked<?php } ?>/>
										    <label for="test1">Totalmente de acuerdo</label>
										</p>	
										<p>
											<input class="with-gap" name="posP1" type="radio" id="test2" value="2" <?php if($posP1 == 2 ){ ?>checked<?php } ?>/>
										    <label for="test2">Algo de acuerdo</label>
										</p>	
										<p>
											<input class="with-gap" name="posP1" type="radio" id="test3" value="3" <?php if($posP1 == 3 ){ ?>checked<?php } ?>/>
										    <label for="test3">Ni de acuerdo ni en desacuerdo</label>
										</p>	
										<p>
											<input class="with-gap" name="posP1" type="radio" id="test4" value="4" <?php if($posP1 == 4 ){ ?>checked<?php } ?>/>
										    <label for="test4">Algo en desacuerdo</label>
										</p>	
										<p>
											<input class="with-gap" name="posP1" type="radio" id="test5" value="5" <?php if($posP1 == 5 ){ ?>checked<?php } ?>/>
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
			    	<div class="container" id="paso4" style="display:none;" >
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
									      <input type="checkbox" id="trabajar"  name="posP2a" value="1" <?php if($posP2a == 1 ){ ?>checked<?php } ?>/>
									      <label for="trabajar">Trabajar</label>
									    </p>
									    <p>
									      <input type="checkbox" id="viajar"  name="posP2b" value="1" <?php if($posP2b == 1 ){ ?>checked<?php } ?>/>
									      <label for="viajar">Viajar</label>
									    </p>
									    <p>
									      <input type="checkbox" id="tiempo" name="posP2c" value="1" <?php if($posP2c == 1 ){ ?>checked<?php } ?>/>
									      <label for="tiempo">Pasar tiempo con mi familia/amigos</label>
									    </p>
									    <p>
									      <input type="checkbox" id="conocer" name="posP2d" value="1" <?php if($posP2d == 1 ){ ?>checked<?php } ?>/>
									      <label for="conocer">Conocer gente nueva</label>
									    </p>
									    <p>
									      <input type="checkbox" id="carretear" name="posP2e" value="1" <?php if($posP2e == 1 ){ ?>checked<?php } ?>/>
									      <label for="carretear">Carretear</label>
									    </p>
									    <p>
									      <input type="checkbox" id="practicar" name="posP2f" value="1" <?php if($posP2f == 1 ){ ?>checked<?php } ?>/>
									      <label for="practicar">Practicar algún deporte</label>
									    </p>
									    <p>
									      <input type="checkbox" id="realizar" name="posP2g" value="1" <?php if($posP2g == 1 ){ ?>checked<?php } ?>/>
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
			    	<div class="container" id="paso5" style="display:none;" >
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
									      <input type="checkbox" id="expresar"  name="posP3a" value="1" <?php if($posP3a == 1 ){ ?>checked<?php } ?>/>
									      <label for="expresar">Expresar mis ideas y compartirlas con los demás para inspirarlos/motivarlos</label>
									    </p>
									    <p>
									      <input type="checkbox" id="diversas"  name="posP3b" value="1" <?php if($posP3b == 1 ){ ?>checked<?php } ?>/>
									      <label for="diversas">Conocer acerca de las diversas culturas y sus estilos de vida diferentes</label>
									    </p>
									    <p>
									      <input type="checkbox" id="destino" name="posP3c" value="1" <?php if($posP3c == 1 ){ ?>checked<?php } ?>/>
									      <label for="destino">Destino mucho tiempo conectado a las redes sociales</label>
									    </p>
									    <p>
									      <input type="checkbox" id="prefiero" name="posP3d" value="1" <?php if($posP3d == 1 ){ ?>checked<?php } ?>/>
									      <label for="prefiero">Prefiero salir a discoteques y pubs cuando carreteo</label>
									    </p>
									    <p>
									      <input type="checkbox" id="acatar" name="posP3e" value="1" <?php if($posP3e == 1 ){ ?>checked<?php } ?>/>
									      <label for="acatar">Es muy importante para mí acatar las normas sociales</label>
									    </p>
									    <p>
									      <input type="checkbox" id="vivir" name="posP3f" value="1" <?php if($posP3f == 1 ){ ?>checked<?php } ?>/>
									      <label for="vivir">Vivir la experiencia de grandes festivales, por ej de música, arte, deportes, etc…</label>
									    </p>
									    <p>
									      <input type="checkbox" id="deportes" name="posP3g" value="1" <?php if($posP3g == 1 ){ ?>checked<?php } ?>/>
									      <label for="deportes">Practicar deportes al aire libre</label>
									    </p>
									    <p>
									      <input type="checkbox" id="pienso" name="posP3h" value="1" <?php if($posP3h == 1 ){ ?>checked<?php } ?>/>
									      <label for="pienso">Pienso que el éxito consiste en convertirte en una celebridad</label>
									    </p>
									    <p>
									      <input type="checkbox" id="populares" name="posP3i" value="1" <?php if($posP3i == 1 ){ ?>checked<?php } ?>/>
									      <label for="populares">Me gusta viajar a sitios populares, que están de moda</label>
									    </p>
									    <p>
									      <input type="checkbox" id="sencilla" name="posP3j" value="1" <?php if($posP3j == 1 ){ ?>checked<?php } ?>/>
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
			    	<div class="container" id="paso6" style="display:none;" >
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
											<input class="with-gap" name="posP4" type="radio" id="paso6a" value="1" <?php if($posP4 == 1 ){ ?>checked<?php } ?>/>
										    <label for="paso6a">Mucho, dedico parte de mi vida al voluntariado </label>
										</p>	
										<p>
											<input class="with-gap" name="posP4" type="radio" id="paso6b" value="2" <?php if($posP4 == 2 ){ ?>checked<?php } ?>/>
										    <label for="paso6b">Bastante, he participado en causas sociales</label>
										</p>	
										<p>
											<input class="with-gap" name="posP4" type="radio" id="paso6c" value="3" <?php if($posP4 == 3 ){ ?>checked<?php } ?>/>
										    <label for="paso6c">Poco, pero me gustaría involucrarme más</label>
										</p>	
										<p>
											<input class="with-gap" name="posP4" type="radio" id="paso6d" value="4" <?php if($posP4 == 4 ){ ?>checked<?php } ?>/>
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
			    	<div class="container" id="paso7" style="display:none;" >
						<div class="row">
							<div class="col s12 m8 offset-m2 center-align">
								<h2>¿Qué actividades cotidianas realizas para preservar el cuidado del medio ambiente? </h2>	
							</div>
						</div>
						<div class="row">
							<form class="col s12 m6 offset-m3" action="ajax/actualizaP5.php" id="formP5">
								  <div class="row">
								        <div class="input-field col s12">
								          <textarea id="posP5" class="materialize-textarea" data-length="1500" name="posP5" maxlength="1500"><?php echo $posP5; ?></textarea>
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
			    	<div class="container" id="paso8" style="display:none;" >
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
									      <input type="checkbox" id="atmosferica"  name="posP6a" value="1" <?php if($posP6a == 1 ){ ?>checked<?php } ?>/>
									      <label for="atmosferica">Contaminación atmosférica</label>
									    </p>
									    <p>
									      <input type="checkbox" id="deforestacion"  name="posP6b" value="1" <?php if($posP6b == 1 ){ ?>checked<?php } ?>/>
									      <label for="deforestacion">Deforestación</label>
									    </p>
									    <p>
									      <input type="checkbox" id="oceanica" name="posP6c" value="1" <?php if($posP6c == 1 ){ ?>checked<?php } ?>/>
									      <label for="oceanica">Contaminación oceánica</label>
									    </p>
									    <p>
									      <input type="checkbox" id="ozono" name="posP6d" value="1" <?php if($posP6d == 1 ){ ?>checked<?php } ?>/>
									      <label for="ozono">Deterioro de la capa de ozono</label>
									    </p>
									    <p>
									      <input type="checkbox" id="desertizacion" name="posP6e" value="1" <?php if($posP6e == 1 ){ ?>checked<?php } ?>/>
									      <label for="desertizacion">Desertización</label>
									    </p>
									    <p>
									      <input type="checkbox" id="suelos" name="posP6f" value="1" <?php if($posP6f == 1 ){ ?>checked<?php } ?>/>
									      <label for="suelos">Agotamiento de los suelos</label>
									    </p>
									    <p>
									      <input type="checkbox" id="radiactivos" name="posP6g" value="1" <?php if($posP6g == 1 ){ ?>checked<?php } ?>/>
									      <label for="radiactivos">Generación de desechos radiactivos</label>
									    </p>
									    <p>
									      <input type="checkbox" id="ninguna" name="posP6h" value="1" <?php if($posP6h == 1 ){ ?>checked<?php } ?>/>
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
			    	<div class="container" id="paso9" style="display:none;" >
						<div class="row">
							<div class="col s12 m8 offset-m2 center-align">
								<h2>Cuéntanos cuál es tu relación con el Océano</h2>	
							</div>
						</div>
						<div class="row">
							<form class="col s12 m6 offset-m3" action="ajax/actualizaP7.php" id="formP7">
								      <div class="row">
								        <div class="input-field col s12">
								          <textarea id="posP7" class="materialize-textarea" data-length="1500" name="posP7" maxlength="1500"><?php echo $posP7; ?></textarea>
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
			    	<div class="container" id="paso10" style="display:none;" >
						<div class="row">
							<div class="col s12 m8 offset-m2 center-align">
								<h2>¿Por qué eres la persona indicada para representar a Corona en su causa por la limpieza de Océanos? </h2>	
							</div>
						</div>
						<div class="row">
							<form class="col s12 m6 offset-m3" action="ajax/actualizaP8.php" id="formP8">
								  <div class="row">
								        <div class="input-field col s12">
								          <textarea id="posP8" class="materialize-textarea" data-length="1500" name="posP8" maxlength="1500"><?php echo $posP8; ?></textarea>
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
			    	<div class="container" id="paso11" style="display:none;" >
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
					          <a class="icon whatsapp" href="whatsapp://send?text=https://s219687.gridserver.com/clientes/modo/corona/parley/" data-action="share/whatsapp/share" >
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
			    	<div class="container" id="paso12" style="display:none;" >
						<div class="row">
							<div class="col s12 center-align">
								<p>El equipo de Corona y Parley está evaluando<br>tu postulación.<br>								
								Entrevistaremos personalmente a los seleccionados.<br>
								Si eres el candidato que buscamos, serás invitado a<br>
								grabar un video contándonos por qué deberías ser<br>
								uno de los 4 voluntarios del océano que será subido y<br>sometido a votación pública.</p>
								<p>Mientras tanto, descubre cómo solucionar el<br>problema de nuestro océano en:</p>
								<div id="botonfinal" class="valign-wrapper">							
									<a href="http://coronaxparley.com/" class="btn waves-effect waves-light" target="_blank">coronaxparley.com</a>
								</div>
							</div>
						</div>
						 <div class="row">
					        <div class="col s12 center-align">
	
						      <p>Comparte con tus amigos y sé parte del cambio<br>para proteger nuestros océanos.</p>  
						        
					          <a class="icon whatsapp" href="whatsapp://send?text=http://voluntariosporeloceano.cl/" data-action="share/whatsapp/share" >
					            <i class="fa fa-whatsapp circle green"></i>
					          </a>
						      <a class="icon" href="javascript:void(0);" rel="nofollow" title="Compartir" onclick="return tw_click();" >
					            <i class="fa fa-twitter circle blue"></i>
					          </a>
					          <a class="icon" href="javascript:void(0);" rel="nofollow" onclick="return fbs_click();" target="_blank" >
					            <i class="fa fa-facebook circle blue darken-4"></i>
					          </a>
					        </div> <!-- /.col -->
					      </div> <!-- /.row -->					
			    	</div>	
	<?php }else{ ?>
		<?php include('pasos.php'); ?>
		<script>
			Materialize.toast('El RUT ingresado no se encuentra en la base de datos.', 4000) // 4000 is the duration of the toast
			
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
			
			
			
		</script>
	<?php } ?>				
				</div>
		    </div>		    
	    </section>	    
	    
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>     
      <script type="text/javascript" src="assets/js/jquery.rut.min.js"></script>
      <script type="text/javascript" src="assets/js/corona2.js?v=1.4.1"></script>
    </body>
  </html>
        