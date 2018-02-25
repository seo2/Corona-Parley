<?php
require_once '_lib/config.php';
require_once '_lib/Paginator.class.php';
$conn = new mysqli( DBHOST, DBUSER, DBPASS, DBNAME );
 	mysqli_set_charset($conn,"utf8");

    $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 50;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
    $query      = "SELECT * FROM  postulantes p INNER JOIN region r ON p.posReg = r.region_id INNER JOIN comuna c ON p.PosCom = c.comuna_id ORDER BY posID DESC";
 
    $Paginator  = new Paginator( $conn, $query );
 
    $results    = $Paginator->getData( $limit, $page );

    $total = $results->total;

include('header.php');
include('sidebar.php');

	function get_total(){
			$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
		  	$total = $db->getValue ("postulantes", "count(*)"); 
			return $total;
		}   
?>
<style type="text/css">
	.dataTables_info, .dataTables_paginate, .dataTables_length{
		display: none;
	}
</style>
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
									  <th>Fecha</th>
								  </tr>
							  </thead>   
							  <tbody>
								 <?php for( $i = 0; $i < count( $results->data ); $i++ ) : 
											$posID 		= $results->data[$i]["posID"]; 
											$posNom 	= $results->data[$i]["posNom"]; 	
											$posApe 	= $results->data[$i]["posApe"]; 	
											$posRut 	= $results->data[$i]["posRut"]; 	
											$posEdad 	= $results->data[$i]["posEdad"]; 	
											$posMail 	= $results->data[$i]["posMail"]; 	
											$posFono 	= $results->data[$i]["posFono"]; 	
											$posReg 	= $results->data[$i]["region_nombre"];	
											$posCom 	= $results->data[$i]["comuna_nombre"]; 	
											$posDis 	= $results->data[$i]["posDis"]; 	
											$posPas 	= $results->data[$i]["posPas"]; 	
											$posQuiero 	= $results->data[$i]["posQuiero"]; 
											$posEst 	= $results->data[$i]["posEst"]; 	
											$posTS 		= $results->data[$i]["posTS"]; 	 
											$posP1 		= $results->data[$i]["posP1"];
											$posP2a 	= $results->data[$i]["posP2a"];
											$posP2b 	= $results->data[$i]["posP2b"];
											$posP2c 	= $results->data[$i]["posP2c"];
											$posP2d 	= $results->data[$i]["posP2d"];
											$posP2e 	= $results->data[$i]["posP2e"];
											$posP2f 	= $results->data[$i]["posP2f"];
											$posP2g 	= $results->data[$i]["posP2g"];
											$posP3a 	= $results->data[$i]["posP3a"];
											$posP3b 	= $results->data[$i]["posP3b"];
											$posP3c 	= $results->data[$i]["posP3c"];
											$posP3d 	= $results->data[$i]["posP3d"];
											$posP3e 	= $results->data[$i]["posP3e"];
											$posP3f 	= $results->data[$i]["posP3f"];
											$posP3g 	= $results->data[$i]["posP3g"];
											$posP3h 	= $results->data[$i]["posP3h"];
											$posP3i 	= $results->data[$i]["posP3i"];
											$posP3j 	= $results->data[$i]["posP3j"];
											$posP4 		= $results->data[$i]["posP4"];
											$posP5 		= $results->data[$i]["posP5"];
											$posP6a 	= $results->data[$i]["posP6a"];
											$posP6b 	= $results->data[$i]["posP6b"];
											$posP6c 	= $results->data[$i]["posP6c"];
											$posP6d 	= $results->data[$i]["posP6d"];
											$posP6e 	= $results->data[$i]["posP6e"];
											$posP6f 	= $results->data[$i]["posP6f"];
											$posP6g 	= $results->data[$i]["posP6g"];
											$posP6h 	= $results->data[$i]["posP6h"];
											$posP7 		= $results->data[$i]["posP7"];
											$posP8 		= $results->data[$i]["posP8"];
											$posShare 	= $results->data[$i]["posShare"];
											$posAct 	= $results->data[$i]["posAct"];																														
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
										<strong>Zona:</strong> <?php echo $posCom; ?>, <?php echo $posReg; ?><br><br>
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
									<td><?php echo $posTS; ?></td>

								</tr>   
								<?php endfor; ?>
							  </tbody>
							</table>  
							<div class="col-xs-6"></div>
							<div class="col-xs-6"><?php echo $Paginator->createLinks( $links, 'pagination pagination-sm' ); ?> </div>
   						
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
