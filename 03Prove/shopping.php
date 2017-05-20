<!DOCTYPE html>
<html>
<head>
    <title>Anderson Shopping Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<!-- Navigation bar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="shopping.php">Anderson ShopStore</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="browse.php">Products</a></li>
            <li class="active"><a href="shopping.php">Cart</a></li>
        </ul>
    </div>
</nav>


<?php
session_start();
$p1 = $_POST["p1"];
$p2 = $_POST["p2"];
$p3 = $_POST["p3"];
$p4 = $_POST["p4"];
$p5 = $_POST["p5"];

$_SESSION['post-data'] = $_POST;
?>

Welcome, this is your cart:<br>
<?php

if(isset($p1)) {
    $_SESSION['pr1'] = 1.00;
    echo $_SESSION['post-data']['p1'] . " $". $_SESSION['pr1'] .".00<br>";
}

if(isset($p2)) {
    $_SESSION['pr2'] = 2.00;
    echo $_SESSION['post-data']['p1'] . " $". $_SESSION['pr2'] .".00<br>";
}

if(isset($p3)) {
    $_SESSION['pr3'] = 3.00;
    echo $_SESSION['post-data']['p1'] . " $". $_SESSION['pr3'] .".00<br>";
}

if(isset($p4)) {
    $_SESSION['pr4'] = 4.00;
    echo $_SESSION['post-data']['p1'] . " $". $_SESSION['pr4'] .".00<br>";
}

if(isset($p5)) {
    $_SESSION['pr5'] = 5.00;
    echo $_SESSION['post-data']['p1'] . " $". $_SESSION['pr5'] .".00<br>";
}

$_SESSION['priceTotal'] = $_SESSION['pr1'] + $_SESSION['pr2'] + $_SESSION['pr3']
    + $_SESSION['pr4'] + $_SESSION['pr5'];
?>

<div id="button"><a href="browse.php"><button>Cancel Order</button></a></div>
<div id="button"><a href="checkout.php"><button>Continue to checkout</button></a></div>


</body>
</html>