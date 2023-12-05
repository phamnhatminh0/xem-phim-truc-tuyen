<?php
function binhluan($id_phim){
    $sql="SELECT *
    FROM binhluan
    JOIN phim ON phim.id_phim = binhluan.id_phim
    JOIN user ON user.id_user = binhluan.id_user
    WHERE phim.id_phim=? LIMIT 8";
    return pdo_query($sql,$id_phim);
}

function them_bl($id_user,$id_phim,$noidung)
{
    $sql = "INSERT INTO binhluan (id_user, id_phim, noidung, ngaybl) VALUES (?, ?, ?,current_timestamp())";
    pdo_execute($sql,$id_user,$id_phim,$noidung);
    
}
?>