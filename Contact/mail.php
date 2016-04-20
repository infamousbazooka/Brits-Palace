<?php
	require "../connect.php";
	require '../phpmailer/PHPMailerAutoload.php';
	$date = date('Y-m-d H:i:s');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$message = $_POST['message'];
	$sql = "INSERT into contacts (name, `date`, email, phone, address, message)VALUES ('" . $name . "', '" . $date . "', '" . $email . "', '" . $phone . "', '" . $address . "', '" . $message . "')";
	if ($conn->query($sql) === TRUE) {
		$body = "Hello Brits Palace!! I am " . $name . ", my email address is " . $email . " and my contact number is " . $phone . ". My contact address is " . $address . " and my message to you is :\n" . $message;
		$subject="britspalace.com Contact";
		$mail = new PHPMailer();
		$mail->IsHTML(true); 
		$mail->Host = "relay-hosting.secureserver.net";
		$mail->From = $email;
		$mail->Subject = $subject;
		$mail->Body = $body;
		$mail->WordWrap = 50;
		$mail->AddAddress("magnusfernandes1295@gmail.com");
		if(!$mail->send()) {
			echo "There was an error processing your request. Please contact us on +91-9158-857777.";
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else{
			echo "<br>We received your message. Thank you.";
		}
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>