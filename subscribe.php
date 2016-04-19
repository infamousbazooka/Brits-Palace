<?php
	$email = $_POST["param"];
	require "connect.php";
	$date = date('Y-m-d H:i:s');
	$sql = "SELECT * FROM subscribers WHERE email='" . $email . "'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		echo "You are already subscribed to our newsletter.";
	} else{
		$sql = "INSERT into subscribers (email, `date`)
		VALUES ('" . $email . "', '" . $date . "')";
		if ($conn->query($sql) === TRUE) {
			echo "Subscription Added!";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
?>