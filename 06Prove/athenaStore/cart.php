<?php
session_start();
include_once('getDB.php');


foreach ($_POST as $Key => $quantity) {
    if (array_key_exists($Key, $products)) {
        $_SESSION[$Key] = $quantity;
        echo $products[$Key]['description'] . ' --> ';
        echo ($_SESSION[$Key]) . "<br><br>";
    }
}

foreach ($_SESSION as $Key => $quantity) {
    if (array_key_exists($Key, $products)) {
        $_SESSION[$Key] = $quantity;
        echo $products[$Key]['description'].  ' ' ;
        echo $products[$Key]['price']. ' ';
        echo $quantity;
    }
}
?>




    <!DOCTYPE html>
    <html>
    <head>
        <title>Athena Avenue</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>


    </head>
    <body>
    <script type="text/javascript">
        function deleteme() {
            //alert("it's working");
            if(confirm("Click okay to delete your cart!")) {
                //  window.location.href='delete.php?del_id='+ delid +'';
                window.location.href='delete.php';
                return true;
            }
        }
    </script>

    <div id="wrapper">
        <div id="pageTop">
            <img src="1_Primary_logo_on_transparent_221x71.png" alt="logo" style="width:221px;height:71px;">
        </div>
        <div id="menu">
            <ul id="navigator">
                <li><a href="home.php">Home</a></li>
                <li><a class="active" href="cart.php">Cart</a></li>
            </ul>
        </div>
    </div>
    <br>
    <div>

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
            <div>
                <!--<label class="col-md-4 control-label"></label>-->
                <label class="col-md-5 control-label"></label>
                <div class="col-md-5">
                    <form action="checkout.php" method="post">
                    <button type="submit" class="btn btn-danger" onClick="deleteme()" name="Delete" value="Delete" >Cancel <span class="glyphicon glyphicon-remove-circle"></span></button>
                    <button type="submit" class="btn btn-success" >Confirm <span class="glyphicon glyphicon-ok-circle"></span></button>
                    </form>
                </div>
            </div>


    <br><br><br>

    <div id="footer">
        <p style="text-align: center;"><br>Copyright©2017. All rights reserved</p>
    </div>
    </body>
    </html>


    }