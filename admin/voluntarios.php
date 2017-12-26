<?php
require_once '_lib/config.php';
require_once '_lib/Paginator.class.php';
$conn = new mysqli( DBHOST, DBUSER, DBPASS, DBNAME );
 	mysqli_set_charset($conn,"utf8");

 	$posPlaya = $_GET['posPlaya'];

    $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 50;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
    $query      = "SELECT * FROM  verano where posPlaya LIKE $posPlaya";
 
    $Paginator  = new Paginator( $conn, $query );
 
    $results    = $Paginator->getData( $limit, $page );

    $total 		= $results->total;

	include('header.php');
	include('sidebar.php');

	function get_total(){
		$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
		$total = $db->getValue ("verano", "count(*)"); 
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
							<h2><i class="fa fa-user"></i><span class="break"></span>Voluntarios <?php echo $posPlaya; ?><small> [ Total: <?php echo $total; ?> ]</small></h2>
					
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
								  </tr>
							  </thead>   
							  <tbody>
								 <?php for( $i = 0; $i < count( $results->data ); $i++ ) : 
											$posID 		= $results->data[$i]["posID"]; 
											$posNom 	= $results->data[$i]["posNom"]; 	
											$posApe 	= $results->data[$i]["posApe"]; 	
											$posRut 	= $results->data[$i]["posRut"]; 	
											$posMail 	= $results->data[$i]["posMail"]; 	
											$posFono 	= $results->data[$i]["posFono"]; 	
											$posReg 	= $results->data[$i]["posReg"];	
											$posNomAmi 	= $results->data[$i]["posNomAmi"]; 	
											$posMailAmi = $results->data[$i]["posMailAmi"]; 	
											$posFonoAmi	= $results->data[$i]["posFonoAmi"]; 	
											$posFecha 	= $results->data[$i]["posFecha"]; 
											$posEst 	= $results->data[$i]["posEst"]; 	
											$posTS 		= $results->data[$i]["posTS"]; 																													
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
									<td><?php echo $posReg; ?></td>
									<td><?php echo $posFecha; ?></td>
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
