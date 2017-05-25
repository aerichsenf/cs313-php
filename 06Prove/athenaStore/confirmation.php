<?php
session_start();
include_once("getDB.php");
//var_dump($_SESSION);
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$state = $_POST['state'];
$zip = $_POST['zip'];

echo $products[0]['description'];

// Try a select statement here

$newId = $pdo->lastInsertId('productid_seq');
//$newId2 = $pdo->lastInsertId('product_id_seq');
//$newId3 = $pdo->lastInsertId('id_seq');

echo "1 --> " . $newId;
//echo "2 --> " . $newId2;
//echo "3 --> " . $newId3;


//$insertStatement = $db->prepare("INSERT INTO product VALUES (7, 'Pira', 'bla bla bla', 9.99)");
//$insertStatement->execute();


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