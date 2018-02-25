<?php
$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
if ($ajax) {
	require_once("_lib/config.php");
	require_once("_lib/MysqliDb.php");

	$db 		= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	
	$oauth_uid	= filter_var($_POST["oauth_uid"], 	FILTER_SANITIZE_STRING);
	$voto		= filter_var($_POST["voto"], 		FILTER_SANITIZE_STRING);

	$yavote = 0;
	$resultado = $db->rawQuery('select * from votos where oauth_uid = '.$oauth_uid.' and voto = '.$voto);
	if($resultado){
		foreach ($resultado as $r) {
			$yavote = 1;
		}
	}  
	if($yavote==0){
		$exite = 0;
		$resultado = $db->rawQuery('select * from users where oauth_uid = '.$oauth_uid);
		if($resultado){
			foreach ($resultado as $r) {
				$exite = 1;
			}
		}  
		if($exite == 1){
/*
			date_default_timezone_set('America/Santiago');
			$ahora 	= date("Y-m-d H:i:s");	
			
			$data = Array (
				"oauth_uid" => $oauth_uid,
				"voto" 		=> $voto,
				"TS"		=> $ahora
			);
			
			$id = $db->insert ('votos', $data);	
			echo '1';
*/
		}else{
			echo 'error';
		}
	}else{
		echo '2';
	}
}else{
	echo 'error';
}
?>