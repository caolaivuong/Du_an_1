<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
    }

    .footer {
        background: linear-gradient(120deg, #f1ecec, #e4c7c7);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .footer-top {
        padding: 30px 0;
        background: #f1ecec;
    }

    .footer-feature {
        display: flex;
        justify-content: space-between;
        gap: 30px;
        text-align: center;
    }

    .feature-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;
        color: #333;
    }

    .feature-item h4 {
        margin-bottom: 10px;
        font-size: 20px;
        font-weight: bold;
    }

    .feature-item p {
        font-size: 16px;
        color: #555;
    }

    .footer-bottom {
        display: flex;
        justify-content: space-between;
        padding: 50px 60px;
        background: #fff;
        border-top: 1px solid #ccc;
    }

    .footer-column {
        flex: 1;
        padding: 0 30px;
    }

    .footer-column h3,
    .footer-column h4 {
        margin-bottom: 20px;
        font-size: 20px;
        color: #333;
        text-transform: uppercase;
        font-weight: 700;
    }

    .footer-column ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-column ul li {
        margin-bottom: 15px;
    }

    .footer-column ul li a {
        text-decoration: none;
        color: #333;
        font-size: 16px;
        font-weight: 500;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .footer-column ul li a:hover {
        color: #ff7a8a;
        transform: translateX(5px);
    }

    .footer-column form {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }

    .footer-column input[type="email"] {
        padding: 8px;
        border: 2px solid #ccc;
        flex: 1;
        font-size: 14px;
        border-radius: 4px;
        transition: border-color 0.3s ease;
    }

    .footer-column input[type="email"]:focus {
        border-color: #ff7a8a;
    }

    .footer-column button {
        padding: 10px 20px;
        background-color: #ff7a8a;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s, transform 0.3s ease;
    }

    .footer-column button:hover {
        background-color: #e85a6f;
        transform: translateY(-3px);
    }

    .footer-bottom-text {
        text-align: center;
        margin-top: 30px;
        font-size: 14px;
        color: #777;
    }

    .footer-bottom-text hr {
        margin-top: 20px;
        border: 0;
        border-top: 1px solid #ccc;
    }

    .footer-bottom-text p {
        margin: 5px 0;
    }
    </style>
</head>

<body>
    <footer class="footer">

        <div class="footer-top">
            <div class="footer-feature">
                <div class="feature-item">
                    <h4>Cảm ơn bạn đã ủng hộ Popular Fashion</h4>
                    <p>Chúng tôi luôn sẵn sàng phục vụ bạn!</p>
                </div>
                <div class="feature-item">
                    <h4>Đội ngũ hỗ trợ 24/7</h4>
                    <p>Chúng tôi luôn sẵn sàng giải đáp thắc mắc của bạn.</p>
                </div>
                <div class="feature-item">
                    <h4>Giao Hàng Nhanh-Tiết kiệm</h4>
                    <p>Chúng tôi cam kết giao hàng đúng hẹn.</p>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-column">
                <h3>Popular Fashion</h3>
                <p>Địa chỉ: Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
                <p>SDT(1): 0372135015</p>
                <p>SDT(2): 0372567890</p>
            </div>
            <div class="footer-column">
                <h4>THƯƠNG HIỆU</h4>
                <ul>
                    <li><a href="?act=gioithieu">Giới thiệu</a></li>
                    <li><a href="?act=tintuc">Tin tức</a></li>
                    <li><a href="#">Với cộng đồng</a></li>
                    <li><a href="#">Hệ thống cửa hàng</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>HỖ TRỢ</h4>
                <ul>
                    <li><a href="#">Hỏi đáp</a></li>
                    <li><a href="#">Chính sách</a></li>
                    <li><a href="#">Điều kiện, Điều khoản</a></li>
                    <li><a href="#">Gợi ý tìm size</a></li>
                    <li><a href="#">Kiểm tra đơn hàng</a></li>
                    <li><a href="#">Chính sách bảo mật</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Hãy đăng ký để nhận thông báo mới nhất!</h4>
                <form>
                    <input type="email" placeholder="Nhập email của bạn" required>
                    <button type="submit">ĐĂNG KÝ</button>
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