<?php 

    // check login

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store</title>
    <link rel="stylesheet" href="/baitaplon-final/user-interface/css-files/main-page.css">
    <link rel="shortcut icon" href="/baitaplon-final/img-files/icons/apple-favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&display=swap"
        rel="stylesheet">
</head>

<body>

    <!-- Header import -->
    <div class="navigation-bar">

        <?php

        include_once 'default-header.php'

            ?>

    </div>

    <section id="section-banner0">
        <div class="container-fluid">
            <div class="banner0">
                <span id="product-ads">iPhone 15 Pro</span>
                <img src="/baitaplon-final/img-files/products/product-comingsoon/ip15-banner.jpg" alt="iphone15-titanium-banner">
                <span id="description">Coming Soon</span>
            </div>
        </div>
    </section>

    <section id="section-banner1">
        <div class="container-fluid">
            <div class="banner1">
                <div class="content">
                    <video autoplay muted>
                        <source src="/baitaplon-final/img-files/products/ipads/ipad-air-video.mp4" type="video/mp4">
                    </video>
                    <div class="typo">
                        <div>iPad Air</div>
                        <div>iPad Air</div>
                        <div>iPad Air</div>
                        <div>iPad Air</div>
                        <div>iPad Air</div>
                        <div>iPad Air</div>
                        <div>iPad Air</div>
                        <div>iPad Air</div>
                    </div>
                </div>
                <div class="link">
                    <span>Feel the Air</span>
                    <a href="#">
                        Learn More >
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="section-banner2">
        <div class="container-fluid">
            <div class="banner2">
                <div class="banner2-header">
                    <span id="product-name">
                        iPhone 14
                    </span>
                    <span id="product-slogan">
                        Wonderful.
                    </span>
                </div>
                <ul class="banner2-list">
                    <li>
                        <a href="#">
                            <img src="/baitaplon-final/img-files/products/ip14s/ip14-prm.png" alt="iPhone-14-pro-max">
                            <span class="product-name">
                                Pro Max
                            </span>
                            <span class="product-shortdesc">
                                Pro. Beyond.
                            </span>
                            <span class="product-price">
                                From $1099
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/baitaplon-final/img-files/products/ip14s/ip14-pr.png" alt="iPhone-14-pro">
                            <span class="product-name">
                                Pro
                            </span>
                            <span class="product-shortdesc">
                                The Pro
                            </span>
                            <span class="product-price">
                                From $999
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/baitaplon-final/img-files/products/ip14s/ip14-p.png" alt="iPhone-14-plus">
                            <span class="product-name">
                                Plus
                            </span>
                            <span class="product-shortdesc">
                                Plus. Better.
                            </span>
                            <span class="product-price">
                                From $899
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/baitaplon-final/img-files/products/ip14s/ip14.png" alt="iPhone-14">
                            <span class="product-name">
                                14
                            </span>
                            <span class="product-shortdesc">
                                Original One
                            </span>
                            <span class="product-price">
                                From $799
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="section-banner3">
        <div class="container-fluid">
            <div class="banner3">
                <div class="product-banner3" id="no1" >
                    <span class="name-id">
                        Macbook Air 13"
                    </span>
                    <span class="price">
                        From $999
                    </span>
                    <img src="/baitaplon-final/img-files/products/macbooks/macbook-air-m1.png" alt="macbook-pro-15">
                </div>
                <div class="product-banner3" id="no2">
                    <span class="name-id">
                        Apple Watch Utra
                    </span>
                    <span class="price">
                        From $799
                    </span>
                    <img src="/baitaplon-final/img-files/products/watchs/watch-ultra.jpg" alt="watch-ultra">
                </div>
                <div class="product-banner3" id="no3">
                    <div class="typo-2">
                        <div>Macbook Air</div>
                        <div>Macbook Air</div>
                        <div>Macbook Air</div>
                        <div>Macbook Air</div>
                        <div>Macbook Air</div>
                        <div>Macbook Air</div>
                        <div>Macbook Air</div>
                        <div>Macbook Air</div>
                        <div>Macbook Air</div>
                    </div>
                </div>
                <div class="product-banner3" id="no4">
                    <span class="name-id">
                        Apple Watch Ultra 2
                    </span>
                    <span class="price">
                        Coming Soon
                    </span>
                    <img src="/baitaplon-final/img-files/products/watchs/watch-ultra2.jpg" alt="watch-ultra-2">
                </div>
            </div>
        </div>
    </section>


    <!-- Footer import -->
    <div class="footer-bar">

        <?php

        include_once 'default-footer.php'

            ?>

    </div>


    <script src="/baitaplon-final/user-interface/function-files/main-page.js"></script>
</body>

</html>