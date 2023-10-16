<?php
// session để check trạng thái đăng nhập, khai báo sesseion ở file login-process
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store</title>
    <link rel="stylesheet" href="/baitaplon-final/user-interface/css-files/default-header.css">
    <link rel="shortcut icon" href="/baitaplon-final/img-files/icons/apple-favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Navigation bar -->
    <div class="nav-wrapper">
        <div class="nav-container">
            <ul class="nav">
                <li>
                    <!-- <div class="store-logo"> -->
                        <a href="./main-page.php">
                            <img src="/baitaplon-final/img-files/icons/apple-icon.png" alt="Main Page">
                            <p>
                                Apple
                                <br>
                                Authorized Reseller
                            </p>
                        </a>
                    <!-- </div> -->
                </li>
                <li>
                    <a href="./item-list.php?searchItem=all">
                        Sản phẩm
                    </a>
                </li>
                <li>
                    <a href="./item-list.php?searchItem=Macbook">
                        Macbook
                    </a>
                </li>
                <li>
                    <a href="./item-list.php?searchItem=iPhone">
                        iPhone
                    </a>
                </li>
                <li>
                    <a href="./item-list.php?searchItem=iPad">
                        iPad
                    </a>
                </li>
                <li>
                    <a href="./item-list.php?searchItem=Watch">
                        Watch
                    </a>
                </li>
                <li onmouseenter="display_search()">
                    <!-- Ẩn hiện thanh tìm kiếm và thẻ thông tin cá nhân bằng JavaScript -->
                    <img src="/baitaplon-final/img-files/icons/search-icon.png" alt="Search">
                </li>
                <li onmouseenter="display_inventory()">
                    <!-- Ẩn hiện thanh tìm kiếm và thẻ thông tin cá nhân bằng JavaScript -->
                    <img src="/baitaplon-final/img-files/icons/user-icon.png" alt="Your Inventory">
                </li>
            </ul>
        </div>
    </div>


    <!-- Search dropdown -->
    <div class="search-wrapper" id="search-dropdown" onmouseleave="display_search()">
        <div class="search-container">
            <form action="./item-list.php?searchItem" method="get">
                <div class="search-bar" id="">
                    <img src="/baitaplon-final/img-files/icons/search-icon.png" alt="Search">
                    <input type="text" placeholder="Nhập từ khoá" name="searchItem">
                </div>
            </form>
                <span>Tìm kiếm nhanh</span>
                <ul class="quick-link">
                    <li>
                        <a href="./item-list.php?searchItem=iPhone">
                            ➝ iPhone
                        </a>
                    </li>
                    <li>
                        <a href="./item-list.php?searchItem=iPad">
                            ➝ iPad
                        </a>
                    </li>
                    <li>
                        <a href="./item-list.php?searchItem=Watch">
                            ➝ Watch
                        </a>
                    </li>
                    <li>
                        <a href="./item-list.php?searchItem=Macbook">
                            ➝ Macbook
                        </a>
                    </li>
                </ul>
        </div>
    </div>


    <!-- Inventory sidebar (non-logged) -->
    <div class="inventory-wrapper" id="inventory-sidebar" onmouseleave="display_inventory()">
        <div class="inventory-container" id="inventory1">
            <div class="inventory-title01"><a href="./sign-in-page.php">Đăng nhập</a> để xem thông tin cá nhân.</div>
        </div>
        <div class="inventory-container-logged" id="inventory2">
            <div class="user-info">
                <div>Xin chào!</div>
                <div class="uname" id="uname"></div>
                <?php
                echo $_SESSION['User'];
                ?>
            </div>
        </div>
        <ul class="user-options">
            <li>
                <a href="./user-cart.php">
                    <img src="/baitaplon-final/img-files/icons/inventory-icon.png" alt="Search">
                    <p>Giỏ hàng</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="/baitaplon-final/img-files/icons/option-icon.png" alt="Search">
                    <p>Cài đặt tài khoản</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="/baitaplon-final/img-files/icons/feedback-icon.png" alt="Search">
                    <p>Phản hồi & đánh giá</p>
                </a>
            </li>
            <li>
                <a href="./php-files/logout-process.php?logout">
                    <img src="/baitaplon-final/img-files/icons/logout-icon.png" alt="Search">
                    <p>Đăng xuất</p>
                </a>
            </li>
        </ul>
    </div>
    </div>
    </div>
    <script src="/baitaplon-final/user-interface/function-files/navbar-item-display.js"></script>
    <?php
    // chuyển đổi trạng thái hiển thị của thẻ thông tin cá nhân tương ứng trạng thái đăng nhập
    if (isset($_SESSION['User'])) {
        echo '<script type="text/JavaScript">logged()</script>';
    } else {
        echo '<script type="text/JavaScript">non_logged()</script>';
    }
    ?>
</body>

</html>