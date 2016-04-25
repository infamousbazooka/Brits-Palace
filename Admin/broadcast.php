<?php
	$subject = $_POST["param1"];
	$message = $_POST["param2"];
	require "../connect.php";
	require '../phpmailer/PHPMailerAutoload.php';
	$sql = "SELECT * FROM subscribers";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	$body = $message;
	    	$subject=$subject;
	    	$mail = new PHPMailer();
	    	$mail->IsHTML(true); 
	    	$mail->Host = "relay-hosting.secureserver.net";
	    	$mail->From = "info@britspalace.com";
	    	$mail->Subject = $subject;
	    	$mail->Body = $body;
	    	$mail->WordWrap = 50;
	    	$mail->AddAddress($subs[$i]);
	    	if(!$mail->send()) {
	    		echo "There was an error processing your request.";
	    	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	    	}
	    }
	}
	echo "Broadcast sent!";
?>