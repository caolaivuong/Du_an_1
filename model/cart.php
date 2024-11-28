<style>
div.grid {
    display: flex;
    align-items: center;
    justify-content: center;
}

.quantity-btn {
    background-color: #f1f1f1;
    border: 1px solid #ccc;
    padding: 5px;
    cursor: pointer;
}

.quantity-amount {
    text-align: center;
    margin: 0 5px;
    width: 50px;
}
</style>
<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoasp_th = '<th>Tùy chọn</th>';
        $xoasp_td2 = '<td></td>';
    } else {
        $xoasp_th = '';
        $xoasp_td2 = '';
    }
    echo '<tr class="text-center">
                <th>Hình ảnh</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                ' . $xoasp_th . '
            </tr>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart["img"];
        $thanhtien = $cart["price"] * $cart["soluong"];
        $tong += $thanhtien;
        if ($del == 1) {
            $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>';
        } else {
            $xoasp_td = '';
        }
        echo '
                <tr style="text-align:center">
                    <td><img src="' . $hinh . '" alt="" height="80px"></td>
                    <td>' . $cart["name"] . '</td>
                    <td>' . $cart["price"] . ' đ</td>
                    <td>
                    <div class="grid row offset-2">
                    <button class="btn quantity-btn" style="width: 30px;" onclick="minus(this)">-</button>
                    <input type="text" name="" id="" size="1" class="form-control text-center quantity-amount" style="width: 50px;" value="' . $cart['soluong'] . '" onkeyup="kiemtrasoluong(this)">
                    <button class="btn quantity-btn" style="width: 30px;" onclick="plus(this)">+</button>
                    <input type="hidden" name="" value="' . $cart["id"] . '">
                    </div>
                    </td>
                    <td>' . $thanhtien . ' đ</td>
                    ' . $xoasp_td . '
                </tr>';
        $i += 1;
    }
    echo '<tr style="text-align:center">
                <td colspan="4" >Tổng đơn hàng</td>
                <td>' . $tong . ' đ</td>
                ' . $xoasp_td2 . '
            </tr>';
}
function bill_chi_tiet($idbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    echo '<tr>
                    <th>Hình ảnh</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>';
    foreach ($idbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];

        echo '
                    <tr style="text-align:center">
                        <td><img src="' . $hinh . '" alt="" height="80px"></td>
                        <td>' . $cart['name'] . '</td>
                        <td>' . $cart['price'] . ' đ</td>
                        <td>' . $cart['soluong'] . '</td>
                        <td>' . $cart['thanhtien'] . ' đ</td>
                    </tr>';
        $i += 1;
    }
    echo '<tr style="text-align:center">
                    <td colspan="4" >Tổng đơn hàng</td>
                    <td>' . $tong . ' đ</td>
                </tr>';
}
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $thanhtien = $cart['price'] * $cart['soluong'];
        $tong += $thanhtien;
    }
    return $tong;
}
function insert_bill($iduser, $user, $address, $email, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "INSERT INTO bill(iduser,bill_user,bill_address,bill_email,bill_tel,bill_pttt,ngaydathang,total) VALUES('$iduser','$user','$address','$email','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) VALUES('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "SELECT * FROM bill WHERE id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_bill($kyw = "", $iduser = 0)
{
    $sql = "SELECT * FROM bill WHERE 1";
    if ($iduser > 0)
        $sql .= " AND iduser=" . $iduser;
    if ($kyw != "")
        $sql .= " AND id LIKE '%" . $kyw . "%'";
    $sql .= " ORDER BY id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadall_bill_home($iduser)
{
    $sql = "SELECT * FROM bill WHERE iduser=" . $iduser;
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadall_cart_count($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function delete_bill($id)
{
    $sql = "DELETE FROM bill WHERE id=" . $id;
    pdo_execute($sql);
}
function update_bill($id, $bill_status)
{
    $sql = "UPDATE bill SET bill_status='" . $bill_status . "' WHERE id=" . $id;
    pdo_execute($sql);
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang xử lý";
            break;
        case '2':
            $tt = "Đang giao";
            break;
        case '3':
            $tt = "Đã giao";
            break;
        case '4':
            $tt = "Hủy đơn hàng";
            break;
        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}
function get_pttt($n)
{
    switch ($n) {
        case '0':
            $tt = "Thanh toán khi nhận hàng";
            break;
        case '1':
            $tt = "Thanh toán online";
            break;
        default:
            $tt = "Thanh toán khi nhận hàng";
            break;
    }
    return $tt;
}
function update_bill_status($id, $new_status)
{
    $sql = "UPDATE bill SET bill_status = $new_status WHERE id = $id";
    pdo_execute($sql);
}

function loadall_thongke()
{
    $sql = "SELECT * FROM danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minpricce, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
    $sql .= " form sanpham left join danhmuc on danhmuc.id = sanpham.iddm";
    $sql .= " group by danhmuc.id ORDER BY danhmuc.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
?>
<script src="/jquery-3.4.1.min.js"></script>
<script>
function plus(x) {
    var cha = x;
    var slcu = cha.previousSibling.previousSibling;
    var slmoi = parseInt(slcu.value) + 1;
    var idsp = cha.nextSibling.nextSibling.value;
    if (slmoi < 11) {
        slcu.value = slmoi;
        $.post("/model/capnhatsoluong.php", {
                "idsp": idsp,
                "slmoi": slmoi,
            },
            function(data, textStatus, jqXHR) {
                console.log(data);
                document.getElementById("cart").innerHTML = data;
            },
        ).fail(function(jqXHR, textStatus, errorThrown) {
            // Error callback function
            console.log("AJAX request failed:", errorThrown);
            // Perform error handling actions here, such as displaying an error message to the user
        });
    } else {
        alert("Không thể lớn hơn 10")
    }

}

function minus(x) {
    var cha = x;
    var slcu = cha.nextSibling.nextSibling;
    var slmoi = parseInt(slcu.value) - 1;
    var idsp = cha.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.value;
    if (slmoi > 0) {
        slcu.value = slmoi;
        $.post("/model/capnhatsoluong.php", {
                "idsp": idsp,
                "slmoi": slmoi,
            },
            function(data, textStatus, jqXHR) {
                console.log(data);
                document.getElementById("cart").innerHTML = data;
            },
        ).fail(function(jqXHR, textStatus, errorThrown) {
            // Error callback function
            console.log("AJAX request failed:", errorThrown);
            // Perform error handling actions here, such as displaying an error message to the user
        });
    } else {
        alert("Không thể nhỏ hơn 1")
    }
}
</script>