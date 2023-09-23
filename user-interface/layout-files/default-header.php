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
                    <a href="#">
                        <img src="/baitaplon-final/img-files/icons/apple-icon.png" alt="Main Page">
                    </a>
                </li>
                <li>
                    <a href="#">
                        Mac
                    </a>
                </li>
                <li>
                    <a href="#">
                        iPhone
                    </a>
                </li>
                <li>
                    <a href="#">
                        iPad
                    </a>
                </li>
                <li>
                    <a href="#">
                        Watch
                    </a>
                </li>
                <li onclick="display_search()">
                    <img src="/baitaplon-final/img-files/icons/search-icon.png" alt="Search">
                </li>
                <li onclick="display_inventory()">
                    <a href="#">
                        <img src="/baitaplon-final/img-files/icons/inventory-icon.png" alt="Your Inventory">
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <!-- Search dropdown -->
    <div class="search-wrapper" id="search-dropdown">
        <div class="search-container">
            <div class="search-bar" id="">
                <img src="/baitaplon-final/img-files/icons/search-icon.png" alt="Search">
                <input type="text" placeholder="Search here">
            </div>
            <span>Quick Links</span>
            <ul class="quick-link">
                <li>
                    <a href="#">
                        ➝ iPhone
                    </a>
                </li>
                <li>
                    <a href="#">
                        ➝ iPad
                    </a>
                </li>
                <li>
                    <a href="#">
                        ➝ Watch
                    </a>
                </li>
                <li>
                    <a href="#">
                        ➝ Mac
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <!-- Inventory sidebar (non-logged) -->
    <div class="inventory-wrapper" id="inventory-sidebar">
        <div class="inventory-container">
            <div class="inventory-content">
                <div class="inventory-title01">Your bag is empty.</div>
                <div class="request-login"><a href="./sign-in-page.php">Sign in</a> to see if you have any saved items
                </div>
            </div>
        </div>
        <div class="inventory-container-logged">
            <div class="inventory-title">Your bag</div>
            <div class="purchase-history">
                <a href="#">View Purchase History</a>
            </div>
            <div class="inventory-list">
                
                <!-- php here -->
                
                <div class="inventory-item">
                    <div class="select">
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="inventory-item-img">
                        <img src="/baitaplon-final/img-files/products/ip14s/ip14.png" alt="">
                    </div>
                    <div class="inventory-item-name">
                       <div>iPhone 14</div>
                    </div>
                    <div class="inventory-item-spec">
                        <div>
                            <span>6GB</span>
                        </div>
                        <div>
                            <span>128GB</span>
                        </div>
                    </div>
                    <div class="inventory-item-price">
                        <div>$</div>
                        <div>799</div>
                    </div>
                </div>
                <div class="inventory-item">
                    <div class="select">
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="inventory-item-img">
                        <img src="/baitaplon-final/img-files/products/ip14s/ip14.png" alt="">
                    </div>
                    <div class="inventory-item-name">
                       <div>iPhone 14</div>
                    </div>
                    <div class="inventory-item-spec">
                        <div>
                            <span>6GB</span>
                        </div>
                        <div>
                            <span>128GB</span>
                        </div>
                    </div>
                    <div class="inventory-item-price">
                        <div>$</div>
                        <div>799</div>
                    </div>
                </div>
                <div class="inventory-item">
                    <div class="select">
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="inventory-item-img">
                        <img src="/baitaplon-final/img-files/products/ip14s/ip14.png" alt="">
                    </div>
                    <div class="inventory-item-name">
                       <div>iPhone 14</div>
                    </div>
                    <div class="inventory-item-spec">
                        <div>
                            <span>6GB</span>
                        </div>
                        <div>
                            <span>128GB</span>
                        </div>
                    </div>
                    <div class="inventory-item-price">
                        <div>$</div>
                        <div>799</div>
                    </div>
                </div>
                <div class="inventory-item">
                    <div class="select">
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="inventory-item-img">
                        <img src="/baitaplon-final/img-files/products/ip14s/ip14.png" alt="">
                    </div>
                    <div class="inventory-item-name">
                       <div>iPhone 14</div>
                    </div>
                    <div class="inventory-item-spec">
                        <div>
                            <span>6GB</span>
                        </div>
                        <div>
                            <span>128GB</span>
                        </div>
                    </div>
                    <div class="inventory-item-price">
                        <div>$</div>
                        <div>799</div>
                    </div>
                </div>
                <div class="inventory-item">
                    <div class="select">
                        <input type="checkbox" name="" id="">
                    </div>
                    <div class="inventory-item-img">
                        <img src="/baitaplon-final/img-files/products/ip14s/ip14.png" alt="">
                    </div>
                    <div class="inventory-item-name">
                       <div>iPhone 14</div>
                    </div>
                    <div class="inventory-item-spec">
                        <div>
                            <span>6GB</span>
                        </div>
                        <div>
                            <span>128GB</span>
                        </div>
                    </div>
                    <div class="inventory-item-price">
                        <div>$</div>
                        <div>799</div>
                    </div>
                </div>

                <!-- end php -->
            </div>
            <div class="total-price">
                <div class="total">
                    Total: 1798$
                </div>
                <div class="check-out">
                    Check Out(0)
                </div>
            </div>
        </div>


    </div>


    <!-- Script link -->
    <script src="/baitaplon-final/user-interface/function-files/navbar-item-display.js"></script>
</body>

</html>