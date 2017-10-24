<?php
$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
if ($ajax) {
	require_once("_lib/config.php");
	require_once("_lib/MysqliDb.php");
	$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	
	$posID		= filter_var($_POST["posID"], FILTER_SANITIZE_STRING);
	$posP2a		= filter_var($_POST["posP2a"], FILTER_SANITIZE_STRING);
	$posP2b		= filter_var($_POST["posP2b"], FILTER_SANITIZE_STRING);
	$posP2c		= filter_var($_POST["posP2c"], FILTER_SANITIZE_STRING);
	$posP2d		= filter_var($_POST["posP2d"], FILTER_SANITIZE_STRING);
	$posP2e		= filter_var($_POST["posP2e"], FILTER_SANITIZE_STRING);
	$posP2f		= filter_var($_POST["posP2f"], FILTER_SANITIZE_STRING);
	$posP2g		= filter_var($_POST["posP2g"], FILTER_SANITIZE_STRING);
	
	$data = Array (
		"posP2a" 	=> $posP2a,
		"posP2b" 	=> $posP2b,
		"posP2c" 	=> $posP2c,
		"posP2d" 	=> $posP2d,
		"posP2e" 	=> $posP2e,
		"posP2f" 	=> $posP2f,
		"posP2g" 	=> $posP2g
	);
	print_r($data);
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