<?php
session_start();
include_once("getDB.php");
$first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
$last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
$address1 = filter_var($_POST['address1'], FILTER_SANITIZE_STRING);
$address2 = filter_var($_POST['address2'], FILTER_SANITIZE_STRING);
$state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
$zip = filter_var($_POST['zip'], FILTER_SANITIZE_STRING);

//$insertIntoAddress = $db->prepare("INSERT INTO address VALUES (DEFAULT, $address1, $address2, $city, $state, $zip)");
//$insertIntoAddress->execute();

//$insertIntoClient = $db->prepare("INSERT INTO client VALUES (DEFAULT, $first_name, $last_name, $email, DEFAULT)");
//$insertIntoClient->execute();

// THIS STATEMENT IS WORKING
//$insertIntoProduct = $db->prepare("INSERT INTO product VALUES (DEFAULT, 'Pira', 'bla bla bla', 9.99)");
//$insertIntoProduct->execute();

$insertAddress = 'INSERT INTO address VALUES(DEFAULT,:address1, :address2, :city, :state, :zip)';
$statementAddress = $db->prepare($insertAddress);
// Now we bind the values to the placeholders. This does some nice things
// including sanitizing the input with regard to sql commands.
$statementAddress->bindValue(':address1', $address1);
$statementAddress->bindValue(':address2', $address2);
$statementAddress->bindValue(':city', $city);
$statementAddress->bindValue(':state', $state);
$statementAddress->bindValue(':zip', $zip);
$statementAddress->execute();





$insertClient = 'INSERT INTO scripture VALUES(DEFAULT,:firstname, :lastname, :email, DEFAULT)';
$statementClient = $db->prepare($insertClient);
// Now we bind the values to the placeholders. This does some nice things
// including sanitizing the input with regard to sql commands.
$statementClient->bindValue(':firstname', $first_name);
$statementClient->bindValue(':lastname', $last_name);
$statementClient->bindValue(':email', $email);
$statementClient->execute();



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


<table border="1" align="center" style="line-height:25px;">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Subtotal</th>
        <th>Delete</th>
    </tr>
    <?php
    $total = 0;
    foreach ($_SESSION as $Key => $quantity) {
    if (array_key_exists($Key, $products)) {
    $subTotal = ((real)$products[$Key]['price'] * (real)$quantity);
    $total += $subTotal;
    ?>
    <tr>
        <td><?php echo $products[$Key]['name'];?> </td>
        <td><?php echo $products[$Key]['description'];?> </td>
        <td><?php echo $quantity;?></td>
        <td><?php echo $subTotal;?></td>
        <!-- implement this later
        <td><input type="button" onClick="deleteme()" name="Delete" value="Delete"></td> -->
        <?php
        }
        } ?>
</table>
<br><br>
<table border="1" align="center" style="line-height:25px;">
    <tfoot>
    <tr>
        <td colspan="5" align="right"><b>Total: </b><?php echo $total?></td>
    </tfoot>
</table>
<!--<input type="button" style="float: right;" onClick="deleteme()" name="Delete" value="Delete">-->
</div>
<br><br>



<div id="footer">
    <p style="text-align: center;"><br>Copyright©2017. All rights reserved</p>
</div>

</body>
</html>