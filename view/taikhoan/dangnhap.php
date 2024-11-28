<main class="catalog  mb ">
    <div class="boxleft">
        <div class="  mb">
            <div class="container">
                <div class="box_title text-center">
                    ĐĂNG NHẬP TÀI KHOẢN
                </div>
                <div class="box_content">
                    <form action="index.php?act=dangnhap" method="post">
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <label for="">Username:</label>
                                <input type="text" name="user"
                                    class="form-control ct-input border border-primary-subtle">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <label class="form-label">Password:</label>
                                <input type="password" name="pass"
                                    class="form-control ct-input border border-primary-subtle"><br>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Đăng nhập" name="dangnhap" class="btn btn-info mt-2">
                            <a href="index.php?act=dangky" class="btn btn-info mt-2">Đăng ký</a>
                        </div>
                    </form>

                    <div class="box_content">
                        <?php
                        if (isset ($thongbao) && ($thongbao) != "") {
                            echo $thongbao;
                        }
                        ?>
                        </h2>

                    </div>
                </div>
            </div>

        </div>


</main>