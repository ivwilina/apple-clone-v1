<?php 

require_once 'sql-connection.php';
//select type
$query_select_product_type = "SELECT * FROM type";
$get_product_type = mysqli_query($connect,$query_select_product_type);

//select all product
$query_get_all_product = "SELECT * FROM product";
$get_all_product = mysqli_query($connect,$query_get_all_product);

?>