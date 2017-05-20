<?php
session_start();
?>
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
            <li class="active"><a href="#">Products</a></li>
            <li><a href="shopping.php">Cart</a></li>
        </ul>
    </div>
</nav>
<form action="shopping.php" method="post">
    Product 1: <input type="radio" name="p1" value="p1"><br>
    Product 2: <input type="radio" name="p2" value="p2"><br>
    Product 3: <input type="radio" name="p3" value="p3"><br>
    Product 4: <input type="radio" name="p4" value="p4"><br>
    Product 5: <input type="radio" name="p5" value="p5"><br><br>
    <input type="submit" value="Add products to cart">
</form>
</body>
</html>