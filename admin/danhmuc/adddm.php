<section>  
    <header>
        <h1>Thêm danh mục mới</h1>
    </header>
    <form action="index.php?act=adddm" method="post">
        <label for="ten-loai">Tên loại:</label>
        <input type="text" id="tenloai" name="tenloai" placeholder="Nhập tên loại">
        <?php if(isset($thongbao1['tenloai'])) echo "<span style='color:red;'>{$thongbao1['tenloai']}</span>" ?>

        <div class="actions mx-auto p-2" style="width: 350px;">
            <div class="row justify-content-between">
                <div class="col-4">
                    <input type="submit" name="themmoi" value="Thêm mới"  class="btn btn-primary" style="width: 100px;">
                </div>

                <div class="col-4">
                    <input type="reset" value="Nhập lại" style="width: 100px;"  class="btn btn-secondary" style="width: 100px;">
                </div>
                <div class="col-4">
                    <a href="index.php?act=listdm" class="btn" style="width: 100px;">Danh sách</a>
                </div>
            </div>
        </div>
    </form>
    <?php 
        if(isset($thongbao)&&($thongbao!=""))
        echo $thongbao;
    ?>  
</section>
