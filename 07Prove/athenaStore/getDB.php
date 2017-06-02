<?php

$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

$statement = $db->prepare("SELECT productid, name, description, price FROM product");
$statement->execute();
$products = Array();
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $products['p_' . $row['productid']] = $row;
    echo $products['p_' . $row['productid']];

}

echo "hello from the database";
echo $product[0]['productid'];

?>