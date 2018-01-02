<?php
	require_once '_lib/config.php';
	require_once '_lib/Paginator.class.php';
	$conn = new mysqli( DBHOST, DBUSER, DBPASS, DBNAME );
 	mysqli_set_charset($conn,"utf8");

 	$posPlaya 	= $_GET['posPlaya'];
 	$enviado 	= $_GET['enviado'];
 	
    
    if($enviado==1){
	    $query      = "SELECT * FROM  verano where posPlaya LIKE '$posPlaya' and enviado = 1";
    }else{
	    $query      = "SELECT * FROM  verano where posPlaya LIKE '$posPlaya'";
    }
/*

    $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 50;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
 
    $Paginator  = new Paginator( $conn, $query );
 
    $results    = $Paginator->getData( $limit, $page );

    $total 		= $results->total;
*/

	include('header.php');
	include('sidebar.php');

	function get_total(){
		$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
		$total = $db->getValue ("verano", "count(*)"); 
		return $total;
	}   

	function region($voto){
		$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
		$resultado = $db->rawQuery('select * from region where region_id='.$voto);
		if($resultado){
			foreach ($resultado as $r) {
				$participantes   = $r["region_nombre"];
			}
		}  
		return $participantes;
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
<!--
<style type="text/css">
	.dataTables_info, .dataTables_paginate, .dataTables_length{
		display: none;
	}
</style>
-->
		<!-- start: Content -->
		<div class="main">
			
				
			<div class="row">		
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading" data-original-title>
							<h2><i class="fa fa-user"></i><span class="break"></span>Voluntarios <?php echo laplaya($posPlaya); ?> | <a href="exportar_voluntarios.php?posPlaya=<?php echo $posPlaya; ?>">Descargar</a> | <a href="voluntarios.php?posPlaya=<?php echo $posPlaya; ?>&enviado=1">Ver seleccionados</a></h2>
					
						</div>
						<div class="panel-body">
							<table class="table table-striped table-bordered datatable" style="font-size: 11px; ">
							  <thead>
								  <tr>
									  <th>ID</th>
									  <th>Datos personales</th>
									  <th>Datos Amigo</th>
									  <th>Región</th>
									  <th>Fecha</th>
									  <th>Registro</th>
									  <th>Estado</th>
									  <th>Acciones</th>
								  </tr>
							  </thead>   
							  <tbody>							  
								  <?php
								  	$resultado = $db->rawQuery($query);
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
										$posEstAmi	= $r["posEstAmi"]; 	
										$posTS 		= $r["posTS"]; 		
										$enviado	= $r["enviado"]; 																												
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
									?>
								<tr>
									<td><?php echo $posID; ?></td>
									<td>
										<strong>Nombre:</strong> <?php echo $posNom ?> <?php echo $posApe ?><br>
										<strong>Rut:</strong> <?php echo $posRut; ?><br>
										<strong>Mail:</strong> <?php echo $posMail; ?><br>
										<strong>Fono:</strong> <?php echo $posFono; ?><br>
									</td>
									<td>
										<strong>Nombre:</strong> <?php echo $posNomAmi ?><br>
										<strong>Mail:</strong> <?php echo $posMailAmi; ?><br>
										<strong>Fono:</strong> <?php echo $posFonoAmi; ?><br>
									</td>
									<td><?php echo region($posReg); ?></td>
									<td><?php echo $posFecha; ?><br><?php echo $posFecha2; ?></td>
									<td><?php echo $posTS; ?></td>
									<td>
										
											<span class="label label-primary hide" id="estado-<?php echo $posID; ?>">Enviado</span>
										
										<?php 
										if($enviado==1 && $posEst==0){ ?>
											<span class="label label-primary">Enviado</span><br><br>
										<? }  ?><?php 
										if($posEst==1){ ?>
											<span class="label label-success">Confirmado</span><br><br>
										<? }  ?><?php 
										if($posEstAmi==1){ ?>
											<span class="label label-success">Amigo Confirmado</span>
										<? }  ?>
									</td>
									<td><?php 
										if($enviado==0){ ?>
										<a class="btn btn-info btn-enviar" href="javascript:void(0);" 	id="enviar-<?php echo $posID; ?>" data-id="<?php echo $posID; ?>" data-nombre="<?php echo $posNom ?> <?php echo $posApe ?>">
											<i class="fa fa-paper-plane"></i>                                            
										</a>
										<a class="btn btn-primary hide" href="javascript:void(0);" 		id="enviando-<?php echo $posID; ?>" data-id="<?php echo $posID; ?>">
											<i class="fa fa fa-spinner fa-spin"></i>                                            
										</a>
										<?php }  ?>
									</td>

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
