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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOBILESTORE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        
        <img class="logo" src="logo.png" alt="logo">
        <nav>
            <ul class="nav-links">
                <li><a href="mobilestore.php"><button1 onclick="window.history.go">Store</button1></a></li>
                <li><a href="phones.php"><button1 onclick="window.history.go">Phones</button1></a></li>
                <li><a href="watches.php"><button1 onclick="window.history.go">Watches</button1></a></li>
                <li><a href="accessories.php"><button1 onclick="window.history.go">Accessories</button1></a></li>
                <li><a href="contact.php"><button1 onclick="window.history.go">Contact Us</button1></a></li>
                <li><a class="signin" href="signin.php"><button><b>Sign in</b></button></a>
            </ul>
           
        </nav>

    </header>


    
</head>
<body>

<h2>Registration Form</h2>

<div class="all">
    <div class="container"> 
        <?php if (isset($_SESSION['error'])): ?>
        <p><?php echo $_SESSION['error']; ?></p>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>
        <form action="register_process.php" name="Formfill" onsubmit="return validation()" method="post">
            <h2>Register</h2>
            <p id="result"></p>
            <div class="input-box">
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="input-box">
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <div class="input-box">
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
            </div>
            <div class="button">
                <input type="submit" class="button" value="Register">
            </div >
            <div class="input-box">
            
            
            
            
            <select name="role" id="role" required>
            <option value="admin">Admin</option>
            <option value="user">User</option>
            </select>

            </div>
            <div class="group">
                <br><span><a href="login.php">Login</a></span>
            </div>
        </form>
    </div>
    
</div>

<script src="signin.js"></script>
</body>
</html>