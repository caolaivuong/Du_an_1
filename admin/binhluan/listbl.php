
<section><header>
        <h1>Danh sách bình luận</h1>
    </header>
    <form action="#" method="post">
        <table>
            <thead>
                <tr>
                    <th>Chọn</th>
                    <th>ID</th>
                    <th>Nội Dung</th>
                    <th>IDUser</th>
                    <th>IDpro</th>
                    <th>Ngày Bình Luận</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($listbinhluan as $binhluan) {
                extract($binhluan);
                $suabl = "index.php?act=suabl&id=" .$id;
                $xoabl = "index.php?act=xoabl&id=" .$id;

                echo '<tr>
                    <td><input type="checkbox"></td>
                    <td>BL '.$id.'</td>
                    <td>'.$noidung.'</td>
                    <td>'.$id.'</td>
                    <td>'.$user.'</td>
                    <td>'.$ngaybinhluan.'</td>
                    <td><a href= "'.$xoabl.'" onclick="return confirmDelete()"><input type="button" class="btn btn-danger" value="Xóa"></a></td>
                </tr>';
            }
            ?>
            </tbody>
        </table>
        <div class="table-actions">
            <button onclick="chonTatCa()">Chọn tất cả</button>
            <button onclick="xoaTatCa()">Xóa tất cả</button>
        </div>
    </form>
    </section>
    <script>
    function confirmDelete() {
        return confirm("Bạn có chắc chắn muốn xóa mục này?");
    }
</script>