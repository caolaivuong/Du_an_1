<table>
    <thead>
        <tr>
            <th>Mã danh mục</th>
            <th>Tên danh mục</th>
            <th>Số lượng</th>
            <th>Giá cao nhất</th>
            <th>Giá thấp nhất</th>
            <th>Giá trung bình</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($listthongke as $thongke){
                // Dùng extract để truy xuất các giá trị trong mảng $thongke
                extract($thongke);
                echo '<tr>
                        <td>'.$madm.'</td>
                        <td>'.$tendm.'</td>
                        <td>'.$countsp.'</td>
                        <td>'.$maxprice.'</td>
                        <td>'.$minprice.'</td>
                        <td>'.$avgprice.'</td>
                    </tr>';
            }
        ?>
    </tbody>
</table>