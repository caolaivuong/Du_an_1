<style>
/* Định dạng chung */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
}

.boxright {
    max-width: 900px;
    margin: 30px auto;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
    font-size: 28px;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

h4 {
    font-size: 22px;
    color: #555;
    margin-bottom: 20px;
}

.form_li {
    list-style-type: none;
    margin: 10px 0;
}

.form_li a {
    display: block;
    padding: 12px 20px;
    color: #007bff;
    text-decoration: none;
    border-radius: 5px;
    background-color: #f8f9fa;
    transition: background-color 0.3s;
}

.form_li a:hover {
    background-color: #e2e6ea;
}

.btn-success {
    display: inline-block;
    padding: 10px 20px;
    background-color: #28a745;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s;
}

.btn-success:hover {
    background-color: #218838;
}

.text-center {
    text-align: center;
}

.mb {
    margin-bottom: 30px;
}
</style>

<main>
    <div class="boxright">
        <div class="mb"><br>
            <div class="row">
                <h2 class=" text-center">TÀI KHOẢN</h2>
                <div class="col-1"></div>
                <div class="col-10 text-start">
                    <div class="box_content form_account ">
                        <?php
                        if (isset ($_SESSION['user'])) {
                            extract($_SESSION['user']);
                            ?>
                        <h4>Xin chào:
                            <?= $user ?>
                        </h4><br>
                        <div class="container">

                            <li class="form_li">
                                <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                            </li>
                            <li class="form_li">
                                <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                            </li>
                            <?php if ($role == 1) { ?>
                            <li class="form_li">
                                <a href="admin/index.php">Đăng nhập Admin</a>
                            </li>
                            <?php } ?>
                            <li class="form_li">
                                <a href="index.php?act=thoat">Đăng xuất</a>
                            </li>
                        </div>
                    </div>
                </div>
                <?php
                        } else {
                            ?>

                <div class="row">
                    <div class="text-center">
                        <a href="index.php?act=dangnhap" class="btn btn-success mt-2">Đăng nhập</a>
                        <a href="index.php?act=dangky" class="btn btn-success mt-2">Đăng ký</a>
                    </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
</main> <br>