<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img class="logo" src="logo.png" alt="logo">
        <nav>
            <ul class="nav-links">
                <li><a href="mobilestore.html"><button1 onclick="window.history.go">Store</button1></a></li>
                <li><a href="phones.html"><button1 onclick="window.history.go">Phones</button1></a></li>
                <li><a href="watches.html"><button1 onclick="window.history.go">Watches</button1></a></li>
                <li><a href="accessories.html"><button1 onclick="window.history.go">Accessories</button1></a></li>
                <li><a href="contact.html"><button1 onclick="window.history.go">Contact Us</button1></a></li>
                <li><a class="signin" href="signin.html"><button><b>Sign in</b></button></a>
            </ul>
           
        </nav>
       
    </header>
    <div class="all">
        <div class="container">
            <form action="" name="Formfill" onsubmit="return validation()">
                <h2>Log In</h2>
                <p id="result"></p>
                
                <div class="input-box">
                    <input type="email" name="Email" placeholder="Email">
                </div>
                <div class="input-box">
                    <input type="password" name="Password" placeholder="Password">
                </div>
                
                <div class="button"><input type="submit" class="button" onclick="validation()" value="Login"></div>
                <div class="group">
                    
                </div>
            </form>
        </div>
    </div>

    
</body>
</html>