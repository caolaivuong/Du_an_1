<?php 
    if(is_array($dm)){
        extract($dm);
    }
?>
<header>
    <h1>Cập nhật danh mục mới</h1>
</header>

<section>
    <form action="index.php?act=updatedm" method="post">
        <label for="ma-loai">Mã loại:</label>
        <input type="text" name="maloai">

        <label for="ten-loai">Tên loại:</label>
        <input type="text" name="tenloai" value="<?php if(isset($dm['name'])) echo $dm['name']; ?>">

        <div class="actions mx-auto p-2" style="width: 350px;">
            <div class="row justify-content-between">
                <input type="hidden" name="id" value="<?php if(isset($id)) echo $id;?>">
                <div class="col-4">
                    <input type="submit" name="capnhat" value="Cập nhật"  class="btn btn-primary" style="width: 100px;">
                </div>

                <div class="col-4">
                    <input type="reset" value="Nhập lại" style="width: 100px;"  class="btn btn-secondary" style="width: 100px;">
                </div>
                <div class="col-4">
                    <a href="index.php?act=listdm" class="btn" style="width: 100px;">Danh sách</a>
                </div>
            </div>
        </div>
        
        <?php 
        if(isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
        ?>
    </form>
</section>
