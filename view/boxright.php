<style>
a {
    text-decoration: none;
    color: #495057;
}

.card {
    margin: 10px auto;
}

.card img {
    border-radius: 8px;
    object-fit: cover;
}

.btn {
    width: 48%;
    margin: 1%;
}

.box_content {
    padding: 20px;
}
</style>

<!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
<div class="text-center">
    <div class="badge text-bg-success text-wrap">SẢN PHẨM TƯƠNG TỰ</div>
</div>
<br>
<div class="box_content">
    <?php
    $iddm = 1; // ID danh mục của sản phẩm
    $selected_product = loadone_sanpham($id); // Sản phẩm đang xem chi tiết

    // Kiểm tra sản phẩm có tồn tại
    if ($selected_product && isset($selected_product['id'])) {
        $products = load_sanpham_cungloai($selected_product['id'], $iddm); // Lấy sản phẩm cùng loại

        // Kiểm tra nếu có sản phẩm tương tự
        if (!empty($products)) {
            $i = 0;
            $columns = 4; // Số cột mong muốn

            foreach ($products as $sp) {
                extract($sp);

                // Bắt đầu dòng mới
                if ($i % $columns == 0) {
                    echo '<div class="row">';
                }

                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $img = $img_path . $img;

                echo '
                <div class="col-md-' . (12 / $columns) . '">
                    <div class="card" style="width: 18rem;">
                        <a href="' . $linksp . '">
                            <img src="' . $img . '" class="card-img-top" alt="" style="height: 300px;">
                        </a>
                        <div class="card-body">
                            <a class="text-center text-dark-emphasis d-block" href="' . $linksp . '">' . $name . '</a>
                            <p class="text-danger text-center">Giá: ' . number_format($price) . ' đ</p>  
                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="' . $id . '">
                                <input type="hidden" name="name" value="' . $name . '">
                                <input type="hidden" name="img" value="' . $img . '">
                                <input type="hidden" name="price" value="' . $price . '">
                                <input type="submit" name="addtocart" class="btn btn-primary btn-sm" value="Thêm giỏ hàng">
                                <input type="submit" name="addtocart" class="btn btn-danger btn-sm" value="Mua ngay">
                            </form>   
                        </div>
                    </div>
                </div>';

                $i++;

                // Kết thúc dòng
                if ($i % $columns == 0 || $i == count($products)) {
                    echo '</div>';
                }
            }
        } else {
            echo "<p class='text-center text-danger'>Hiện không có sản phẩm tương tự.</p>";
        }
    } else {
        echo "<p class='text-center text-danger'>Sản phẩm không tồn tại.</p>";
    }
    ?>
</div>