<?php

require_once 'E:\xampp\htdocs\baitaplon-final\user-interface\php-files\sql-connection.php';

$product_request = "iPhone 14";

$sql_query = "SELECT * FROM product WHERE ItemName ='$product_request'";

$data = mysqli_query($connect, $sql_query);

$r = mysqli_fetch_assoc($data);

echo $r['Specs'];

$obj = json_decode($r['Specs']);

echo $obj->chipset;

// $color = json_decode($obj->Color);

// echo $color;

foreach($obj->color as $color) {
    echo $color->hex;
}
?>