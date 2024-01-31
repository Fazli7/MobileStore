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
                <li><a href="index.php"><button1 onclick="window.history.go">Store</button1></a></li>
                <li><a href="phones.php"><button1 onclick="window.history.go">Phones</button1></a></li>
                <li><a href="watches.php"><button1 onclick="window.history.go">Watches</button1></a></li>
                <li><a href="accessories.php"><button1 onclick="window.history.go">Accessories</button1></a></li>
                <li><a href="./Contactus/index.php"><button1 onclick="window.history.go">Contact Us</button1></a></li>
                <li><a class="signin" href="signin.php"><button><b>Sign in</b></button></a>
            </ul>
           
        </nav>
       
    </header>
    <h2>Contact Form</h2>
<div class="all">
<div class="container">
    <form action="/submit_contact_form" method="post">
        <h2>Contact Us</h2>
        <div class="input-box">
        <input type="text" id="name" placeholder="Name" name="name" required>
        </div>

        <div class="input-box">
        <input type="email" id="email" placeholder="Email" name="email" required>
        </div>

        <div class="input-box">
        <input type="text" id="subject" placeholder="Subject" name="subject" required>
        </div>

        <div class="input-box">
        <textarea id="message" placeholder=" Your Message" name="message" rows="4" required></textarea>
        </div>

        <div class="button">
        <input type="submit" class="button" value="Submit">
        </div>
    </form>
</div>
</div>

<script src="/contact.js"></script>
        
    
</body>
</html>