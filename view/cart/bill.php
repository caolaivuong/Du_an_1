<main class="">
    <div class="boxleft">
        <form action="index.php?act=billconfirm" method="post">
            <div class="text-center">
                <h2>THÔNG TIN KHÁCH HÀNG</h2>
            </div>
            <?php
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user']['user'];
                $address = $_SESSION['user']['address'];
                $email = $_SESSION['user']['email'];
                $tel = $_SESSION['user']['tel'];
            } else {
                $user = "";
                $address = "";
                $email = "";
                $tel = "";
            }
            ?>
            <div class="row">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <label class="form-label">Tên khách hàng</label>
                        <td><input type="text" class="form-control ct-input border border-primary-subtle" size="25"
                                name="user" value="<?= $user ?>"></td>
                        <div class="text-danger">
                            <?php
                            if (isset($userErr) && $userErr != "") {
                                echo $userErr;
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <label class="form-label">Địa chỉ</label>
                        <td><input type="text" class="form-control ct-input border border-primary-subtle" name="address"
                                value="<?= $address ?>"></td>
                        <div class="text-danger">
                            <?php
                            if (isset($addressErr) && $addressErr != "") {
                                echo $addressErr;
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <label class="form-label">Email</label>
                        <td><input type="text" class="form-control ct-input border border-primary-subtle" name="email"
                                value="<?= $email ?>"></td>
                        <div class="text-danger">
                            <?php
                            if (isset($emailErr) && $emailErr != "") {
                                echo $emailErr;
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <label class="form-label">Số điện thoại</label>
                        <td><input type="text" class="form-control ct-input border border-primary-subtle" name="tel"
                                value="<?= $tel ?>"></td>
                        <div class="text-danger">
                            <?php
                            if (isset($telErr) && $telErr != "") {
                                echo $telErr;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="text-center">PHƯƠNG THỨC THANH TOÁN</div><br>
            <div class="box_content text-center ">
                <div class="ct-radio">
                    <td><input type="radio" class="form-check-input" value="0" name="pttt" checked>
                        <label class="form-check-label" for="flexRadioDefault1"> Thanh toán khi nhận hàng </label>
                    </td>
                    <td> <input type="radio" class="form-check-input" value="1" name="pttt">
                        <label class="form-check-label" for="flexRadioDefault1"> Thanh toán ngay </label>
                    </td>
                </div>

            </div><br>

            <div class="container">
                <div class="text-center">THÔNG TIN GIỎ HÀNG</div>
                <div class="text-center">
                    <table class="table">
                        <thead>
                            <?php
                            viewcart(1);
                            ?>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="container text-center">
                <!-- <input type="hidden" name="iduser" value="<?= $iduser ?>">
                <input type="hidden" name="user" value="'<?= $user ?>'">
                <input type="hidden" name="adress" value="'<?= $address ?>'">
                <input type="hidden" name="email" value="'<?= $email ?>'">
                <input type="hidden" name="tel" value="'<?= $tel ?>'">
                <input type="hidden" name="pttt" value="'<?= $pttt ?>'">
                <input type="hidden" name="ngaydathang" value="'<?= $ngaydathang ?>'">
                <input type="hidden" name="tongdonhang" value="'<?= $tongdonhang ?>'"> -->
                <a href="index.php"><input type="button" class="btn btn-secondary" value="Về trang chủ"></a>
                <input type="submit" class="btn btn-info" value="Xác nhận thanh toán" name="dongydathang">
            </div><br>

        </form>

    </div>

</main>