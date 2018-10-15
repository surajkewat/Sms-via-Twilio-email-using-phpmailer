<?php

use Twilio\Rest\Client;
use phpmailer\phpmailer\PHPMailer;
use phpmailer\phpmailer\Exception;

require 'vendor/autoload.php';
require 'vendor/phpmailer/src/Exception.php';
require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/SMTP.php';

$email = $_POST["email"];
$pass = $_POST["pass"];
$fun_id = $_POST["fun_id"];
switch($fun_id){
    case 1:
	sendSms();
	sendEmail();
	break;
}

function sendSms(){
	echo "sendSms started";
	$account_sid = 'AC94ae945b5e474762917289229b5ae506';
	$auth_token = '679d6e1be231fc166e3dd88726beab2c';
	$twilio_number = "xxxxxxxxxx"//Your twilio number;
	$client = new Client($account_sid, $auth_token);
	$client->messages->create('xxxxxxxx', array(       //replace xxxxxxx by receivers number
		'from' => $tiwilio_number,
		'body' => 'Hi '
	));
	echo 1;
}

function sendEmail(){
	$mail = new PHPMailer;                              
	//Set PHPMailer to use SMTP.
	$mail->isSMTP();            
	//Set SMTP host name                          
	$mail->Host = "smtp.gmail.com";
	//Set this to true if SMTP host requires authentication to send email
	$mail->SMTPAuth = true;                          
	//Provide username and password     
	$mail->Username = "yourmailaddress@gmail.com";                 
	$mail->Password = $password; // your password for authentication                        
	//If SMTP requires TLS encryption then set it
	$mail->SMTPSecure = "tls";                           
	//Set TCP port to connect to 
	$mail->Port = 587;                                   

	$mail->setFrom("yourmailaddress@gmail.com","name");

	$mail->addAddress("yourmailaddress@gmail.com", "name");

	$mail->isHTML(true);

	$mail->Subject = "Subject Text";
	$mail->Body = "<i>Mail body in HTML</i>";
	$mail->AltBody = "This is the plain text version of the email content";

	if(!$mail->send()) 
	{
		echo "Mailer Error: " . $mail->ErrorInfo;
	} 
	else 
	{
		echo "Message has been sent successfully";
	}
}


?>
 

 

