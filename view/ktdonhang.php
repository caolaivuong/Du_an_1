<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/brands/z4871992908279_16a19fc978221fc75541dc94d278ae60-removebg-preview (1).png"
        type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/error_track.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 15px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    .width30 {
        width: 1100px;

    }

    .width30 {
        max-width: 1100px;
        margin: 0 auto;
        /* Center the element horizontally */
        padding: 20px;
        /* Add some padding around the content */
        background-color: white;
    }
    </style>
</head>

<body>
    <main class="bg_gray">
        <div class="width30">
            <!-- Bước 2: Thanh toán và vận chuyển -->
            <div class="step last">
                <div class="box_general summary">
                    <table style="border: 1px solid black; border-collapse: collapse;">
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Ngày mua</th>
                            <th>Số mặt hàng</th>
                            <th>Tổng giá trị</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>
                        <tr>
                            <?php 
                    if(is_array($listbill)){
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh=get_ttdh($bill['bill_status']);
                            $countsp=loadall_cart_count($bill['id']);
                            $huydh="index.php?act=huydh&id=".$id;
                          echo'  <tr> 
                            <td>DH-'.$bill['id'].'</td>
                            <td>'.$bill['ngaydathang'].'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$bill['total'].'</td>
                            <td>'.$ttdh.'</td>
                            <td><a href="'.$huydh.'">Hủy đơn hàng</a></td>
                            </tr>';
                        }
                    }
                ?>
                    </table>
                </div>
            </div>
            <!-- /step -->
        </div>
    </main>