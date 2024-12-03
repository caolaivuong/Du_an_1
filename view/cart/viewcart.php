<style>
/* Tổng thể */
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

/* Bảng */
.table {
    width: 100%;
    background-color: #fff;
    border-collapse: collapse;
    margin-bottom: 1rem;
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

/* Nút số lượng */
.quantity-control {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    /* Khoảng cách giữa nút và số lượng */
}

.quantity-btn {
    background-color: #007bff;
    border: none;
    color: white;
    width: 30px;
    height: 30px;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

.quantity-btn:hover {
    background-color: #0056b3;
}

.quantity-btn:active {
    transform: scale(0.9);
}

.quantity-display {
    font-size: 16px;
    font-weight: bold;
    width: 40px;
    text-align: center;
}

/* Nút hành động */
.container a {
    margin: 10px;
    text-decoration: none;
}

.btn {
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    transition: transform 0.3s;
    cursor: pointer;
}

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
                            $total = 0; // Tổng giá trị giỏ hàng
                            foreach ($_SESSION['mycart'] as $id => $product) {
                                $productTotal = $product['soluong'] * $product['price'];
                                $total += $productTotal;

                                // Kiểm tra lỗi
                                $errorMessage = isset($product['error']) ? '<small class="text-danger">' . $product['error'] . '</small>' : '';

                                echo '
                                <tr>
                                    <td>' . $product['name'] . '</td>
                                    <td>
                                        <div class="quantity-control">
                                            <button class="quantity-btn" onclick="updateCart(' . $id . ', \'decrease\')">-</button>
                                            <span class="quantity-display" id="quantity-' . $id . '">' . $product['soluong'] . '</span>
                                            <button class="quantity-btn" onclick="updateCart(' . $id . ', \'increase\')">+</button>
                                        </div>
                                        ' . $errorMessage . '
                                    </td>
                                    <td>' . number_format($product['price'], 0, ',', '.') . ' đ</td>
                                    <td>' . number_format($productTotal, 0, ',', '.') . ' đ</td>
                                    <td><a href="index.php?act=delcart&id=' . $id . '" class="btn btn-danger btn-sm">Xóa</a></td>
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

            <!-- Các nút điều hướng -->
            <div class="container text-center">
                <a href="index.php"><input type="button" class="btn btn-secondary" value="Về trang chủ"></a>
                <a href="index.php?act=bill"><input type="button" class="btn btn-info" value="Thanh Toán"></a>
                <a href="index.php?act=delcart"><input type="button" class="btn btn-danger" value="Xóa giỏ hàng"></a>
            </div>
            <br>
        </div>
    </div>

    <script>
    function updateCart(id, action) {
        const quantityElement = document.getElementById('quantity-' + id);
        let currentQuantity = parseInt(quantityElement.innerText);
        const maxQuantity = 10;

        if (action === 'increase' && currentQuantity < maxQuantity) {
            currentQuantity++;
        } else if (action === 'decrease' && currentQuantity > 1) {
            currentQuantity--;
        } else {
            alert('Số lượng không hợp lệ!');
            return;
        }

        // Cập nhật số lượng trực tiếp trên giao diện
        quantityElement.innerText = currentQuantity;

        // Gửi yêu cầu AJAX để cập nhật giỏ hàng
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'index.php?act=updatecart&id=' + id, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Đọc dữ liệu trả về và cập nhật giỏ hàng
                document.getElementById('cart').innerHTML = xhr.responseText;
            }
        };
        xhr.send('action=' + action + '&id=' + id + '&quantity=' + currentQuantity);
    }
    </script>
</main>