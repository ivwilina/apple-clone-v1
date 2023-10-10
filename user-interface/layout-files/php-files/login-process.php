<?php

    require_once 'sql-connection.php';

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($_POST['signin'])) 
    {
        $query = "select * from user where Username='$username'and Password='$password'";
        $result = mysqli_query($connect,$query);
        $data = mysqli_fetch_assoc($result);
        if($data)
        {
            if($data['Type']=="customer"){
                $_SESSION['User'] = $data['Name'];
                header("location:/baitaplon-final/user-interface/layout-files/main-page.php?");
            }
            if($data['Type']=="admin"){
                $_SESSION['Admin'] = $data['Name'];
                header("location:/baitaplon-final/user-interface/layout-files/admin-page-1.php?");
            }
            
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