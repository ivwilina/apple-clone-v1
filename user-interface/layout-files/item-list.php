<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store</title>
    <link rel="stylesheet" href="/baitaplon-final/user-interface/css-files/item-list.css">
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
            <div class="content-view">
                <div class="product-title">
                    iPhone
                </div>
                <div class="product-container">
                    <a href="./product-specs.php?request=iPhone 14" class="item">
                        <div class="item-inner">
                            <img src="/baitaplon-final/img-files/products/ip14s/ip14.png" alt="">
                            <div class="p-name">iPhone 14</div>
                            <div class="p-price">Từ 21.990.000<sup>đ</sup></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <div class="footer-bar">

        <?php

        include_once 'default-footer.php'

            ?>

    </div>
</body>

</html>