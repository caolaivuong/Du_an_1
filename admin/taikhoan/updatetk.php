<section><header>
        <h1>Thay đổi đổi quyền</h1>
    </header><br><br>
    <form action="index.php?act=updatetk&id=<?php echo $taikhoan['id']; ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $taikhoan['id']; ?>">
        <select name="idrole">
            <option  value="<?=$idrole?>"  selected>Tất cả</option>
            <?php foreach($listrole as $role): ?>
            <option value="<?php echo $role['id']; ?>"<?php echo ($taikhoan['idrole'] == $role['id']) ? ' selected' : ''; ?>><?php echo $role['name_role']; ?></option>
            <?php endforeach; ?>
        </select>
        <div class="actions"><br>
            <input type="submit" name="capnhat" value="Thay quền"><br><br>
            <a href="index.php?act=listtk">Danh sách</a>
        </div>  
        </form>
    </section>
    <style>
        form{
            text-align: center;
        }
        select{
            width: 80%;
            height: 40px;
            text-align: center;
            padding: 5px;
            border: 1px solid #ddd;
            background-color: #007bff;
            color: white;
            font-size: 18px;
        }
    </style>
