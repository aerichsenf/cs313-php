<?php
session_start();
//var_dump($_SESSION);

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
            <li><a href="home.php">Home</a></li>
            <li><a href="cart.php">Cart</a></li>
        </ul>
    </div>
</div>
<br><br>


<table border="1" align="center" style="line-height:25px;">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Quantity</th>
    </tr>
    <?php
    //foreach ($_SESSION as $key => $products) {
      //  echo $products['name']['description'] . '<br>';


//    }
    ?>
</table>
<?php
echo "<h1>" . "Your order has been processed. It will be shipped to: " . "</h1>". "<br>";
echo $_POST["name"] . " " . $_POST["lastname"] . "<br>";
echo $_POST["address"] . " " . $_POST["city"] . "<br>";
echo $_POST["state"] . " " . $_POST["zip"] . "<br>";
echo "Your total is $" . $_SESSION['priceTotal'];
?>

</body>
</html>