<?php
require_once 'pdo.php';

// /**
//  * Thêm loại mới
//  * @param String $ten_danhmuc là tên loại
//  * @throws PDOException lỗi thêm mới
//  */
// function movietype_insert($name,$mota){
//     $sql = "INSERT INTO theloai(ten,mota) VALUES(?,?)";
//     pdo_execute($sql, $name,$mota);
// }
function movie_insert($name,$namsx,$luotxem,$trangthai,$mota,$img){
    $sql = "INSERT INTO phim(ten,namsx,luotxem,trangthai,mota,img) VALUES(?,?,?,?,?,?)";
    pdo_execute($sql, $name,$namsx,$luotxem,$trangthai,$mota,$img);
}
function movie_update($id,$name,$namsx,$luotxem,$trangthai,$mota,$img){
    $sql = "UPDATE phim SET  ten=?,namsx=?,luotxem=?,trangthai=?,mota=?,img=? WHERE id_phim=?";
    pdo_execute($sql,$name,$namsx,$luotxem,$trangthai,$mota,$img ,$id);
}
function movie_select_by_id($id){
    $sql = "SELECT * FROM phim WHERE id_phim=?";
    return pdo_query_one($sql, $id);
}
function movie_all(){
    $sql = "SELECT * FROM phim ";
    return pdo_query($sql);
}
function movie_delete($id){
    $sql = "DELETE FROM phim WHERE id_phim=?";
    return pdo_execute($sql,$id);
}
function movie_get_img($id){
    $sql = "SELECT img FROM phim  WHERE id_phim=?";
    $movie_getimg=pdo_query_one($sql,$id);
    return $movie_getimg['img'];
}
function movie_search($keyword){
        $sql="SELECT * FROM phim where ten like '%$keyword%'";
        return pdo_query($sql);
}
// function movietype_select_by_id($id){
//     $sql = "SELECT * FROM theloai WHERE id_loai=?";
//     return pdo_query_one($sql, $id);
// }
// /**
//  * Cập nhật tên loại
//  * @param int $ma_danhmuc là mã loại cần cập nhật
//  * @param String $ten_danhmuc là tên loại mới
//  * @throws PDOException lỗi cập nhật
//  */
// function movietype_update($id, $name,$mota){
//     $sql = "UPDATE theloai SET  ten=?,mota=? WHERE id_loai=?";
//     pdo_execute($sql, $name,$mota ,$id);
// }
// /**
//  * Xóa một hoặc nhiều loại
//  * @param mix $ma_danhmuc là mã loại hoặc mảng mã loại
//  * @throws PDOException lỗi xóa
//  */
// function movietype_delete($id){
//     $sql = "DELETE FROM theloai WHERE id_loai=?";
//     // if(is_array($ma_danhmuc)){
//     //     foreach ($ma_danhmuc as $ma) {
//     //         pdo_execute($sql, $ma);
//     //     }
//     // }
//     // else{
//         pdo_execute($sql, $id);
//     // }
// }
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function flim_all($limit){
    $sql = "SELECT * FROM phim order by luotxem desc limit $limit  ";
    return pdo_query($sql);
}
function flim_namsx($limit){
    $sql = "SELECT ten,namsx FROM phim order by namsx desc limit $limit  ";
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