<?php
$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
if ($ajax) {
	require_once("_lib/config.php");
	require_once("_lib/MysqliDb.php");
	$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	
	$nombre		= filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
	$apellido	= filter_var($_POST["apellido"], FILTER_SANITIZE_STRING);
	$rut		= filter_var($_POST["rut"], FILTER_SANITIZE_STRING);
	$edad		= filter_var($_POST["edad"], FILTER_SANITIZE_STRING);
	$mail 		= filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	$fono		= filter_var($_POST["telefono"], FILTER_SANITIZE_STRING);
	$region 	= filter_var($_POST["region"], FILTER_SANITIZE_STRING);
	$comuna 	= filter_var($_POST["comuna"], FILTER_SANITIZE_STRING);
	$disponible = filter_var($_POST["disponible"], FILTER_SANITIZE_STRING);
	$pasaporte 	= filter_var($_POST["pasaporte"], FILTER_SANITIZE_STRING);
	$quiero 	= filter_var($_POST["quiero"], FILTER_SANITIZE_STRING);


	$existe = 0;
	$participante = $db->rawQuery('select * from postulantes where posRut LIKE "'.$rut.'"');
	if($participante){
		foreach ($participante as $p) {
			$existe = 1;
		}
	}  

	if($existe == 0){
			
		$ua		= $_SERVER['HTTP_USER_AGENT'];
		$ip		= $_SERVER['REMOTE_ADDR'];	
			
		date_default_timezone_set('America/Santiago');
		$ahora 	= date("Y-m-d H:i:s");
		
		$data = Array (
			"posNom" 	=> $nombre,
			"posApe" 	=> $apellido,
			"posRut" 	=> $rut,
			"posEdad" 	=> $edad,
			"posMail" 	=> $mail,
			"posFono" 	=> $fono,
			"posReg" 	=> $region,
			"posCom" 	=> $comuna,
			"posDis" 	=> $disponible,
			"posPas" 	=> $pasaporte,
			"posQuiero" => $quiero,
			"posEst" 	=> 0,
			"posTS" 	=> $ahora
		);
		
		$id = $db->insert ('postulantes', $data);
		
		
		if($id){
			echo $id;
		}else{
			echo 'error';
		}
	}else{
		echo 'existe';
	}
}else{
	echo 'error';
}
?>