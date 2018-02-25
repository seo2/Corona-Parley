<?php
$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
if ($ajax) {
	require_once("../_lib/config.php");
	require_once("../_lib/MysqliDb.php");
	$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	
	if(isset($_POST['posID'])){
		$posID = $_POST['posID'];

		$ok = 0;
		$resultado = $db->rawQuery('select * from verano where posID='.$posID);
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
				$posTS 		= $r["posTS"]; 	
				$posPlaya 	= $r["posPlaya"]; 	
				$ok 		= 1;
			}
		}  
		
		if($posFecha2){
			$posFecha = $posFecha2;
		}


		/* Acá hay que agregar la condición según la fecha del mail y lugar (algunos lugares tienen más de una fecha) */
		if($posFecha=='04/01/2018'){
			$imagen = 'VXO_MAILING_ARICA-4ENERO.png';
		}elseif($posFecha=='05/01/2018'){ // Arica
			$imagen = 'VXO_MAILING_ARICA-5ENERO.png';
		}elseif($posFecha=='06/01/2018'){ // Arica
			$imagen = 'VXO_MAILING_ARICA-6ENERO.png';
		}elseif($posFecha=='11/01/2018'){ // caldera
			$imagen = 'VXO_MAILING_SELECCIONADO-ANTOFA11ENE2018.png';
		}elseif($posFecha=='12/01/2018'){ // caldera
			$imagen = 'VXO_MAILING_SEL-CALDERAT2.png';
		}elseif($posFecha=='13/01/2018'){ // bahía inglesa
			$imagen = 'VXO_MAILING_SEL-BAHIAT2.png';
		}elseif($posFecha=='20/01/2018'){ // Iquique
			$imagen = 'VXO_MAILING_SEL-IQUIQUE.png';
		}elseif($posFecha=='25/01/2018'){ // Totoralillo
			$imagen = 'VXO_MAILING_SELECCIONADO-TOTORALILLO.png';
		}elseif($posFecha=='26/01/2018'){ // La Serena
			$imagen = 'VXO_MAILING_SELECCIONADO-LASERENA.png';
		}elseif($posFecha=='27/01/2018'){ // Guanaqueros
			$imagen = 'VXO_MAILING_SELECCIONADO-GUANAQUEROS.png';
		}elseif($posFecha=='01/02/2018'){ // Quintero
			$imagen = 'VXO_MAILING_SELECCIONADO-QUINTERO_v2.png';
		}elseif($posFecha=='02/02/2018'){ // Quintero
			$imagen = 'VXO_MAILING_SELECCIONADO-CONCON_v2.png';
		}elseif($posFecha=='03/02/2018'){ // Quintero
			$imagen = 'VXO_MAILING_SELECCIONADO-MAITEN_v2.png';
		}elseif($posFecha=='09/02/2018'){ // Pichilemu 1
			$imagen = '9FEB_VXO_MAILING_SELECCIONADO-PICHILEMU.png';
		}elseif($posFecha=='10/02/2018'){ // Pichilemu 2
			$imagen = '10FEB_VXO_MAILING_SELECCIONADO-PICHILEMU.png';
		}elseif($posFecha=='16/02/2018'){ // Pichilemu 2
			$imagen = 'VXO_MAILING_POSTULACIONLIMPIEZAS2018-PUERTECILLO.png';
		}elseif($posFecha=='17/02/2018'){ // Pichilemu 2
			$imagen = 'VXO_MAILING_POSTULACIONLIMPIEZAS2018-MATANZAS.png';
		}elseif($posFecha=='20/02/2018'){ // CURANIPE
			$imagen = 'VXO_MAILING_POSTULACIONLIMPIEZAS2018-CURANIPE.png';
		}elseif($posFecha=='22/02/2018'){ // VALDIVIA
			$imagen = 'VXO_MAILING_POSTULACIONLIMPIEZAS2018-VALDIVIA.png';
		}elseif($posFecha=='24/02/2018'){ // CHILOE
			$imagen = 'VXO_SELECCIONADO_MAILING_POSTULACIONLIMPIEZAS2018-CHILOE.png';
		}

		
	
	//echo $imagen;
	//die();

			
		
		$message   = "<!DOCTYPE html>";
		$message  .= "<html lang='en' style='box-sizing: border-box; color: rgba(0, 0, 0, 0.87);  font-size: 14px; font-weight: normal; height: 100%; line-height: 1.5; width: 100%; '>";
		$message  .= "<head style='box-sizing: inherit;'>";
		$message  .= "<meta content='text/html; charset=UTF-8' http-equiv='Content-Type' style='box-sizing: inherit;' />";
		$message  .= "<meta content='width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no' name='viewport' style='box-sizing: inherit;' />";
		$message  .= "</head>";
		$message  .= '<body height="100%" width="100%" bgcolor="#F0F0F0" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;margin:0 auto !important;padding:0 !important;height:100% !important;width:100% !important;text-align: center;">';
		$message  .= '<table style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;border-spacing:0 !important;border-collapse:collapse !important;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;background-color:#f3f3f3; display:inline-table; text-align: left;" border="0" cellpadding="0" cellspacing="0" width="650" height="648">';
		$message  .= '<tr style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">';
		$message  .= '<td colspan="5" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;padding:0;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;">';
		$message  .= '<a href="http://voluntariosporeloceano.cl/confirma_verano.php?posID='.$posID.'" title="'.$imagen.'">';
		$message  .= '<img src="http://voluntariosporeloceano.cl/mails/'.$imagen.'" width="650" height="648" alt="Felicitaciones, bienvenidos al equipo de voluntarios por las playas de Chile" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;border:0;-ms-interpolation-mode:bicubic;display:block;">';
		$message  .= "</a></td></tr></table></body></html>";
		$message  .= "</div>";
		$message  .= "</body>";
		$message  .= "</html>";
		
		$subject = 'Corona x Parley / Bienvenido al equipo de voluntarios por las playas de Chile';
		
		$headers  = "From: Voluntarios por el Océano <no-contestar@voluntariosporeloceano.cl>\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		mail($posMail, $subject, $message, $headers);

		if($posMailAmi){
			
			$message   = "<!DOCTYPE html>";
			$message  .= "<html lang='en' style='box-sizing: border-box; color: rgba(0, 0, 0, 0.87);  font-size: 14px; font-weight: normal; height: 100%; line-height: 1.5; width: 100%; '>";
			$message  .= "<head style='box-sizing: inherit;'>";
			$message  .= "<meta content='text/html; charset=UTF-8' http-equiv='Content-Type' style='box-sizing: inherit;' />";
			$message  .= "<meta content='width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no' name='viewport' style='box-sizing: inherit;' />";
			$message  .= "</head>";
			$message  .= '<body height="100%" width="100%" bgcolor="#F0F0F0" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;margin:0 auto !important;padding:0 !important;height:100% !important;width:100% !important;text-align: center;">';
			$message  .= '<table style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;border-spacing:0 !important;border-collapse:collapse !important;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;background-color:#f3f3f3; display:inline-table; text-align: left;" border="0" cellpadding="0" cellspacing="0" width="650" height="648">';
			$message  .= '<tr style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;">';
			$message  .= '<td colspan="5" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;padding:0;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;">';
			$message  .= '<a href="http://voluntariosporeloceano.cl/confirma_verano.php?posID='.$posID.'&ami=1">';
			$message  .= '<img src="http://voluntariosporeloceano.cl/mails/'.$imagen.'" width="650" height="648" alt="Felicitaciones, bienvenidos al equipo de voluntarios por las playas de Chile" style="-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;border:0;-ms-interpolation-mode:bicubic;display:block;">';
			$message  .= "</a></td></tr></table></body></html>";
			$message  .= "</div>";
			$message  .= "</body>";
			$message  .= "</html>";			
			
			
			mail($posMailAmi, $subject, $message, $headers);
		}
			
		$data = Array (
			"enviado" 	=> 1
		);
	
		
		$db->where ('posID', $posID);
		if ($db->update ('verano', $data)){
			//echo $posID;
		}else{
			//echo 'error';
		}	
			
		echo 1;
		
	}
}else{
	echo 'error';
}
?>