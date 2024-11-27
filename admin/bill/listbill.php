<section id="contai">
    <header>
        <h1>Danh sách đơn hàng</h1>
    </header>
    <form action="#" method="post">
        <table>
            <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Khách hàng</th>
                    <th>Số lượng</th>
                    <th>Giá tiền</th>
                    <th>Ngày đặt hàng</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if (is_array($listbill)) {
                    // Số đơn trên mỗi trang
                    $donMoiTrang = 4;
                    // Tính tổng số sản phẩm
                    $soDon = count($listbill);
                    // Xác định trang hiện tại
                    $trangHienTai = isset($_GET['page']) ? $_GET['page'] : 1;
                    // Tính vị trí bắt đầu và kết thúc của sản phẩm trên trang hiện tại
                    $batDau = ($trangHienTai - 1) * $donMoiTrang;
                    $ketThuc = $batDau + $donMoiTrang;
                    for ($i = $batDau; $i < $ketThuc && $i < $soDon; $i++) {
                        $bill = $listbill[$i];
                        extract($bill);
                        $kh = $bill["bill_user"].'<br>'.$bill["bill_email"].'<br>'.$bill["bill_address"].'<br>'.$bill["bill_tel"];
                        $countsp = loadall_cart_count($bill['id']);
                        $ttdh = get_ttdh($bill['bill_status']);
                        $suabill = "index.php?act=suabill&id=".$id;
                        $xoabill = "index.php?act=xoabill&id=".$id;
                ?>
                <tr> 
                    <td>B<?= $bill['id'] ?></td>
                    <td><?= $kh ?></td>
                    <td><?= $countsp ?></td>
                    <td><?= $bill['total'] ?> đ</td>
                    <td><?= $bill['ngaydathang'] ?></td>
                    <td><?= $ttdh ?></td>
                    <td>
                        <a href="<?= $suabill ?>" class="btn btn-success">Sửa</a>   
                        <a href="<?= $xoabill ?>" class="btn btn-danger" onclick="return confirmDelete()">Xóa</a>
                    </td>
                </tr>
                <?php 
                    }
                }
                ?>
                <?php $soTrang = ceil($soDon / $donMoiTrang); ?>
            </tbody>
        </table>
        <br>
        <div class="center">
            <div class="pagination">
                <a href="index.php?act=listbill&page=1" class="prev">Previous</a>
                <?php for ($i = 1; $i <= $soTrang; $i++) { ?>
                    <a href="index.php?act=listbill&page=<?= $i ?>" class="page-num"><?= $i ?></a>
                <?php } ?>
                <a href="index.php?act=listbill&page=<?= $soTrang ?>" class="next">Next</a>
            </div>
        </div>
    </form>
</section>

    <style>
        #contai form {
            width: 1000px;
        }

        #contai {
            min-width: 1050px;
            background-color: white;
            margin-left: 280px;
            margin-top: 60px;
        }

        .pagination {
            margin-top: 20px;
            text-align: center;
        }

        .pagination a {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            color: #333;
            border: 1px solid #ccc;
            margin: 0 4px;
        }

        .pagination a:hover {
            background-color: #f5f5f5;
        }

        .pagination .dots {
            padding: 8px 16px;
        }

        .pagination .prev,
        .pagination .next {
            font-weight: bold;
        }

        .center {
            display: flex;
            justify-content: center; /* căn giữa theo chiều ngang */
            align-items: center; /* căn giữa theo chiều dọc */
        }

    </style>

<script>
    function confirmDelete() {
        return confirm("Bạn có chắc chắn muốn xóa mục này?");
    }
</script>