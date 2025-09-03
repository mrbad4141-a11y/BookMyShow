<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "movie";

// $conn = new mysqli($host, $user, $pass, $db);

$conn = new mysqli ($servername,$username,$pass,$dbname);

if ($conn->connect_error) {
    die("nahi hua: " . $conn->connect_error);
}
?>