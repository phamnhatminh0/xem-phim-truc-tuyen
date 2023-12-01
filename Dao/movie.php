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
    WHERE TL.tentl = 'hành động' AND P.trangthai != 1";
    return pdo_query($sql);
}
function tinhcam(){
    $sql= "SELECT *
    FROM phim P
    JOIN loaiphim LP ON P.id_phim = LP.id_phim
    JOIN theloai TL ON LP.id_loai = TL.id_loai
    WHERE TL.tentl = 'tình cảm' AND P.trangthai != 1";
    return pdo_query($sql);
}
function kinhdi(){
    $sql= "SELECT *
    FROM phim P
    JOIN loaiphim LP ON P.id_phim = LP.id_phim
    JOIN theloai TL ON LP.id_loai = TL.id_loai
    WHERE TL.tentl = 'kinh dị' AND P.trangthai != 1";
    return pdo_query($sql);
}
// hàm chưa sài
function phim_luotxem(){
    $sql= "SELECT * FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
   JOIN theLoai ON loaiphim.id_loai = theloai.id_loai
    ORDER BY phim.luotxem  DESC
    LIMIT 4;";
    return pdo_query($sql);
}
function phim_role(){
    $sql= "SELECT * FROM phim WHERE trangthai=1";
    return pdo_query($sql);
}
function phim_vip(){
    $sql= "SELECT * FROM phim WHERE trangthai=2";
    return pdo_query($sql);
}
function chitietphim($id_phim){
   $sql="SELECT COUNT(tap.tapphim) AS tongsotap, phim.ten,phim.namsx,phim.mota,phim.id_phim,phim.img,theloai.tentl
   FROM phim
   JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
   JOIN theLoai ON loaiphim.id_loai = theloai.id_loai
   JOIN tap ON phim.id_phim = tap.id_phim
   WHERE phim.id_phim =?
   GROUP BY phim.ten,phim.namsx,phim.mota,phim.id_phim,theloai.tentl,phim.img";
   return pdo_query_one($sql,$id_phim);
}
function phimcungtheloai($tentl,$id_phim){
    $sql="SELECT *
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theLoai ON loaiphim.id_loai = theloai.id_loai
    WHERE theloai.tentl=? AND phim.id_phim!=?LIMIT 4;";
    return pdo_query($sql,$tentl,$id_phim);
}
function phimcungtheloai_all($id_loai){
    $sql="SELECT *
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theLoai ON loaiphim.id_loai = theloai.id_loai
    WHERE theloai.id_loai=? AND phim.trangthai!=1";
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
function xuatphim($id_phim){
    $sql="SELECT *
    FROM phim
    JOIN tap ON phim.id_phim=tap.id_phim 
    WHERE phim.id_phim=? AND tap.tapphim=1";
    return pdo_query_one($sql,$id_phim);
}
function xuat_phimtap($id_phim,$id_tap){
    $sql="SELECT *
    FROM phim
    JOIN tap ON phim.id_phim=tap.id_phim 
    WHERE phim.id_phim=? AND tap.id_tap=?";
    return pdo_query_one($sql,$id_phim,$id_tap);
}
function xuat_tap($id_phim){
    $sql="SELECT *
    FROM tap
    JOIN phim ON tap.id_phim =phim.id_phim
    WHERE phim.id_phim=?";
    return pdo_query($sql,$id_phim);
}
function tim_phim($ten){
$sql="SELECT * FROM phim WHERE ten LIKE '%$ten%'";
return pdo_query($sql);
}
?>
