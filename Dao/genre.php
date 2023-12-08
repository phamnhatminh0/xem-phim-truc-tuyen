<?php
function theloai_getAll(){
    $sql= "SELECT * FROM theloai ";
    return pdo_query($sql);
}
function gettheloai($id){
    $sql= "SELECT tentl FROM theloai WHERE id_loai=?";
    return pdo_query_one($sql,$id);
}
function theloai_getphim($id_phim){
    $sql= "SELECT theloai.tentl,theloai.id_loai FROM theloai 
   JOIN loaiphim ON theloai.id_loai = loaiphim.id_loai
   JOIN phim ON loaiphim.id_phim = phim.id_phim  WHERE phim.id_phim=? ";
    return pdo_query($sql,$id_phim);
}
?>