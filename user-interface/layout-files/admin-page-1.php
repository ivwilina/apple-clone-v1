<?php

include_once 'php-files/admin-product.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store</title>
    <link rel="stylesheet" href="/baitaplon-final/user-interface/css-files/admin-page-1.css">
    <link rel="shortcut icon" href="/baitaplon-final/img-files/icons/apple-favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="header-container">
        <?php
        include_once 'admin-page-header.php'
            ?>
    </div>

    <!-- danh sách sản phẩm -->
    <section class="list-product">
        <div class="section-wrapper">
            <div class="section-container">
                <div class="section-title">Danh sách sản phẩm</div>
                <div class="select-product">
                    <label for="products">Lọc sản phẩm</label>
                    <div class="select-wrapper">
                        <select name="products" title="Lọc sản phẩm" id="selector">
                            <option value="all">Tất cả sản phẩm</option>
                            <?php
                            while ($data_product_type = mysqli_fetch_assoc($get_product_type)) {
                                ?>
                                <option value="<?php echo $data_product_type['ItemType'] ?>">
                                    <?php echo $data_product_type['ItemType'] ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div id="button-view" onclick="selectItemList()">
                        Hiển thị
                    </div>
                </div>
                <div id="table-list">
                    <table class="list-view">
                        <tr>
                            <th width="30%">ID</th>
                            <th width="50%">Tên sản phẩm</th>
                            <th width="20%">Tuỳ chọn</th>
                        </tr>
                        <?php
                        while ($data_all_product = mysqli_fetch_assoc($get_all_product)) {
                            $infomation = json_decode($data_all_product['Specs']);
                            ?>
                            <tr>
                                <td>
                                    <?php echo $infomation->id ?>
                                </td>
                                <td>
                                    <?php echo $data_all_product['ItemName'] ?>
                                </td>
                                <td>
                                    <a href="">
                                        Chỉnh sửa
                                    </a>
                                    <a href="">
                                        Xoá
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <!-- chỉnh sửa sản phẩm -->
    <section class="product-fix">
        <div class="section-wrapper">
            <div class="section-container">
                <div class="section-title">Thông tin sản phẩm</div>
                <div class="infomation-list">
                    <ul class="infomation-content">
                        <li>
                            <div class="ic-name">
                                Tên sản phẩm
                            </div>
                            <div class="ic-content">
                                <?php echo $r['ItemName'] ?>
                            </div>
                        </li>
                        <li>
                            <div class="ic-name">
                                ID sản phẩm
                            </div>
                            <div class="ic-content">
                                <?php echo $json_data->id ?>
                            </div>
                        </li>
                        <li>
                            <div class="ic-name">
                                Thông số kỹ thuật
                            </div>
                            <div class="ic-content">
                                <table>
                                    <?php
                                    foreach ($json_data->information as $info) {
                                        ?>
                                        <tr>
                                            <td>
                                                <input title="none" type="text" name="spec-infoname" id="" value="<?php echo $info->infoname ?>">
                                            </td>
                                            <td>
                                                <input title="none" type="text" name="spec-infodetail" id="" value="<?php echo $info->detail ?>">
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </li>
                    </ul>
                    <div id="button-add" onclick="testUpdate()">Cập nhật</div>
                </div>
            </div>
        </div>
    </section>


    <!-- thêm mới sản phẩm -->
    <section class="add-product">

    </section>

    <script src="/baitaplon-final/user-interface/function-files/admin-page-1.js"></script>
</body>

</html>