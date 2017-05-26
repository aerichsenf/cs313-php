<?php
session_start();
include_once("getDB.php");
//var_dump($_SESSION);
/*$first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
$last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$address1 = filter_var($_POST['address1'], FILTER_SANITIZE_STRING);
$address2 = filter_var($_POST['address2'], FILTER_SANITIZE_STRING);
$state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
$zip = filter_var($_POST['zip'], FILTER_SANITIZE_STRING); **/

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$state = $_POST['state'];
$zip = $_POST['zip'];


//echo $products[0]['description'];

// To insert into address
$insertIntoAddress = $db->prepare("INSERT INTO address VALUES (DEFAULT, $address1, $address2, $city
, $state, $zip)");
$insertIntoAddress->execute();

$insertIntoClient = $db->prepare("INSERT INTO client VALUES (DEFAULT, $first_name, $last_name, $email, DEFAULT)");
$insertIntoClient->execute();

$insertIntoProduct = $db->prepare("INSERT INTO product VALUES (DEFAULT, 'Pira', 'bla bla bla', 9.99)");
$insertIntoOrder->execute();


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
echo "<h1>" . "Your order has been processed." . "<h3>It will be shipped to:</h1><br></h3>";
echo $first_name . " " . $last_name . "<br>";
echo $address1 . " " . $address2 . "<br>";
echo $city . " - " .$state . ", " . $zip . "<br>";
echo "<b>" . "Your total is $" . $_SESSION['priceTotal'] . "<b>";
?>
    </div>
</div>

<div id="footer">
    <p style="text-align: center;"><br>Copyright©2017. All rights reserved</p>
</div>

</body>
</html>