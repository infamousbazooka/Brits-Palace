<?php
	require "../connect.php";
	require '../phpmailer/PHPMailerAutoload.php';
	date_default_timezone_set('Asia/Calcutta');
	$date = date('Y-m-d H:i:s');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$message = $_POST['message'];
	$sql = "INSERT into contacts (name, `date`, email, phone, address, message)VALUES ('" . $name . "', '" . $date . "', '" . $email . "', '" . $phone . "', '" . $address . "', '" . $message . "')";
	$tos = ["info@britspalace.com", "reservations@britspalace.com", "john@britspalace.com"];
	if ($conn->query($sql) === TRUE) {
		for ($i=0; $i < 3; $i++) { 
			$body = "Hello Brits Palace!! I am " . $name . ", my email address is " . $email . " and my contact number is " . $phone . ". My contact address is " . $address . " and my message to you is :\n" . $message;
			$subject="britspalace.com Contact";
			$mail = new PHPMailer();
			$mail->IsHTML(true); 
			$mail->Host = "relay-hosting.secureserver.net";
			$mail->From = $email;
			$mail->Subject = $subject;
			$mail->Body = $body;
			$mail->WordWrap = 50;
			$mail->AddAddress($tos[$i]);
			if(!$mail->send()) {
				echo "There was an error processing your request. Please contact us on +91-9158-857777.";
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else{
				echo "<br>We received your message. Thank you.";
			}
		}
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>