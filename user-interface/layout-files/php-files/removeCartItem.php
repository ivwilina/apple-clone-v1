<?php

require_once 'sql-connection.php';

$removeItemId = $_GET['id'];

$query = "DELETE FROM bag WHERE BagId='$removeItemId'";

mysqli_query($connect,$query);

header('location:/baitaplon-final/user-interface/layout-files/user-cart.php?')

?>