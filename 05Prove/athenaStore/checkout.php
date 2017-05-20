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