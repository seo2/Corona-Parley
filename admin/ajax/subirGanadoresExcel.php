<?php
	/*
This script is use to upload any Excel file into database.
Here, you can browse your Excel file and upload it into 
your database.

Download Link: http://www.discussdesk.com/import-excel-file-data-in-mysql-database-using-PHP.htm

Website URL: http://www.discussdesk.com
*/

session_start();
require_once("../_lib/config.php");
require_once("../_lib/MysqliDb.php");
$db2 = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);


$link 	= mysqli_connect(DBHOST, DBUSER, DBPASS) or die("Couldn't make connection.");
$db 	= mysqli_select_db($link, DBNAME) or die("Couldn't select database");

$databasetable = "verano_ganadores";

/************************ YOUR DATABASE CONNECTION END HERE  ****************************/



set_include_path(get_include_path() . PATH_SEPARATOR . 'classes/');
include 'PHPExcel/IOFactory.php';

		$sourcePath  = $_FILES['archivo']['tmp_name']; 
		$temp 		 = explode(".",$_FILES["archivo"]["name"]);
		$newfilename = sha1(uniqid(mt_rand(), TRUE)) . '.' .end($temp);
		$targetPath  = "uploads/".$newfilename; 
		move_uploaded_file($sourcePath,$targetPath) ;  
			
		$inputFileName = "uploads/".$newfilename;


// This is the file path to be uploaded.
//$inputFileName = 'test.xlsx'; 

try {
	$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
} catch(Exception $e) {
	die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}


$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
$arrayCount 	= count($allDataInSheet);  // Here get total count of row in that Excel sheet

//echo $arrayCount;

$u = 0;
for($i=1;$i<=$arrayCount;$i++){
	


	$posID 		= trim($allDataInSheet[$i]["A"]); 
	$posNom 	= trim($allDataInSheet[$i]["B"]); 
	$posApe 	= trim($allDataInSheet[$i]["C"]); 
	$posRut 	= trim($allDataInSheet[$i]["D"]); 
	$posMail	= trim($allDataInSheet[$i]["E"]); 
	$posFono	= trim($allDataInSheet[$i]["F"]); 
	$posReg 	= trim($allDataInSheet[$i]["G"]); 
	$posNomAmi = trim($allDataInSheet[$i]["H"]);  
	$posMailAmi = trim($allDataInSheet[$i]["I"]);  
	$posFonoAmi = trim($allDataInSheet[$i]["J"]); 
	$posPlaya = trim($allDataInSheet[$i]["K"]); 
	$posFecha = trim($allDataInSheet[$i]["L"]); 
	$posFecha2 = trim($allDataInSheet[$i]["M"]); 
	$posShare = trim($allDataInSheet[$i]["N"]); 
	$posAct = trim($allDataInSheet[$i]["O"]); 
	$posEst = trim($allDataInSheet[$i]["P"]); 
	$posEstAmi = trim($allDataInSheet[$i]["Q"]);  
	$posTS = trim($allDataInSheet[$i]["R"]); 
	$enviado = trim($allDataInSheet[$i]["S"]); 

	$query = "insert into ".$databasetable." (
		posID, posNom, posApe, posRut, posMail, posFono, posReg, posNomAmi, posMailAmi, posFonoAmi, posPlaya, posFecha, posFecha2, posShare, posAct, posEst, posEstAmi, posTS, enviado
	
	) values(
		'".$posID."',	
		'".$posNom."',	
		'".$posApe."',
		'".$posRut."',
		'".$posMail."',
		'".$posFono."', 
		'".$posReg."',	
		'".$posNomAmi."',
		'".$posMailAmi."',
		'".$posFonoAmi."',
		'".$posPlaya."',	
		'".$posFecha."',
		'".$posFecha2."',
		'".$posShare."',
		'".$posAct."',
		'".$posEst."',
		'".$posEstAmi."',
		'".$posTS."',
		'".$enviado."'
	)";
	
	//echo $query."<br><br>";
	$insertTable = $link->query($query);
	$msg = 'ok';
			
	
}

echo $msg;
 

?>
<p><a href="../ganadoresForm.php">Volver</a></p>