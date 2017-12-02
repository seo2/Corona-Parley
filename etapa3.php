		    	<div class="container hide" id="etapa3a" >
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
							<h2>LOS 4 VIDEOS MÁS VOTADOS SE CONVERTIRÁN<br> 
								EN VOLUNTARIOS POR EL OCÉANO Y VIAJARÁN <br>
								A LAS ISLAS MALDIVAS</h2>	
								<p><span class="puntos">. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .</span> <span class="texto">vota por tu favorito</span></p>	
						</div>
					</div>
		    	</div>
		    	
		    	<div class="container etapa3b">
					<div class="row">
						<div class="col s12 center-align">
							<div class='embed-container'>
								<iframe src='https://player.vimeo.com/video/227161191' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							</div>
						</div>
						<div class="col s6 left-align">
							<p>Ramón Navarro</p>
						</div>
						<div class="col s6 right-align">
							<p><i class="fa fa-heart" aria-hidden="true"></i> 16.000</p>
						</div>
					</div>	
					<div class="row">
						
						<div class="col s12 m4 offset-m2 votar" >
							<?php 
								if($conectado==1){
									
									$yavote = 0;
									$resultado = $db->rawQuery('select * from votos where oauth_uid = '.$userData['oauth_uid'].' and voto = 1');
									if($resultado){
										foreach ($resultado as $r) {
											$yavote = 1;
										}
									}  
									if($yavote==0){
										$output = '<a href="javascript:void(0);" class="btn waves-effect waves-light votar" data-voto="1" data-uid="'.$userData['oauth_uid'].'" target="_blank" dataLayer.push({"event": "Votar"});>Votar</a>';
									}else{
										$output = '<a href="javascript:void(0);" class="btn waves-effect waves-light disabled" data-voto="1" data-uid="'.$userData['oauth_uid'].'" target="_blank" dataLayer.push({"event": "Votar"});>Ya votaste</a>';
									}
								}
							
							
							?>						
							<?php echo $output; ?>
						</div>
						
						<div class="col s12 m4 comparte">
							<p class="share">Comparte: 
								<a href="javascript:void(0);" onclick="return fbs_click(); dataLayer.push({'event': 'Compartir Facebook'});" ><i class="fa fa-facebook-official" aria-hidden="true"></i></a> 
								<a href="javascript:void(0);" onclick="return tw_click(); dataLayer.push({'event': 'Compartir Twitter'});"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
								<a href="whatsapp://send?text=http://voluntariosporeloceano.cl/" data-action="share/whatsapp/share"  onclick="dataLayer.push({'event': 'Compartir Whatsapp'});"><i class="fa fa-whatsapp hide-on-med-and-up" aria-hidden="true"></i></a>
							</p>
						</div>
					</div>			
		    	</div>