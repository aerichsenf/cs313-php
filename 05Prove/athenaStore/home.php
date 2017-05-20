<?php
session_start();
include_once("products.php");

/*$products = Array(
    "p1"=> Array("name"=>"Daisy", "description"=>"Daisy by Marc Jacobs", "price"=>53.48),
    "p2"=> Array("name"=>"Versace", "description"=>"Versace by Bright Crystal", "price"=>45.99),
    "p3"=> Array("name"=>"Romance", "description"=>"Romance by Ralph Lauren", "price"=>33.90),
    "p4"=> Array("name"=>"Omnia", "description"=>"Omnia by Bvlgari", "price"=>32.99),
    "p5"=> Array("name"=>"Cashmere Mist", "description"=>"Cashmere Mist by DonnaKaran", "price"=>49.49),
    "p6"=> Array("name"=>"Black Opium", "description"=>"Black Opium by YvesSaintLaurent", "price"=>69.99)
);
**/

$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

$statement = $db->prepare("SELECT name, description, price FROM scripture");
$statement->execute();
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $products[] = $row;
}

//$key = array_keys($products);

?>



<!DOCTYPE html>
<html>
<head>
    <title>Athena Avenue</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="content.js"></script>

</head>
<body>

<div id="wrapper">
    <div id="pageTop">
        <img src="1_Primary_logo_on_transparent_221x71.png" alt="logo" style="width:221px;height:71px;">
    </div>
    <div id="menu">
        <ul id="navigator">
            <li><a class="active" href="home.php">Home</a></li>
            <li><a href="cart.php">Cart</a></li>
        </ul>
    </div>
    <div id="banner_container">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="banner0.jpg" alt="banner" style="width: 100%; height: 100%;">
            </div>
            <div class="mySlides fade">
                <img src="banner1.jpg" alt="banner" style="width: 100%; height: 100%;">
            </div>
        </div>
        <br>
        <div id="columnLeft">
            <b><?php foreach($products[0] as $product)
                echo $product['description']; ?></b>
            <img src="p1.jpg" alt="perfum" style="width: 80%; height: 80%;">
            <form action="cart.php" method="post">
                <?php
                echo "<input type='number' name='$key[0]' style='width:50px' placeholder='QTY'>" ;
                echo "  <input type='submit' value='add to cart'>". "<br>" ;
                ?>
            </form>

        </div>

        <div id="columnRight">
            <b><?php foreach($products[2] as $product)
                    echo $product['description']; ?></b>
            <img src="p3.jpg" alt="perfum" style="width: 80%; height: 80%;">
            <form action="cart.php" method="post">
                <?php
                echo "<input type='number' name='$key[2]' style='width:50px' placeholder='QTY'>" ;
                echo "  <input type='submit' value='add to cart'>". "<br>" ;
                ?>
            </form>
        </div>

        <div id="content">
            <b><?php foreach($products[1] as $product)
                    echo $product['description']; ?></b>
            <img src="p2.jpg" alt="perfum" style="width: 80%; height: 80%;">
            <form action="cart.php" method="post">
                <?php
                echo "<input type='number' name='$key[1]' style='width:50px' placeholder='QTY'>" ;
                echo "  <input type='submit' value='add to cart'>". "<br>" ;
                ?>
            </form>
        </div>

        <div id="columnLeft2">
            <b><?php foreach($products[3] as $product)
                    echo $product['description']; ?></b>
            <img src="p4.jpg" alt="perfum" style="width: 80%; height: 80%;">
            <form action="cart.php" method="post">
                <?php
                echo "<input type='number' name='$key[3]' style='width:50px' placeholder='QTY'>" ;
                echo "  <input type='submit' value='add to cart'>". "<br>" ;
                ?>
            </form>
        </div>

        <div id="columnRight2">
            <b><?php foreach($products[5] as $product)
                    echo $product['description']; ?></b>
            <img src="p6.jpg" alt="perfum" style="width: 80%; height: 80%;">
            <form action="cart.php" method="post">
                <?php
                echo "<input type='number' name='$key[5]' style='width:50px' placeholder='QTY'>" ;
                echo "  <input type='submit' value='add to cart'>". "<br>" ;
                ?>
            </form>
        </div>

        <div id="content2">
            <b><?php foreach($products[4] as $product)
                    echo $product['description']; ?></b>
            <img src="p5.jpg" alt="perfum" style="width: 80%; height: 80%;">
            <form action="cart.php" method="post">
                <?php
                echo "<input type='number' name='$key[4]' style='width:50px' placeholder='QTY'>" ;
                echo "  <input type='submit' value='add to cart'>". "<br>" ;
                ?>
            </form>
        </div>


        <div id="footer">
            <p style="text-align: center;"><br>Copyright©2017. All rights reserved</p>
        </div>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {

            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < 2; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex> slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";

            setTimeout(showSlides, 3000);
        }
    </script>

</body>
</html>
