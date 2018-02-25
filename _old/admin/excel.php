<?php
session_start();

require_once("_lib/config.php");
require_once("_lib/MysqliDb.php");

	$mysqli = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
	mysqli_set_charset($mysqli,"utf8");

date_default_timezone_set('America/Santiago');
$hoy 	= date("Y-m-d");

if(isset($_POST["startDate"])) :
$startDate = $_POST["startDate"];
$endDate = $_POST["endDate"];	


	$sql = "SELECT MIN(posID) as posIDmin, MAX(posID) as posIDmax FROM postulantes where DATE(posTS) between '".$startDate."' AND '".$endDate."'";

	//echo $sql;

	$resultado = $mysqli->query($sql);

	//print_r($resultado);


	foreach ($resultado as $row) {
		$posIDmin = $row["posIDmin"];
		$posIDmax = $row["posIDmax"];
		
	}


	if($posIDmin!="" && $posIDmax!="") :

	$qry = "SELECT posID, posNom,posApe,posRut,posEdad,posMail,posFono,region_nombre as posReg,comuna_nombre as posCom,posDis,posPas,posQuiero,posEst,posTS,posP1,posP2a,posP2b,posP2c,posP2d,posP2e,posP2f,posP2g,posP3a,posP3b,posP3c,posP3d,posP3e,posP3f,posP3g,posP3h,posP3i,posP3j,posP4,posP5,posP6a,posP6b,posP6c,posP6d,posP6e,posP6f,posP6g,posP6h,posP7,posP8,posShare,posAct FROM  postulantes p
										INNER JOIN region r ON p.posReg = r.region_id INNER JOIN comuna c ON p.PosCom = c.comuna_id 
										WHERE posID between $posIDmin AND $posIDmax ORDER BY posID ";
	
	//echo $qry;
	//die();								
		

								$stmt = $mysqli->prepare($qry);
								$stmt->execute();
								$stmt->bind_result($posID,$posNom,$posApe,$posRut,$posEdad,$posMail,$posFono,$posReg,$posCom,$posDis,$posPas,$posQuiero,$posEst,$posTS,$posP1,$posP2a,$posP2b,$posP2c,$posP2d,$posP2e,$posP2f,$posP2g,$posP3a,$posP3b,$posP3c,$posP3d,$posP3e,$posP3f,$posP3g,$posP3h,$posP3i,$posP3j,$posP4,$posP5,$posP6a,$posP6b,$posP6c,$posP6d,$posP6e,$posP6f,$posP6g,$posP6h,$posP7,$posP8,$posShare,$posAct);
								

	header( "Content-type: application/vnd.ms-excel; charset=UTF-8"  );
	header( "Content-disposition: attachment; filename=Postulantes-Voluntarios.xls" );
		
		?>
 

							<table border="1" style="font-family: arial;font-size: 10px">
							  <thead>
								  <tr>
									  <th>ID</th>
									  <th>NOMBRE</th>
									<td>RUT</td>
									<td>EDAD</td>
									<td>MAIL</td>
									<td>FONO</td>
									<td>ZONA</td>
									<td>DETALLE</td>
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
								  <?php
								  	while ($stmt->fetch()) { 
																																								
											$detalle	= "";
											if($posDis==1){
												$detalle .= 'Disponible para viajar<br>';
											}
											if($posPas==1){
												$detalle .= 'Tiene Pasaporte Vigente<br>';
											}
											if($posQuiero==1){
												$detalle .= 'Desea recibir información<br>';
											}
												
											
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
											$p2 = "";
											if($posP2a==1){
												$p2 .= 'Trabajar<br>';
											}
											if($posP2b==1){
												$p2 .= 'Viajar<br>';
											}
											if($posP2c==1){
												$p2 .= 'Pasar tiempo con mi familia/amigos<br>';
											}
											if($posP2d==1){
												$p2 .= 'Conocer gente nueva<br>';
											}
											if($posP2e==1){
												$p2 .= 'Carretear<br>';
											}
											if($posP2f==1){
												$p2 .= 'Practicar algún deporte<br>';
											}
											if($posP2g==1){
												$p2 .= 'Realizar alguna actividad artística<br>';
											}
											
											
											$p3 = "";
											if($posP3a==1){
												$p3 .= 'Expresar mis ideas y compartirlas con los demás para inspirarlos/motivarlos<br>';
											}
											if($posP3b==1){
												$p3 .= 'Conocer acerca de las diversas culturas y sus estilos de vida diferentes<br>';
											}
											if($posP3c==1){
												$p3 .= 'Destino mucho tiempo conectado a las redes sociales<br>';
											}
											if($posP3d==1){
												$p3 .= 'Prefiero salir a discoteques y pubs cuando carreteo<br>';
											}
											if($posP3e==1){
												$p3 .= 'Es muy importante para mí acatar las normas sociales<br>';
											}
											if($posP3f==1){
												$p3 .= 'Vivir la experiencia de grandes festivales, por ej de música, arte, deportes, etc…<br>';
											}
											if($posP3g==1){
												$p3 .= 'Practicar deportes al aire libre<br>';
											}
											if($posP3h==1){
												$p3 .= 'Pienso que el éxito consiste en convertirte en una celebridad<br>';
											}
											if($posP3i==1){
												$p3 .= 'Me gusta viajar a sitios populares, que están de moda<br>';
											}
											if($posP3j==1){
												$p3 .= 'Me gusta llevar una vida sencilla, cómoda pero sin grandes lujos<br>';
											}
											
											
											if($posP4==1){
												$p4 = 'Mucho, dedico parte de mi vida al voluntariado';
											}elseif($posP4==2){
												$p4 = 'Bastante, he participado en causas sociales';
											}elseif($posP4==3){
												$p4 = 'Poco, pero me gustaría involucrarme más';
											}elseif($posP4==4){
												$p4 = 'Nada, no me preocupa en lo absoluto';
											}
											
											$p6 = "";
											if($posP6a==1){
												$p6 .= 'Contaminación atmosférica<br>';
											}
											if($posP6b==1){
												$p6 .= 'Deforestación<br>';
											}
											if($posP6c==1){
												$p6 .= 'Contaminación oceánica<br>';
											}
											if($posP6d==1){
												$p6 .= 'Deterioro de la capa de ozono<br>';
											}
											if($posP6e==1){
												$p6 .= 'Desertización<br>';
											}
											if($posP6f==1){
												$p6 .= 'Agotamiento de los suelos<br>';
											}
											if($posP6g==1){
												$p6 .= 'Generación de desechos radiactivos<br>';
											}
											if($posP6h==1){
												$p6 .= 'Ninguna<br>';
											}
											
											
											if($posShare==1){
												$share = 'Si';
											}else{
												$share = 'No';
											}
											
									?>
								<tr>
									<td><?php echo $posID; ?></td>
									<td><?php echo $posNom ?> <?php echo $posApe ?></td>
									<td><?php echo $posRut; ?></td>
									<td><?php echo $posEdad; ?></td>
									<td><?php echo $posMail; ?></td>
									<td><?php echo $posFono; ?></td>
									<td><?php echo $posCom; ?>, <?php echo $posReg; ?></td>
									<td><?php echo $detalle; ?></td>
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
								<?php  
								$stmt->free_result;		
								}
								$stmt->close();       
								?>
							  </tbody>
							</table>  
<?php 
	else :
		header("Location: exportar.php?error=1");
endif;
endif;?>