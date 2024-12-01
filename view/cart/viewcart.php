<style>
/* Chung cho các phần tử */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
}

/* Giao diện giỏ hàng */
.catalog {
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 20px 0;
}

span.badge {
    font-size: 1.25rem;
    padding: 10px 15px;
    background-color: #28a745;
    color: #fff;
    border-radius: 5px;
    margin-bottom: 20px;
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    background-color: #fff;
    border-collapse: collapse;
    border-radius: 8px;
    overflow: hidden;
}

.table th,
.table td {
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

.table th {
    background-color: #007bff;
    color: white;
}

.table tr:hover {
    background-color: #f1f1f1;
}

/* Nút tăng giảm số lượng */
.quantity-btn {
    background-color: #007bff;
    border: none;
    color: white;
    padding: 5px 10px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.quantity-btn:hover {
    background-color: #0056b3;
}

.container {
    text-align: center;
}

.container a {
    margin: 10px;
    text-decoration: none;
}

.container .btn {
    padding: 10px 30px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: transform 0.3s;
}

/* Các nút */
.btn-secondary {
    background-color: #6c757d;
    color: white;
}

.btn-info {
    background-color: #17a2b8;
    color: white;
}

.btn-danger {
    background-color: #dc3545;
    color: white;
}

.btn:hover {
    transform: scale(1.05);
}

.text-center p {
    font-size: 1.25rem;
    font-weight: bold;
    margin-top: 20px;
}

/* Thêm hiệu ứng cho các thay đổi số lượng */
.quantity-btn {
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.quantity-btn:active {
    transform: scale(0.9);
    /* Tạo hiệu ứng nén khi nhấn */
}
</style>

<main class="catalog mb">
    <span class="badge text-bg-success">Giỏ Hàng</span>
    <div id="cart">
        <div class="boxleft">
            <div class="box_content container">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if (isset($_SESSION['mycart']) && is_array($_SESSION['mycart'])) {
                                $total = 0;  // Tổng giá trị giỏ hàng
                                foreach ($_SESSION['mycart'] as $id => $product) {
                                    $productTotal = $product['soluong'] * $product['price'];
                                    $total += $productTotal;
                                    echo '
                                    <tr>
                                        <td>' . $product['name'] . '</td>
                                        <td>
                                            <form method="post" action="index.php?act=updatecart&id=' . $id . '">
                                                <button type="submit" name="action" value="decrease" class="quantity-btn">-</button>
                                                ' . $product['soluong'] . '
                                                <button type="submit" name="action" value="increase" class="quantity-btn">+</button>
                                            </form>
                                        </td>
                                        <td>' . number_format($product['price'], 0, ',', '.') . ' đ</td>
                                        <td>' . number_format($productTotal, 0, ',', '.') . ' đ</td>
                                        <td><a href="index.php?act=delcart&id=' . $id . '" class="btn btn-danger">Xóa</a></td>
                                    </tr>';
                                }
                            }
                        ?>
                    </tbody>
                </table>
                <div class="text-center">
                    <p><strong>Tổng tiền: <?php echo number_format($total, 0, ',', '.') . ' đ'; ?></strong></p>
                </div>
            </div>
            <div class="container text-center">
                <a href="index.php"><input type="button" class="btn btn-secondary" value="Về trang chủ"></a>
                <a href="index.php?act=bill"><input type="button" class="btn btn-info" value="Thanh Toán"></a>
                <a href="index.php?act=delcart"><input type="button" class="btn btn-danger" value="Xóa giỏ hàng"></a>
            </div>
            <br>
        </div>
    </div>

    <script>
    // Gửi yêu cầu AJAX cập nhật số lượng mà không làm reload toàn bộ trang
    function updateCart(id, action) {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', 'index.php?act=updatecart&id=' + id + '&action=' + action, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Cập nhật giao diện mà không reload
                document.getElementById('cart').innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }
    </script>
</main>