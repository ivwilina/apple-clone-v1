<!DOCTYPE html>
<html lang="en">

<body>
    <?php

    require_once 'sql-connection.php';

        $filter = $_GET['filter'];
        if($filter == 'all')
        {
            $filter_query =  "SELECT * FROM bill";
        }
        else
        {
            $filter_query =  "SELECT * FROM bill where BillId like '%$filter%'";
        }

        $data = mysqli_query($connect, $filter_query);

        echo '<tr>
            <th width="10%">ID</th>
            <th width="15%">Tổng giá trị</th>
            <th width="25%">Thông tin khách hàng</th>
            <th width="50%">Thông tin đơn hàng</th>
        </tr>';
        foreach($data as $bill)
        {
            $customerInfo = json_decode($bill['CustomerInfo']);
            $billItem = json_decode($bill['BillItem']);
            echo '<tr>';
                echo'<td>'.$bill['BillId'].'</td>';
                echo'<td class="price">'.$bill['TotalPrice'].'</td>';
                echo'<td>'.$customerInfo[0].' , '.$customerInfo[1].' , '.$customerInfo[2]. '</td>';
                echo'<td>';
                    echo'<ul>';
                        foreach($billItem as $Item)
                        {
                            echo'<li>'.$Item[4].' * '.$Item[0].' /'.$Item[1].' /'.$Item[2].' /'.$Item[3].'</li>';
                        }
                    echo'</ul>
                </td>
            </tr>';
        }
    ?>
</body>

</html>