<?php
function loadall_danhmuc(){
    $sql="select * from danhmuc order by id desc";
    $listdanhmuc=pdo_query($sql);
    return  $listdanhmuc;
}
    function insert_danhmuc($tenloai){
        $sql = "INSERT INTO danhmuc(name) VALUES('$tenloai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql = "DELETE FROM danhmuc WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadone_danhmuc($id){
        $sql= "select * from danhmuc where id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($id,$tenloai){
        $sql = "UPDATE danhmuc SET name='".$tenloai."' WHERE id=".$id;
        pdo_execute($sql);   
    }
    function load_ten_dm($iddm){
        if($iddm>0){
            $sql="select * from danhmuc where id=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        }else{
            return "";
        }
    }
?>