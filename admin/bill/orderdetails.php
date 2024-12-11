<style>
/* Định dạng bảng */
.table {
    width: 100%;
    margin-bottom: 20px;
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.table th,
.table td {
    text-align: center;
    vertical-align: middle;
    padding: 12px 15px;
    font-size: 14px;
}

/* Định dạng tiêu đề bảng */
.table th {
    background-color: #007bff;
    color: white;
    font-weight: bold;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

/* Định dạng các hàng trong bảng */
.table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.table tr:nth-child(odd) {
    background-color: #ffffff;
}

/* Định dạng ô hình ảnh sản phẩm */
.table img {
    max-width: 100px;
    max-height: 100px;
    object-fit: cover;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

/* Định dạng tiêu đề và thông tin đơn hàng */
h2,
h3 {
    font-family: 'Arial', sans-serif;
    font-weight: bold;
    color: #007bff;
}

h5 {
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    margin-bottom: 15px;
}

.text-center ul {
    list-style: none;
    padding-left: 0;
}

.text-center ul li {
    font-size: 14px;
    margin-bottom: 10px;
    line-height: 1.6;
    font-weight: 600;
}

/* Định dạng nút trang chủ */
.btn-lg {
    font-size: 16px;
    padding: 12px 30px;
    background-color: #28a745;
    color: white;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    text-transform: uppercase;
    transition: background-color 0.3s ease;
}

.btn-lg:hover {
    background-color: #218838;
}

/* Định dạng container */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 30px 15px;
}

.container .row {
    margin-bottom: 30px;
}

.container .row.mb-4 {
    margin-bottom: 40px;
}

/* Cải thiện responsive */
@media (max-width: 768px) {
    .table {
        font-size: 12px;
    }

    .table th,
    .table td {
        padding: 10px;
    }

    .btn-lg {
        font-size: 14px;
        padding: 10px 25px;
    }
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