// danh sách các đơn hàng của khách hàng
<style>
/* Định dạng cho các nút */
.table .btn {
    background-color: #007bff;
    /* Màu nền xanh dương */
    color: white;
    /* Màu chữ trắng */
    padding: 10px 20px;
    /* Đệm cho nút */
    font-size: 14px;
    /* Kích thước chữ */
    font-weight: bold;
    /* Làm đậm chữ */
    text-align: center;
    /* Căn giữa chữ */
    border-radius: 5px;
    /* Bo góc cho nút */
    border: none;
    /* Không viền */
    transition: all 0.3s ease;
    /* Hiệu ứng chuyển màu và phóng to */
}

/* Hiệu ứng hover cho các nút */
.table .btn:hover {
    background-color: #0056b3;
    /* Màu nền khi hover */
    transform: scale(1.05);
    /* Tăng kích thước nút khi hover */
    cursor: pointer;
    /* Thay đổi con trỏ khi di chuột */
}

/* Hiệu ứng focus cho các nút */
.table .btn:focus {
    outline: none;
    /* Tắt viền khi focus */
    box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
    /* Tạo bóng khi focus */
}

/* Tạo khoảng cách giữa hai nút */
.table .btn-group {
    display: flex;
    /* Dùng flex để căn chỉnh các nút ngang */
    justify-content: center;
    /* Căn giữa các nút */
}

.table .btn-group .btn {
    margin-right: 10px;
    /* Tạo khoảng cách giữa các nút */
}

/* Loại bỏ margin cho nút cuối cùng trong nhóm */
.table .btn-group .btn:last-child {
    margin-right: 0;
}
</style>
<main class="container mb">
    <div class="row">
        <div class="col-md-8">
            <div class="boxleft">
                <div class="mb">
                    <div class="box_title">
                        <h3 class="text-primary ">ĐƠN HÀNG CỦA BẠN</h3>
                    </div>
                    <div class="box_content">
                        <table class="table table-bordered mx-auto">
                            <thead>
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Ngày mua</th>
                                    <th>Số mặt hàng</th>
                                    <th>Tổng giá trị</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (is_array($listbill)) {
                                    // Sắp xếp đơn hàng theo thứ tự mới nhất
                                    usort($listbill, function ($a, $b) {
                                        return $b['id'] <=> $a['id']; // Sắp xếp theo ID giảm dần
                                    });

                                    foreach ($listbill as $bill) {
                                        extract($bill);
                                        $ttdh = get_ttdh($bill['bill_status']); // Lấy trạng thái đơn hàng
                                        $countsp = loadall_cart_count($bill['id']); // Lấy số lượng sản phẩm trong đơn
                                        $huydh = "index.php?act=huydh&id=" . $id; // Đường dẫn hủy đơn hàng
                                        echo '
                                        <tr>
                                            <td>DH' . $bill['id'] . '</td>
                                            <td>' . $bill['ngaydathang'] . '</td>
                                            <td>' . $countsp . '</td>
                                            <td>' . number_format($bill['total'], 0, ',', '.') . ' đ</td>
                                            <td>' . $ttdh . '</td>
                                            <td>
                                                <a href="index.php?act=vieworderdetails&id=' . $bill['id'] . '" class="btn btn-info">Xem chi tiết</a>
                                                <a href="' . $huydh . '" class="btn btn-danger" onclick="return confirmDelete()">Hủy đơn hàng</a>
                                            </td>
                                        </tr>';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-12 text-center">
                            <a href="index.php" class="btn btn-primary">Về trang chủ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
function confirmDelete() {
    return confirm("Bạn có chắc chắn muốn hủy đơn hàng này?");
}
</script>