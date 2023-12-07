<?php
// require_once 'pdo.php';
function user_insert($username, $password)
{
    $sql = "INSERT INTO user(username,password) values(?,?)";
    pdo_execute($sql, $username, $password);
}

function user_select_all()
{
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}
function user_select_by_id($id)
{
    $sql = "SELECT * FROM user WHERE id_user=?";
    return pdo_query_one($sql, $id);
}
function user_update($name, $pass, $email, $role, $img, $id)
{
    $sql = "UPDATE user SET ten_user=?,pass=?,email=?,role=?,img_user=? WHERE id_user=?";
    pdo_execute($sql, $name, $pass, $email, $role, $img, $id,);
}
function user_thongke($limit)
{
    $sql = "SELECT * FROM user limit $limit";
    return pdo_query($sql);
}
function user_delete($id)
{
    $sql = "DELETE FROM user  WHERE id_user=?";
    return pdo_execute($sql, $id);
}

// functi
function user_get_img($id)
{
    $sql = "SELECT img_user FROM user  WHERE id_user=?";
    $user_getimg = pdo_query_one($sql, $id);
    return $user_getimg['img'];
}
function check_user($email, $pass)
{
    return pdo_query_one("SELECT * FROM user where email=? and pass=?", $email, $pass);
}
function userPackage_get()
{
    $sql = "SELECT user.ten_user, lsgiaodich.id_giaodich, lsgiaodich.ngaydk, lsgiaodich.ngayhethan, goi.giatri
    FROM user
    JOIN lsgiaodich ON user.id_user = lsgiaodich.id_user
    JOIN goi ON lsgiaodich.id_goi = goi.id_goi;
    
    ";
    return pdo_query($sql);
}
function userPackage_delete($id)
{
    $sql = "DELETE FROM lsgiaodich WHERE id_giaodich=?";
    pdo_execute($sql, $id);
}
//     $sql = "INSERT INTO user(username, password, email) VALUES (?, ?, ?)";
//     pdo_execute($sql, $username, $password, $email);
// }

// function user_update($username,$password,$email,$diachi,$dienthoai,$role,$id){
//     $sql = "UPDATE user SET username=?,password=?,email=?,diachi=?,dienthoai=?,role=? WHERE id=?";
//     pdo_execute($sql,$username,$password,$email,$diachi,$dienthoai,$role,$id);    
// }

// function checkuser($username,$password){
//     $sql="Select * from user where username=? and password=?";
//     return pdo_query_one($sql, $username,$password);
//     // if(is_array($kq)&&(count($kq))){
//     //     return $kq["id"];
//     // }else{
//     //     return 0;
//     // }
// }
// function get_user($id){
//     $sql="Select * from user where id=? ";
//     return pdo_query_one($sql, $id);
// }

// function user_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
//     $sql = "UPDATE user SET mat_khau=?,ho_ten=?,email=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1, $ma_kh);
// }

// function user_delete($ma_kh){
//     $sql = "DELETE FROM user  WHERE ma_kh=?";
//     if(is_array($ma_kh)){
//         foreach ($ma_kh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_kh);
//     }
// }

// function user_select_all(){
//     $sql = "SELECT * FROM user";
//     return pdo_query($sql);
// }

// function user_select_by_id($ma_kh){
//     $sql = "SELECT * FROM user WHERE ma_kh=?";
//     return pdo_query_one($sql, $ma_kh);
// }

// function user_exist($ma_kh){
//     $sql = "SELECT count(*) FROM user WHERE $ma_kh=?";
//     return pdo_query_value($sql, $ma_kh) > 0;
// }

// function user_select_by_role($vai_tro){
//     $sql = "SELECT * FROM user WHERE vai_tro=?";
//     return pdo_query($sql, $vai_tro);
// }

// function user_change_password($ma_kh, $mat_khau_moi){
//     $sql = "UPDATE user SET mat_khau=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau_moi, $ma_kh);
// }