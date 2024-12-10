<style>
/* Các thuộc tính chung */
body {
    font-family: Arial, sans-serif;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.text-center h3 {
    font-size: 1.6rem;
    /* Giảm kích thước chữ */
    color: #2d6a4f;
    font-weight: bold;
    padding: 10px 20px;
    background-color: #f1faee;
    /* Màu nền nhẹ */
    display: inline-block;
    border-radius: 4px;
}

/* Hình ảnh sản phẩm */
.product-image img {
    width: 100%;
    max-width: 400px;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Phần thông tin sản phẩm */
.product-info {
    margin-left: 20px;
}

.product-info h2 {
    font-size: 2rem;
    color: #333;
    margin-bottom: 10px;
}

.product-info h4 {
    font-size: 1.5rem;
    color: #e63946;
    margin-bottom: 15px;
}

.product-info .size {
    font-size: 1.2rem;
    margin-bottom: 15px;
}

/* Nút thêm vào giỏ hàng */
.btn-primary {
    background-color: #2d6a4f;
    color: #fff;
    padding: 10px 20px;
    font-size: 1rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #1b4f3f;
}

/* Điều chỉnh số lượng */
.quantity-container {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.quantity-btn {
    background-color: #f1f1f1;
    border: 1px solid #ccc;
    padding: 8px 12px;
    font-size: 18px;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.quantity-btn:hover {
    background-color: #ddd;
}

.quantity-amount {
    width: 50px;
    height: 36px;
    text-align: center;
    font-size: 18px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin: 0 10px;
}

/* Form bình luận */
.comment-form input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    font-size: 1rem;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.comment-form button {
    background-color: #e63946;
    color: #fff;
    padding: 10px 20px;
    font-size: 1rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.comment-form button:hover {
    background-color: #d62828;
}

/* Form đăng ký nhận bản tin */
.footer-column form {
    display: flex;
    gap: 10px;
    margin-top: 20px;
}

.footer-column input[type="email"] {
    padding: 10px;
    font-size: 16px;
    border-radius: 4px;
    border: 1px solid #ccc;
    flex: 1;
    transition: border-color 0.3s ease;
}

.footer-column input[type="email"]:focus {
    border-color: #2d6a4f;
}

.footer-column button {
    padding: 10px 20px;
    background-color: #2d6a4f;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s, transform 0.3s ease;
}

.footer-column button:hover {
    background-color: #1b4f3f;
    transform: translateY(-3px);
}
</style>

<main class="container">
    <input type="hidden" name="" value="">

    <div class="text-center">
        <?php extract($sanpham); ?>
        <h3 class="badge text-bg-success text-wrap" style="width: 12rem;">
            Chi tiết sản phẩm
        </h3>
    </div><br>

    <div>
        <?php
        if (isset($_POST['soluong']) && isset($_POST['soluong']) > 0) {
            $soluong = $_POST['soluong'];
        } else {
            $soluong = 1;
        }
        $hinh = $img_path . $img;
        echo "<div id='ctsp'>";
        echo "<div class='row'>";
        echo "<div class='col-5 product-image'>";
        echo "<img src='$hinh' width='400' height='300px'>";
        echo "</div>";
        echo "<div class='col-6 product-info'>";
        echo "<h2 class='fw-bold'>$name</h2>";
        echo "<h4 class='text-danger'>$price đ</h4>";
        echo '<div class="size">
                <strong>Size: </strong><span id="selected-size"></span>
            </div>';
        echo '<div class="m-2 quantity-container">
                <button class="quantity-btn" onclick="minus(this)">-</button>
                <input type="text" class="form-control quantity-amount" value="' . $soluong . '" onkeyup="kiemtrasoluong(this)">
                <button class="quantity-btn" onclick="plus(this)">+</button>
                <input type="hidden" name="" value="' . $id . '">
                </div>';
        echo "<p class='fw-semibold'>$mota</p>";
        echo '<form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $name . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="price" value="' . $price . '">
                <input type="submit" name="addtocart" class="btn-primary" value="Thêm giỏ hàng">
            </form>';
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<br>";
        ?>
    </div>

    <!-- Phần bình luận -->
    <div class="comment-form">
        <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
        <?php if (isset($successMessage)) { echo "<p style='color: green;'>$successMessage</p>"; } ?>
        <form method="post" action="index.php?act=sanphamct&idsp=<?php echo $sanpham['id']; ?>">
            <textarea name="noidung" placeholder="Nhập bình luận..."></textarea>
            <button type="submit" name="guibinhluan">Gửi bình luận</button>
        </form>
    </div>

    <?php
    include "view/boxright.php";
    ?>
</main>

<script>
// JavaScript xử lý thay đổi số lượng sản phẩm
var selectedSize = '';

function setSize(size) {
    if (selectedSize !== '') {
        var prevSizeElement = document.getElementById('size-' + selectedSize);
        prevSizeElement.classList.remove('selected');
    }

    selectedSize = size;
    document.getElementById('selected-size').textContent = size;

    var currentSizeElement = document.getElementById('size-' + selectedSize);
    currentSizeElement.classList.add('selected');
}

function plus(x) {
    var cha = x;
    var slcu = cha.previousSibling.previousSibling;
    var slmoi = parseInt(slcu.value) + 1;
    var idsp = cha.nextSibling.nextSibling.value;
    if (slmoi < 11) {
        slcu.value = slmoi;
        $.post("/model/capnhatctsp.php", {
                "idsp": idsp,
                "slmoi": slmoi,
            },
            function(data) {
                document.getElementById("ctsp").innerHTML = data;
            }
        ).fail(function(jqXHR, textStatus, errorThrown) {
            console.log("AJAX request failed:", errorThrown);
        });
    } else {
        alert("Không thể lớn hơn 10")
    }
}

function minus(x) {
    var cha = x;
    var slcu = cha.nextSibling.nextSibling;
    var slmoi = parseInt(slcu.value) - 1;
    var idsp = cha.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.value;
    if (slmoi > 0) {
        slcu.value = slmoi;
        $.post("/model/capnhatctsp.php", {
                "idsp": idsp,
                "slmoi": slmoi,
            },
            function(data) {
                document.getElementById("ctsp").innerHTML = data;
            }
        ).fail(function(jqXHR, textStatus, errorThrown) {
            console.log("AJAX request failed:", errorThrown);
        });
    } else {
        alert("Không thể nhỏ hơn 1")
    }
}
</script>