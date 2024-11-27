<section id="contai">
    <?php
        if(is_array($bill)){
            extract($bill);
        }
    ?>
    <div class="container">
        <header>
            <h1>Cập nhập đơn hàng</h1>
        </header>
        <br>
        <form class="row g-3" action="index.php?act=updatebill" method="POST">
            <div class="col-md-6">
                <div class="col-3">
                    <label>Trạng thái</label>
                    <select class="form-select" aria-label="Default select example" name="bill_status">
                        <option value="0" >Đơn hàng mới</option>
                        <option value="1" >Đang xử lý</option>
                        <option value="2" >Đang giao</option>
                        <option value="3" >Đã giao</option>
                        <option value="4" >Hủy đơn hàng</option>
                    </select>
                </div><br>

                <div class="g-3">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input class="btn btn-primary col-md-5" name="capnhat" type="submit" value="CẬP NHẬT">
                </div>
                
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;           
            ?>
        </form>    
    </div>
</section>
