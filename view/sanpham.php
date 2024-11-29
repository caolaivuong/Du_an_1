<style>
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
</style>
<div id="carouselExample" class="carousel slide">
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
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> <br>
</div><br>
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
            <h4>Phiếu tặng quà</h4>
            <p>Đơn hàng từ 1000K</p>
        </div>
    </div>
    <div class="service-item">
        <img src="https://decuubaoquan.com/files/news/ho-tro-24-7-kifgxte9.jpg" alt="Hỗ trợ 24/7" class="service-icon">
        <div class="service-text">
            <h4>Hỗ trợ 24/7</h4>
            <p>Sẵn sàng hỗ trợ</p>
        </div>
    </div>
</div>
<main class="catalog  mb container">
    <div class="boxleft"> <br>
        <h2 style="text-align: center;margin-bottom: 20px;">Sản phẩm theo danh mục</h2>
        <div class="items">
            <select id="filterSelect" aria-label="Disabled select example" onchange="redirectToLink()">
                <option selected value="0">Sản phẩm....</option>
                <option value="1">Áo Phông</option>
                <option value="2">Áo Polo</option>
                <option value="3">Quần jeans</option>
                <option value="4">Váy Nữ</option>
                <option value="5">Combo</option>
            </select> <br><br>
            <?php
            $i = 0;
            $columns = 4; // Số cột mong muốn
            foreach ($dssp as $sp){
                extract($sp);
                $hinh =  $img_path.$img;
                $linksp="index.php?act=sanphamct&idsp=".$id;
                if ($i % $columns == 0) {
                    echo '<div class="row">';
                }
            
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '    
                <div class="col-md-' . (12/$columns) . ' ' . $mr . '">
                <div class="card" style="width: 18rem;">
                <a class="item_name" href="' . $linksp . '"><img src="' . $hinh . '" class="card-img-top" width="50" height="300" alt=""></a>
                
                <div class="card-body">
                <a class="text-center text-dark-emphasis" href="' . $linksp . '">' . $name . '</a>
                <p class="text-danger">Giá: ' . $price . ' đ</p>  
                <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="name" value="'. $name . '">
                <input type="hidden" name="img" value="'.$img . '">
                <input type="hidden" name="price" value="' . $price . '">
                <div >
                <input type="submit" name="addtocart" class="btn btn-primary" value="Thêm giỏ hàng">
                <input type="submit" name="addtocart" class="btn btn-danger" value="Mua ngay"> 
                </div>
            </form>    
            </div>
            </div> 
    </div>';
            $i++;

            if ($i % $columns == 0 || $i == count($spnew)) {
                echo '</div> <br>';
            }
                }
            ?>
        </div>
    </div>
    <br>
</main>
<!-- BANNER 2 -->
<script>
function redirectToLink() {
    var selectElement = document.getElementById("filterSelect");
    var selectedValue = selectElement.value;

    if (selectedValue === "1") {
        window.location.href = "index.php?act=sanpham&iddm=1";
    } else if (selectedValue === "2") {
        window.location.href = "index.php?act=sanpham&iddm=2";
    } else if (selectedValue === "3") {
        window.location.href = "index.php?act=sanpham&iddm=3";
    } else if (selectedValue === "4") {
        window.location.href = "index.php?act=sanpham&iddm=5";
    } else if (selectedValue === "5") {
        window.location.href = "index.php?act=sanpham&iddm=6";
    }
}
</script>