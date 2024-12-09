<style>
/* Nền tổng thể */
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #f3f4f6, #e5e7eb);
    margin: 0;
    padding: 0;
    color: #333;
}

/* Nút chọn lọc giá */
#filterSelect {
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 10px;
    font-size: 16px;
    width: 240px;
    border-radius: 8px;
    color: #555;
    transition: all 0.3s ease;
}

#filterSelect:hover {
    border-color: #007bff;
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
}

/* Cards sản phẩm */
.card {
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s ease;
    margin-bottom: 20px;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.card:hover img {
    transform: scale(1.1);
}

.card-body {
    padding: 15px;
    text-align: center;
}

.card-body .text-dark-emphasis {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    margin-bottom: 8px;
    text-decoration: none;
    transition: color 0.3s;
}

.card-body .text-dark-emphasis:hover {
    color: #007bff;
}

.card-body .text-danger {
    font-size: 16px;
    font-weight: bold;
    margin: 10px 0;
}

/* Nút bấm */
.btn {
    border-radius: 20px;
    padding: 10px 15px;
    font-weight: 500;
    transition: background-color 0.3s ease, transform 0.3s;
}

.btn-primary {
    background: linear-gradient(135deg, #007bff, #0056b3);
    border: none;
    color: #fff;
}

.btn-primary:hover {
    transform: scale(1.05);
    background: linear-gradient(135deg, #0056b3, #007bff);
}

.btn-danger {
    background: linear-gradient(135deg, #dc3545, #a71d2a);
    border: none;
    color: #fff;
}

.btn-danger:hover {
    transform: scale(1.05);
    background: linear-gradient(135deg, #a71d2a, #dc3545);
}

/* Thanh dịch vụ */
.service-info {
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
    padding: 20px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    margin: 20px auto;
    max-width: 1200px;
    /* Giới hạn chiều rộng tối đa */
    width: 100%;
    /* Cho phép chiều rộng tự động điều chỉnh theo màn hình */
    box-sizing: border-box;
    /* Bao gồm padding và border */
}

/* Các phần tử dịch vụ */
.service-item {
    display: flex;
    align-items: center;
    flex-direction: column;
    max-width: 200px;
    text-align: center;
    margin: 15px;
    padding: 15px;
    transition: transform 0.3s ease;
}

/* Tạo hiệu ứng hover cho các phần tử */
.service-item:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}

/* Icon dịch vụ */
.service-icon {
    width: 70px;
    height: 70px;
    margin-bottom: 15px;
    border-radius: 50%;
    background: linear-gradient(135deg, #f9f9f9, #e0e0e0);
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

/* Thêm hiệu ứng cho icon khi hover */
.service-icon:hover {
    transform: scale(1.1);
}

/* Text trong phần tử dịch vụ */
.service-text h4 {
    font-size: 18px;
    font-weight: 600;
    margin: 0;
    color: #333;
    transition: color 0.3s ease;
}

/* Màu chữ thay đổi khi hover */
.service-text h4:hover {
    color: #007bff;
}

/* Mô tả dịch vụ */
.service-text p {
    font-size: 14px;
    color: #666;
    margin-top: 5px;
}

/* Thêm màu nền nhẹ cho phần tử dịch vụ khi hover */
.service-item:hover .service-text p {
    color: #555;
}

/* Carousel */
.carousel-inner img {
    height: 550px;
    /* Tăng chiều cao banner */
    object-fit: cover;
    border-radius: 12px;
    margin: 0 auto;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.6);
    border-radius: 50%;
    padding: 10px;
}

.carousel-control-prev-icon:hover,
.carousel-control-next-icon:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

/* Phân trang */
.pagination .page-link {
    color: #007bff;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin: 0 5px;
    transition: all 0.3s;
}

.pagination .page-link:hover {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.pagination .active .page-link {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
</style>


<main class="catalog  mb ">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://file.hstatic.net/1000369857/collection/1919_730_polo_3da01ded33614497a1884a3b99489661.jpg"
                    class="d-block w-100" width="200" height="500" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://pubcdn.ivymoda.com/files/news/2024/06/07/web-NGUYENGIA_3.jpg" class="d-block w-100"
                    width="200" height="500" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://tmluxury.vn/wp-content/uploads/shop-quan-jean-nam-quan-1-tm-luxury.jpg"
                    class="d-block w-100" width="200" height="500" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <div class="service-info">
        <div class="service-item">
            <img src="https://trungbac247.vn/data/media/2209/images/IconBottom_GiaohangMP.png" alt="Miễn phí vận chuyển"
                class="service-icon">
            <div class="service-text">
                <h4>Miễn phí vận chuyển</h4>
                <p>Đơn hàng trên 500K</p>
            </div>
        </div>
        <div class="service-item">
            <img src="https://i0.wp.com/phuhungthinh.com/wp-content/uploads/2022/08/thanh-toan.png?fit=350%2C350&ssl=1"
                alt="Thanh toán" class="service-icon">
            <div class="service-text">
                <h4>Thanh toán</h4>
                <p>Thanh toán an toàn</p>
            </div>
        </div>
        <div class="service-item">
            <img src="https://png.pngtree.com/png-clipart/20230923/original/pngtree-flat-gift-card-icon-with-discount-coupon-and-bonus-certificate-vector-png-image_12538242.png"
                alt="Phiếu tặng quà" class="service-icon">
            <div class="service-text">
                <h4>phiếu tặng quà</h4>
                <p>Đơn hàng từ 1000K</p>
            </div>
        </div>
        <div class="service-item">
            <img src="https://decuubaoquan.com/files/news/ho-tro-24-7-kifgxte9.jpg" alt="Hỗ trợ 24/7"
                class="service-icon">
            <div class="service-text">
                <h4>Hỗ trợ 24/7</h4>
                <p>Sẵn sàng hỗ trợ</p>
            </div>
        </div>
    </div>
    <br>
    <h2 class="text-center">Tất cả sản phẩm</h2>
    <br>
    <div class="items container">
        <select id="filterSelect" aria-label="Disabled select example" onchange="filterByPrice()">
            <option selected value="">Giá......</option>
            <option value="asc">Từ thấp đến cao</option>
            <option value="desc">Từ cao đến thấp</option>
        </select>
        <br> <br>

        <?php
    $i = 0;
    $columns = 4; // Số cột trong lưới

    $perPage = 8; // Số sản phẩm trên mỗi trang
    $page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1; // Trang hiện tại

    // Tính toán vị trí bắt đầu của sản phẩm trên trang hiện tại
    $startIndex = ($page - 1) * $perPage;

    // Tính toán tổng số trang dựa trên tổng số sản phẩm và số lượng sản phẩm trên mỗi trang
    $totalPages = ceil(count($spnew) / $perPage);

    // Cắt danh sách sản phẩm thành trang hiện tại
    $productsForPage = array_slice($spnew, $startIndex, $perPage);

    // Sắp xếp sản phẩm nếu cần thiết
    $sort = isset($_GET['sort']) ? $_GET['sort'] : '';
    if ($sort === 'asc') {
        usort($productsForPage, function ($a, $b) {
            return $a['price'] - $b['price'];
        });
    } elseif ($sort === 'desc') {
        usort($productsForPage, function ($a, $b) {
            return $b['price'] - $a['price'];
        });
    }

    // Hiển thị sản phẩm cho trang hiện tại
    foreach ($productsForPage as $sp) {
        extract($sp);
        $hinh = $img_path . $img;
        if ($i % $columns == 0) {
            echo '<div class="row">';
        }

        // Xử lý class để căn giữa các cột
        $mr = ($i % $columns == $columns - 1) ? '' : 'mr';

        $linksp = "index.php?act=sanphamct&idsp=" . $id;

        echo '                
        <div class="col-md-' . (12 / $columns) . ' ' . $mr . '">
          <div class="card" style="width: 18rem;">
            <a class="item_name" href="' . $linksp . '"><img src="' . $hinh . '" class="card-img-top" width="50" height="300" alt=""></a>
            <div class="card-body">
              <a class="text-center text-dark-emphasis" href="' . $linksp . '">' . $name . '</a>
              <p class="text-danger">Giá: ' . $price . ' đ</p>  
              <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="' . $name . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="price" value="' . $price . '">
                <div >
                  <input type="submit" name="addtocart" class="btn btn-primary" value="Thêm giỏ hàng">
                  <input type="submit" name="addtocart" class="btn btn-danger" value="Mua ngay"> 
                </div>
              </form>    
            </div>
          </div>
        </div> ';

        $i++;

        if ($i % $columns == 0 || $i == count($spnew)) {
            echo '</div> <br>';
        }
    }

    // Hiển thị phân trang
    echo '<div class="pagination justify-content-center">';
    echo '<ul class="pagination">';
    
    if ($page > 1) {
        echo '<li class="page-item"><a class="page-link" href="index.php?page=' . ($page - 1) . '">Previous</a></li>';
    }
    
    for ($i = 1; $i <= $totalPages; $i++) {
        echo '<li class="page-item' . ($i == $page ? ' active' : '') . '"><a class="page-link" href="index.php?page=' . $i . '">' . $i . '</a></li>';
    }
    
    if ($page < $totalPages) {
        echo '<li class="page-item"><a class="page-link" href="index.php?page=' . ($page + 1) . '">Next</a></li>';
    }
    
    echo '</ul>';
    echo '</div>';
?>

    </div>

    <script>
    function filterByPrice() {
        var filterSelect = document.getElementById("filterSelect");
        var selectedOption = filterSelect.options[filterSelect.selectedIndex].value;

        // Thay đổi URL dựa trên lựa chọn được chọn
        if (selectedOption === "asc") {
            window.location.href = "index.php?sort=asc";
        } else if (selectedOption === "desc") {
            window.location.href = "index.php?sort=desc";
        }
    }
    </script>

</main>