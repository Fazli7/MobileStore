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
                <li><a href="./contactus/index.php"><button1>Contact Us</button1></a></li>
                <li><a class="signin" href="signin.php"><button><b>Sign in</b></button></a>
            </ul>
           
        </nav>
       
    </header>

  
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./photos/store.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="./photos/store2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="./photos/store3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

    <h1 class="text"><b>All Products</b></h1>
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
                <?php
                require_once('./admin/db.php');
                $result = $conn->prepare("SELECT * FROM watches ORDER BY tbl_image_id ASC");
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
    
</body>
</html>