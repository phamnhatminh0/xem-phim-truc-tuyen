<?php
function dangnhap($email, $password)
{
    $sql = "SELECT * FROM user WHERE email = ? AND pass = ?";
    return pdo_query_one($sql, $email, $password);
}

function hienuser($maTK)
{
    // Sửa lại câu lệnh SQL để chỉ lấy ra thông tin của người dùng có id_user bằng với $maTK
    $sql = "SELECT * FROM user WHERE id_user = ?";
    return pdo_query_one($sql, $maTK);
}
function dangky($email, $pass, $ten_user)
{
    $sql = "INSERT INTO user(email, pass, ten_user) VALUES (?, ?, ?)";
    return pdo_execute($sql, $email, $pass, $ten_user);
}
function edit_User($id_user, $ten_user, $img_user)
{
    $sql = "UPDATE user SET ten_user = ?, img_user = ? WHERE id_user = ?";
    return pdo_execute($sql, $ten_user, $img_user, $id_user);
}
function checkdk($email)
{
    $sql = "SELECT * FROM user WHERE email = ?";
    return pdo_query_one($sql, $email);
}
function doiMatKhau($id_user, $pass)
{
    $sql = "UPDATE user SET pass = ? WHERE id_user = ?";
    return pdo_execute($sql, $pass, $id_user);
}
function upload($pass,$email)
{
    $sql = "UPDATE user
    SET pass =?
    WHERE email =?  ";
    return pdo_execute($sql,$pass,$email);
}

function checkmk($pass)
{
    $sql = "SELECT * FROM user WHERE pass = ?";
    return pdo_query_one($sql, $pass);
}
function check_email($email)
{
    // Kiểm tra email có chứa ký tự @ và có ít nhất một dấu chấm
    if (!strpos($email, "@") || !strpos($email, ".")) {
        return false;
    }
    // Kiểm tra email có đúng định dạng theo chuẩn RFC 822
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    // Nếu email hợp lệ, trả về true
    return true;
}
function doitrangthai($id_user){
    $sql = "UPDATE user SET role =1 WHERE id_user=?";
    pdo_execute($sql,$id_user);
}
function thongtinvip($id_goi,$id_user,$ngaydk,$ngayhethan)
{
    $sql = "INSERT INTO lsgiaodich (id_goi,id_user,ngaydk,ngayhethan) VALUES (?,?,?,?)";
    return pdo_execute($sql,$id_goi,$id_user,$ngaydk,$ngayhethan);
}
// function hienuser(){
//     $sql = "SELECT * FROM user";
//     return pdo_query($sql);
// }
?>
<!-- function dangnhap($email,$password){
    $sql= "SELECT * FROM user WHERE email = ?";
    $user = pdo_query_one($sql,$email);
    if($user && password_verify($password, $user['pass'])){
        return $user;
    }
    return false;
} -->