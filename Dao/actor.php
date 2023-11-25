<?php
function dienvien($id_phim){
    $sql="SELECT *
    FROM dienvien
    JOIN dvphim ON dvphim.id_dienvien = dienvien.id_dienvien
    JOIN phim ON phim.id_phim = dvphim.id_phim
    WHERE phim.id_phim=?";
    return pdo_query($sql,$id_phim);
}
?>