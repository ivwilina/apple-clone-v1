<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require_once 'sql-connection.php';

    $selecteditem = $_GET['selecteditem'];

    if ($selecteditem == "all") {
        $query_selected_product = "SELECT * FROM product";
    } else {
        $query_selected_product = "SELECT * FROM product where ItemType = '$selecteditem'";
    }

    $get_selected_product = mysqli_query($connect, $query_selected_product);

    echo '<table class="list-view">
        <tr>
        <th width="30%">ID</th>
        <th width="50%">Tên sản phẩm</th>
        <th width="20%">Tuỳ chọn</th>
        </tr>';

    while ($data_all_product = mysqli_fetch_assoc($get_selected_product)) {
        $infomation = json_decode($data_all_product['Specs']);
        echo '<tr>';
        echo '<td>' . $infomation->id . '</td>';
        echo "<td>" . $data_all_product['ItemName'] . "</td>";
        echo '<td>
            <a href="">
                Chỉnh sửa
            </a>
            <a href="">
                Xoá
            </a> 
        </td>';
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>

</html>