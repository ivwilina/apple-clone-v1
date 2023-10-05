<?php 

session_start();
if(isset($_GET['logout']))
{
    session_destroy();
    header("location:/baitaplon-final/user-interface/layout-files/main-page.php?");
}

?>