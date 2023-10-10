<?php 

require_once 'sql-connection.php';
//select type
$query_select_product_type = "SELECT * FROM type";
$get_product_type = mysqli_query($connect,$query_select_product_type);

//select all product
$query_get_all_product = "SELECT * FROM product";
$get_all_product = mysqli_query($connect,$query_get_all_product);


//select content to test css
$query_test = "SELECT * FROM product WHERE ItemName = 'iPhone 14'";
$query_test_get = mysqli_query($connect,$query_test);
$r = mysqli_fetch_assoc($query_test_get);
$json_data = json_decode($r['Specs'])
?>