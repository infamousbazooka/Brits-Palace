<?php
	require "connect.php";
	require 'phpmailer/PHPMailerAutoload.php';
	date_default_timezone_set('Asia/Calcutta');
	$date = date('Y-m-d H:i:s');
	$startdate = $_POST['date'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$days = $_POST['days'];
	$sql = "INSERT into bookings (email, `date`, days, start_date, contact)VALUES ('" . $email . "', '" . $date . "', '" . $days . "', '" . $startdate . "', '" . $contact . "')";
	if ($conn->query($sql) === TRUE) {
		$body = "Hello Brits Palace!! My email address is " . $email . " and my contact number is " . $contact . ". I would like to book your home from " . $startdate . " for " . $days . " days.";
		$subject="Booking";
		$mail = new PHPMailer();
		$mail->IsHTML(true); 
		$mail->Host = "relay-hosting.secureserver.net";
		$mail->From = $email;
		$mail->Subject = $subject;
		$mail->Body = $body;
		$mail->WordWrap = 50;
		$mail->AddAddress("britspalace@gmail.com");
		if(!$mail->send()) {
			echo "There was an error processing your request. Please contact us on +91-9158-857777.";
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else{
			echo "<br>Booking placed. We will get back to you shortly.";
		}
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>