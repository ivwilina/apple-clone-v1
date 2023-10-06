<?php


$re = "guest01^ip14^pink^256GB^799^2023/10/6-14:37:36";

$array = explode("^",$re);

foreach ($array as $value) {
    echo $value;
    echo "<br>";
}