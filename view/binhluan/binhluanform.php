<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

$idpro = $_REQUEST['idpro'] ?? 0; // Lấy ID sản phẩm từ request
$dsbl = loadall_binhluan($idpro); // Lấy danh sách bình luận
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình luận sản phẩm</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
    h3 {
        color: red;
        text-align: center;
    }

    .cmt {
        height: 50px;
        border: 1px solid red;
        font-size: 16px;
    }

    .col-3 {
        display: flex;
        align-items: center;
    }

    .col-3 input {
        margin-right: 10px;
    }

    .box_bl {
        margin-top: 20px;
    }

    .fw-bold {
        color: #333;
        font-weight: bold;
    }

    .fw-normal {
        margin-bottom: 10px;
    }

    .thumbs-container {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 10px;
    }
    </style>
</head>

<body>
    <div class="mb">
        <div class="">
            <div class="box_title text-danger">BÌNH LUẬN</div>
            <hr>
            <div class="box_content form_account">
                <?php if (isset($_SESSION['user'])): ?>
                <table>
                    <?php foreach ($dsbl as $bl): ?>
                    <?php extract($bl); ?>
                    <div>
                        <div class="fw-bold"><?= htmlspecialchars($user); ?></div>
                        <div class="fst-italic"><?= htmlspecialchars($ngaybinhluan); ?></div>
                        <div class="fw-normal"><?= htmlspecialchars($noidung); ?></div>
                        <div class="thumbs-container">
                            <i class="fa-solid fa-thumbs-up fa-lg" id="thumbs-up-<?= $id; ?>"></i>
                            <span id="like-count-<?= $id; ?>">0</span>
                        </div>
                        <hr>
                    </div>
                    <?php endforeach; ?>
                </table>

                <div class="box_bl">
                    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <input type="hidden" name="idpro" value="<?= $idpro; ?>">
                        <div class="row">
                            <div class="col-3">
                                <input type="text" class="form-control" name="noidung" placeholder="Nhập bình luận..."
                                    required>
                                <input type="submit" name="guibinhluan" class="btn btn-primary" value="Gửi bình luận">
                            </div>
                        </div>
                    </form>
                </div>
                <?php else: ?>
                <h3>Đăng nhập để gửi bình luận!</h3>
                <?php endif; ?>

                <?php
                if (isset($_POST['guibinhluan']) && $_POST['guibinhluan']) {
                    $noidung = $_POST['noidung'];
                    $idpro = $_POST['idpro'];
                    $iduser = $_SESSION['user']['id'] ?? 0;
                    $ngaybinhluan = date('Y-m-d H:i:s');

                    // Gọi hàm thêm bình luận
                    insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);

                    // Chuyển hướng lại trang hiện tại
                    echo "<script>location.href = '" . htmlspecialchars($_SERVER['PHP_SELF']) . "?idpro=$idpro';</script>";
                    exit();
                }
                ?>
            </div>
        </div>
</body>

</html>

<script>
// Thích một bình luận
document.querySelectorAll("[id^='thumbs-up-']").forEach(function(thumb) {
    const commentId = thumb.id.split('-')[2]; // Lấy ID bình luận
    const likeKey = "thumbsUp_" + commentId;

    // Cập nhật số lượng like từ localStorage
    const likeCount = parseInt(localStorage.getItem(likeKey)) || 0;
    document.getElementById("like-count-" + commentId).textContent = likeCount;

    // Xử lý sự kiện click
    thumb.addEventListener("click", function() {
        const newCount = likeCount + 1;
        localStorage.setItem(likeKey, newCount);
        document.getElementById("like-count-" + commentId).textContent = newCount;
    });
});
</script>