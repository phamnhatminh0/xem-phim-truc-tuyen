<?php
function phimmoi(){
    $sql= "SELECT * FROM phim WHERE namsx = (SELECT MAX(namsx) FROM phim) LIMIT 4;";
    return pdo_query($sql);
}
function hanhdong(){
    $sql= "SELECT *
    FROM phim P
    JOIN loaiphim LP ON P.id_phim = LP.id_phim
    JOIN theloai TL ON LP.id_loai = TL.id_loai
    WHERE TL.tentl = 'hành động';";
    return pdo_query($sql);
}
function phim_luotxem(){
    $sql= "SELECT * FROM phim
    ORDER BY luotxem  DESC
    LIMIT 4;";
    return pdo_query($sql);
}
function chitietphim($id_phim){
   $sql="SELECT *
   FROM phim
   JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
   JOIN theLoai ON loaiphim.id_loai = theloai.id_loai
   WHERE phim.id_phim=?";
   return pdo_query_one($sql,$id_phim);
}
function phimcungtheloai($tentl,$id_phim){
    $sql="SELECT *
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theLoai ON loaiphim.id_loai = theloai.id_loai
    WHERE theloai.tentl=? AND phim.id_phim!=? LIMIT 4;";
    return pdo_query($sql,$tentl,$id_phim);
}
function phimcungtheloai_all($id_loai){
    $sql="SELECT *
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theLoai ON loaiphim.id_loai = theloai.id_loai
    WHERE theloai.id_loai=?";
    return pdo_query($sql,$id_loai);
}
function phimcungtheloai_ten($id_loai){
    $sql="SELECT *
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theLoai ON loaiphim.id_loai = theloai.id_loai
    WHERE theloai.id_loai=? LIMIT 1";
    return pdo_query($sql,$id_loai);
}
function phimcungtheloai_luotxem($id_loai){
    $sql="SELECT *
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theLoai ON loaiphim.id_loai = theloai.id_loai
    WHERE theloai.id_loai=? ORDER BY phim.luotxem  DESC LIMIT 8";
    return pdo_query($sql,$id_loai);
}
?>