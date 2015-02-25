<?php

if ($_POST) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$to_email = "uris.ec10@gmail.com";

	$subject = 'Mensaje  prueba';
	$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
	$headers = 'From: uris_ec@hotmail.com' . "\r\n";

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
		mail($to_email, $subject, $message, $headers); //This method sends the mail.
		echo "mensaje enviado";
	}else{
		 echo "no se pudo";
	}
}
	 
?>






