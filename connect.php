<?php
$servername = "localhost";
$uname = "root";
$pword = "";
$dbname = "britspalace";
$conn = new mysqli($servername, $uname, $pword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>