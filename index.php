<?php
ob_start();
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/taikhoan.php";
include "model/cart.php";

include "view/header.php";
include "global.php";

if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();


if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "sanpham":
            if (isset($_POST['keyword']) && $_POST['keyword'] > 0) {
                $kyw = $_POST['keyword'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;

       case "sanphamct":
    if (isset($_POST['guibinhluan'])) {
        $noidung = $_POST['noidung'];
        $iduser = $_SESSION['user']['id']; // Lấy ID user từ session
        $idpro = $_GET['idsp']; // Lấy ID sản phẩm từ URL
        $ngaybinhluan = date('Y-m-d H:i:s'); // Lấy thời gian hiện tại
        
       if (!empty($noidung) && $iduser > 0 && $idpro > 0) {
    insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
    $successMessage = "Bình luận của bạn đã được gửi!";
} else {
    $error = "Vui lòng nhập nội dung bình luận hợp lệ!";
}

    }

    if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
        $sanpham = loadone_sanpham($_GET['idsp']);
        $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
        include "view/chitietsanpham.php";
    } else {
        include "view/home.php";
    }
    break;

        // case 'capnhatctsp':
        //     ob_end_clean();
        //     $idsp = $_REQUEST['idsp'];
        //     $slmoi = $_REQUEST['slmoi'];
        //     $_POST['soluong'] = $slmoi;
        //     if (isset($idsp) && $idsp > 0) {
        //         $sanpham = loadone_sanpham($idsp);
        //         $sanphamcl = load_sanpham_cungloai($idsp, $sanpham['iddm']);
        //         // $binhluan = loadall_binhluan($_GET['idsp']);
        //         include "view/chitietsanpham.php";
        //     }

        //     break;
        case 'dangky':
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                $checkemail = checkemail($email);
                $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
                if (empty($user)) {
                    $userErr = "* Chưa điền Username";
                } elseif (is_array($checkuser)) {
                    $user = $checkuser;
                    $userErr = "* Username đã tồn tại";
                }
                if (empty($pass)) {
                    $passErr = "* Chưa điền Password";
                }
                if (empty($email)) {
                    $emailErr = "* Chưa điền Email";
                } elseif (!preg_match($regex, $email)) {
                    $emailErr = "Vui lòng nhập địa chỉ email hợp lệ";
                } elseif (is_array($checkemail)) {
                    $email = $checkemail;
                    $emailErr = "* Email đã tồn tại";
                }
                if (empty($userErr) && empty($emailErr) && empty($passErr)) {
                    insert_taikhoan($email, $user, $pass);
                    header('Location: index.php?act=dangnhap');
                }
            }
            include "Modern-Login-master/Modern-Login-master/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('Location: index.php');
                } elseif (empty($user)) {
                    $userErr = "* Chưa điền Username";
                } else {
                    $thongbao = "Tài khoản hoặc mật khẩu không đúng. Vui lòng kiểm tra hoặc đăng ký!";
                }
                if (empty($pass)) {
                    $passErr = "* Chưa điền Password";
                }
            }
            include "Modern-Login-master/Modern-Login-master/dangnhap.php";
            break;
        case 'user':
            include "view/taikhoan/user.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                /*
                $checkuser = checkuser($user, $pass);
                $checkemail = checkemail($email);
                $checkaddress = checkaddress($address);
                $checktel = checktel($tel);
                $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
                if (empty ($user)) {
                    $userErr = "* Chưa điền Username";
                }elseif (is_array($checkuser)) {
                    $user = $checkuser;
                    $userErr = "* Username đã tồn tại";
                }
                if (empty ($pass)) {
                    $passErr = "* Chưa điền Password";
                }
                if (empty ($email)) {
                    $emailErr = "* Chưa điền Email";
                }elseif (!preg_match($regex, $email)) {
                    $emailErr = "Vui lòng nhập địa chỉ email hợp lệ";
                }elseif (is_array($checkemail)) {
                    $email = $checkemail;
                    $emailErr = "* Email đã tồn tại";
                }
                if (empty ($address)) {
                    $addressErr = "* Chưa điền Address";
                }elseif (is_array($checkaddress)) {
                    $address = $checkaddress;
                    $addressErr = "* Address đã tồn tại";
                }
                if (empty ($tel)) {
                    $telErr = "* Chưa điền Tel";
                }elseif (is_array($checktel)) {
                    $tel = $checktel;
                    $telErr = "* Tel đã tồn tại";
                }
                if (empty ($userErr) && empty ($emailErr) && empty ($passErr)) {
                   
                    header('Location: index.php?act=dangnhap');
                }
                */
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                header('Location: index.php?act=user');
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
      case 'addtocart':
    if (!isset($_SESSION['user'])) {  // Kiểm tra nếu chưa đăng nhập
        header('Location: index.php?act=dangnhap');  // Chuyển hướng đến trang đăng nhập
        exit;
    }
    
    if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $img = $_POST['img'];
        $price = $_POST['price'];
        $soluong = isset($_POST['soluong']) ? $_POST['soluong'] : 1; // Lấy số lượng từ form, mặc định là 1 nếu không có

        // Kiểm tra nếu sản phẩm đã có trong giỏ, thì tăng số lượng lên
        if (isset($_SESSION['mycart'][$id])) {
            $_SESSION['mycart'][$id]['soluong'] += $soluong;  // Tăng số lượng của sản phẩm trong giỏ
        } else {
            // Nếu chưa có, tạo mới sản phẩm trong giỏ
            $sp = [
                "name" => $name,
                "img" => $img,
                "price" => $price,
                "soluong" => $soluong,
                "id" => $id
            ];
            $_SESSION['mycart'][$id] = $sp;  // Thêm sản phẩm vào giỏ
        }
    }
    include "view/cart/viewcart.php";  // Hiển thị giỏ hàng
    break;

case 'updatecart':
    if (isset($_GET['id']) && isset($_POST['action'])) {
        $id = $_GET['id'];
        $action = $_POST['action'];

        // Giới hạn số lượng sản phẩm trong giỏ hàng
        $maxQuantity = 10;

        if (isset($_SESSION['mycart'][$id])) {
            $soluong = $_SESSION['mycart'][$id]['soluong'];

            if ($action == 'increase') {
                // Tăng số lượng sản phẩm, kiểm tra giới hạn
                if ($soluong < $maxQuantity) {
                    $_SESSION['mycart'][$id]['soluong']++;
                    unset($_SESSION['mycart'][$id]['error']); // Xóa lỗi (nếu có)
                } else {
                    $_SESSION['mycart'][$id]['error'] = "Không thể thêm quá $maxQuantity sản phẩm!";
                }
            } elseif ($action == 'decrease') {
                // Giảm số lượng sản phẩm, không nhỏ hơn 1
                if ($soluong > 1) {
                    $_SESSION['mycart'][$id]['soluong']--;
                    unset($_SESSION['mycart'][$id]['error']); // Xóa lỗi (nếu có)
                } else {
                    $_SESSION['mycart'][$id]['error'] = "Số lượng không được nhỏ hơn 1!";
                }
            }
        }
    }

    // Sau khi cập nhật, hiển thị lại giỏ hàng
    include "view/cart/viewcart.php"; // Đảm bảo file này có giao diện hiển thị giỏ hàng sau khi cập nhật
    break;


case 'delcart':
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng hay không
        if (isset($_SESSION['mycart'][$id])) {
            unset($_SESSION['mycart'][$id]);  // Xóa sản phẩm khỏi giỏ hàng
        }
    }
    // Sau khi xóa, hiển thị lại giỏ hàng
    include "view/cart/viewcart.php";  // Hiển thị lại giỏ hàng sau khi xóa
    break;

        case 'viewcart':
            include "view/cart/viewcart.php";
            break;
       case 'bill':
    if (!isset($_SESSION['user'])) {  // Kiểm tra nếu chưa đăng nhập
        header('Location: index.php?act=dangnhap');  // Chuyển hướng đến trang đăng nhập
        exit;
    }

    include "view/cart/bill.php";
    break;

       case 'billconfirm':
    if (!isset($_SESSION['user'])) {  // Kiểm tra nếu chưa đăng nhập
        header('Location: index.php?act=dangnhap');  // Chuyển hướng đến trang đăng nhập
        exit;
    }

    if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
        if (isset($_SESSION['user'])) {
            $iduser = $_SESSION['user']['id'];
        } else {
            $iduser = 0;
        }
        $img_path;
        $user = $_POST['user'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $pttt = $_POST['pttt'];
        $ngaydathang = date('h:i:sa d/m/Y');
        $tongdonhang = tongdonhang();
        $idbill = insert_bill($iduser, $user, $address, $email, $tel, $pttt, $ngaydathang, $tongdonhang);
        // insert vào session my cart & $idbill
        foreach ($_SESSION['mycart'] as $cart) {
            insert_cart($iduser, $cart['id'], $cart['img'], $cart['name'], $cart['price'], $cart['soluong'], $tongdonhang, $idbill);
        }
        // xóa session cart
        $_SESSION['mycart'] = [];
    }

    $bill = loadone_bill($idbill);
    $billct = loadall_cart($idbill);
    include "view/cart/billconfirm.php";
    break;

        case 'mybill':
            $listbill = loadall_bill_home($_SESSION['user']['id']);
            include "view/cart/mybill.php";
            break;
        case 'huydh':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $bill = loadone_bill($_GET['id']);
            }
            include "view/huydh.php";
            break;
        case 'xlhuydh':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $id = $_POST['id'];
                $new_status = $_POST['new_status'];
                // Cập nhật trạng thái đơn hàng trong cơ sở dữ liệu
                update_bill_status($id, $new_status);
                $thongbao = "Cập nhật trạng thái đơn hàng thành công";
            }
            $listbill = loadall_bill();
            header('Location: index.php?act=ktdonhang');
            break;    
        case 'ktdonhang':
            $listbill = loadall_bill_home($_SESSION['user']['id']);
            include "view/cart/mybill.php";
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'tintuc':
            include "view/tintuc.php";
            break;


    }
} else {
    include "view/home.php";
}

include "view/footer.php";
ob_end_flush();