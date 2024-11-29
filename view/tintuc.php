<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liên Hệ</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
        color: #333;
    }

    header {
        background-color: #2c3e50;
        color: white;
        padding: 20px 0;
        text-align: center;
    }

    .container {
        width: 80%;
        margin: 40px auto;
    }

    .section-title {
        text-align: center;
        font-size: 28px;
        color: #2c3e50;
        margin-bottom: 30px;
    }

    .contact-info {
        display: flex;
        justify-content: space-between;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        border-radius: 8px;
    }

    .contact-info div {
        flex: 1;
        margin: 0 10px;
    }

    .contact-info h3 {
        font-size: 22px;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .contact-info p {
        font-size: 16px;
        color: #555;
        line-height: 1.6;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
    }

    form label {
        font-size: 16px;
        color: #2c3e50;
        font-weight: bold;
    }

    form input,
    form textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    form button {
        padding: 12px 20px;
        background-color: #e67e22;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    form button:hover {
        background-color: #d35400;
    }
    </style>
</head>

<body>
    <header>
        <h1>Liên Hệ Với Chúng Tôi</h1>
    </header>

    <div class="container">
        <h2 class="section-title">Thông Tin Liên Hệ</h2>

        <div class="contact-info">
            <div>
                <h3>Địa Chỉ</h3>
                <p>Đường Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
                <h3>Email</h3>
                <p>nhom3@gmail.com</p>
            </div>
            <div>
                <h3>Số Điện Thoại</h3>
                <p>0372135015</p>
                <h3>Giờ Làm Việc</h3>
                <p>Thứ 2 - Thứ 6: 7:00 AM - 22:00 PM</p>
                <p>Thứ 7 - Chủ Nhật: 9:00 AM - 1:00 PM</p>
            </div>
        </div>

        <h2 class="section-title">Gửi Thông Tin Liên Hệ</h2>

        <form action="mailto:info@brand.com" method="post" enctype="text/plain">
            <label for="name">Họ và Tên:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Số Điện Thoại:</label>
            <input type="tel" id="phone" name="phone">

            <label for="message">Tin Nhắn:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Gửi Thông Tin</button>
        </form>
    </div>
</body>

</html>