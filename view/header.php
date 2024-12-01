<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Fashion </title>
    <!-- <link rel="stylesheet" href="./css/css.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5eef691f30.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <script src="main.js"></script>
</head>
<style>
/* Body */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f4f4f9;
    color: #333;
    margin: 0;
    padding: 0;
}

/* Navbar */
.navbar {
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 15px 30px;
    border-bottom: 2px solid #f1c40f;
    transition: background-color 0.3s ease;
}

.navbar-brand img {
    border-radius: 8px;
    max-height: 50px;
    /* Giảm chiều cao logo */
}

.navbar .nav-link {
    font-size: 14px;
    /* Chỉnh lại font-size nhỏ hơn */
    font-weight: 500;
    color: #34495e;
    margin: 0 12px;
    text-transform: uppercase;
    transition: color 0.3s ease, transform 0.3s ease;
}

.navbar .nav-link:hover {
    color: #f1c40f;
    transform: scale(1.05);
    /* Phóng to nhẹ khi hover */
}

.navbar .dropdown-menu {
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

.navbar .dropdown-item {
    font-size: 13px;
    /* Chỉnh font-size nhỏ hơn cho item */
    color: #34495e;
    padding: 10px 18px;
}

.navbar .dropdown-item:hover {
    background-color: #f8f9fa;
    color: #f1c40f;
}

/* Search Box */
.custom-input {
    position: relative;
    width: 280px;
}

.custom-input input {
    width: 100%;
    padding: 10px 18px;
    border: 2px solid #ddd;
    border-radius: 30px;
    font-size: 13px;
    /* Giảm font-size của input */
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.custom-input input:focus {
    border-color: #f1c40f;
    box-shadow: 0 4px 8px rgba(241, 196, 15, 0.2);
    outline: none;
}

.custom-input::before {
    content: "\f002";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #aaa;
}

/* Account & Cart */
.cus-input {
    display: flex;
    align-items: center;
    gap: 18px;
    margin-left: 18px;
}

.cus-input a {
    font-size: 13px;
    /* Giảm kích thước chữ cho các link */
    font-weight: 500;
    color: #34495e;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s ease, transform 0.3s ease;
}

.cus-input a:hover {
    color: #f1c40f;
    transform: scale(1.05);
}

/* Navbar Toggle Button */
.navbar-toggler {
    border: none;
}

.navbar-toggler-icon {
    background-color: #34495e;
    border-radius: 3px;
}

/* Active Page Highlight */
.nav-link.active {
    font-weight: bold;
    color: #f1c40f;
    text-decoration: underline;
}

/* Responsive Design */
@media (max-width: 768px) {
    .navbar {
        text-align: center;
    }

    .custom-input {
        width: 100%;
        margin-bottom: 10px;
    }

    .cus-input {
        flex-direction: column;
        align-items: center;
        gap: 12px;
    }
}
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-light-subtle border-bottom">
        <div class="container-fluid justify-content-center bg">
            <div class="dropdown">
            </div>
            <a class="navbar-brand " href="index.php">
                <img src="img/vuong.jpg" width="90px" height="auto" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav justify-content-center ">
                <li class="nav-item">
                    <a class="nav-link active text-dark-emphasis hover-nav" aria-current="page" href="index.php">Trang
                        Chủ</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark-emphasis" href="index.php?act=gioithieu">giới Thiệu</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark-emphasis" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Sản Phẩm
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-dark-emphasis" href="index.php?act=sanpham&iddm=22">Áo
                                Phông</a>
                        </li>
                        <li><a class="dropdown-item text-dark-emphasis" href="index.php?act=sanpham&iddm=21">Áo Polo</a>
                        </li>
                        <li><a class="dropdown-item text-dark-emphasis" href="index.php?act=sanpham&iddm=19">Quần
                                jeans</a></li>
                        <li><a class="dropdown-item text-dark-emphasis" href="index.php?act=sanpham&iddm=20">Váy Nữ</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark-emphasis" href="index.php?act=lienhe">Liên Hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark-emphasis" href="index.php?act=tintuc">Tin Tức</a>
                </li>
            </ul>
            <form class="d-flex " role="search" action="index.php?act=sanpham" method="post">
                <div class="custom-input" id="search-container">
                    <input class="form-control me-2 custom-input border border-success-subtle" type="search"
                        placeholder="Nhập tìm kiếm..." size="25" aria-label="Search" name="keyword">
                </div>
                <div class="cus-input">
                    <a href="index.php?act=user" class="text-dark-emphasis"><i class="fa-solid fa-user"></i>Tài
                        khoản</a>
                    <a href="index.php?act=viewcart" class="text-dark-emphasis"> <i
                            class="fa-solid fa-cart-shopping"></i>Giỏ hàng</a>
                </div>
            </form>
        </div>

    </nav>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

</script>