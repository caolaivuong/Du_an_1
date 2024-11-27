<script>
    function validateForm() {
        // Lấy giá trị của các trường
        var iddm = document.getElementsByName('iddm')[0].value;
        var tensp = document.getElementsByName('tensp')[0].value;
        var giasp = document.getElementsByName('giasp')[0].value;
        var hinh = document.getElementsByName('hinh')[0].value;
        var mota = document.getElementsByName('mota')[0].value;

        // Kiểm tra xem các trường đã được điền đầy đủ chưa
        if (iddm == "0") {
            alert("Vui lòng chọn danh mục sản phẩm.");
            return false;
        }
        if (tensp.trim() == "") {
            alert("Vui lòng nhập tên sản phẩm.");
            return false;
        }
        if (giasp.trim() == "") {
            alert("Vui lòng nhập giá sản phẩm.");
            return false;
        }
        if (isNaN(giasp) || giasp <= 0) {
            alert("Giá sản phẩm phải là một số dương.");
            return false;
        }
        if (hinh.trim() == "") {
            alert("Vui lòng chọn hình ảnh sản phẩm.");
            return false;
        }
        if (mota.trim() == "") {
            alert("Vui lòng nhập mô tả cho sản phẩm.");
            return false;
        }

        return true; // Nếu không có lỗi, cho phép gửi biểu mẫu đi
    }
</script>

<section>
    <header>
        <h1>Thêm sản phẩm mới</h1>
    </header>

    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <div>
            <label for="se">Chọn danh mục</label>
            <select name="iddm">
                <option value="0" selected>Tất cả</option>
                <?php foreach($listdanhmuc as $danhmuc): ?>
                    <option value="<?= $danhmuc['id'] ?>"><?= $danhmuc['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>
        <label for="ten-loai">Tên sản phẩm:</label>
        <input type="text" id="ten-loai" name="tensp"><br>

        <label for="gia">Giá sản phẩm:</label>
        <input type="number" id="price" name="giasp"><br>

        <label for="hinh">Hình sản phẩm:</label>
        <input type="file" name="hinh"><br>

        <label for="mota">Mô tả sản phẩm:</label><br>
        <textarea name="mota" cols="100" rows="10"></textarea><br>

        <div class="actions mx-auto p-2" style="width: 350px;">
            <div class="row justify-content-between">
                <div class="col-4">
                    <input type="submit" name="themmoi" value="Thêm mới"  class="btn btn-primary" style="width: 100px;">
                </div>

                <div class="col-4">
                    <input type="reset" value="Nhập lại" style="width: 100px;"  class="btn btn-secondary" style="width: 100px;">
                </div>
                <div class="col-4">
                    <a href="index.php?act=listsp" class="btn" style="width: 100px;">Danh sách</a>
                </div>
            </div>
        </div>

        <?php 
            if(isset($thongbao)&&($thongbao!=""))
                echo $thongbao;
        ?>

    </form>
</section>
