<<<<<<< HEAD
// người dùng nhập thông tin thanh toán
<main class="">
=======
<?php
// Khởi tạo các biến lỗi
$userErr = $addressErr = $emailErr = $telErr = "";
$user = $address = $email = $tel = "";
$valid = true; // Biến để theo dõi trạng thái hợp lệ của form

// Kiểm tra xem form đã được gửi hay chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra tên khách hàng
    if (empty($_POST["user"])) {
        $userErr = "Tên khách hàng là bắt buộc!";
        $valid = false;
    } else {
        $user = trim($_POST["user"]);  // Loại bỏ khoảng trắng thừa
    }

    // Kiểm tra địa chỉ
    if (empty($_POST["address"])) {
        $addressErr = "Địa chỉ là bắt buộc!";
        $valid = false;
    } else {
        $address = trim($_POST["address"]);
    }

    // Kiểm tra email
    if (empty($_POST["email"])) {
        $emailErr = "Email là bắt buộc!";
        $valid = false;
    } else {
        $email = trim($_POST["email"]);
        // Kiểm tra định dạng email hợp lệ
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Địa chỉ email không hợp lệ!";
            $valid = false;
        }
    }

    // Kiểm tra số điện thoại
    if (empty($_POST["tel"])) {
        $telErr = "Số điện thoại là bắt buộc!";
        $valid = false;
    } else {
        $tel = trim($_POST["tel"]);
        // Kiểm tra số điện thoại đúng định dạng (ví dụ: số điện thoại Việt Nam)
        if (!preg_match("/^0[3|5|7|8|9][0-9]{8}$/", $tel)) {
            $telErr = "Số điện thoại không hợp lệ!";
            $valid = false;
        }
    }

    // Kiểm tra phương thức thanh toán
    if (!isset($_POST["pttt"])) {
        $ptttErr = "Bạn phải chọn phương thức thanh toán!";
        $valid = false;
    } else {
        $pttt = $_POST["pttt"];
    }

    // Nếu tất cả các trường hợp hợp lệ, tiến hành xử lý đơn hàng
    if ($valid) {
        // Xử lý đơn hàng ở đây (chẳng hạn lưu vào cơ sở dữ liệu, gửi email xác nhận, v.v...)
        // Ví dụ: header("Location: success.php"); để chuyển hướng đến trang thành công
        header("Location: success.php");
        exit();
    }
}
?>
<main>
>>>>>>> ead8bc3 (duan1)
    <div class="boxleft">
        <form action="index.php?act=billconfirm" method="post">
            <div class="text-center">
                <h2>THÔNG TIN KHÁCH HÀNG</h2>
            </div>

            <!-- Tên khách hàng -->
            <div class="row justify-content-center">
                <div class="col-4">
                    <label class="form-label">Tên khách hàng</label>
                    <input type="text" class="form-control ct-input border border-primary-subtle" size="25"
                           name="user" value="<?= htmlspecialchars($user) ?>" required>
                    <div class="text-danger"><?= $userErr ?></div>
                </div>
            </div>

            <!-- Địa chỉ -->
            <div class="row justify-content-center">
                <div class="col-4">
                    <label class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control ct-input border border-primary-subtle" name="address"
                           value="<?= htmlspecialchars($address) ?>" required>
                    <div class="text-danger"><?= $addressErr ?></div>
                </div>
            </div>

            <!-- Email -->
            <div class="row justify-content-center">
                <div class="col-4">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control ct-input border border-primary-subtle" name="email"
                           value="<?= htmlspecialchars($email) ?>" required>
                    <div class="text-danger"><?= $emailErr ?></div>
                </div>
            </div>

            <!-- Số điện thoại -->
            <div class="row justify-content-center">
                <div class="col-4">
                    <label class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control ct-input border border-primary-subtle" name="tel"
                           value="<?= htmlspecialchars($tel) ?>" required>
                    <div class="text-danger"><?= $telErr ?></div>
                </div>
            </div>

            <!-- Phương thức thanh toán -->
            <div class="text-center">PHƯƠNG THỨC THANH TOÁN</div><br>
            <div class="box_content text-center">
                <div class="ct-radio">
                    <input type="radio" class="form-check-input" value="0" name="pttt" <?= isset($pttt) && $pttt == 0 ? 'checked' : '' ?>>
                    <label class="form-check-label" for="pttt1">Thanh toán khi nhận hàng</label>
                    <input type="radio" class="form-check-input" value="1" name="pttt" <?= isset($pttt) && $pttt == 1 ? 'checked' : '' ?>>
                    <label class="form-check-label" for="pttt2">Thanh toán ngay</label>
                </div>
                <div class="text-danger"><?= isset($ptttErr) ? $ptttErr : '' ?></div>
            </div><br>

            <!-- Thông tin giỏ hàng -->
            <div class="container">
                <div class="text-center">THÔNG TIN GIỎ HÀNG</div>
                <div class="text-center">
                    <table class="table">
                        <thead>
                            <?php
                            viewcart(1);  // Giả sử bạn có hàm này để hiển thị thông tin giỏ hàng
                            ?>
                        </thead>
                    </table>
                </div>
            </div>

            <!-- Nút xác nhận và quay lại trang chủ -->
            <div class="container text-center">
                <a href="index.php"><input type="button" class="btn btn-secondary" value="Về trang chủ"></a>
                <input type="submit" class="btn btn-info" value="Xác nhận thanh toán" name="dongydathang">
            </div><br>
        </form>
    </div>
</main>

