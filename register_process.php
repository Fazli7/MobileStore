<?php
require_once 'config.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$confirm_password = $_POST['confirm_password'];

if ($password != $confirm_password) {
    echo "Passwords do not match";
    exit;
}

$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $email, $password);
$stmt->execute();

header("Location: login.php");