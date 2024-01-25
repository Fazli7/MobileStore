<?php
session_start();
require 'config.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "All fields are required!";
        header('location: login.php');
    } else {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            $_SESSION['error'] = "SQL error!";
            header('location: login.php');
        } else {
            $stmt->bind_param('s', $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user;
                header('location: dashboard.php');
            } else {
                $_SESSION['error'] = "Invalid email or password!";
                header('location: login.php');
            }
        }
    }
}
?>