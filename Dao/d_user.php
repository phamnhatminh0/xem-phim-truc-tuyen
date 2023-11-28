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