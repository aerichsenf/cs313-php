<?php
session_start();
include_once("getDB.php");

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
            <b><?php echo $products[0]['description']; ?></b>
            <img src="p1.jpg" alt="perfum" style="width: 80%; height: 80%;">
            <form action="cart.php" method="post">
                <?php
                echo "<input type='number' name='key[]' style='width:50px' placeholder='QTY'>" ;
                echo "  <input type='submit' value='add to cart'>". "<br>" ;
                ?>
            </form>

        </div>

        <div id="columnRight">
            <b><?php echo $products[2]['description']; ?></b>
            <img src="p3.jpg" alt="perfum" style="width: 80%; height: 80%;">
            <form action="cart.php" method="post">
                <?php
                echo "<input type='number' name='key[]' style='width:50px' placeholder='QTY'>" ;
                echo "  <input type='submit' value='add to cart'>". "<br>" ;
                ?>
            </form>
        </div>

        <div id="content">
            <b><?php echo $products[1]['description']; ?></b>
            <img src="p2.jpg" alt="perfum" style="width: 80%; height: 80%;">
            <form action="cart.php" method="post">
                <?php
                echo "<input type='number' name='key[]' style='width:50px' placeholder='QTY'>" ;
                echo "  <input type='submit' value='add to cart'>". "<br>" ;
                ?>
            </form>
        </div>

        <div id="columnLeft2">
            <b><?php echo $products[3]['description']; ?></b>
            <img src="p4.jpg" alt="perfum" style="width: 80%; height: 80%;">
            <form action="cart.php" method="post">
                <?php
                echo "<input type='number' name='key[]' style='width:50px' placeholder='QTY'>" ;
                echo "  <input type='submit' value='add to cart'>". "<br>" ;
                ?>
            </form>
        </div>

        <div id="columnRight2">
            <b><?php echo $products[5]['description']; ?></b>
            <img src="p6.jpg" alt="perfum" style="width: 80%; height: 80%;">
            <form action="cart.php" method="post">
                <?php
                echo "<input type='number' name='key[]' style='width:50px' placeholder='QTY'>" ;
                echo "  <input type='submit' value='add to cart'>". "<br>" ;
                ?>
            </form>
        </div>

        <div id="content2">
            <b><?php echo $products[4]['description']; ?></b>
            <img src="p5.jpg" alt="perfum" style="width: 80%; height: 80%;">
            <form action="cart.php" method="post">
                <?php
                echo "<input type='number' name='key[]' style='width:50px' placeholder='QTY'>" ;
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
