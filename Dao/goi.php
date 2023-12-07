<?php
require_once 'pdo.php';

// /**
//  * Thêm loại mới
//  * @param String $ten_danhmuc là tên loại
//  * @throws PDOException lỗi thêm mới
//  */
function goi_insert($name, $giatri, $noidung)
{
    $sql = "INSERT INTO goi(ten_goi,giatri,noidung) VALUES(?,?,?)";
    pdo_execute($sql, $name, $giatri, $noidung);
}
function goi_select_by_id($id)
{
    $sql = "SELECT * FROM goi WHERE id_goi=?";
    return pdo_query_one($sql, $id);
}
// /**
//  * Cập nhật tên loại
//  * @param int $ma_danhmuc là mã loại cần cập nhật
//  * @param String $ten_danhmuc là tên loại mới
//  * @throws PDOException lỗi cập nhật
//  */
function goi_update($id, $name, $giatri, $noidung)
{
    $sql = "UPDATE goi SET  ten_goi=?,giatri=?,noidung=? WHERE id_goi=?";
    pdo_execute($sql, $name, $giatri, $noidung, $id);
}
// function movietype_stt($limit){
//     $sql = "SELECT * FROM theloai  limit $limit  ";
//     return pdo_query($sql);
// }
// /**
//  * Xóa một hoặc nhiều loại
//  * @param mix $ma_danhmuc là mã loại hoặc mảng mã loại
//  * @throws PDOException lỗi xóa
//  */
function goi_delete($id)
{
    $sql = "DELETE FROM goi WHERE id_goi=?";
    //     // if(is_array($ma_danhmuc)){
    //     //     foreach ($ma_danhmuc as $ma) {
    //     //         pdo_execute($sql, $ma);
    //     //     }
    //     // }
    //     // else{
    pdo_execute($sql, $id);
    //     // }
}
function goi_checkName($name)
{
    return pdo_query_one("SELECT * from goi where ten_goi=?", $name);
}

/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function goi_all()
{
    $sql = "SELECT * FROM goi  ";
    return pdo_query($sql);
}
// function showdm($dsdm){
//     $html_dm='';
//     foreach ($dsdm as $dm) {
//         extract($dm);
//         $link='index.php?pg=sanpham&iddm='.$id;
//         $html_dm.='<a href="'.$link.'">'.$name.'</a>';
//     }
//     return $html_dm;
// }
// function get_name_dm($id){
//     $sql = "SELECT name FROM danhmuc WHERE id=".$id;
//     $kq=pdo_query_one($sql);
//     return $kq["name"];
// }

// /**
//  * Truy vấn một loại theo mã
//  * @param int $ma_danhmuc là mã loại cần truy vấn
//  * @return array mảng chứa thông tin của một loại
//  * @throws PDOException lỗi truy vấn
//  */
// function danhmuc_select_by_id($id){
//     $sql = "SELECT * FROM danhmuc WHERE id=?";
//     return pdo_query_one($sql, $id);
// }
// /**
//  * Kiểm tra sự tồn tại của một loại
//  * @param int $ma_danhmuc là mã loại cần kiểm tra
//  * @return boolean có tồn tại hay không
//  * @throws PDOException lỗi truy vấn
//  */
// function danhmuc_exist($ma_danhmuc){
//     $sql = "SELECT count(*) FROM danhmuc WHERE ma_danhmuc=?";
//     return pdo_query_value($sql, $ma_danhmuc) > 0;
// }