<?php
$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
if ($ajax) {
	require_once("_lib/config.php");
	require_once("_lib/MysqliDb.php");
	$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	
	$posID		= filter_var($_POST["posID"], FILTER_SANITIZE_STRING);
	$posShare	= filter_var($_POST["posShare"], FILTER_SANITIZE_STRING);
	
	$data = Array (
		"posShare" 	=> $posShare
	);
	
	$db->where ('posID', $posID);
	if ($db->update ('postulantes', $data)){
		echo '1';
	}else{
		echo 'error';
	}
	
}else{
	echo 'error';
}
?>