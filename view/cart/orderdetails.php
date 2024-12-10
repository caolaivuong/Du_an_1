<style>
.table th,
.table td {
    text-align: center;
    vertical-align: middle;
}

.table img {
    max-width: 100px;
    max-height: 100px;
    object-fit: cover;
}

ul.list-unstyled li {
    margin-bottom: 10px;
}
</style>
<div class="container">
    <h2 class="text-center text-primary mb-4">Chi tiết đơn hàng <?= $bill['id'] ?></h2>

    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <h5 class="text-center"><strong>Ngày đặt:</strong> <?= $bill['ngaydathang'] ?></h5>
            <h5 class="text-center"><strong>Thông tin người nhận hàng:</strong></h5>
            <div class="text-center">
                <ul class="list-unstyled">
                    <li><strong>Tên người nhận:</strong> <?= $bill['bill_user'] ?></li>
                    <li><strong>Địa chỉ:</strong> <?= $bill['bill_address'] ?></li>
                    <li><strong>Email:</strong> <?= $bill['bill_email'] ?></li>
                    <li><strong>Số điện thoại:</strong> <?= $bill['bill_tel'] ?></li>
                </ul>
            </div>
        </div>
    </div>

    <h3 class="text-center text-primary mb-4">Sản phẩm trong đơn hàng</h3>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="table-info">
                        <th>Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Tổng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($billct as $ct): ?>
                    <tr>
                        <td><?= $ct['name'] ?></td>
                        <td><img src="images/<?= $ct['img'] ?>" alt="<?= $ct['name'] ?>" width="100" class="img-fluid">
                        </td>
                        <td><?= number_format($ct['price'], 0, ',', '.') ?> VND</td>
                        <td><?= $ct['soluong'] ?></td>
                        <td><?= number_format($ct['price'] * $ct['soluong'], 0, ',', '.') ?> VND</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-success btn-lg">Trang Chủ</a>
    </div>
</div>