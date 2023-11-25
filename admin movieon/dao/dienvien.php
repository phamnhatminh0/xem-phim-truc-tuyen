<?php
require_once 'pdo.php';





function dienvien_all(){
    $sql = "SELECT * FROM dienvien ";
    return pdo_query($sql);
}
function dienvien_select_by_id($id){
    $sql = "SELECT * FROM dienvien  WHERE id_dienvien=?";
    return pdo_query_one($sql,$id);
}
function get_img($id){
    $sql = "SELECT img FROM dienvien  WHERE id_dienvien=?";
    $getimg=pdo_query_one($sql,$id);
    return $getimg['img'];
}
function dienvien_insert($name,$img){
    $sql = "INSERT INTO dienvien(ten,img) VALUES (?,?)";
    pdo_execute($sql, $name,$img);
}
function dienvien_update($id, $name,$img){
    $sql = "UPDATE dienvien SET  ten=?,img=? WHERE id_dienvien=?";
    pdo_execute($sql, $name,$img ,$id);
}
function dienvien_delete($id){
    $sql = "DELETE FROM dienvien WHERE  id_dienvien=?";
    // if(is_array($ma_hh)){
    //     foreach ($ma_hh as $ma) {
    //         pdo_execute($sql, $ma);
    //     }
    // }
    // else{
        pdo_execute($sql, $id);
    // }
}
// function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta) VALUES (?,?,?,?,?,?,?,?,?)";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta);
// }

// function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
// }

// function hang_hoa_delete($ma_hh){
//     $sql = "DELETE FROM hang_hoa WHERE  ma_hh=?";
//     if(is_array($ma_hh)){
//         foreach ($ma_hh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_hh);
//     }
// }

// function get_dssp_new($limi){
//     $sql = "SELECT * FROM sanpham ORDER BY id DESC limit ".$limi;
//     return pdo_query($sql);
// }
// function get_dssp_best($limi){
//     $sql = "SELECT * FROM sanpham WHERE bestseller=1 ORDER BY id DESC limit ".$limi;
//     return pdo_query($sql);
// }
// function get_dssp_view($limi){
//     $sql = "SELECT * FROM sanpham ORDER BY view DESC limit ".$limi;
//     return pdo_query($sql);
// }

// function get_dssp($kyw,$iddm,$limi){
//     $sql = "SELECT * FROM sanpham WHERE 1";
//     if($iddm>0){
//         $sql .=" AND iddm=".$iddm;
//     }
//     if($kyw!=""){
//         $sql .=" AND name like '%".$kyw."%'";
//     }

//     $sql .= " ORDER BY id DESC limit ".$limi;
//     return pdo_query($sql);
// }

// function get_sanphamchitiet($id){
//     $sql = "SELECT * FROM sanpham WHERE id=?";
//     return pdo_query_one($sql,$id);
// }

// function get_dssp_lienquan($iddm,$id,$limi){
//     $sql = "SELECT * FROM sanpham WHERE iddm=? AND id<>? ORDER BY id DESC limit ".$limi;
//     return pdo_query($sql,$iddm,$id);
// }

// function get_iddm($id){
//     $sql = "SELECT iddm FROM sanpham WHERE id=?";
//     return pdo_query_value($sql,$id);
// }

// function showsp($dssp){
//     $html_dssp='';
//     foreach ($dssp as $sp) {
//         extract($sp);
//         if($bestseller==1){
//             $best='<div class="best"></div>';
//         }else{
//             $best='';
//         }
//         $html_dssp.='<div class="box25 mr15">
//                             '.$best.'
//                             <a href="index.php?pg=sanphamchitiet&id='.$id.'">
//                                 <img src="layout/images/'.$img.'" alt="">
//                             </a>
//                             <span class="price">'.$price.' đ</span>
//                             <form action="index.php?pg=addcart" method="post">
//                                 <input type="hidden" name="name" value="'.$name.'">
//                                 <input type="hidden" name="img" value="'.$img.'">
//                                 <input type="hidden" name="price" value="'.$price.'">
//                                 <input type="hidden" name="soluong" value="1">
//                                 <button type="submit" name="addcart">Đặt hàng</button>
//                             </form>
                            
//                         </div>';
//     }
//     return $html_dssp;
// }

// function hang_hoa_select_by_id($ma_hh){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_one($sql, $ma_hh);
// }

// function hang_hoa_exist($ma_hh){
//     $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_value($sql, $ma_hh) > 0;
// }

// function hang_hoa_tang_so_luot_xem($ma_hh){
//     $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
//     pdo_execute($sql, $ma_hh);
// }

// function hang_hoa_select_top10(){
//     $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
//     return pdo_query($sql);
// }

// function hang_hoa_select_dac_biet(){
//     $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
//     return pdo_query($sql);
// }

// function hang_hoa_select_by_loai($ma_loai){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
//     return pdo_query($sql, $ma_loai);
// }

// function hang_hoa_select_keyword($keyword){
//     $sql = "SELECT * FROM hang_hoa hh "
//             . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
//             . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
//     return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
// }

// function hang_hoa_select_page(){
//     if(!isset($_SESSION['page_no'])){
//         $_SESSION['page_no'] = 0;
//     }
//     if(!isset($_SESSION['page_count'])){
//         $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
//         $_SESSION['page_count'] = ceil($row_count/10.0);
//     }
//     if(exist_param("page_no")){
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if($_SESSION['page_no'] < 0){
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if($_SESSION['page_no'] >= $_SESSION['page_count']){
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
//     return pdo_query($sql);
// }