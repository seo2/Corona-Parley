<?php
$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
if ($ajax) {
	require_once("_lib/config.php");
	require_once("_lib/MysqliDb.php");
	$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	
	$posID		= filter_var($_POST["posID"], FILTER_SANITIZE_STRING);
	$posP3a		= filter_var($_POST["posP3a"], FILTER_SANITIZE_STRING);
	$posP3b		= filter_var($_POST["posP3b"], FILTER_SANITIZE_STRING);
	$posP3c		= filter_var($_POST["posP3c"], FILTER_SANITIZE_STRING);
	$posP3d		= filter_var($_POST["posP3d"], FILTER_SANITIZE_STRING);
	$posP3e		= filter_var($_POST["posP3e"], FILTER_SANITIZE_STRING);
	$posP3f		= filter_var($_POST["posP3f"], FILTER_SANITIZE_STRING);
	$posP3g		= filter_var($_POST["posP3g"], FILTER_SANITIZE_STRING);
	$posP3h		= filter_var($_POST["posP3h"], FILTER_SANITIZE_STRING);
	$posP3i		= filter_var($_POST["posP3i"], FILTER_SANITIZE_STRING);
	$posP3j		= filter_var($_POST["posP3j"], FILTER_SANITIZE_STRING);
	
	$data = Array (
		"posP3a" 	=> $posP3a,
		"posP3b" 	=> $posP3b,
		"posP3c" 	=> $posP3c,
		"posP3d" 	=> $posP3d,
		"posP3e" 	=> $posP3e,
		"posP3f" 	=> $posP3f,
		"posP3g" 	=> $posP3g,
		"posP3h" 	=> $posP3h,
		"posP3i" 	=> $posP3i,
		"posP3j" 	=> $posP3j
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