<section>
    <header>
        <h1>Danh sách sản phẩm</h1>
    </header>

    <form action="index.php?act=listsp" method="post">
        <label for="">Tìm kiếm sản phẩm</label>
        <input type="text" name="kyw" class="col-md-6" placeholder="Nhập sản phẩm bạn muốn tìm kiếm !">
        <hr>

        <label for="">Tìm kiếm sản phẩm theo danh mục</label>
        <select name="iddm" class="col-md-2">
            <option value="0" selected>Tất cả</option>
            <?php foreach($listdanhmuc as $danhmuc): ?>
            <option value="<?= $danhmuc['id'] ?>"><?= $danhmuc['name'] ?></option>
            <?php endforeach; ?>
        </select>
        <hr>

        <input type="submit" class="col-md-2" name="listok" value="Tìm kiếm">
    </form>

    <form action="#" method="post">
        <table>
            <thead>
                <tr>
                    <th>Chọn</th>
                    <th>Mã loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Lượt xem</th>
                    <th>Mô tả</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Số sản phẩm trên mỗi trang
                $sanPhamMoiTrang = 4;

                // Tính tổng số sản phẩm
                $soSanPham = count($listsanpham);

                // Xác định trang hiện tại
                $trangHienTai = isset($_GET['page']) ? $_GET['page'] : 1;

                // Tính vị trí bắt đầu và kết thúc của sản phẩm trên trang hiện tại
                $batDau = ($trangHienTai - 1) * $sanPhamMoiTrang;
                $ketThuc = $batDau + $sanPhamMoiTrang;

                // Hiển thị sản phẩm theo trang
                for ($i = $batDau; $i < $ketThuc && $i < $soSanPham; $i++) {
                    $sanPham = $listsanpham[$i];
                    extract($sanPham);
                    $linksp = "../index.php?act=sanphamct&idsp=" . $id;
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "no photo";
                    }
                
                    echo '
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>SP' . $id . '</td>
                            <td><a href="' . $linksp . '">' . $name . '</a></td>
                            <td><a href="' . $linksp . '">' . $hinh . '</a></td>
                            <td><strong>' . $price . '$</strong></td>
                            <td>' . $luotxem . '</td>
                            <td>' . $mota . '</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="'. $suasp.'" class="btn btn-success mr-2">Sửa</a>
                                    <a href="'. $xoasp.'" class="btn btn-danger" onclick="return confirmDelete()">Xóa</a>
                                </div>
                            </td>
                        </tr>';
                }
                ?>
            </tbody>
        </table>

        <div class="center">
            <?php
            $soTrang = ceil($soSanPham / $sanPhamMoiTrang);
            echo '<div class="pagination">';
            echo '<a href="index.php?act=listsp&page=1" class="prev">&laquo;</a>';
            for ($i = 1; $i <= $soTrang; $i++) {
                echo '<a href="index.php?act=listsp&page=' . $i . '" class="page-num">' . $i . '</a>';
            }
            echo '<a href="index.php?act=listsp&page=' . $soTrang . '" class="next">&raquo;</a>';
            echo '</div>';
            ?>
        </div>

        <div class="table-actions">
            <button onclick="chonTatCa()">Chọn tất cả</button>
            <button onclick="xoaTatCa()">Xóa tất cả</button>
            <a href="index.php?act=addsp"><input type="button" value="Thêm sản phẩm"></a>
        </div>

    </form>
</section>

<script>
function confirmDelete() {
    return confirm("Bạn có chắc chắn muốn xóa mục này?");
}
</script>


<script>
function confirmDelete() {
    return confirm("Bạn có chắc chắn muốn xóa mục này?");
}
</script>

<style>
/* Đảm bảo bảng không bị lệch */
table {
    width: 100%;
    border-collapse: collapse;
}

th,
td {
    padding: 8px;
    text-align: left;
    border: 1px solid #ddd;
}

/* Chỉnh CSS cho pagination */
.pagination {
    margin-top: 20px;
    text-align: center;
}

.pagination a {
    display: inline-block;
    padding: 8px 16px;
    text-decoration: none;
    color: #333;
    border: 1px solid #ccc;
    margin: 0 4px;
}

.pagination a:hover {
    background-color: #f5f5f5;
}

.pagination .prev,
.pagination .next {
    font-weight: bold;
}

.center {
    display: flex;
    justify-content: center;
    /* căn giữa theo chiều ngang */
    align-items: center;
    /* căn giữa theo chiều dọc */
}

a {
    color: #333;
}

a:hover {
    color: #CCC;
}
</style>