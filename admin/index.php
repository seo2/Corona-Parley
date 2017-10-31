<?php
		include('header.php');
		include('sidebar.php');
		?>
 <?php
	        
		function get_total(){
			$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
		  	$resultado = $db->rawQuery('select count(*) as total from postulantes');
			if($resultado){
				foreach ($resultado as $r) {
					$total   = $r["total"];
				}
			}   
			return $total;
		}      
	
		function get_region($id){
			$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
		  	$resultado = $db->rawQuery('select * from region where region_id = '.$id);
			if($resultado){
				foreach ($resultado as $r) {
					$region   = $r["region_nombre"];
				}
			}   
			return $region;
		}    
		
		function get_comuna($id){		
			$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);							
		  	$resultado = $db->rawQuery("SELECT * from comuna where comuna_id = $id");
			if($resultado){
				foreach ($resultado as $r) {
					$comuna_nombre  = $r["comuna_nombre"]; 
				}
			}
			return $comuna_nombre;
		}		
		       
?>
		<!-- start: Content -->
		<div class="main">
			
				
			<div class="row">		
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading" data-original-title>
							<h2><i class="fa fa-user"></i><span class="break"></span><small>Postulantes</small> [ Total: <?php echo get_total(); ?> ]</h2>
					
						</div>
						<div class="panel-body">
							<table class="table table-striped table-bordered datatable" style="font-size: 11px; ">
							  <thead>
								  <tr>
									  <th>ID</th>
									  <th>Datos personales</th>
									  <th>Pregunta 1</th>
									  <th>Pregunta 2</th>
									  <th>Pregunta 3</th>
									  <th>Pregunta 4</th>
									  <th>Pregunta 5</th>
									  <th>Pregunta 6</th>
									  <th>Pregunta 7</th>
									  <th>Pregunta 8</th>
									  <th>Compartido</th>
								  </tr>
							  </thead>   
							  <tbody>
								  <?php
								  	$resultado = $db->rawQuery('select * from postulantes');
									if($resultado){
										foreach ($resultado as $r) {
											$posID 		= $r["posID"]; 
											$posNom 	= $r["posNom"]; 	
											$posApe 	= $r["posApe"]; 	
											$posRut 	= $r["posRut"]; 	
											$posEdad 	= $r["posEdad"]; 	
											$posMail 	= $r["posMail"]; 	
											$posFono 	= $r["posFono"]; 	
											$posReg 	= $r["posReg"];	
											$posCom 	= $r["posCom"]; 	
											$posDis 	= $r["posDis"]; 	
											$posPas 	= $r["posPas"]; 	
											$posQuiero 	= $r["posQuiero"]; 
											$posEst 	= $r["posEst"]; 	
											$posTS 		= $r["posTS"]; 	 
											$posP1 		= $r["posP1"];
											$posP2a 	= $r["posP2a"];
											$posP2b 	= $r["posP2b"];
											$posP2c 	= $r["posP2c"];
											$posP2d 	= $r["posP2d"];
											$posP2e 	= $r["posP2e"];
											$posP2f 	= $r["posP2f"];
											$posP2g 	= $r["posP2g"];
											$posP3a 	= $r["posP3a"];
											$posP3b 	= $r["posP3b"];
											$posP3c 	= $r["posP3c"];
											$posP3d 	= $r["posP3d"];
											$posP3e 	= $r["posP3e"];
											$posP3f 	= $r["posP3f"];
											$posP3g 	= $r["posP3g"];
											$posP3h 	= $r["posP3h"];
											$posP3i 	= $r["posP3i"];
											$posP3j 	= $r["posP3j"];
											$posP4 		= $r["posP4"];
											$posP5 		= $r["posP5"];
											$posP6a 	= $r["posP6a"];
											$posP6b 	= $r["posP6b"];
											$posP6c 	= $r["posP6c"];
											$posP6d 	= $r["posP6d"];
											$posP6e 	= $r["posP6e"];
											$posP6f 	= $r["posP6f"];
											$posP6g 	= $r["posP6g"];
											$posP6h 	= $r["posP6h"];
											$posP7 		= $r["posP7"];
											$posP8 		= $r["posP8"];
											$posShare 	= $r["posShare"];
											$posAct 	= $r["posAct"];																														
											$detalle	= "<ul>";
											if($posDis==1){
												$detalle .= '<li>Disponible para viajar</li>';
											}
											if($posPas==1){
												$detalle .= '<li>Tiene Pasaporte Vigente</li>';
											}
											if($posQuiero==1){
												$detalle .= '<li>Desea recibir información</li>';
											}
											$detalle .="</ul>";	
											
											if($posP1==1){
												$p1 = 'Totalmente de acuerdo';
											}elseif($posP1==2){
												$p1 = 'Algo de acuerdo';
											}elseif($posP1==3){
												$p1 = 'Ni de acuerdo ni en desacuerdo';
											}elseif($posP1==4){
												$p1 = 'Algo en desacuerdo';
											}elseif($posP1==5){
												$p1 = 'Totalmente en desacuerdo';
											}
											$p2 = "<ul>";
											if($posP2a==1){
												$p2 .= '<li>Trabajar</li>';
											}
											if($posP2b==1){
												$p2 .= '<li>Viajar</li>';
											}
											if($posP2c==1){
												$p2 .= '<li>Pasar tiempo con mi familia/amigos</li>';
											}
											if($posP2d==1){
												$p2 .= '<li>Conocer gente nueva</li>';
											}
											if($posP2e==1){
												$p2 .= '<li>Carretear</li>';
											}
											if($posP2f==1){
												$p2 .= '<li>Practicar algún deporte</li>';
											}
											if($posP2g==1){
												$p2 .= '<li>Realizar alguna actividad artística</li>';
											}
											$p2 .="</ul>";	
											
											$p3 = "<ul>";
											if($posP3a==1){
												$p3 .= '<li>Expresar mis ideas y compartirlas con los demás para inspirarlos/motivarlos</li>';
											}
											if($posP3b==1){
												$p3 .= '<li>Conocer acerca de las diversas culturas y sus estilos de vida diferentes</li>';
											}
											if($posP3c==1){
												$p3 .= '<li>Destino mucho tiempo conectado a las redes sociales</li>';
											}
											if($posP3d==1){
												$p3 .= '<li>Prefiero salir a discoteques y pubs cuando carreteo</li>';
											}
											if($posP3e==1){
												$p3 .= '<li>Es muy importante para mí acatar las normas sociales</li>';
											}
											if($posP3f==1){
												$p3 .= '<li>Vivir la experiencia de grandes festivales, por ej de música, arte, deportes, etc…</li>';
											}
											if($posP3g==1){
												$p3 .= '<li>Practicar deportes al aire libre</li>';
											}
											if($posP3h==1){
												$p3 .= '<li>Pienso que el éxito consiste en convertirte en una celebridad</li>';
											}
											if($posP3i==1){
												$p3 .= '<li>Me gusta viajar a sitios populares, que están de moda</li>';
											}
											if($posP3j==1){
												$p3 .= '<li>Me gusta llevar una vida sencilla, cómoda pero sin grandes lujos</li>';
											}
											$p3 .="</ul>";	
											
											if($posP4==1){
												$p4 = 'Mucho, dedico parte de mi vida al voluntariado';
											}elseif($posP4==2){
												$p4 = 'Bastante, he participado en causas sociales';
											}elseif($posP4==3){
												$p4 = 'Poco, pero me gustaría involucrarme más';
											}elseif($posP4==4){
												$p4 = 'Nada, no me preocupa en lo absoluto';
											}
											
											$p6 = "<ul>";
											if($posP6a==1){
												$p6 .= '<li>Contaminación atmosférica</li>';
											}
											if($posP6b==1){
												$p6 .= '<li>Deforestación</li>';
											}
											if($posP6c==1){
												$p6 .= '<li>Contaminación oceánica</li>';
											}
											if($posP6d==1){
												$p6 .= '<li>Deterioro de la capa de ozono</li>';
											}
											if($posP6e==1){
												$p6 .= '<li>Desertización</li>';
											}
											if($posP6f==1){
												$p6 .= '<li>Agotamiento de los suelos</li>';
											}
											if($posP6g==1){
												$p6 .= '<li>Generación de desechos radiactivos</li>';
											}
											if($posP6h==1){
												$p6 .= '<li>Ninguna</li>';
											}
											$p6 .="</ul>";	
											
											if($posShare==1){
												$share = 'Si';
											}else{
												$share = 'No';
											}
											
									?>
								<tr>
									<td><?php echo $posID; ?></td>
									<td>
										<strong>Nombre:</strong> <?php echo $posNom ?> <?php echo $posApe ?><br>
										<strong>Rut:</strong> <?php echo $posRut; ?><br>
										<strong>Edad:</strong> <?php echo $posEdad; ?><br>
										<strong>Mail:</strong> <?php echo $posMail; ?><br>
										<strong>Fono:</strong> <?php echo $posFono; ?><br>
										<strong>Zona:</strong> <?php echo get_comuna($posCom); ?>, <?php echo get_region($posReg); ?><br><br>
										<?php echo $detalle; ?>
									</td>
									<td><?php echo $p1; ?></td>
									<td><?php echo $p2; ?></td>
									<td><?php echo $p3; ?></td>
									<td><?php echo $p4; ?></td>
									<td><?php echo $posP5; ?></td>
									<td><?php echo $p6; ?></td>
									<td><?php echo $posP7; ?></td>
									<td><?php echo $posP8; ?></td>
									<td><?php echo $share; ?></td>
								</tr>   
								<?php  
										}
									}                           
								?>
							  </tbody>
							</table>  
   
						</div>
					</div>
				</div><!--/col-->
			</div><!--/row-->
			

				
		</div>
		<!-- end: Content -->
		
		
		<footer>

			<div class="row">

				<div class="col-sm-5">
					&copy; 2017 Seo2
				</div><!--/.col-->

				
			</div><!--/.row-->	

		</footer>
		
				<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Modal title</h4>
					</div>
					<div class="modal-body">
						<p>Here settings can be configured...</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<!-- start: JavaScript-->
		<!--[if !IE]>-->

				<script src="assets/js/jquery-2.1.1.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>

			<script src="assets/js/jquery-1.11.1.min.js"></script>

		<![endif]-->

		<!--[if !IE]>-->

			<script type="text/javascript">
				window.jQuery || document.write("<script src='assets/js/jquery-2.1.1.min.js'>"+"<"+"/script>");
			</script>

		<!--<![endif]-->

		<!--[if IE]>

			<script type="text/javascript">
		 	window.jQuery || document.write("<script src='assets/js/jquery-1.11.1.min.js'>"+"<"+"/script>");
			</script>

		<![endif]-->
		<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<script src="assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
		<script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script> 
		<script src="assets/plugins/datatables/js/dataTables.bootstrap.min.js"></script>
	

		<!-- theme scripts -->
		<script src="assets/plugins/pace/pace.min.js"></script>
		<script src="assets/js/jquery.mmenu.min.js"></script>
		<script src="assets/js/core.min.js"></script>
		
	<!-- inline scripts related to this page -->
	<script src="assets/js/pages/table.js"></script>
		<script src="assets/plugins/jquery-cookie/jquery.cookie.min.js"></script>
		<script src="assets/js/demo.min.js"></script>

		<!-- Scritps de Seo2 -->
		<script src="assets/js/sweetalert.min.js"></script>
		<script src="assets/js/jquery.validate.js"></script>
		<script src="assets/js/jquery.Rut.min.js"></script>
		<script src="assets/js/cloudcore.js"></script>
		<!-- end: JavaScript-->

	</body>
</html>
