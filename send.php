<?php

if ($_POST) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$to_email = "arnoldgerardo@icloud.com";

	$subject = 'Contacto Arnoldo';
	$message = 'FROM: '.$name.' Email: '.$email."\r\n".' Message: '.$message;
	$headers = 'From: uris.ec10@gmail.com' . "\r\n";

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
		if (mail($to_email, $subject, $message, $headers))  //This method sends the mail.
			echo json_encode(array("type"=>"message", "text" => "Datos Enviados, Gracias."));	
		else
			echo json_encode(array("type"=>"error", "text" => "Error al mandar datos! Por favor intentalo más tarde."));	
	}else
		echo json_encode(array("type"=>"error", "text" => "Error al mandar datos! Por favor verifica tu Email."));
}
	 
?>

