<?php
require_once 'pdo.php';
function ds_binhluan(){
    $sql="SELECT phim.ten,user.ten_user,binhluan.noidung,binhluan.ngaybl,binhluan.id_binhluan FROM binhluan JOIN phim ON binhluan.id_phim=phim.id_phim join user on binhluan.id_user=user.id_user";
    return pdo_query($sql);
}
// function binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl){
//     $sql = "INSERT INTO binh_luan(ma_kh, ma_hh, noi_dung, ngay_bl) VALUES (?,?,?,?)";
//     pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl);
// }

// function binh_luan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl){
//     $sql = "UPDATE binh_luan SET ma_kh=?,ma_hh=?,noi_dung=?,ngay_bl=? WHERE ma_bl=?";
//     pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $ma_bl);
// }

function binh_luan_delete($id){
    $sql = "DELETE FROM binhluan WHERE id_binhluan=?";
    // if(is_array($ma_bl)){
    //     foreach ($ma_bl as $ma) {
    //         pdo_execute($sql, $ma);
    //     }
    // }
    // else{
        pdo_execute($sql, $id);
    // }
}

// function binh_luan_select_all(){
//     $sql = "SELECT * FROM binh_luan bl ORDER BY ngay_bl DESC";
//     return pdo_query($sql);
// }

// function binh_luan_select_by_id($ma_bl){
//     $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
//     return pdo_query_one($sql, $ma_bl);
// }

// function binh_luan_exist($ma_bl){
//     $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl=?";
//     return pdo_query_value($sql, $ma_bl) > 0;
// }
// //-------------------------------//
// function binh_luan_select_by_hang_hoa($ma_hh){
//     $sql = "SELECT b.*, h.ten_hh FROM binh_luan b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
//     return pdo_query($sql, $ma_hh);
// }