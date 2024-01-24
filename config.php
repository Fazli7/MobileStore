<?php
$servername = "localhost";
$username = "myUsername";
$password = "myPassword";
$dbname = "myDatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>