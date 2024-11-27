<section id="container">
    <header>
        <h1>Danh sách danh mục</h1>
    </header>

    <form action="#" method="post">
        <table>
            <thead>
                <tr>
                    <th>Chọn</th>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;
                    echo '
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>DM' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>
                            <a href="' . $suadm . '"><input type="button" class="col-md-4 btn btn-success" value="Sửa"></a>
                            <a href="' . $xoadm . '" onclick="return confirmDelete()">
                                <input type="button" class="col-md-4 btn btn-danger" value="Xóa">
                            </a>
                        </td>
                    </tr>';
                }
                ?>
            </tbody>
        </table>

        <div class="table-actions">
            <button onclick="chonTatCa()">Chọn tất cả</button>
            <button onclick="xoaTatCa()">Xóa tất cả</button>
            <a href="index.php?act=adddm">
                <input type="button" value="Nhập thêm">
            </a>
        </div>
    </form>
</section>

<script>
function confirmDelete() {
    return confirm("Bạn có chắc chắn muốn xóa mục này?");
}
</script>