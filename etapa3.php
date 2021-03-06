<?php
function totalvotos($video){
	$db 		= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	$resultado 	= $db->rawQuery("select count(*) as total from votos where voto = $video");
	if($resultado){
		foreach ($resultado as $r) {
			$total = $r['total'];
		}
	} 
	return $total;
}


/*
if($conectado==1){	
	$yavote = 0;
	$resultado = $db->rawQuery('select * from votos where oauth_uid = '.$userData['oauth_uid']);
	if($resultado){
		foreach ($resultado as $r) {
			$yavote = 1;
		}
	} 
}
*/
?>
		    	<div class="container" id="etapa3a" >
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
							<h2>Estamos evaluando las votaciones, <br> 
								pronto comunicaremos a los ganadores.</h2>	
								<p><span class="puntos">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</span> <span class="texto">Votaciones cerradas.</span></p>	
						</div>
					</div>
		    	</div>
<?php
	$resultado = $db->rawQuery('select * from videos order by RAND()');
	if($resultado){
		foreach ($resultado as $r) {
			$videoID = $r['vidID'];
?>		    	
		    	<div class="container etapa3b" id="video<?php echo $r['vidID']; ?>">
					<div class="row">
						<div class="col s12 center-align">
							<div class='embed-container'>
								<iframe src='https://player.vimeo.com/video/<?php echo $r['vidVim']; ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							</div>
						</div>
						<div class="col s6 left-align">
							<p><?php echo $r['vidNom']; ?><br><small><?php echo $r['vidUbi']; ?></small></p>
						</div>
						<div class="col s6 right-align">
							<p id="votos<?php echo $r['vidID']; ?>"><i class="fa fa-heart" aria-hidden="true"></i> <span><?php echo totalvotos($r['vidID']); ?></span></p>
						</div>
					</div>	
					<div class="row">
						
						<div class="col s12 m4 offset-m2 votar" >
							<?php 
								if($conectado==1){
									$yavote = 0;
									$res = $db->rawQuery('select * from votos where oauth_uid = '.$userData['oauth_uid'].' and voto = '.$videoID);
									if($res){
										foreach ($res as $y) {
											$yavote = 1;
										}
									} 
									if($yavote==0){
										$output = '<a href="javascript:void(0);" class="btn waves-effect waves-light votar" data-voto="'.$r['vidID'].'" data-uid="'.$userData['oauth_uid'].'" target="_blank" id="voton'.$r['vidID'].'" dataLayer.push({"event": "Votar"});>Votar</a>';
									}else{
										$output = '<a href="javascript:void(0);" class="btn waves-effect waves-light disabled" data-voto="'.$r['vidID'].'" data-uid="'.$userData['oauth_uid'].'" target="_blank" dataLayer.push({"event": "Votar"});>Ya votaste</a>';
									}
								}
							?>
							<div id="caja_voton<?php echo $videoID; ?>">	
							<?php //echo $output; ?>
							</div>					
						</div>
						
<!--
						<div class="col s12 m4 comparte">
							<p class="share">Comparte: 
								<a href="javascript:void(0);" onclick="dataLayer.push({'event': 'Compartir Facebook'});" class="sharefb" data-video="<?php echo $videoID; ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> 
								<a href="javascript:void(0);" onclick="dataLayer.push({'event': 'Compartir Twitter'});" class="sharetw" data-video="<?php echo $videoID; ?>" ><i class="fa fa-twitter" aria-hidden="true"></i></a> 
								<a href="whatsapp://send?text=http://voluntariosporeloceano.cl/" data-action="share/whatsapp/share"  onclick="dataLayer.push({'event': 'Compartir Whatsapp'});"><i class="fa fa-whatsapp hide-on-med-and-up" aria-hidden="true"></i></a>
							</p>
						</div>
-->
					</div>			
		    	</div>
<?php
		}
	} 
?>		    	
