    <style>
.confirmation {
    width: 400px;
    margin: 100px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.confirmation h2 {
    margin-bottom: 20px;
    color: #333;
}

.confirmation form {
    display: inline-block;
}

.confirmation p {
    margin-top: 20px;
    color: #666;
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
