<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giới thiệu Thương hiệu Quần Áo </title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f8f8;
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
        color: #e67e22;
        /* Chỉnh màu sắc cho thống nhất với header */
        margin-bottom: 20px;
    }

    .brand-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }

    .brand-info img {
        max-width: 40%;
        border-radius: 8px;
    }

    .brand-info .text {
        max-width: 55%;
        color: #2c3e50;
        /* Đảm bảo văn bản có màu đồng nhất */
    }

    .mission,
    .values {
        background-color: #fff;
        padding: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        border-radius: 8px;
    }

    .mission h2,
    .values h2 {
        color: #2c3e50;
        /* Màu tiêu đề đồng bộ với header */
        font-size: 24px;
        margin-bottom: 10px;
    }

    .mission p,
    .values ul {
        font-size: 18px;
        color: #555;
    }

    .values ul {
        list-style-type: none;
        padding: 0;
    }

    .values ul li {
        margin-bottom: 8px;
        padding-left: 20px;
        position: relative;
    }

    .values ul li::before {
        content: "✔";
        position: absolute;
        left: 0;
        color: #e67e22;
        /* Màu icon đồng nhất với header */
    }

    footer {
        background-color: white;
        color: #2c3e50;
        text-align: center;
        padding: 15px;
    }

    .btn-contact {
        display: inline-block;
        padding: 10px 20px;
        background-color: #e67e22;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 20px;
    }

    .btn-contact:hover {
        background-color: #d35400;
        /* Tạo hiệu ứng hover cho nút */
    }
    </style>
</head>

<body style="background-color: white;">

    <header>
        <h1>Popular Fashion</h1>
    </header>

    <div class="container">

        <!-- Giới thiệu về thương hiệu -->
        <section class="brand-info">
            <div class="text">
                <h2 class="section-title">Về Chúng Tôi</h2>
                <p>Popular là một thương hiệu quần áo nổi bật với thiết kế thời trang, hiện đại, và chất lượng vượt
                    trội. Từ những chiếc
                    áo thun đơn giản đến những bộ sưu tập cao cấp, chúng tôi cam kết mang đến cho khách hàng những sản
                    phẩm không chỉ
                    đẹp mà còn thoải mái, phù hợp với xu hướng thời trang thế giới.</p>
                <p>Với sứ mệnh mang đến phong cách sống đương đại cho mỗi cá nhân, thương hiệu của chúng tôi đã và đang
                    chiếm lĩnh thị
                    trường quần áo toàn cầu, không ngừng phát triển và đổi mới để đáp ứng nhu cầu đa dạng của khách
                    hàng.</p>
            </div>
            <img src="https://media.canifa.com/Simiconnector/nu_spmoi-04Oct.webp" alt="Hình ảnh Thương hiệu Quần Áo">
        </section>

        <!-- Sứ mệnh của thương hiệu -->
        <section class="mission">
            <h2>Sứ Mệnh</h2>
            <p>Popular Fashion cam kết tạo ra những sản phẩm quần áo chất lượng cao với mục tiêu mang đến cho khách hàng
                sự tự
                tin và phong cách đỉnh cao. Thương hiệu của chúng tôi luôn duy trì tiêu chuẩn chất lượng nghiêm ngặt,
                kết hợp
                với sự đổi mới không ngừng trong thiết kế.</p>
        </section>

        <!-- Giá trị cốt lõi của thương hiệu -->
        <section class="values">
            <h2>Giá Trị Cốt Lõi</h2>
            <ul>
                <li>Chất Lượng: Cam kết mang đến sản phẩm với chất liệu và kỹ thuật tốt nhất.</li>
                <li>Đổi Mới: Luôn sáng tạo và cải tiến trong thiết kế để bắt kịp xu hướng.</li>
                <li>Chú Trọng Chi Tiết: Mỗi sản phẩm được chăm chút từ từng đường may đến kiểu dáng.</li>
                <li>Đảm Bảo Thoải Mái: Sự thoải mái của khách hàng luôn được đặt lên hàng đầu.</li>
                <li>Khách Hàng Là Trung Tâm: Dịch vụ chăm sóc khách hàng tốt nhất là ưu tiên của chúng tôi.</li>
            </ul>
        </section>


    </div>


</body>

</html>