<?php 
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../upload/".$img;
        if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath
            ."' height='80'>";
        }else {
            $hinh = "no photo";
        }
?>
<header>
        <h1>Thêm sản phẩm mới</h1>
    </header>

    <section>
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <label for="se">Chọn danh mục</label>
        <select name="iddm">
                    <option  value="<?=$iddm?>"  selected>Tất cả</option>
                    <?php foreach($listdanhmuc as $danhmuc): ?>
                    <option value="<?php echo $danhmuc['id']; ?>"<?php echo ($sanpham['iddm'] == $danhmuc['id']) ? ' selected' : ''; ?>><?php echo $danhmuc['name']; ?></option>
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
            <div class="row justify-content-between">
                <input type="hidden" name="id" id="" value="<?=$id?>">
                <div class="col-4">
                    <input type="submit" name="capnhat" value="Cập nhật"  class="btn btn-primary" style="width: 100px;">
                </div>

                <div class="col-4">
                    <input type="reset" value="Nhập lại" style="width: 100px;"  class="btn btn-secondary" style="width: 100px;">
                </div>
                <div class="col-4">
                    <a href="index.php?act=listsp" class="btn" style="width: 100px;">Danh sách</a>
                </div>
            </div>
        </div>

        </form>
    </section>

