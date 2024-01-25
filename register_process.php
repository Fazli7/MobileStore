<?php
session_start();
require 'config.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmPassword'];

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $_SESSION['error'] = "All fields are required!";
        header('location: signin.php');
    } elseif ($password !== $confirm_password) {
        $_SESSION['error'] = "Passwords do not match!";
        header('location: signin.php');
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            $_SESSION['error'] = "SQL error!";
            header('location: signin.php');
        } else {
            $stmt->bind_param('ssss', $username, $email, $hashed_password, $role);
            $role = 'user';
            $stmt->execute();
            $_SESSION['success'] = "Registration successful!";
            header('location: mobilestore.php');
        }
    }
}
?>