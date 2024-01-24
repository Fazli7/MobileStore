<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if ($_SESSION['role'] == 'admin') {
    echo "Welcome, admin!";
    // show admin dashboard
} else {
    echo "Welcome, user!";
    // show regular user dashboard
}