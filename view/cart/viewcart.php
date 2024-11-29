<style>
span {
    position: relative;
    left: 0;
    /* Điều chỉnh lại vị trí */
    top: 10px;
    font-size: 1.5rem;
}

.quantity-btn {
    background-color: #f1f1f1;
    border: none;
    padding: 8px 12px;
    font-size: 16px;
    cursor: pointer;
}
</style>
<main class="catalog mb">
    <span class="badge text-bg-success">Giỏ Hàng</span>
    <div id="cart">
        <div class="boxleft">
            <div class="">
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
                                            <td>' . number_format($product['price'], 0, ',', '.') . ' VND</td>
                                            <td>' . number_format($productTotal, 0, ',', '.') . ' VND</td>
                                            <td><a href="index.php?act=delcart&id=' . $id . '" class="btn btn-danger">Xóa</a></td>
                                        </tr>';
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <p><strong>Tổng tiền: <?php echo number_format($total, 0, ',', '.') . ' VND'; ?></strong></p>
                    </div>
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
</main>