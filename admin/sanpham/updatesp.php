<?php 
    // Giải nén dữ liệu sản phẩm thành các biến riêng biệt
    if(is_array($sanpham)){
        extract($sanpham);
    }

    // Đường dẫn đến hình ảnh sản phẩm
    $hinhpath="../upload/".$img;
    // Kiểm tra xem hình ảnh có tồn tại không
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='80'>";  // Hiển thị hình ảnh
    }else {
        $hinh = "no photo";  // Hiển thị "no photo" nếu không có hình ảnh
    }
?>

<header>
    <h1>Thêm sản phẩm mới</h1>
</header>

<section>
    <!-- Form cập nhật sản phẩm -->
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">

        <!-- Chọn danh mục sản phẩm -->
        <label for="se">Chọn danh mục</label>
        <select name="iddm">
            <option value="<?=$iddm?>" selected>Tất cả</option>
            <?php foreach($listdanhmuc as $danhmuc): ?>
            <option value="<?php echo $danhmuc['id']; ?>"
                <?php echo ($sanpham['iddm'] == $danhmuc['id']) ? ' selected' : ''; ?>>
                <?php echo $danhmuc['name']; ?>
            </option>
            <?php endforeach; ?>
        </select>

        <br><br>

        <label for="ten-loai">Tên sản phẩm:</label>
        <input type="text" name="tensp" value="<?=$name?>"><br><br>

        <label for="gia">Giá sản phẩm:</label>
        <input type="number" name="giasp" value="<?=$price?>"><br><br>

        <label for="hinh">Hình sản phẩm:</label>
        <input type="file" name="hinh"><?=$hinh?><br><br>

        <label for="mota">Mô tả sản phẩm:</label><br>
        <textarea name="mota" cols="100" rows="10"><?=$mota?></textarea><br><br>

        <div class="actions mx-auto p-2" style="width: 350px;">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" name="capnhat" value="Cập nhật" class="btn btn-primary">
            <input type="reset" value="Nhập lại" class="btn btn-secondary">
            <a href="index.php?act=listsp" class="btn">Danh sách</a>
        </div>

    </form>
</section>