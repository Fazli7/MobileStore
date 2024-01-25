<?php
session_start();
require 'config.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $_SESSION['error'] = "All fields are required!";
        header('location: register.php');
    } elseif ($password !== $confirm_password) {
        $_SESSION['error'] = "Passwords do not match!";
        header('location: register.php');
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            $_SESSION['error'] = "SQL error!";
            header('location: register.php');
        } else {
            $stmt->bind_param('ssss', $username, $email, $hashed_password, $role);
            $role = 'user';
            $stmt->execute();
            $_SESSION['success'] = "Registration successful!";
            header('location: index.php');
        }
    }
}
?>