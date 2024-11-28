<?php
session_start();
include "sanpham.php";
include "pdo.php";
include "../global.php";
$idsp = $_REQUEST['idsp'];
$slmoi = $_REQUEST['slmoi'];
$_POST['soluong'] = $slmoi;
$_SESSION['mycart'][$idsp]['soluong'] = $_POST['soluong'];
if (isset($idsp) && $idsp > 0) {
    $sanpham = loadone_sanpham($idsp);
    $sanphamcl = load_sanpham_cungloai($idsp, $sanpham['iddm']);
}
?>
<input type="hidden" name="" value="">
<div class="text-center">
    <?php
    extract($sanpham);
    ?>
</div>

<div>
    <?php
    if (isset($_POST['soluong']) && isset($_POST['soluong']) > 0) {
        $soluong = $_POST['soluong'];
    } else {
        $soluong = 1;
    }
    $hinh = $img_path . $img;
    echo "<div id='ctsp'>";
    echo "<div class='row'>";
    echo "<div class='col-5'>";
    echo "<img src='$hinh' width='400' height='300px'>";
    echo "</div>";
    echo "<div class='col-6'>";
    echo "<h2 class='fw-bold'> $name</h2>";
    echo " <h4 class='text-danger'>$price đ</h4>";
    echo ' <strong> Size :</strong> <span id="selected-size"></span>';
    echo '<div class="m-2 quantity-container">
         <button class="btn quantity-btn" onclick="minus(this)">-</button>
         <input type="text" name="" id="" size="1" class="form-control text-center quantity-amount" style="width: 50px;" value="' . $soluong . '" onkeyup="kiemtrasoluong(this)">
         <button class="btn quantity-btn" onclick="plus(this)">+</button>
         <input type="hidden" name="" value="' . $id . '" >
         
         </div>';
    echo "<p class='fw-semibold'>$mota</p>";
    echo '<form action="index.php?act=addtocart" method="post">
         <input type="hidden" name="id" value="' . $id . '">
         <input type="hidden" name="name" value="' . $name . '">
         <input type="hidden" name="img" value="' . $img . '">
         <input type="hidden" name="price" value="' . $price . '">
         <input type="submit" name="addtocart" class="btn btn-primary" value="Thêm giỏ hàng">
     </form>';
    echo "</div>";
    echo "<div class='col'>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    ?>
</div>