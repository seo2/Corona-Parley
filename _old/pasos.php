				<div class="container hide center-align"  id="paso">
					<span>0/11</span>
				</div>
		    	<div class="container hide" id="paso0" >
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
							<h2>¿QUIERES SER UNO DE LOS<br>VOLUNTARIOS POR EL OCÉANO?</h2>	
							<a href="javascript:void(0);" class="btn waves-effect waves-light next" data-next="#paso1" onclick="dataLayer.push({'event': 'Postula Aquí'});">Postula aquí</a>	
							<p class="limite">Fecha límite: 22 de noviembre 2017</p>	
						</div>
					</div>
					<div class="row animated fadeInDown" style="margin-top: 50px;">
						<div class="col s12 center-align">
							<p style="margin: 0;">Si ya iniciaste un proceso de postulación<br>y deseas terminarlo, busca tu RUT.</p>
						</div>
						<form class="col s12 m6 offset-m3" id="busca-nombre">
							<div class="row">
								<div class="input-field col s12">
									<input id="elrut" type="text" name="rut" >
									<label for="rut">Rut</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnForm" onclick="dataLayer.push({'event': 'Buscar'});">Buscar</button>
								</div>
							</div>
						</form>
					</div>
		    	</div>
		    	<div class="container" id="paso1" style="display:none;" >
					<div class="row">
						<div class="col s12 m8 offset-m2 center-align">
							<h2>conoce las tres<br>etapas de postulación</h2>	
						</div>
					</div>
					<div class="row">
						<div class="col s12 m6 offset-m3 center-align">
							<p>1.- Deberás ingresar tus datos en un formulario y convencernos del porqué quieres ser uno de los 4 voluntarios por el océano. El equipo de Corona y Parley pre-seleccionarán los candidatos que avanzarán a la siguiente etapa.</p>
 
							<p>2.- En la segunda etapa agendaremos una entrevista personal y los 10 mejores candidatos serán invitados a grabar un video, que será sometido a votación pública. Los 4 videos más votados, ganarán y viajarán a las Islas Maldivas a descubrir cómo cuidar nuestros océanos.</p>

							<p>3.- A LA VUELTA DEL VIAJE LOS 4 VOLUNTARIOS ESTARÁN LISTOS PARA SER LOS AGENTES DE CAMBIO, Y JUNTO A CORONA (QUE REMUNERARÁ A LOS GANADORES), CONTRIBUIRÁN AL CUIDADO Y LIMPIEZA DE LAS COSTAS DE NUESTRO PAÍS.</p>
							<a href="javascript:void(0);" class="btn waves-effect waves-light next" onclick="dataLayer.push({'event': 'Siguiente Paso 1'});">Siguiente</a>		
						</div>
					</div>
		    	</div>
		    	<div class="container" id="paso2" style="display:none;" >
					<div class="row">
						<div class="col s12 m8 offset-m2 center-align">
							<h2>AHORA, INGRESA TUS DATOS<br>PERSONALES</h2>	
						</div>
					</div>
					<div class="row">
						<form class="col s12 m6 offset-m3" id="formDatos" action="ajax/graba.php">
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
									<input id="edad" type="number" name="edad" >
									<label for="edad">Edad</label>
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
									<select id="comuna" name="comuna" >
				                		<option value="">CIUDAD</option>
									</select>									
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
									<input id="email" type="email" name="email" >
									<label for="email">Email</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">	
								    <p>
								      <input type="checkbox" id="disponible"  name="disponible" value="1"/>
								      <label for="disponible">¿Estás disponible para viajar una semana en Enero a las Islas Maldivas?</label>
								    </p>
								    <p>
								      <input type="checkbox" id="pasaporte"  name="pasaporte" value="1"/>
								      <label for="pasaporte">¿Tienes pasaporte vigente hasta Julio del 2018?</label>
								    </p>
								    <p>
								      <input type="checkbox" id="quiero" name="quiero" value="1"/>
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
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnForm" onclick="dataLayer.push({'event': 'Siguiente Paso 2'});">Siguiente</button>
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
										<input class="with-gap" name="posP1" type="radio" id="test1" value="1" />
									    <label for="test1">Totalmente de acuerdo</label>
									</p>	
									<p>
										<input class="with-gap" name="posP1" type="radio" id="test2" value="2" />
									    <label for="test2">Algo de acuerdo</label>
									</p>	
									<p>
										<input class="with-gap" name="posP1" type="radio" id="test3" value="3"  />
									    <label for="test3">Ni de acuerdo ni en desacuerdo</label>
									</p>	
									<p>
										<input class="with-gap" name="posP1" type="radio" id="test4" value="4" />
									    <label for="test4">Algo en desacuerdo</label>
									</p>	
									<p>
										<input class="with-gap" name="posP1" type="radio" id="test5" value="5" />
									    <label for="test5">Totalmente en desacuerdo</label>
									</p>
									<input type="hidden" class="posID" name="posID">
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnP1" onclick="dataLayer.push({'event': 'Siguiente Paso 3'});">Siguiente</button>
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
								      <input type="checkbox" id="trabajar"  name="posP2a" value="1"/>
								      <label for="trabajar">Trabajar</label>
								    </p>
								    <p>
								      <input type="checkbox" id="viajar"  name="posP2b" value="1"/>
								      <label for="viajar">Viajar</label>
								    </p>
								    <p>
								      <input type="checkbox" id="tiempo" name="posP2c" value="1"/>
								      <label for="tiempo">Pasar tiempo con mi familia/amigos</label>
								    </p>
								    <p>
								      <input type="checkbox" id="conocer" name="posP2d" value="1"/>
								      <label for="conocer">Conocer gente nueva</label>
								    </p>
								    <p>
								      <input type="checkbox" id="carretear" name="posP2e" value="1"/>
								      <label for="carretear">Carretear</label>
								    </p>
								    <p>
								      <input type="checkbox" id="practicar" name="posP2f" value="1"/>
								      <label for="practicar">Practicar algún deporte</label>
								    </p>
								    <p>
								      <input type="checkbox" id="realizar" name="posP2g" value="1"/>
								      <label for="realizar">Realizar alguna actividad artística</label>
								    </p>
									<input type="hidden" class="posID" name="posID">
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnP2" onclick="dataLayer.push({'event': 'Siguiente Paso 4'});">Siguiente</button>
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
								      <input type="checkbox" id="expresar"  name="posP3a" value="1"/>
								      <label for="expresar">Expresar mis ideas y compartirlas con los demás para inspirarlos/motivarlos</label>
								    </p>
								    <p>
								      <input type="checkbox" id="diversas"  name="posP3b" value="1"/>
								      <label for="diversas">Conocer acerca de las diversas culturas y sus estilos de vida diferentes</label>
								    </p>
								    <p>
								      <input type="checkbox" id="destino" name="posP3c" value="1"/>
								      <label for="destino">Destino mucho tiempo conectado a las redes sociales</label>
								    </p>
								    <p>
								      <input type="checkbox" id="prefiero" name="posP3d" value="1"/>
								      <label for="prefiero">Prefiero salir a discoteques y pubs cuando carreteo</label>
								    </p>
								    <p>
								      <input type="checkbox" id="acatar" name="posP3e" value="1"/>
								      <label for="acatar">Es muy importante para mí acatar las normas sociales</label>
								    </p>
								    <p>
								      <input type="checkbox" id="vivir" name="posP3f" value="1"/>
								      <label for="vivir">Vivir la experiencia de grandes festivales, por ej de música, arte, deportes, etc…</label>
								    </p>
								    <p>
								      <input type="checkbox" id="deportes" name="posP3g" value="1"/>
								      <label for="deportes">Practicar deportes al aire libre</label>
								    </p>
								    <p>
								      <input type="checkbox" id="pienso" name="posP3h" value="1"/>
								      <label for="pienso">Pienso que el éxito consiste en convertirte en una celebridad</label>
								    </p>
								    <p>
								      <input type="checkbox" id="populares" name="posP3i" value="1"/>
								      <label for="populares">Me gusta viajar a sitios populares, que están de moda</label>
								    </p>
								    <p>
								      <input type="checkbox" id="sencilla" name="posP3j" value="1"/>
								      <label for="sencilla">Me gusta llevar una vida sencilla, cómoda pero sin grandes lujos </label>
								    </p>
									<input type="hidden" class="posID" name="posID">
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnP3" onclick="dataLayer.push({'event': 'Siguiente Paso 5'});">Siguiente</button>
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
										<input class="with-gap" name="posP4" type="radio" id="paso6a" value="1" />
									    <label for="paso6a">Mucho, dedico parte de mi vida al voluntariado </label>
									</p>	
									<p>
										<input class="with-gap" name="posP4" type="radio" id="paso6b" value="2"  />
									    <label for="paso6b">Bastante, he participado en causas sociales</label>
									</p>	
									<p>
										<input class="with-gap" name="posP4" type="radio" id="paso6c" value="3" />
									    <label for="paso6c">Poco, pero me gustaría involucrarme más</label>
									</p>	
									<p>
										<input class="with-gap" name="posP4" type="radio" id="paso6d" value="4" />
									    <label for="paso6d">Nada, no me preocupa en lo absoluto</label>
									</p>
									<input type="hidden" class="posID" name="posID">
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnP4" onclick="dataLayer.push({'event': 'Siguiente Paso 6'});">Siguiente</button>
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
							          <textarea id="posP5" class="materialize-textarea" data-length="1500" name="posP5" maxlength="1500"></textarea>
									  <input type="hidden" class="posID" name="posID">
							        </div>
							  </div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnP5" onclick="dataLayer.push({'event': 'Siguiente Paso 7'});">Siguiente</button>
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
								      <input type="checkbox" id="atmosferica"  name="posP6a" value="1"/>
								      <label for="atmosferica">Contaminación atmosférica</label>
								    </p>
								    <p>
								      <input type="checkbox" id="deforestacion"  name="posP6b" value="1"/>
								      <label for="deforestacion">Deforestación</label>
								    </p>
								    <p>
								      <input type="checkbox" id="oceanica" name="posP6c" value="1"/>
								      <label for="oceanica">Contaminación oceánica</label>
								    </p>
								    <p>
								      <input type="checkbox" id="ozono" name="posP6d" value="1"/>
								      <label for="ozono">Deterioro de la capa de ozono</label>
								    </p>
								    <p>
								      <input type="checkbox" id="desertizacion" name="posP6e" value="1"/>
								      <label for="desertizacion">Desertización</label>
								    </p>
								    <p>
								      <input type="checkbox" id="suelos" name="posP6f" value="1"/>
								      <label for="suelos">Agotamiento de los suelos</label>
								    </p>
								    <p>
								      <input type="checkbox" id="radiactivos" name="posP6g" value="1"/>
								      <label for="radiactivos">Generación de desechos radiactivos</label>
								    </p>
								    <p>
								      <input type="checkbox" id="ninguna" name="posP6h" value="1"/>
								      <label for="ninguna">Ninguna</label>
								    </p>
									  <input type="hidden" class="posID" name="posID">
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnP5" onclick="dataLayer.push({'event': 'Siguiente Paso 8'});">Siguiente</button>
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
							          <textarea id="posP7" class="materialize-textarea" data-length="1500" name="posP7" maxlength="1500"></textarea>
									  <input type="hidden" class="posID" name="posID">
							        </div>
							  </div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnP5" onclick="dataLayer.push({'event': 'Siguiente Paso 9'});">Siguiente</button>
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
							          <textarea id="posP8" class="materialize-textarea" data-length="1500" name="posP8" maxlength="1500"></textarea>
									  <input type="hidden" class="posID" name="posID">
							        </div>
							  </div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" id="btnP5" onclick="dataLayer.push({'event': 'Siguiente Paso 10'});">Siguiente</button>
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
								<a href="http://coronaxparley.com/" class="btn waves-effect waves-light" target="_blank" dataLayer.push({'event': 'Corona x Parley'});>coronaxparley.com</a>
							</div>
						</div>
					</div>
					 <div class="row">
				        <div class="col s12 center-align">

					      <p>Comparte con tus amigos y sé parte del cambio<br>para proteger nuestros océanos.</p>  
					        
				          <a class="icon whatsapp" href="whatsapp://send?text=http://voluntariosporeloceano.cl/" data-action="share/whatsapp/share" onclick="dataLayer.push({'event': 'Compartir Whatsapp'});">
				            <i class="fa fa-whatsapp circle green"></i>
				          </a>
					      <a class="icon share" href="javascript:void(0);" rel="nofollow" title="Compartir"  onclick="return tw_click(); dataLayer.push({'event': 'Compartir Twitter'});" target="_blank">
				            <i class="fa fa-twitter circle blue"></i>
				          </a>
				          <a class="icon share" href="javascript:void(0);" rel="nofollow" onclick="return fbs_click(); dataLayer.push({'event': 'Compartir Facebook'});"  target="_blank" >
				            <i class="fa fa-facebook circle blue darken-4"></i>
				          </a>
				        </div> <!-- /.col -->
				      </div> <!-- /.row -->					
		    	</div>