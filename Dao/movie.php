<?php
function phimmoi(){
    $sql= "SElECT * FROM phim WHERE namsx = (SElECT MAX(namsx) FROM phim) AND trangthai != 2 lIMIT 4;";
    return pdo_query($sql);
}
function phimmoicapnhat(){
    $sql= "SElECT *
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theloai ON loaiphim.id_loai = theloai.id_loai
    WHERE phim.namsx = 2023 AND phim.trangthai != 1";
    return pdo_query($sql);
}
function phimvip(){
    $sql= "SElECT *
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theloai ON loaiphim.id_loai = theloai.id_loai
    WHERE phim.trangthai = 2 AND phim.trangthai != 1";
    return pdo_query($sql);
}

function hanhdong(){
    $sql= "SElECT *
    FROM phim P
    JOIN loaiphim lP ON P.id_phim = lP.id_phim
    JOIN theloai Tl ON lP.id_loai = Tl.id_loai
    WHERE Tl.tentl = 'hành động' AND P.trangthai != 1 AND P.trangthai != 2";
    return pdo_query($sql);
}
function tinhcam(){
    $sql= "SElECT *
    FROM phim P
    JOIN loaiphim lP ON P.id_phim = lP.id_phim
    JOIN theloai Tl ON lP.id_loai = Tl.id_loai
    WHERE Tl.tentl = 'tình cảm' AND P.trangthai != 1 AND P.trangthai != 2";
    return pdo_query($sql);
}
function kinhdi(){
    $sql= "SElECT *
    FROM phim P
    JOIN loaiphim lP ON P.id_phim = lP.id_phim
    JOIN theloai Tl ON lP.id_loai = Tl.id_loai
    WHERE Tl.tentl = 'kinh dị' AND P.trangthai != 1 AND P.trangthai != 2";
    return pdo_query($sql);
}
// hàm chưa sài
function phim_luotxem(){
    $sql= "SElECT * FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
   JOIN theloai ON loaiphim.id_loai = theloai.id_loai
   WHERE phim.trangthai != 2
    ORDER BY phim.luotxem  DESC
    lIMIT 4;";
    return pdo_query($sql);
}
function phim_role(){
    $sql= "SElECT * FROM phim WHERE trangthai=1";
    return pdo_query($sql);
}
function phim_vip(){
    $sql= "SElECT * FROM phim WHERE trangthai=2";
    return pdo_query($sql);
}
function chitietphim($id_phim){
   $sql="SElECT COUNT(tap.tapphim) AS tongsotap, phim.ten,phim.namsx,phim.mota,phim.id_phim,phim.img,theloai.tentl,tap.id_tap,phim.trangthai
   FROM phim
   JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
   JOIN theloai ON loaiphim.id_loai = theloai.id_loai
   JOIN tap ON phim.id_phim = tap.id_phim
   WHERE phim.id_phim =?
   GROUP BY phim.ten,phim.namsx,phim.mota,phim.id_phim,theloai.tentl,phim.img,tap.id_tap,phim.trangthai";
   return pdo_query_one($sql,$id_phim);
}
function phimcungtheloai($tentl,$id_phim){
    $sql="SElECT *
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theloai ON loaiphim.id_loai = theloai.id_loai
    WHERE theloai.tentl=? AND phim.id_phim!=?lIMIT 4;";
    return pdo_query($sql,$tentl,$id_phim);
}
function phimcungtheloai_all($id_loai){
    $sql="SElECT *
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theloai ON loaiphim.id_loai = theloai.id_loai
    WHERE theloai.id_loai=? AND phim.trangthai!=1";
    return pdo_query($sql,$id_loai);
}
function phimcungtheloai_ten($id_loai){
    $sql="SElECT *
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theloai ON loaiphim.id_loai = theloai.id_loai
    WHERE theloai.id_loai=? lIMIT 1";
    return pdo_query($sql,$id_loai);
}
function phimcungtheloai_luotxem($id_loai){
    $sql="SElECT *
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theloai ON loaiphim.id_loai = theloai.id_loai
    WHERE theloai.id_loai=? ORDER BY phim.luotxem  DESC lIMIT 8";
    return pdo_query($sql,$id_loai);
}
function xuatphim($id_phim){
    $sql="SElECT *
    FROM phim
    JOIN tap ON phim.id_phim=tap.id_phim 
    WHERE phim.id_phim=? AND tap.tapphim=1";
    return pdo_query_one($sql,$id_phim);
}
function xuat_phimtap($id_phim,$id_tap){
    $sql="SElECT *
    FROM phim
    JOIN tap ON phim.id_phim=tap.id_phim 
    WHERE phim.id_phim=? AND tap.id_tap=?";
    return pdo_query_one($sql,$id_phim,$id_tap);
}
function xuat_tap($id_phim){
    $sql="SElECT *
    FROM tap
    JOIN phim ON tap.id_phim =phim.id_phim
    WHERE phim.id_phim=?";
    return pdo_query($sql,$id_phim);
}
function tim_phim($ten){
$sql="SElECT * FROM phim WHERE ten lIKE '%$ten%'";
return pdo_query($sql);
}
function tim_phimsap($ten){
    $sql="SElECT * FROM phim WHERE ten lIKE '%$ten%' ORDER BY ten ASC";
return pdo_query($sql);
}

function luotxem($id_phim){
    $sql = "UPDATE phim SET luotxem = luotxem + 1 WHERE id_phim = ?";
 pdo_execute($sql,$id_phim);
}
function movie_count(){
    $sql="SElECT count(id_phim) FROM phim";
    return pdo_query_value($sql);
}
function theloai_count(){
    $sql="SElECT count(id_loai) FROM theloai";
    return pdo_query_value($sql);
}
function TVDK_count(){
    $sql="SElECT count(id_user) FROM user Where role = 1";
    return pdo_query_value($sql);
}
function luotxem_SUM(){
    $sql="SElECT SUM(luotxem) FROM phim";
    return pdo_query_value($sql);
}
function phimtheloai1(){
    $sql= "SElECT COUNT(tap.tapphim) AS tongsotap, phim.ten, phim.namsx, phim.mota, phim.id_phim, phim.img, theloai.tentl
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theloai ON loaiphim.id_loai = theloai.id_loai
    JOIN tap ON phim.id_phim = tap.id_phim
    WHERE loaiphim.id_loai = 1 AND phim.trangthai != 1
    GROUP BY phim.ten, phim.namsx, phim.mota, phim.id_phim, theloai.tentl, phim.img lIMIT 4";
    return pdo_query($sql);
}
function phimtheloai2(){
    $sql= "SElECT COUNT(tap.tapphim) AS tongsotap, phim.ten, phim.namsx, phim.mota, phim.id_phim, phim.img, theloai.tentl
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theloai ON loaiphim.id_loai = theloai.id_loai
    JOIN tap ON phim.id_phim = tap.id_phim
    WHERE loaiphim.id_loai = 2 AND phim.trangthai != 1
    GROUP BY phim.ten, phim.namsx, phim.mota, phim.id_phim, theloai.tentl, phim.img lIMIT 4";
    return pdo_query($sql);
}
function phimtheloai3(){
    $sql= "SElECT COUNT(tap.tapphim) AS tongsotap, phim.ten, phim.namsx, phim.mota, phim.id_phim, phim.img, theloai.tentl
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theloai ON loaiphim.id_loai = theloai.id_loai
    JOIN tap ON phim.id_phim = tap.id_phim
    WHERE loaiphim.id_loai = 3 AND phim.trangthai != 1
    GROUP BY phim.ten, phim.namsx, phim.mota, phim.id_phim, theloai.tentl, phim.img lIMIT 4";
    return pdo_query($sql);
}
function phimtheloai4(){
    $sql= "SElECT COUNT(tap.tapphim) AS tongsotap, phim.ten, phim.namsx, phim.mota, phim.id_phim, phim.img, theloai.tentl
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theloai ON loaiphim.id_loai = theloai.id_loai
    JOIN tap ON phim.id_phim = tap.id_phim
    WHERE loaiphim.id_loai = 4 AND phim.trangthai != 1
    GROUP BY phim.ten, phim.namsx, phim.mota, phim.id_phim, theloai.tentl, phim.img lIMIT 4";
    return pdo_query($sql);
}
function phimtheloai5(){
    $sql= "SElECT COUNT(tap.tapphim) AS tongsotap, phim.ten, phim.namsx, phim.mota, phim.id_phim, phim.img, theloai.tentl
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theloai ON loaiphim.id_loai = theloai.id_loai
    JOIN tap ON phim.id_phim = tap.id_phim
    WHERE loaiphim.id_loai = 5 AND phim.trangthai != 1
    GROUP BY phim.ten, phim.namsx, phim.mota, phim.id_phim, theloai.tentl, phim.img lIMIT 4";
    return pdo_query($sql);
}
function phimtheloai6(){
    $sql= "SElECT COUNT(tap.tapphim) AS tongsotap, phim.ten, phim.namsx, phim.mota, phim.id_phim, phim.img, theloai.tentl
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theloai ON loaiphim.id_loai = theloai.id_loai
    JOIN tap ON phim.id_phim = tap.id_phim
    WHERE loaiphim.id_loai = 6 AND phim.trangthai != 1
    GROUP BY phim.ten, phim.namsx, phim.mota, phim.id_phim, theloai.tentl, phim.img lIMIT 4";
    return pdo_query($sql);
}
function phimtheloai7(){
    $sql= "SElECT COUNT(tap.tapphim) AS tongsotap, phim.ten, phim.namsx, phim.mota, phim.id_phim, phim.img, theloai.tentl
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theloai ON loaiphim.id_loai = theloai.id_loai
    JOIN tap ON phim.id_phim = tap.id_phim
    WHERE loaiphim.id_loai = 7 AND phim.trangthai != 1
    GROUP BY phim.ten, phim.namsx, phim.mota, phim.id_phim, theloai.tentl, phim.img lIMIT 4";
    return pdo_query($sql);
}
function phimtheloai8(){
    $sql= "SElECT COUNT(tap.tapphim) AS tongsotap, phim.ten, phim.namsx, phim.mota, phim.id_phim, phim.img, theloai.tentl
    FROM phim
    JOIN loaiphim ON phim.id_phim = loaiphim.id_phim
    JOIN theloai ON loaiphim.id_loai = theloai.id_loai
    JOIN tap ON phim.id_phim = tap.id_phim
    WHERE loaiphim.id_loai = 8 AND phim.trangthai != 1
    GROUP BY phim.ten, phim.namsx, phim.mota, phim.id_phim, theloai.tentl, phim.img lIMIT 4";
    return pdo_query($sql);
}
?>

