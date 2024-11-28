<main class="catalog  mb">
    <div class="boxleft d-flex justify-content-center">
        <div class="mb">
            <br>
            <div class="text-center text-primary">
                <h2>CẬP NHẬT TÀI KHOẢN</h2>
            </div>
            <div class="box_content mx-auto">
                <?php
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }    
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <label for="" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" value="<?=$email?>">
                    <label for="" class="form-label">Username:</label>
                    <input type="text" class="form-control" name="user" value="<?=$user?>">
                    <label for="" class="form-label">Password:</label>
                    <input type="password" class="form-control" name="pass" value="<?=$pass?>">
                    <label for="" class="form-label">Address:</label>
                    <input type="text" class="form-control" name="address" value="<?=$address?>">
                    <label for="" class="form-label">Tel:</label>
                    <input type="text" class="form-control" name="tel" value="<?=$tel?>"><br>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" class="btn btn-info" value=" Cập nhật" name="capnhat">
                    <input type="reset" class="btn btn-primary" value="Nhập lại">
                </form>
                <h2 class="thongbao">
                    <?php
                        if(isset($thongbao)&&($thongbao)!=""){
                            echo $thongbao;
                        }
                    ?>
                </h2>
            </div>
        </div>
    </div>
</main>
