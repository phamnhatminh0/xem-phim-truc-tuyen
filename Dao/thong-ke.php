<?php
require_once 'pdo.php';


function thongkephim(){
    $sql = "SELECT count(id_phim) as soluong FROM phim ";
    return pdo_query_one($sql );
}
function thongkeloai(){
    $sql = "SELECT count(id_loai) as tongloai FROM theloai ";
    return pdo_query_one($sql );
}
function thongkeView(){
    $sql = "SELECT sum(luotxem) as tongxem FROM phim ";
    return pdo_query_one($sql );
}
function thongkeUser(){
    $sql = "SELECT count(id_user) as tonguser FROM user ";
    return pdo_query_one($sql );
}

function check_mail($mail_nhan){
    return pdo_query("SELECT * From user where email=?",$mail_nhan);
}


// function thong_ke_hang_hoa(){
//     $sql = "SELECT lo.ma_loai, lo.ten_loai,"
//             . " COUNT(*) so_luong,"
//             . " MIN(hh.don_gia) gia_min,"
//             . " MAX(hh.don_gia) gia_max,"
//             . " AVG(hh.don_gia) gia_avg"
//             . " FROM hang_hoa hh "
//             . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
//             . " GROUP BY lo.ma_loai, lo.ten_loai";
//     return pdo_query($sql);
// }

// function thong_ke_binh_luan(){
//     $sql = "SELECT hh.ma_hh, hh.ten_hh,"
//             . " COUNT(*) so_luong,"
//             . " MIN(bl.ngay_bl) cu_nhat,"
//             . " MAX(bl.ngay_bl) moi_nhat"
//             . " FROM binh_luan bl "
//             . " JOIN hang_hoa hh ON hh.ma_hh=bl.ma_hh "
//             . " GROUP BY hh.ma_hh, hh.ten_hh"
//             . " HAVING so_luong > 0";
//     return pdo_query($sql);
// }