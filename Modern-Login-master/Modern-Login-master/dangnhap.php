<main class="catalog  mb ">
    <div class="boxleft">
        <div class="  mb">
            <div class="form-container sign-in">
                <div class="container">
                    <form class="form-control" method="post" action="index.php?act=dangnhap"
                        <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
                        <h1 class="text-center">ĐĂNG NHẬP</h1>
                        <div class="social-icons text-center">
                            <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                        <div class="text-center">Hoặc sử dụng tài khoản đã đăng ký</div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <label class="form-label">Username:</label>
                                <input type="text" name="user"
                                    class="form-control ct-input border border-primary-subtle" placeholder="Username">
                                <div class="text-danger">
                                    <?php
                                    if (isset ($userErr) && ($userErr) != "") {
                                        echo $userErr;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <label class="form-label">Password:</label>
                                <input type="password" name="pass"
                                    class="form-control ct-input border border-primary-subtle" placeholder="Password">
                                <div class="text-danger">
                                    <?php
                                    if (isset ($passErr) && ($passErr) != "") {
                                        echo $passErr;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">

                            <input type="submit" value="Đăng nhập" name="dangnhap" class="btn btn-success mt-2">
                        </div>
                        <h2 class="text-center text-danger m-2">
                            <?php
                            if (isset ($thongbao) && ($thongbao) != "") {
                                echo $thongbao;
                            }
                            ?>
                        </h2>
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <h1 class="text-center">chưa có tài khoản ? Đăng ký ngay!</h1>
                            </div>
                            <div class="col-4 text-center">
                                <p>hãy dăng ký để được truy cập đầy đủ chức năng</p>
                                <a href="index.php?act=dangky" class=" btn btn-success ">Đăng ký</a>
                            </div>
                        </div>
                        <?php

                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>