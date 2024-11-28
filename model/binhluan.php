<?php 
    // function loadall_binhluan($idsp){
    //     $sql = "
    //         SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM `binhluan` 
    //         LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
    //         LEFT JOIN sanpham ON binhluan.idpro = sanpham.id
    //         WHERE sanpham.id = $idsp;
    //     ";
    //     $result =  pdo_query($sql);
    //     return $result;
    // }
    function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
            $sql = "INSERT INTO binhluan(noidung, iduser, idpro, ngaybinhluan) 
            VALUES ('$noidung','$iduser','$idpro','$ngaybinhluan');";    
            pdo_execute($sql);
        }
        function loadall_binhluan($idpro) {
            $sql = "SELECT binhluan.id, binhluan.noidung, taikhoan.user, DATE_FORMAT(binhluan.ngaybinhluan, '%d/%m/%Y') AS ngaybinhluan 
                    FROM binhluan
                    LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id";
        
            if ($idpro > 0) {
                $sql .= " WHERE binhluan.idpro = '$idpro'";
            }
        
            $sql .= " ORDER BY binhluan.id DESC";
        
            $listbl = pdo_query($sql);
            return $listbl;
        }
    function delete_binhluan($id){
        $sql = "DELETE FROM binhluan WHERE id=".$id;
        pdo_execute($sql);
    }
?>