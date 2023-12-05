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
function movie_insert($name, $namsx, $mota, $img,$video,$tap) {
    $sql = "INSERT INTO phim (ten, namsx, mota, img) VALUES (?, ?, ?, ?);
            INSERT INTO tap (id_phim, video, tapphim) VALUES (LAST_INSERT_ID(), ?, ?)";
    pdo_execute($sql, $name, $namsx,  $mota, $img, $video, $tap);
}
function movie_update($name,$namsx,$luotxem,$trangthai,$mota,$img, $video, $tap, $id){
    $sql = "UPDATE phim 
    INNER JOIN tap ON phim.id_phim = tap.id_phim
    SET phim.ten = ?,
        phim.namsx = ?,
        phim.luotxem = ?,
        phim.trangthai = ?,
        phim.mota = ?,
        phim.img = ?,
        tap.video = ?,
        tap.tapphim = ?
    WHERE phim.id_phim = ?";
    pdo_execute($sql,$name,$namsx,$luotxem,$trangthai,$mota,$img, $video, $tap, $id);
}
function movie_select_by_id($id){
    $sql = "SELECT * FROM phim join  tap on phim.id_phim=tap.id_phim  WHERE phim.id_phim=? ";
    return pdo_query_one($sql, $id);

}
function movie_all($page=1){
    $batdau=($page-1)*8;
    $sql = "SELECT * FROM phim join  tap on phim.id_phim=tap.id_phim limit $batdau,8";
    return pdo_query($sql);
}
function movie_delete($id) {
    // Nếu có quan hệ khóa ngoại, bạn có thể cần xóa các bản ghi từ bảng 'tap' trước
    $sqlDeleteTap = "DELETE FROM tap WHERE id_phim=?";
    pdo_execute($sqlDeleteTap, $id);

    // Sau đó, xóa bản ghi từ bảng 'phim'
    $sqlDeletePhim = "DELETE FROM phim WHERE id_phim=?";
    return pdo_execute($sqlDeletePhim, $id);
}
function movie_get_img($id){
    $sql = "SELECT img FROM phim  WHERE id_phim=?";
    $movie_getimg=pdo_query_one($sql,$id);
    return $movie_getimg['img'];
}
function movie_search($keyword,$page=1){
        $batdau=($page-1)*8;
        $sql="SELECT * FROM phim where ten like '%$keyword%' limit $batdau,8";
        return pdo_query($sql);
}
function movie_Pagination($keyword){
    $sql="SELECT count(*) FROM phim where ten like '%$keyword%' ";
    return pdo_query_value($sql);
}
function movie_checkName($name){
    return pdo_query_one("SELECT * from phim where ten=?",$name);
}
function movie_Pagination2($page=1){
    $batdau=($page-1)*8;
    $sql="SELECT * FROM phim  limit $batdau,8";
    return pdo_query($sql);
}
function movie_Pagination2b(){
    $sql="SELECT count(*) FROM phim ";
    return pdo_query_value($sql);
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