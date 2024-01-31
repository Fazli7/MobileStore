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

    <img class="logo" src="./photos/logo.png" alt="logo">
    <nav>
        <ul class="nav-links">
            <li><a href="index.php">
                    <button1 onclick="window.history.go">Store</button1>
                </a></li>
            <li><a href="phones.php">
                    <button1 onclick="window.history.go">Phones</button1>
                </a></li>
            <li><a href="watches.php">
                    <button1 onclick="window.history.go">Watches</button1>
                </a></li>
            <li><a href="accessories.php">
                    <button1 onclick="window.history.go">Accessories</button1>
                </a></li>
            <li><a href="./Contactus/index.php">
                    <button1 onclick="window.history.go">Contact Us</button1>
                </a></li>
            <li><a class="signin" href="signin.php">
                    <button><b>Sign in</b></button>
                </a>
        </ul>

    </nav>

</header>


</body>
<body>

<h2>Registration Form</h2>

<div class="all">
    <div class="container">
        <?php if (isset($_SESSION['error'])): ?>
            <p><?php echo $_SESSION['error']; ?></p>
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>
        <form action="register_process.php" name="Formfill"  method="post">
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