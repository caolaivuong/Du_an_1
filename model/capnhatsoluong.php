<?php
session_start();
include "cart.php";
include "../global.php";
$idsp = $_REQUEST['idsp'];
$slmoi = $_REQUEST['slmoi'];
// echo "Received idsp: " . $idsp . "<br>";
// echo "Received slmoi: " . $slmoi . "<br>";
if (count($_SESSION['mycart']) > 0) {
    $_SESSION['mycart'][$idsp]["soluong"] = $slmoi;
}
?>
<style>
    span {

        position: relative;
        left: 100vh;

    }
</style>
<main class="catalog mb">
    <div id="cart">
        <div class="boxleft">
            <div class="">

                <div class="box_content container">
                    <table class="table table-hover">
                        <?php
                        viewcart(1);
                        ?>
                    </table>
                </div>
            </div>
            <div class="container text-center">
                <a href="index.php"><input type="button" class="btn btn-secondary" value="Về trang chủ"></a>
                <a href="index.php?act=bill"><input type="button" class="btn btn-info" value="Thanh Toán"></a>
                <a href="index.php?act=delcart"><input type="button" class="btn btn-danger" value="Xóa giỏ hàng"></a>
            </div>
            <br>
        </div>
    </div>
</main>