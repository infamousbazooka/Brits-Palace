<?php
	$username = $_POST["param1"];
	$password = $_POST["param2"];
	$uname = "admin";
	$pword = "123";
	if($username = $uname && $password == $pword){
		session_start();
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		echo "<script>$('#mainwrapper').load(file);</script>";
	} else {
		echo "PLEASE ENTER CORRECT LOGIN INFORMATION";
	}
?>