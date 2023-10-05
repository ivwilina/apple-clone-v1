<?php

    require_once 'sql-connection.php';

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($_POST['signin'])) 
    {
        $query = "select * from user where Username='$username'and Password='$password'";
        $result = mysqli_query($connect,$query);
        if(mysqli_fetch_assoc($result))
        {
            $_SESSION['User'] = $username;
            header("location:/baitaplon-final/user-interface/layout-files/main-page.php?");
        }
        else
        {
            header("location:/baitaplon-final/user-interface/layout-files/sign-in-page.php?Invalid=wrongpass");

        }
    }
    else 
    {
        echo "not working";
    }

?>