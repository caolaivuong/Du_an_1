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
    border-radius: 5px;
}

.pagination a:hover {
    background-color: #f5f5f5;
}

.pagination .prev,
.pagination .next {
    font-weight: bold;
}

.pagination .active {
    background-color: #007bff;
    color: white;
}

.table .btn {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    font-size: 14px;
    font-weight: bold;
    text-align: center;
    border-radius: 5px;
    border: none;
    transition: all 0.3s ease;
}

.table .btn:hover {
    background-color: #0056b3;
    transform: scale(1.05);
    cursor: pointer;
}

.table .btn-group {
    display: flex;
    justify-content: center;
}

.table .btn-group .btn {
    margin-right: 10px;
}

.table .btn-group .btn:last-child {
    margin-right: 0;
}

.center {
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
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
                    <th>Chi tiết</th> <!-- Cột thêm nút Xem chi tiết -->
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

                    // Tính số trang (phân trang)
                    $soTrang = ceil($soDon / $donMoiTrang); // Cần khai báo biến này để tránh lỗi

                    // Lặp qua danh sách đơn hàng cho trang hiện tại
                    for ($i = $batDau; $i < $ketThuc && $i < $soDon; $i++) {
                        $bill = $listbill[$i];
                        extract($bill);
                        $kh = $bill["bill_user"].'<br>'.$bill["bill_email"].'<br>'.$bill["bill_address"].'<br>'.$bill["bill_tel"];
                        $countsp = loadall_cart_count($bill['id']);
                        $ttdh = get_ttdh($bill['bill_status']);
                        $suabill = "index.php?act=suabill&id=".$id;
                        $xoabill = "index.php?act=xoabill&id=".$id;
                        $vieworderdetails = "index.php?act=vieworderdetails&id=".$id; // Đường dẫn xem chi tiết đơn hàng
                ?>
                <tr>
                    <td>B<?= $bill['id'] ?></td>
                    <td><?= $kh ?></td>
                    <td><?= $countsp ?></td>
                    <td><?= number_format($bill['total'], 0, ',', '.') ?> đ</td>
                    <td><?= $bill['ngaydathang'] ?></td>
                    <td><?= $ttdh ?></td>
                    <td>
                        <a href="<?= $suabill ?>" class="btn btn-success">Sửa</a>
                        <a href="<?= $xoabill ?>" class="btn btn-danger" onclick="return confirmDelete()">Xóa</a>
                    </td>
                    <td>
                        <a href="<?= $vieworderdetails ?>" class="btn btn-info">Xem chi tiết</a>
                        <!-- Nút xem chi tiết -->
                    </td>
                </tr>
                <?php 
                    }
                }
                ?>
            </tbody>
        </table>
        <br>
        <div class="pagination">
            <!-- Nút Previous -->
            <?php if ($trangHienTai > 1) { ?>
            <a href="index.php?act=listbill&page=<?= $trangHienTai - 1 ?>" class="prev">Previous</a>
            <?php } else { ?>
            <a href="#" class="prev disabled">Previous</a>
            <?php } ?>

            <!-- Hiển thị các số trang phân trang -->
            <?php 
            for ($i = 1; $i <= $soTrang; $i++) { 
                if ($i == $trangHienTai) {
                    echo '<a href="index.php?act=listbill&page=' . $i . '" class="page-num active">' . $i . '</a>';
                } else {
                    echo '<a href="index.php?act=listbill&page=' . $i . '" class="page-num">' . $i . '</a>';
                }
            }
            ?>

            <!-- Nút Next -->
            <?php if ($trangHienTai < $soTrang) { ?>
            <a href="index.php?act=listbill&page=<?= $trangHienTai + 1 ?>" class="next">Next</a>
            <?php } else { ?>
            <a href="#" class="next disabled">Next</a>
            <?php } ?>
        </div>
    </form>
</section>