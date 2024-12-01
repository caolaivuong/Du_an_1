<style>
.confirmation {
    width: 400px;
    margin: 100px auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    font-family: 'Arial', sans-serif;
}

.confirmation h2 {
    margin-bottom: 20px;
    color: #333;
    font-size: 24px;
    font-weight: bold;
}

.confirmation p {
    margin-top: 20px;
    color: #666;
    font-size: 16px;
}

.inp {
    margin-top: 30px;
}

.btn_1 {
    background-color: #dc3545;
    /* Đỏ tươi */
    color: #fff;
    padding: 10px 30px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn_1:hover {
    background-color: #c82333;
    /* Đỏ đậm khi hover */
    transform: translateY(-2px);
    /* Tạo hiệu ứng di chuyển lên khi hover */
}

.btn_1:active {
    transform: translateY(2px);
    /* Hiệu ứng khi nhấn */
}

.confirmation p {
    font-size: 18px;
    font-weight: normal;
}

.confirmation input[type="submit"]:disabled {
    background-color: #cccccc;
    cursor: not-allowed;
}
</style>

<body>
    <div class="confirmation">
        <h2>Xác nhận hủy đơn hàng</h2>
        <form action="index.php?act=xlhuydh" method="post">
            <input type="hidden" name="id" value="<?php echo $bill['id']; ?>">
            <input type="hidden" name="new_status" value="4">
            <div class="inp">
                <input class="btn_1" type="submit" name="capnhat" value="Cập nhật">
            </div>
        </form>
        <p>Bạn có chắc chắn muốn hủy đơn hàng này?</p>
    </div>
</body>