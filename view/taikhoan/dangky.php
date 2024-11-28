<main class="catalog  mb ">
    <div class="boxleft">
        <div class="  mb">
            <div class="container ">
                <div class="box_title text-center">
                    ĐĂNG KÝ TÀI KHOẢN
                </div>
                <div class="box_content ">
                    <form action="index.php?act=dangky" method="post" >
                        <div class="row justify-content-center">
                            <div class="col-4 ">
                                <label class="form-label">Email:</label>
                                <input type="email" name="email"
                                    class="form-control ct-input border border-primary-subtle " >
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <label class="form-label">Username:</label>
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
                            <input type="submit" value="Đăng ký" name="dangky" class="btn btn-info mt-2">
                            <a href="index.php?act=dangnhap" class="btn btn-info mt-2">Đăng nhập</a>
                        </div>
                    </form>
                    <h2 class="thongbao">
                        <?php
                        if (isset($thongbao) && ($thongbao) != "") {
                            echo $thongbao;
                        }
                        ?>
                    </h2>

                </div>
            </div>
        </div>


    </div>


</main>