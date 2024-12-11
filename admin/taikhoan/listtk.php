 <section>
     <header>
         <h1>Danh sách tài khoản</h1>
     </header>

     <form action="#" method="post">
         <table>
             <thead>
                 <tr>
                     <th>Chọn</th>
                     <th>Mã Tài Khoản</th>
                     <th>User Name</th>
                     <th>Mật Khẩu</th>
                     <th>Email</th>
                     <th>Địa Chỉ</th>
                     <th>Điện Thoại</th>
                     <th>Vai trò</th>
                     <th>Thao tác</th>
                 </tr>
             </thead>
             <tbody>
                 <?php foreach ($listtaikhoan as $taikhoan) : ?>
                 <?php
                        extract($taikhoan);
                        $suatk = "index.php?act=suatk&id=" . $id;
                        $xoatk = "index.php?act=xoatk&id=" . $id;
                    ?>
                 <tr>
                     <td><input type="checkbox" name="" id=""></td>
                     <td>TK<?= $id ?></td>
                     <td><?= $user ?></td>
                     <td><?= $pass ?></td>
                     <td><?= $email ?></td>
                     <td><?= $address ?></td>
                     <td><?= $tel ?></td>
                     <td><?= $role ?></td>
                     <td>
                         <a href="<?= $xoatk ?>" onclick="return confirmDelete()"><input type="button"
                                 class="btn btn-danger" value="Xóa"></a>
                     </td>
                 </tr>
                 <?php endforeach; ?>
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

 <style>
section {
    width: 100%;
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed;
}

th,
td {
    padding: 8px;
    text-align: left;
    border: 1px solid #ddd;
    word-wrap: break-word;
}

th {
    background-color: #f2f2f2;
}

tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

tbody tr:hover {
    background-color: #f2f2f2;
}
 </style>