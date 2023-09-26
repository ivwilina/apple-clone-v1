<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'baitaplon-final-test02';


    $connect = mysqli_connect($servername,$username,$password,$database);

    if($connect->connect_error) {
        die("Connection Failed" .$connect->connect_error);
    }
?>