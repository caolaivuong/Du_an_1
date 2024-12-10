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