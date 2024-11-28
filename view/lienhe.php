<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liên Hệ</title>
    <style>
    /* Header */
    header {
        background-color: #2c3e50;
        color: white;
        padding: 20px 0;
        text-align: center;
    }

    /* Header chung */
    header.lienhe {
        background-color: #2c3e50;
        padding: 20px 0;
        text-align: center;
        color: white;
    }

    /* Chỉ áp dụng cho h1 trong header */
    header.lienhe h1 {
        margin: 0;
        font-size: 28px;
    }

    /* Container */
    .container {
        width: 80%;
        margin: 40px auto;
    }

    /* Liên hệ Section */
    .contact-info {
        display: flex;
        justify-content: space-between;
        background-color: #fff;
        padding: 20px;
        margin-bottom: 40px;
        border-radius: 8px;
        box-shadow: none;
        /* Không dùng shadow */
    }

    .contact-info div {
        width: 45%;
    }

    .contact-info h3 {
        font-size: 24px;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .contact-info p {
        font-size: 18px;
        color: #555;
    }

    /* Form */
    form {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: none;
        /* Không dùng shadow */
    }

    form input,
    form textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        box-sizing: border-box;
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

    /* Footer */
    footer {
        background-color: white;
        color: #2c3e50;
        text-align: center;
        padding: 15px;
    }
    </style>
</head>

<body>

    <header class="lienhe">
        <h1>Liên Hệ Với Chúng Tôi</h1>
    </header>

    <div class="container">

        <!-- Thông tin liên hệ -->
        <section class="contact-info">
            <div>
                <h3>Thông Tin Liên Hệ</h3>
                <p><strong>Địa chỉ:</strong> Đường Trịnh Văn Bô_ Nam Từ Liêm_ Hà Nội</p>
                <p><strong>Số điện thoại:</strong> 0372135015</p>
                <p><strong>Email:</strong> nhom3@gmail.com</p>
            </div>
            <div>
                <h3>Giờ làm việc</h3>
                <p><strong>Các ngày trong tuần:</strong> 7:00 AM - 22:00 PM</p>
                <p><strong>Thứ Bảy:</strong> 9:00 AM - 1:00 PM</p>
                <p><strong>Chủ Nhật:</strong> 9:00 AM - 1:00 PM</p>
            </div>
        </section>

        <!-- Form liên hệ -->
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