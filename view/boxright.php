<style>
    a {
        text-decoration: none;
        color: #495057;
    }
</style>
<!-- <div class="boxright">
    <div class="mb">
        <div class="box_title text-center">TÀI KHOẢN</div>
        <div class="box_content form_account">
            <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                ?>
                <h4>Xin chào:
                    <?= $user ?>
                </h4><br>
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
                    <a href="index.php?act=thoat">Thoát</a>
                </li>
                <?php
            } else {
                ?>
            <div class="text-center">
                <a href="index.php?act=dangnhap" class="btn btn-info mt-2">Đăng nhập</a>
            </div>
            </form>
            
        <?php } ?>
    </div>
</div> -->

<!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
<div class="text-center">
    <div class="badge text-bg-success text-wrap">SẢN PHẨM TƯƠNG TỰ</div>
</div> <br>
<div class="box_content">
<?php
$iddm = 1; // ID của danh mục sản phẩm được chọn, ví dụ 1 là quần
$selected_product = loadone_sanpham($id); // Sản phẩm đang được xem chi tiết
$products = load_sanpham_cungloai($selected_product['id'], $iddm); // Sản phẩm cùng danh mục

$i = 0;
$columns = 4; // Số cột mong muốn
foreach ($products as $sp) {
    extract($sp);
    if ($i % $columns == 0) {
        echo '<div class="row">';
    }

    if (($i == 2) || ($i == 5) || ($i == 8)) {
        $mr = "";
    } else {
        $mr = "mr";
    }
    $linksp = "index.php?act=sanphamct&idsp=" . $id;
    $img = $img_path . $img;
    echo '   
        <div class="col-md-' . (12 / $columns) . ' ' . $mr . '">
            <div class="card" style="width: 18rem;">
                <a class="item_name" href="' . $linksp . '"><img src="' . $img . '" class="card-img-top" width="50" height="300" alt=""></a>
                <div class="card-body">
                    <a class="text-center text-dark-emphasis" href="' . $linksp . '">' . $name . '</a>
                    <p class="text-danger text-center">Giá: ' . $price . ' đ</p>  
                    <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="' . $id . '">
                        <input type="hidden" name="name" value="' . $name . '">
                        <input type="hidden" name="img" value="' . $img . '">
                        <input type="hidden" name="price" value="' . $price . '">
                        <input type="submit" name="addtocart" class="btn btn-primary" value="Thêm giỏ hàng">
                        <input type="submit" name="addtocart" class="btn btn-danger" value="Mua ngay">
                    </form>   
                </div>
            </div>
        </div>';
    $i++;

    if ($i % $columns == 0 || $i == count($products)) {
        echo '</div> <br>';
    }
}
?>
</div>