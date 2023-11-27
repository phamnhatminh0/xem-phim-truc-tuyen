<?php
function binhluan($id_phim){
    $sql="SELECT *
    FROM binhluan
    JOIN phim ON phim.id_phim = binhluan.id_phim
    JOIN user ON user.id_user = binhluan.id_user
    WHERE phim.id_phim=? LIMIT 8";
    return pdo_query($sql,$id_phim);
}
?>