<?php
$servername = "amberzile@localhost";
$uname = "johnbrito";
$pword = "johnBrito123";
$dbname = "britspalace";
$conn = new mysqli($servername, $uname, $pword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>