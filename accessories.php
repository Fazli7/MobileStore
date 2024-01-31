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
                <li><a href="index.php"><button1 onclick="window.history.go">Store</button1></a></li>
                <li><a href="phones.php"><button1 onclick="window.history.go">Phones</button1></a></li>
                <li><a href="watches.php"><button1 onclick="window.history.go">Watches</button1></a></li>
                <li><a href="accessories.php"><button1 onclick="window.history.go">Accessories</button1></a></li>
                <li><a href="./Contactus/index.php"><button1 onclick="window.history.go">Contact Us</button1></a></li>
                <li><a class="signin" href="signin.php"><button><b>Sign in</b></button></a>
            </ul>
           
        </nav>
       
    </header>
        <h1 class="text"><b>Accessories</b></h1>
        
        <?php
                require_once('./admin/db.php');
                $result = $conn->prepare("SELECT * FROM accessories ORDER BY tbl_image_id ASC");
                $result->execute();
                for ($i = 0; $row = $result->fetch(); $i++) {
                    $id = $row['tbl_image_id'];
                ?>
                  

            <div class="image-row">
            <div class="img">
                <img src="./photos/<?php echo $row['image_location']; ?>" alt="<?php echo $row['Photos_name']; ?>">
            </div>
                <div class="title">
                    <h2><?php echo $row['Photos_name']; ?></h2>

                </div>
                <div class="price">
                    <h3><?php echo $row['price']; ?>€</h3>

                </div>
            </div>


                <?php } ?>

        <!--<div class="image-row">
            <div class="img">
                <img src="applewatchcharger.png" alt="iphone">
            </div>
            <div class="title">
                <h2>Apple Watch Charger</h2>
    
            </div>
            <div class="price">
                <h3>38€</h3>
    
            </div>
        </div>

        <div class="image-row">
            <div class="img">
                <img src="galaxywatchcharger.png" alt="iphone">
            </div>
            <div class="title">
                <h2>Samsung Galaxy Watch charger </h2>
    
            </div>
            <div class="price">
                <h3>480€</h3>
    
            </div>
        </div>

        
        <div class="image-row">
            <div class="img">
                <img src="wirelescharger.png" alt="iphone">
            </div>
            <div class="title">
                <h2>Wireless Charger</h2>
    
            </div>
            <div class="price">
                <h3>22€</h3>
    
            </div>
        </div>

        <div class="image-row">
            <div class="img">
                <img src="magsafe.png" alt="iphone">
            </div>
            <div class="title">
                <h2>Magsafe</h2>
    
            </div>
            <div class="price">
                <h3>48€</h3>
    
            </div>
        </div>

        <div class="image-row">
            <div class="img">
                <img src="powerbank.png" alt="iphone">
            </div>
            <div class="title">
                <h2>MagSafe </h2>
    
            </div>
            <div class="price">
                <h3>78€</h3>
    
            </div>
        </div>

        <div class="image-row">
            <div class="img">
                <img src="airpods1.png" alt="iphone">
            </div>
            <div class="title">
                <h2>AirPods 1</h2>
    
            </div>
            <div class="price">
                <h3>120€</h3>
    
            </div>
        </div>

        
        <div class="image-row">
            <div class="img">
                <img src="airpods3.png" alt="iphone">
            </div>
            <div class="title">
                <h2>AirPods 3</h2>
    
            </div>
            <div class="price">
                <h3>220€</h3>
    
            </div>
        </div>

        <div class="image-row">
            <div class="img">
                <img src="airpodspro.png" alt="iphone">
            </div>
            <div class="title">
                <h2>AirPods Pro</h2>
    
            </div>
            <div class="price">
                <h3>360€</h3>
    
            </div>
        </div>

        <div class="image-row">
            <div class="img">
                <img src="galaxybuds.png" alt="iphone">
            </div>
            <div class="title">
                <h2>Galaxy Buds</h2>
    
            </div>
            <div class="price">
                <h3>80€</h3>
    
            </div>
        </div>
        
      
        
       
    
  
    
</body>
</html>