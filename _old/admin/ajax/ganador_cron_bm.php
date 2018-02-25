<?php

	require_once("../_lib/config.php");
	require_once("../_lib/MysqliDb.php");
	$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	
	function nombre($lol){
		$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
		$resultado = $db->rawQuery("select * from mckay125_participantes where mk125_ID = $lol");
		if($resultado){
			foreach ($resultado as $r) {
				$participantes   = $r["mk125_nom"];
			}
		}  
		return $participantes;
	}
	function id_x_rut($lol){
		$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
		$resultado = $db->rawQuery("select * from mckay125_participantes where mk125_ID = $lol");
		if($resultado){
			foreach ($resultado as $r) {
				$participantes   = $r["mk125_rut"];
			}
		}  
		return $participantes;
	}

	date_default_timezone_set('America/Santiago');

    $weeknumber = date("W");

  	$resultado = $db->rawQuery("SELECT COUNT( * ) AS total, WEEK( codTS ) AS week_number, codUS FROM mckay125_codigos WHERE WEEK( codTS ) = $weeknumber GROUP BY codUS ORDER BY total DESC LIMIT 20");
	if($resultado){
		foreach ($resultado as $r) {
			
			$mk125_Nom = nombre($r["codUS"]); 
			$mk125_rut = id_x_rut($r["codUS"]); 
			$mk125_rut = substr($mk125_rut, 0,-5).'XXX-X';
			$codigos_semana = $r["total"];
			
			$ganFec = date('Y-m-d');
		
			$data = Array (
				"ganNom" 	=> $mk125_Nom,
				"ganRut" 	=> $mk125_rut,
				"ganFec" 	=> $ganFec,
				"ganCod" 	=> $codigos_semana
			);
		
			print_r($data);
		
			
			$mk125_ID = $db->insert ('mckaybruno_ganadores', $data);		
			
			
			
		}
	}  	

	
			echo 'ok';		



	


/*
	header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata);
    exit();
*/

?>