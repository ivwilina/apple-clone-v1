<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'baitaplon-final-test02';


$connect = mysqli_connect($servername,$username,$password,$database);

if($connect->connect_error) {
    die("Connection Failed" .$connect->connect_error);
}


$selecteditem = 'iPhone 14';

$query_selected_product = "SELECT * FROM product where ItemName = '$selecteditem'";

$get_selected_product = mysqli_query($connect, $query_selected_product);

$data_selected = mysqli_fetch_assoc($get_selected_product);

$json_data = json_decode($data_selected['Specs']);

echo $data_selected['ItemName'] . "<br>";

foreach ($json_data->information as $info) {
    echo $info->infoname . ' : ' . $info->detail . "<br>";
}
echo "<br>";
foreach ($json_data->choice as $choice) {
    echo $choice->size . ' : ' . $choice->price . "<br>";
}
echo "<br>";
foreach ($json_data->color as $color) {
    echo $color->color . ' : ' . $color->hex . "<br>";
}
echo "<br>";
foreach ($json_data->imagesource as $source) {
    echo $source->color . ' : ' .  $source->source . "<br>";
}
?>