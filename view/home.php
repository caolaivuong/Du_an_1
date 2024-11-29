<style>
a {
    text-decoration: none;
}

/* Nền và viền của thẻ select */
#filterSelect {
    background-color: #f2f2f2;
    border: none;
    padding: 10px;
    font-size: 16px;
    width: 200px;
    border-radius: 5px;
}

/* Tùy chỉnh kiểu mũi tên xuống */
#filterSelect::after {
    content: "\25BC";
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    color: #888;
}

/* Tùy chỉnh tùy chọn trong danh sách */
#filterSelect option {
    background-color: #fff;
    color: #555;
}

.col-4 {
    padding: 0;
}

.mpvc {
    position: relative;
    overflow: hidden;
    border: 2px solid #ccc;
    border-radius: 15px;
    width: 400px;
    /* Điều chỉnh kích thước khung */
    margin-left: auto;
    /* Căn giữa */
    margin-right: auto;
    /* Căn giữa */
}

.mpvc img {
    width: 100%;
    height: 170px;
    transition: transform 0.4s ease;
}

.mpvc:hover img {
    transform: scale(1.1);
}

.service-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 70px;
    background-color: #f9f9f9;
    border: 1px solid #e0e0e0;
    border-radius: 3px;
    flex-direction: row-reverse;
    /* Dịch các mục sang phải */
}

.service-item {
    display: flex;
    align-items: center;
    flex: 1;
    text-align: center;
    padding: 10px;
}

.service-icon {
    width: 60px;
    /* Tăng kích thước ảnh */
    height: 60px;
    /* Tăng kích thước ảnh */
    margin-right: 10px;
}

.service-text h4 {
    font-size: 16px;
    font-weight: bold;
    margin: 0;
}

.service-text p {
    font-size: 12px;
    color: #777;
}

/* Đổi màu mũi tên trái và phải thành màu đen */
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: black;
}

/* Nếu muốn mũi tên to hơn */
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-size: 30px 30px;
    /* Tăng kích thước mũi tên */
}
</style>

<main class="catalog  mb ">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://png.pngtree.com/template/20220330/ourmid/pngtree-yellow-background-autumn-and-winter-new-product-promotion-poster-banner-men-image_900086.jpg"
                    class="d-block w-100" width="200" height="500" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://intphcm.com/data/upload/banner-thoi-trang-dep.jpg" class="d-block w-100" width="200"
                    height="500" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://intphcm.com/data/upload/banner-thoi-trang-nam-dep.jpg" class="d-block w-100"
                    width="200" height="500" alt="...">
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