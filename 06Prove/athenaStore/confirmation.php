<?php
session_start();
//var_dump($_SESSION);
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$state = $_POST['state'];
$zip = $_POST['zip'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Athena Avenue</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
<div class="container">
    <div class="jumbotron">
<?php
echo "<h1>" . "Your order has been processed. It will be shipped to: " . "</h1>". "<br>";
echo $first_name . " " . $last_name . "<br>";
echo $address1 . " " . $address2 . "<br>";
echo $city . " " .$state . " " . $zip . "<br>";
echo "Your total is $" . $_SESSION['priceTotal'];
?>
    </div>
</div>

</body>
</html>