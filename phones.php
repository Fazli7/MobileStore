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
        <h1 class="text"><b>Phones</b></h1>

        
        <?php
                require_once('./admin/db.php');
                $result = $conn->prepare("SELECT * FROM gallery ORDER BY tbl_image_id ASC");
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
    <!-- <div class="image-row">
        <div class="img">
            <img src="iphone12pro.png" alt="iphone">
        </div>
        <div class="title">
            <h2>Iphone 12 Pro</h2>

        </div>
        <div class="price">
            <h3>680€</h3>

        </div>
    </div>

    <div class="image-row">
        <div class="img">
            <img src="iphone11promax.png" alt="iphone">
        </div>
        <div class="title">
            <h2>Iphone 11 Pro Max</h2>

        </div>
        <div class="price">
            <h3>480€</h3>

        </div>
    </div>

    <div class="image-row">
        <div class="img">
            <img src="iphonex.png" alt="iphone">
        </div>
        <div class="title">
            <h2>Iphone X</h2>

        </div>
        <div class="price">
            <h3>100€</h3>

        </div>
    </div>

    <div class="image-row">
        <div class="img">
            <img src="samsungs23.png" alt="iphone">
        </div>
        <div class="title">
            <h2>Samsung s23</h2>

        </div>
        <div class="price">
            <h3>680€</h3>

        </div>
    </div>

    
    <div class="image-row">
        <div class="img">
            <img src="samsunga80.png" alt="iphone">
        </div>
        <div class="title">
            <h2>Samsung A80</h2>

        </div>
        <div class="price">
            <h3>390€</h3>

        </div>
    </div>

    <div class="image-row">
        <div class="img">
            <img src="note10.png" alt="iphone">
        </div>
        <div class="title">
            <h2>Samsung Note10</h2>

        </div>
        <div class="price">
            <h3>480€</h3>

        </div>
    </div>

    

        
      
        
       
    

    
</body>
</html>