<!DOCTYPE html>
<html>
<head>
    <title>Anderson Shopping Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jscript.js"></script>
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

<form id="form" action="confirmation.php" method="post">
    <input name="name" class="name" type="text" maxlength="15" placeholder="First Name">
    <input name ="lastname" id="surname" type="text" maxlength="15" placeholder="Last Name"><br><br>
    <input name="address" class="address1" type="text" maxlength="25" placeholder="Adress Line 1">
    <input type="text" maxlength="25" placeholder="Apartment"><br><br>
    <input name="ciy" class="city" type="text" maxlength="20" placeholder="City">
    <input name="stado" class="state" onkeyup="this.value = this.value.toUpperCase();type="text" maxlength="10" placeholder="State"><br><br>
    <input name="zip" class="zip" type="text" maxlength="10" placeholder="Zip Code">
    <input name="phone" class="phone" type="text" maxlength="20" placeholder="Phone (Only Numbers)"><br><br>
    <input type="submit">
</form>


</body>
</html>