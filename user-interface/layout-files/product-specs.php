<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store</title>
    <link rel="stylesheet" href="/baitaplon-final/user-interface/css-files/product-specs.css">
    <link rel="shortcut icon" href="/baitaplon-final/img-files/icons/apple-favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="navigation-bar">

        <?php

        include_once 'default-header.php'

            ?>

    </div>

    <section class="section1">
        <div class="container-fluid">
            <div class="title-product-name">
                iPhone 14
            </div>
            <div class="product-display-specs">
                <div class="product-image-container">
                    <div class="product-image-slider">
                        <div class="slider-item root-item" id="first">
                            Apple Store
                        </div>
                        <div class="slider-item">
                            <img src="/baitaplon-final/img-files/products/ip14s/ip14.png" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="/baitaplon-final/img-files/products/ip14s/ip14-p.png" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="/baitaplon-final/img-files/products/ip14s/ip14-pr.png" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="/baitaplon-final/img-files/products/ip14s/ip14-prm.png" alt="">
                        </div>
                    </div>
                    <div class="next-button" onclick="imageSliderNext()">
                        <div class="icon">
                            <img src="/baitaplon-final/img-files/icons/next.png" alt="">
                        </div>
                    </div>
                    <div class="prev-button" onclick="imageSliderPrev()">
                        <div class="icon">
                            <img src="/baitaplon-final/img-files/icons/back.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="specs-wrap">
                    <div class="specs-title">Specification</div>
                    <div class="full-specs">
                        <ul>
                            <li>
                                <div class="specs-name">
                                    Display
                                </div>
                                <div class="spec-info">
                                    6,1" Super Retina XDR OLED
                                </div>
                            </li>
                            <li>
                                <div class="specs-name">
                                    Main Camera
                                </div>
                                <div class="spec-info">
                                    12MP|f1.5 (Wide), 12MP|f2.4 (Ultra Wide)
                                </div>
                            </li>
                            <li>
                                <div class="specs-name">
                                    Selfie Camera
                                </div>
                                <div class="spec-info">
                                    12MP|f1.9 (Wide)
                                </div>
                            </li>
                            <li>
                                <div class="specs-name">
                                    Chipset
                                </div>
                                <div class="spec-info">
                                    Apple A15 Bionic (5nm)
                                </div>
                            </li>
                            <li>
                                <div class="specs-name">
                                    Ram
                                </div>
                                <div class="spec-info">
                                    6GB
                                </div>
                            </li>
                            <li>
                                <div class="specs-name">
                                    Storage
                                </div>
                                <div class="spec-info">
                                    128GB / 256GB / 512GB
                                </div>
                            </li>
                            <li>
                                <div class="specs-name">
                                    Battery
                                </div>
                                <div class="spec-info">
                                    3,279mAH
                                </div>
                            </li>
                            <li>
                                <div class="specs-name">
                                    OS
                                </div>
                                <div class="spec-info">
                                    IOS 16
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="specs-selection">
                <div class="color">
                    <div class="title">Choose your favorite color.</div>
                    <ul class="color-list">
                        <li>
                            <div style="background-color: cyan">Xanh</div>
                        </li>
                        <li>
                            <div style="background-color: purple">Tím</div>
                        </li>
                        <li>
                            <div style="background-color: yellow">Vàng</div>
                        </li>
                        <li>
                            <div style="background-color: black">Đen</div>
                        </li>
                        <li>
                            <div style="background-color: white">Trắng</div>
                        </li>
                    </ul>
                </div>
                <div class="storage">
                    <div class="title">Storage.</div>
                    <ul class="storage-list">
                        <li>
                            <div>
                                <div class="storage-size">
                                    128GB
                                </div>
                                <div class="storage-price">
                                    699$
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="storage-size">
                                    256GB
                                </div>
                                <div class="storage-price">
                                    799$
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="storage-size">
                                    512GB
                                </div>
                                <div class="storage-price">
                                    899$
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="add-to-bag-button-wrap">
                <div class="add-to-bag-button">
                    Add to bag
                </div>
            </div>
        </div>
    </section>


    <div class="footer-bar">

        <?php

        include_once 'default-footer.php'

            ?>

    </div>

    <script src="/baitaplon-final/user-interface/function-files/product-specs.js"></script>
</body>

</html>