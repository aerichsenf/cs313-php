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
            <li><a href="browse.php">Products</a></li>
            <li><a href="shopping.php">Cart</a></li>
        </ul>
    </div>
</nav>

<?php
echo "Final Review<br>";
if(isset($_SESSION['post-data']['p1'])) {

    echo $_SESSION['post-data']['p1'] . " $". $_SESSION['pr1'] .".00<br>";
}

if(isset($_SESSION['post-data']['p2'])) {
    echo $_SESSION['post-data']['p1'] . " $". $_SESSION['pr2'] .".00<br>";
}

if(isset($_SESSION['post-data']['p3'])) {
    echo $_SESSION['post-data']['p1'] . " $". $_SESSION['pr3'] .".00<br>";
}

if(isset($_SESSION['post-data']['p4'])) {
    echo $_SESSION['post-data']['p1'] . " $". $_SESSION['pr4'] .".00<br>";
}

if(isset($_SESSION['post-data']['p5'])) {
    echo $_SESSION['post-data']['p1'] . " $". $_SESSION['pr5'] .".00<br>";
}

echo "The products will be shipped to:";
echo $_POST["name"] . " " . $_POST["lastname"] . "<br>";
echo $_POST["address"] . " " . $_POST["city"] . "<br>";
echo $_POST["state"] . " " . $_POST["zip"] . "<br>";

echo "Your total is $" . $_SESSION['priceTotal'];

?>

</body>
</html>