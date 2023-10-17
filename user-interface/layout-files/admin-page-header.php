<?php
//thêm cái get vào url dẫn ra đây để nó tô đậm phần đc chọn trên navigation
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store</title>
    <link rel="stylesheet" href="/baitaplon-final/user-interface/css-files/admin-page-header.css">
    <link rel="shortcut icon" href="/baitaplon-final/img-files/icons/apple-favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="admin-info">
                <div class="greeting">
                    <p>Xin chào</p>
                    <p class="name"><?php echo $_SESSION['Admin']?></p>
                </div>
                <a href="./php-files/logout-process.php?logout" class="logout-button">
                    <img src="/baitaplon-final/img-files/icons/logout-icon.png" alt="">
                    Đăng xuất
                </a>
            </div>
            <div class="subpage">
                <a href="/baitaplon-final/user-interface/layout-files/admin-page-1.php" class="direct-subpage">
                    Sản phẩm
                </a>
                <a href="/baitaplon-final/user-interface/layout-files/admin-page-3.php" class="direct-subpage">
                    Đơn hàng
                </a>
                <a href="/baitaplon-final/user-interface/layout-files/admin-page-2.php" class="direct-subpage">
                    Tài khoản
                </a>
            </div>
        </div>
    </div>
</body>

</html>