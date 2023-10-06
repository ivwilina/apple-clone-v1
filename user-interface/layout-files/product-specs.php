<?php
// sửa lại đường dẫn đến file connection
require_once './php-files/sql-connection.php';

$product_request = $_GET['request'];

$sql_query = "SELECT * FROM product WHERE ItemName ='$product_request'";

$data = mysqli_query($connect, $sql_query);

$r = mysqli_fetch_assoc($data);

$obj = json_decode($r['Specs']);

?>

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
            <div class="title-product-name item-id">
                <?php echo $r['ItemName'] ?>
            </div>
            <div class="product-display-specs">
                <div class="product-image-container">
                    <div class="product-image-slider">
                        <div class="slider-item root-item" id="first">
                            Apple Store
                        </div>
                        <?php
                        foreach ($obj->imagesource as $imgsrc) {
                            ?>
                            <div class="slider-item">
                                <img src=<?php echo $imgsrc->source ?> alt="">
                            </div>
                            <?php
                        }
                        ?>
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
                    <div class="specs-title">Thông số kỹ thuật</div>
                    <div class="full-specs">
                        <ul>
                            <li>
                                <div class="specs-name">
                                    Màn hình
                                </div>
                                <div class="spec-info">
                                    <?php echo $obj->display ?>
                                </div>
                            </li>
                            <li>
                                <div class="specs-name">
                                    Camera sau
                                </div>
                                <div class="spec-info">
                                    <?php echo $obj->main_camera ?>
                                </div>
                            </li>
                            <li>
                                <div class="specs-name">
                                    Camera trước
                                </div>
                                <div class="spec-info">
                                    <?php echo $obj->selfie_camera ?>
                                </div>
                            </li>
                            <li>
                                <div class="specs-name">
                                    Chipset
                                </div>
                                <div class="spec-info">
                                    <?php echo $obj->chipset ?>
                                </div>
                            </li>
                            <li>
                                <div class="specs-name">
                                    Ram
                                </div>
                                <div class="spec-info">
                                    <?php echo $obj->ram ?>
                                </div>
                            </li>
                            <li>
                                <div class="specs-name">
                                    Pin
                                </div>
                                <div class="spec-info">
                                    <?php echo $obj->battery ?>
                                </div>
                            </li>
                            <li>
                                <div class="specs-name">
                                    Hệ điều hành
                                </div>
                                <div class="spec-info">
                                    <?php echo $obj->os ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="specs-selection">
                <div class="color">
                    <div class="title">Chọn màu sắc sản phẩm.</div>
                    <ul class="color-list">
                        <?php
                        foreach ($obj->color as $color) {
                            ?>
                            <li class="color-selection" id="<?php echo $color->color ?>" onclick="selectColor(this.id)">
                                <div style="background-color: <?php echo $color->hex ?>">
                                    <?php echo $color->color ?>
                                </div>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="storage">
                    <div class="title">Cấu hình sản phẩm.</div>
                    <ul class="storage-list">
                        <?php
                        foreach ($obj->storage as $storage) {
                            ?>
                            <li>
                                <div class="storage-selection" id="<?php echo $storage->size . "^" . $storage->price ?>"
                                    onclick="selectStorage(this.id)">
                                    <div class="storage-size">
                                        <?php echo $storage->size ?>
                                    </div>
                                    <div class="storage-price">
                                        <?php echo $storage->price ?>$
                                    </div>
                                </div>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="add-to-bag-button-wrap">
                <?php 
                    if(isset($_SESSION['User']))
                    {
                        ?>
                            <div class="add-to-bag-button" onclick="addToCart('<?php echo $_SESSION['User']?>','<?php echo $obj->id?>')" id="t01">
                                Thêm vào giỏ hàng
                            </div>
                        <?php
                    }
                    else
                    {
                        ?>
                            <div class="add-to-bag-button">
                                Đăng nhập để thêm vào giỏ hàng
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <script src="/baitaplon-final/user-interface/function-files/product-specs.js"></script>

    <div class="footer-bar">

        <?php

        include_once 'default-footer.php'

            ?>

    </div>



</body>

</html>