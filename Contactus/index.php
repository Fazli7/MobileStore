<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="../styles/style.css" />
    
    <script src="validations.js"></script>
</head>

<body class="loggedin">
<header>
        <img class="logo" src="../photos/logo.png" alt="logo">
        <nav>
            <ul class="nav-links">
                <li><a href="../index.php"><button1 onclick="window.history.go">Store</button1></a></li>
                <li><a href="../phones.php"><button1 onclick="window.history.go">Phones</button1></a></li>
                <li><a href="../watches.php"><button1 onclick="window.history.go">Watches</button1></a></li>
                <li><a href="../accessories.php"><button1 onclick="window.history.go">Accessories</button1></a></li>
                <li><a href="index.php"><button1>Contact Us</button1></a></li>
                <li><a class="signin" href="../signin.php"><button><b>Sign in</b></button></a>
            </ul>
           
        </nav>
       
    </header>
    <div id="contact-wrapper">
        <div id="contact" class="contact-content">

            <div class="content">


                <!-- <form> meth -->
                <form method="post" method="myform" onsubmit="return validateForm();">
                    <div class="rows">
                        <div class="contact-tittle">
                            <h2>Contact us</h2>
                        </div>
                        <div id="error_message"></div>
                        <div class="first-row">
                            <div class="row">
                                <input type="text" class="text" id="name" placeholder="Name" name="name" required>
                                <input type="text" class="text" id="email" placeholder="Email" name="email">
                            </div>
                            <div class="description">
                                <textarea id="message" placeholder="Message" class="mes sage" name="message" required></textarea>
                            </div>
                        </div>
                        <div class="row-button">
                            <div class="submit">
                                <input type="submit" name="save" id="submit" class="contact-button" required></input>
                            </div>
                        </div>
                    </div>


            </div>
        </div>
    </div>
    </div>


</body>
<?php
include_once '../database.php';
// If the user is not logged in redirect to the login page...

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO contact_us (name,email,message)
                VALUES ('$name','$email','$message')";
    if (mysqli_query($con, $sql)) {
        echo "Error: " . $sql . "
            " . mysqli_error($con);
    }
    mysqli_close($con);
    echo "<script>alert('Successfully Added!!!'); window.location='index.php'</script>";
}
?>

</html>