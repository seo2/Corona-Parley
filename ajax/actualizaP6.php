<?php
$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
if ($ajax) {
	require_once("_lib/config.php");
	require_once("_lib/MysqliDb.php");
	$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	
	$posID		= filter_var($_POST["posID"], FILTER_SANITIZE_STRING);
	$posP6a		= filter_var($_POST["posP6a"], FILTER_SANITIZE_STRING);
	$posP6b		= filter_var($_POST["posP6b"], FILTER_SANITIZE_STRING);
	$posP6c		= filter_var($_POST["posP6c"], FILTER_SANITIZE_STRING);
	$posP6d		= filter_var($_POST["posP6d"], FILTER_SANITIZE_STRING);
	$posP6e		= filter_var($_POST["posP6e"], FILTER_SANITIZE_STRING);
	$posP6f		= filter_var($_POST["posP6f"], FILTER_SANITIZE_STRING);
	$posP6g		= filter_var($_POST["posP6g"], FILTER_SANITIZE_STRING);
	$posP6h		= filter_var($_POST["posP6h"], FILTER_SANITIZE_STRING);
	
	$data = Array (
		"posP6a" 	=> $posP6a,
		"posP6b" 	=> $posP6b,
		"posP6c" 	=> $posP6c,
		"posP6d" 	=> $posP6d,
		"posP6e" 	=> $posP6e,
		"posP6f" 	=> $posP6f,
		"posP6g" 	=> $posP6g,
		"posP6h" 	=> $posP6h
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