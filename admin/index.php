<?php
		include('header.php');
		include('sidebar.php');
		
		function nombre_video($voto){
			$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
			$resultado = $db->rawQuery('select * from videos where vidID='.$voto);
			if($resultado){
				foreach ($resultado as $r) {
					$participantes   = $r["vidNom"];
				}
			}  
			return $participantes;
		}	
		
		function total_participantes(){
			$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
			$resultado = $db->rawQuery('select count(*) as total from votos');
			if($resultado){
				foreach ($resultado as $r) {
					$participantes   = $r["total"];
				}
			}  
			return $participantes;
		}
		
		function total_usuarios(){
			$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
			$resultado = $db->rawQuery('select count(*) as total from users');
			if($resultado){
				foreach ($resultado as $r) {
					$participantes   = $r["total"];
				}
			}  
			return $participantes;
		}
		
		function total_voluntarios(){
			$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
			$resultado = $db->rawQuery('select count(*) as total from verano');
			if($resultado){
				foreach ($resultado as $r) {
					$participantes   = $r["total"];
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


		

		$lol = 0;                      
?>

		<!-- start: Content -->
		<div class="main">
			
								

			
			<div class="row">
				

				<div class="col-lg-6 col-sm-6">
					
					<div class="panel panel-default">
						<?php 
							$totalparticipantes   = total_voluntarios();	
						 ?>
						<div class="panel-heading">
							<i class="icon-compass"></i><h2>Voluntarios Verano</h2>
						</div>
						
						<div class="panel-body">
							<h5>Total: <strong><?php echo $totalparticipantes; ?> Voluntarios</strong>.</h5>
							<hr>
					<?php
						
							$i = 0;
							$sql = "SELECT COUNT(*) AS total, posPlaya FROM verano GROUP BY posPlaya order by total DESC";
								$semanas = $db->rawQuery($sql);
								if($semanas){
									foreach ($semanas as $s) {
										$total = $s["total"];
										$posPlaya  = $s["posPlaya"];
										
										if($totalparticipantes>0){
											$porcentaje		= round((100 * $total)/$totalparticipantes,2);
										}else{
											$porcentaje = 0;
										}
										$i++;
										
							 ?>
							<h6><?php echo $i; ?>.- <a href="voluntarios.php?posPlaya=<?php echo $posPlaya; ?>"><?php echo laplaya($posPlaya); ?></a> <strong><?php echo $total; ?> Voluntarios</strong> <?php echo $porcentaje; ?>% </h6>
							<div class="progress thin">				  	
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentaje; ?>%">
							    	<span class="sr-only">40% Complete (success)</span>
							  	</div>
							</div>
							<?php					
									}
								}   
							?>
						</div>
					</div>		
				</div><!--/col-->

				<div class="col-lg-6 col-sm-6">
					
					<div class="panel panel-default">
						<?php 
							$totalparticipantes   = total_participantes();	
						 ?>
						<div class="panel-heading">
							<i class="icon-compass"></i><h2>Votos x Video</h2>
						</div>
						
						<div class="panel-body">
							<h5>Sobre un total de <strong><?php echo $totalparticipantes; ?> Votos</strong> y la participación de <strong><?php echo total_usuarios(); ?> personas</strong>.</h5>
							<hr>
					<?php
						
							$i = 0;
							$sql = "SELECT COUNT(*) AS total, voto FROM votos GROUP BY voto order by total DESC";
								$semanas = $db->rawQuery($sql);
								if($semanas){
									foreach ($semanas as $s) {
										$total = $s["total"];
										$voto  = $s["voto"];
										
										if($totalparticipantes>0){
											$porcentaje		= round((100 * $total)/$totalparticipantes,2);
										}else{
											$porcentaje = 0;
										}
										$i++;
										
							 ?>
							<h6><?php echo $i; ?>.- <?php echo nombre_video($voto); ?> <strong><?php echo $total; ?> Votos</strong> <?php echo $porcentaje; ?>% <?php if($i<5){?><i class="fa fa-trophy" aria-hidden="true"></i><?php } ?></h6>
							<div class="progress thin">	
								<?php if($i<5){?>					  	
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentaje; ?>%">
							    	<span class="sr-only">40% Complete (success)</span>
							  	</div>
							  	<?php }else{ ?>				  	
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentaje; ?>%">
							    	<span class="sr-only">40% Complete (success)</span>
							  	</div>
							  	<?php } ?>
							</div>
							<?php					
									}
								}   
							?>
						</div>
					</div>		
				</div><!--/col-->
				
			</div><!--/row-->	
			
				
		</div>
		<!-- end: Content -->
		
		
		<footer>

			<div class="row">

				<div class="col-sm-5">
					&copy; 2017 Modo
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
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		<script src="assets/plugins/moment/moment.min.js"></script> 
		<script src="assets/plugins/flot/jquery.flot.min.js"></script>
		<script src="assets/plugins/flot/jquery.flot.pie.min.js"></script>
		<script src="assets/plugins/flot/jquery.flot.stack.min.js"></script>
		<script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
		<script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
		<script src="assets/plugins/flot/jquery.flot.spline.min.js"></script>
		<script src="assets/plugins/autosize/jquery.autosize.min.js"></script> 
		<script src="assets/plugins/placeholder/jquery.placeholder.min.js"></script> 
		<script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script> 
		<script src="assets/plugins/datatables/js/dataTables.bootstrap.min.js"></script> 
		<script src="assets/plugins/raphael/raphael.min.js"></script> 
		<script src="assets/plugins/morris/js/morris.min.js"></script> 
		<script src="assets/plugins/jvectormap/js/gdp-data.js"></script>
		<script src="assets/plugins/gauge/gauge.min.js"></script>
		<script src="assets/plugins/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="assets/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
		<script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
		<script src="assets/plugins/hotkeys/jquery.hotkeys.min.js"></script>
	
	

		<!-- theme scripts -->
		<script src="assets/plugins/pace/pace.min.js"></script>
		<script src="assets/js/jquery.mmenu.min.js"></script>
		<script src="assets/js/core.min.js"></script>
		
		<!-- inline scripts related to this page -->
		<script src="assets/js/pages/form-elements.js"></script>
		<script src="assets/js/pages/charts-flot.js"></script>
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