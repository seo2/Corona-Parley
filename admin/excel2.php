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
								

		
?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exporting Data to a CSV File</title>

		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/tableexport.min.css" rel="stylesheet">
    </head>

    <body>
   <style type="text/css">
   	body{
   		font-family: arial;
   		font-size: 11px;
   	}



   	th, td{
   		font-size: 11px;
   	}

   </style>

        
		  <div id="dvData">
							<table id="toExcel" border="1" cellspacing="0" cellpadding="0">
							  <thead>
								  <tr>
									  <th>ID</th>
									  <th>NOMBRE</th>
									<th>RUT</th>
									<th>EDAD</th>
									<th>MAIL</th>
									<th>FONO</th>
									<th>COMUNA</th>
									<th>REGION</th>
									<th>DETALLE</th>
									  <th>Pregunta I</th>
									  <th>Pregunta II</th>
									  <th>Pregunta III</th>
									  <th>Pregunta IV</th>
									  <th>Pregunta V</th>
									  <th>Pregunta VI</th>
									  <th>Pregunta VII</th>
									  <th>Pregunta VII</th>
									  <th>Compartido</th>
									  <th>Fecha</th>
								  </tr>
							  </thead>   
							  <tbody>
								  <?php
								  	while ($stmt->fetch()) { 
																																								
											$detalle	= "";
											if($posDis==1){
												$detalle .= 'Disponible para viajar - ';
											}
											if($posPas==1){
												$detalle .= 'Tiene Pasaporte Vigente - ';
											}
											if($posQuiero==1){
												$detalle .= 'Desea recibir información -';
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
												$p2 .= 'Trabajar - ';
											}
											if($posP2b==1){
												$p2 .= 'Viajar - ';
											}
											if($posP2c==1){
												$p2 .= 'Pasar tiempo con mi familia/amigos - ';
											}
											if($posP2d==1){
												$p2 .= 'Conocer gente nueva - ';
											}
											if($posP2e==1){
												$p2 .= 'Carretear - ';
											}
											if($posP2f==1){
												$p2 .= 'Practicar algún deporte - ';
											}
											if($posP2g==1){
												$p2 .= 'Realizar alguna actividad artística - ';
											}
											
											
											$p3 = "";
											if($posP3a==1){
												$p3 .= 'Expresar mis ideas y compartirlas con los demás para inspirarlos/motivarlos - ';
											}
											if($posP3b==1){
												$p3 .= 'Conocer acerca de las diversas culturas y sus estilos de vida diferentes - ';
											}
											if($posP3c==1){
												$p3 .= 'Destino mucho tiempo conectado a las redes sociales - ';
											}
											if($posP3d==1){
												$p3 .= 'Prefiero salir a discoteques y pubs cuando carreteo - ';
											}
											if($posP3e==1){
												$p3 .= 'Es muy importante para mí acatar las normas sociales - ';
											}
											if($posP3f==1){
												$p3 .= 'Vivir la experiencia de grandes festivales, por ej de música, arte, deportes, etc… - ';
											}
											if($posP3g==1){
												$p3 .= 'Practicar deportes al aire libre - ';
											}
											if($posP3h==1){
												$p3 .= 'Pienso que el éxito consiste en convertirte en una celebridad - ';
											}
											if($posP3i==1){
												$p3 .= 'Me gusta viajar a sitios populares, que están de moda - ';
											}
											if($posP3j==1){
												$p3 .= 'Me gusta llevar una vida sencilla, cómoda pero sin grandes lujos - ';
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
												$p6 .= 'Contaminación atmosférica - ';
											}
											if($posP6b==1){
												$p6 .= 'Deforestación - ';
											}
											if($posP6c==1){
												$p6 .= 'Contaminación oceánica - ';
											}
											if($posP6d==1){
												$p6 .= 'Deterioro de la capa de ozono - ';
											}
											if($posP6e==1){
												$p6 .= 'Desertización - ';
											}
											if($posP6f==1){
												$p6 .= 'Agotamiento de los suelos - ';
											}
											if($posP6g==1){
												$p6 .= 'Generación de desechos radiactivos - ';
											}
											if($posP6h==1){
												$p6 .= 'Ninguna - ';
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
									<td><?php echo $posCom; ?></td>
									<td><?php echo $posReg; ?></td>
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

	</div>
	<div class="col-md-6"><center><a href="exportar.php" class="btn btn-md btn-primary">VOLVER</a></center></div>


<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/xlsx.core.js"></script>
<script src="assets/js/FileSaver.min.js"></script>
<script src="assets/js/tableexport.min.js"></script>
<script>
$(document).ready(function() {

	$("table").tableExport({
	formats: ["xlsx"],    // (String[]), filetypes for the export
    fileName: "postulantes", 
	});

});
$(window).load(function() {
  $("html, body").animate({ scrollTop: $(document).height() }, 1000);
});

</script>
</body>
</html>
<?php 
	else :
		header("Location: exportar.php?error=1");
endif;
endif;?>