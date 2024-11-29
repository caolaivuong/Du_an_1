<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
    .footer-top {
        padding: 20px 0;
        background: #f1ecec;
    }

    .footer-feature {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        text-align: center;
    }

    .feature-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;
    }

    .feature-item span {
        font-size: 40px;
        margin-bottom: 10px;
    }

    .feature-item h4 {
        margin: 5px 0;
        font-size: 18px;
        font-weight: bold;

    }

    .feature-item p {
        margin: 0;
        font-size: 14px;
        color: #555;
    }

    .footer-bottom {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        padding: 20px 0;
        border-top: 1px solid #ccc;
    }

    .footer-column {
        flex: 1;
    }

    .footer-column h3,
    .footer-column h4 {
        margin-bottom: 5px;
    }

    .footer-column ul {
        list-style: none;
        padding: 0;

    }

    .footer-column ul li {
        margin-bottom: 5px;
        margin-top: 20px;
    }

    .footer-column ul li a {
        text-decoration: none;
        color: #333;
        transition: color 0.3s;

    }

    .footer-column ul li a:hover {
        color: #000;
    }

    .footer-column form {
        display: flex;
        gap: 10px;
    }

    .footer-column input[type="email"] {
        padding: 5px;
        border: 1px solid #ccc;
        flex: 1;
    }

    .footer-column button {
        padding: 5px 10px;
        background-color: #333;
        color: white;
        border: none;
        cursor: pointer;
        transition: background 0.3s;
    }

    .footer-column button:hover {
        background-color: #555;
    }

    .footer-bottom-text {
        text-align: center;
        margin-top: 20px;
        font-size: 14px;
        color: #777;
    }

    .fas.fa-trophy {
        font-size: 48px;
        /* Tăng kích thước cúp */
        color: rgb(125, 125, 124);
        /* Màu vàng cho cúp */
    }

    .fas.fa-check {
        font-size: 50px;
        /* Tăng kích thước dấu tích */
        color: green;
        /* Màu xanh cho dấu tích */
    }

    .fas.fa-box,
    .fas.fa-hand-holding {
        font-size: 48px;
        color: #8b4513;
        /* Màu hộp */
    }

    .fas.fa-hand-holding {
        color: #d2b48c;
        /* Màu tay */
        margin-top: -45px;
    }

    .fas.fa-headphones {
        font-size: 48px;
        /* Kích thước tai nghe */
        color: #333;
        /* Màu cho tai nghe */
    }
    </style>
</head>

<body>
    <footer class="footer">

        <div class="footer-bottom">
            <div class="footer-column">
                <h3 style="margin-left: 50px;">Popular Fashion</h3>
                <p style="margin-left: 50px;">Địa chỉ: Trịnh Văn Bô_Nam Từ Liêm_Hà Nội</p>
                <p style="margin-left: 50px;">SDT(1):0372135015</p>
                <p style="margin-left: 50px;">SDT(2):0372567890</p>
            </div>
            <div class="footer-column">
                <h4 style="color: #969393;">THƯƠNG HIỆU</h4>
                <ul>
                    <li><a href="?act=gioithieu">Giới thiệu</a></li>
                    <li><a href="?act=tintuc">Tin tức</a></li>
                    <li><a href="#">Với cộng đồng</a></li>
                    <li><a href="#">Hệ thống cửa hàng</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4 style="color: #969393;">HỖ TRỢ</h4>
                <ul>
                    <li><a href="#">Hỏi đáp</a></li>
                    <li><a href="#">Chính sách </a></li>
                    <li><a href="#">Điều kiện, Điều khoản</a></li>
                    <li><a href="#">Gợi ý tìm size</a></li>
                    <li><a href="#">Kiểm tra đơn hàng</a></li>
                    <li><a href="#">Chính sách bảo mật</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4 style="color: #969393;">Newsletter</h4>
                <form>
                    <input type="email" placeholder="Enter Your Email Address" required>
                    <button type="submit">SUBSCRIBE</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom-text">
            <hr>
            <p>&copy; 2024 Popular Fashion</p>
            <p>Liên hệ: nhom3@gmail.com</p>
        </div>
    </footer>

</body>

</html>


</body>

</html>