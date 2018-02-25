		    	<div class="container-fluid hide" id="verano" >
					<div class="dato-verano" id="kmrecorridos">
						<p>+3200 KM<br><span>recorridos</span></p>
					</div>
					<div class="dato-verano" id="kgmaterial">
						<p>+3200 KG<br><span>de material<br>reciclable</span></p>
					</div>
					<div class="dato-verano" id="kgplastico">
						<p>+3200KM<br><span>de plástico</span></p>
					</div>
					
					<div class="row animated fadeInDown" id="veranoheader">
						<div class="col s12 center-align">
							<h2>¡ESTE FUE el recorrido que hicimos<br>LIMPIANDO LAS playas de chile!</h2>	
<!--
							<p>
								SELECCIONA DÓNDE TE GUSTARÍA<br>
								SER VOLUNTARIO.
							</p>
-->	
							<p><small><span id="laplaya"></span> <span id="eldia"></span></small></p>
						</div>
					</div>
					
					
					<div id="mapa" class="animated slideInLeft">
						<?php /* Al subir una galería, se debe poner el link y cambiar la clase */ ?>
						<a href="arica.php" 			class="mapa-link2" id="arica"></a> 
						<a href="iquique.php" 			class="mapa-link2" id="iquique"></a>
						<a href="antofagasta.php" 		class="mapa-link2" id="antofagasta"></a>
						<a href="caldera.php" 			class="mapa-link2" id="caldera"></a>
						<a href="la-serena.php" 		class="mapa-link2" id="la-serena"></a>
						<a href="bahia-inglesa.php"   	class="mapa-link2" id="bahia-inglesa"></a>
						<a href="totoralillo.php" 		class="mapa-link2" id="totoralillo"></a>
						<a href="quintero.php" 			class="mapa-link2" id="quintero"></a>
						<a href="concon.php" 			class="mapa-link2" id="concon"></a>
						<a href="guanaqueros.php" 		class="mapa-link2" id="guanaqueros"></a>
						<a href="maitencillo.php" 		class="mapa-link2" id="maitencillo"></a>
						<a href="pichilemu.php" 		class="mapa-link2" id="pichilemu"></a>
						<a href="puertecillo.php" 		class="mapa-link2" id="puertecillo"></a>
						<a href="javascript:void(0);" 	class="mapa-link"  id="valdivia"></a>
						<a href="curanipe.php" 			class="mapa-link2" id="curanipe"></a>
						<a href="javascript:void(0);" 	class="mapa-link"  id="chiloe"></a>	
						
						<?php /* Acá se van agregando los checks por cada región*/ ?>	
						<img src="assets/img/check.png" class="responsive-img check" id="check_iquique">
						<img src="assets/img/check.png" class="responsive-img check" id="check_arica">
						<img src="assets/img/check.png" class="responsive-img check" id="check_antofagasta">	
						<img src="assets/img/check.png" class="responsive-img check" id="check_atacama">
						<img src="assets/img/check.png" class="responsive-img check" id="check_laserena">
						<img src="assets/img/check.png" class="responsive-img check" id="check_concon">
						<img src="assets/img/check.png" class="responsive-img check" id="check_pichilemu">
						<img src="assets/img/check.png" class="responsive-img check" id="check_curanipe">
						<img src="assets/img/check.png" class="responsive-img check" id="check_valdivia">
						<img src="assets/img/check.png" class="responsive-img check" id="check_chiloe">
												
						<img src="assets/mapas/mapa.png?v=5" class="responsive-img">	
					</div>
					

					<div id="mapa-valdivia" class="mapa-info hide animated slideInRight">
						<a href="javascript:void(0);" class="mapa-volver"><img src="assets/mapas/volver.png" class="responsive-img"></a>
						<div class="row">
							<div class="col s12 m6 center-align hide-on-small-only">
								<img src="assets/mapas/valdivia.png">	
							</div>
							<div class="col s12 m6 center-align">
								<div class="row">
									<div class="col s5 center-align show-on-small  hide-on-med-and-up">
										<img src="assets/mapas/valdivia.png" class="responsive-img">	
									</div>
									<div class="col s7 m12 center-align">
										<h2>Valdivia</h2>
										<h3>XIV REGIÓN</h3>	
										<p>
											Sus extensas playas, arenas blancas y aguas azul verdoso, rodeada de un impactante escenario de vegetación nativa, nos invitan a disfrutar de largas caminatas para conectarnos con la tranquilidad del océano.       
										</p>	
										<div class="mapa-linea"></div>
										<p>
											Dos unidades de plástico invaden cada paso que damos por las playas de Chile.
										</p>
									</div>
								</div>
								<div class="mapa-footer">
									<div class="row">
										<h4>SÉ PARTE DEL TEAM QUE ESTARÁ<br> 
											EN ESTAS JORNADAS DE LIMPIEZA</h4>
										<h5>ELIGE TU FECHA DISPONIBLE</h5>
										<p>cupos limitados</p>
										<form  id="form-valdivia">
											<div class="row">
												<div class="col s12 m4 offset-m4 center-align">	
													<p>
														<!--<input class="with-gap radios" name="posP1l" type="radio" id="posP1l"  value="22/02/2018" />-->
													    <label for="posP1l">22/02/2018</label>
													</p>
												</div>
											</div>
											<div class="row">
												<div class="col s12 center-align">
													<!--<button class="btn waves-effect waves-light" type="button" id="btnP1" onclick="dataLayer.push({'event': 'Postular'});">Postular</button>-->
													<p>Inscripciones Cerradas</p>
												</div>
											</div>
										</form>	
										<div class="row">
											<div class="col s12 m8 offset-m2 center-align">
												<p>*RECUERDA QUE DEBERÁS LLEGAR AL PUNTO DE ENCUENTRO EN MOVILIZACIÓN PROPIA</p>
											</div>
										</div>								
									</div>
								</div>	
							</div>
						</div>
					</div>

					<div id="mapa-chiloe" class="mapa-info hide animated slideInRight">
						<a href="javascript:void(0);" class="mapa-volver"><img src="assets/mapas/volver.png" class="responsive-img"></a>
						<div class="row">
							<div class="col s12 m6 center-align hide-on-small-only">
								<img src="assets/mapas/chiloe.png">	
							</div>
							<div class="col s12 m6 center-align">
								<div class="row">
									<div class="col s5 center-align show-on-small  hide-on-med-and-up">
										<img src="assets/mapas/chiloe.png" class="responsive-img">	
									</div>
									<div class="col s7 m12 center-align">
										<h2>Chiloé</h2>
										<h3>X REGIÓN</h3>	
										<p>
											Con 180 kilómetros de largo y 50 kilómetros de ancho, la Isla Grande de Chiloé nos ofrece grandes postales, como lo son los palafitos, la cultura pesquera, sus iglesias que son parte del patrimonio y una hermosa flora y fauna privilegiada. Chiloé merece el respeto y el cuidado de sus playas por cada uno de sus visitantes. 
										</p>	
										<div class="mapa-linea"></div>
										<p>
											El 99,9% de plástico que invade las playas de Chile, proviene<br>de las personas que las visitan.
										</p>
									</div>
								</div>
								<div class="mapa-footer">
									<div class="row">
										<h4>SÉ PARTE DEL TEAM QUE ESTARÁ<br> 
											EN ESTAS JORNADAS DE LIMPIEZA</h4>
										<h5>ELIGE TU FECHA DISPONIBLE</h5>
										<p>cupos limitados</p>
										<form  id="form-chiloe">
											<div class="row">
												<div class="col s12 m4 offset-m4 center-align">	
													<p>
														<!--<input class="with-gap radios" name="posP1n" type="radio" id="posP1n"  value="24/02/2018" />-->
													    <label for="posP1n">24/02/2018</label>
													</p>
												</div>
											</div>
											<div class="row">
												<div class="col s12 center-align">
													<!--<button class="btn waves-effect waves-light" type="button" id="btnP1" onclick="dataLayer.push({'event': 'Postular'});">Postular</button>-->
													<p>Inscripciones Cerradas</p>
												</div>
											</div>
										</form>	
										<div class="row">
											<div class="col s12 m8 offset-m2 center-align">
												<p>*RECUERDA QUE DEBERÁS LLEGAR AL PUNTO DE ENCUENTRO EN MOVILIZACIÓN PROPIA</p>
											</div>
										</div>								
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div id="mapa-form" class="hide animated slideInRight">
						<div class="row">
							<div class="col s12 center-align">
								<h2>IDENTIDAD DEL VOLUNTARIO</h2>
								<h4>(+18 AÑOS)</h4>
							</div>
						</div>
						<div class="row">
							<form class="col s12 m4 offset-m4" id="formVerano" action="ajax/grabaverano.php">
								<input id="playa" type="hidden" name="playa" >
								<input id="fecha" type="hidden" name="fecha" >
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
										<input id="telefono" type="text" name="telefono" >
										<label for="telefono">Teléfono</label>
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
										<input id="email" type="email" name="email" >
										<label for="email">Email</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12 center-align">
										<h3>Puedes inscribirte con un amigo</h3>
										<h4>(+18 AÑOS)</h4>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="nombreamigo" type="text" name="nombreamigo" >
										<label for="nombreamigo">Nombre de tu amigo</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="emailamigo" type="email" name="emailamigo" >
										<label for="emailamigo">Email de tu amigo</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="telefonoamigo" type="text" name="telefonoamigo" >
										<label for="telefonoamigo">Teléfono de tu amigo</label>
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
									<div class="col s4 m6 center-align">
										<button class="btn waves-effect waves-light" type="button" id="btnBack" onclick="dataLayer.push({'event': 'Volver'});">Volver</button>
									</div>
									<div class="col s8 m6 center-align">
										<button class="btn waves-effect waves-light" type="submit" id="btnForm" onclick="dataLayer.push({'event': 'Confirmar Postulación'});">Confirmar Postulación</button>
									</div>
								</div>
							</form>
						</div>
					</div>					
					<div id="mapa-listo" class="center-align hide animated slideInRight">
						<a href="javascript:void(0);" class="mapa-volver"><img src="assets/mapas/volver.png" class="responsive-img"></a>
						<div class="row">
							<div class="col s12 center-align">
								<h2>¡LISTO!</h2>
							</div>
						</div>
						<div class="row">
							<div class="col s12 m4 offset-m4 center-align">
								<p>Te enviaremos pronto un mail para avisarte si eres parte del team de limpieza en la playa que elegiste</p>
								<p class="amarillo center-align">Si eres uno de los seleccionados, junto a tu amigo podrás asistir a un evento corona en tu ciudad</p>
								<p class="amarillo center-align">Compartir:</p>
							</div>
						</div>
						<div class="row">
					        <div class="col s12 center-align">
					          <a class="icon whatsapp" href="whatsapp://send?text=http://voluntariosporeloceano.cl/" data-action="share/whatsapp/share"  onclick="dataLayer.push({'event': 'Compartir Whatsapp'});">
					            <i class="fa fa-whatsapp circle green"></i>
					          </a>
					
					          
						      <a class="icon share" href="javascript:void(0);" rel="nofollow" title="Click to share this post on Twitter" onclick="return tw_click(); dataLayer.push({'event': 'Compartir Twitter'});" >
					            <i class="fa fa-twitter circle blue"></i>
					          </a>
					
					          <a class="icon share" href="javascript:void(0);" rel="nofollow" onclick="return fbs_click(); dataLayer.push({'event': 'Compartir Facebook'});" target="_blank" >
					            <i class="fa fa-facebook circle blue darken-4"></i>
					          </a>
					        </div> <!-- /.col -->
					      </div> <!-- /.row -->
							<!--
<div id="botonfinal" class="valign-wrapper">							
								<a href="http://www.coronasunsets.com/" class="btn waves-effect waves-light" target="_blank" dataLayer.push({'event': 'Corona Sunsets'});>Corona Sunsets</a>
							</div>
-->
					</div>
					
		    	</div>