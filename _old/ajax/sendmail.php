<?php
$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
$_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';

if ($ajax) {
	require_once '_lib/PHPMailer/PHPMailerAutoload.php';
	require_once("_lib/config.php");
	require_once("_lib/MysqliDb.php");
	$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);

$posID = filter_var($_POST["posID"], FILTER_SANITIZE_STRING);

$db->where ("posID", $posID);
$user = $db->getOne ("postulantes");
$email = $user['posMail'];
$nombre = $user['posNom'];
$enviado = $user['enviado'];

//$email = "carolina@seo2.cl";
//$nombre = "Carolina Rojas";

	if($enviado != 1){
	//PHPMailer Object
	$mail = new PHPMailer;

	$mail->charSet = "UTF-8"; 
	//From email address and name
	$mail->From = "postulaciones@voluntariosporeloceano.cl";
	$mail->FromName = utf8_decode("Equipo Voluntarios por el Océano");

	//To address and name
	$mail->addAddress($email, $nombre);
	//$mail->addAddress("recepient1@example.com"); //Recipient name is optional

	//Address to which recipient will reply
	$mail->addReplyTo("postulaciones@voluntariosporeloceano.cl", "Reply");

	//CC and BCC
	//$mail->addCC("cc@example.com");
	//$mail->addBCC("bcc@example.com");

	//Send HTML or Plain Text email
	$mail->isHTML(true);


	$asunto = utf8_decode("Recibimos tu postulación para unirte a los Voluntarios por el Océano");
	
	$mail->Subject = $asunto;
	$mail->Body = file_get_contents("../mailing/2017/11/voluntarios/index.html");
	//$mail->AltBody = "This is the plain text version of the email content";
	//echo $mail->Body;
		if(!$mail->send()) 
		{
		    echo "Mailer Error: " . $mail->ErrorInfo;
		} 
		else 
		{
		    echo "Message has been sent";
		    //update base de datos
		    $data = Array (
				'enviado' => 1
			);
			$db->where ("posID", $posID);
			if ($db->update ('postulantes', $data));
		}
	}
}