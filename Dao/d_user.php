<?php
function dangnhap($email,$password){
    $sql= "SELECT * FROM user WHERE email = ? AND pass = ?";
    return pdo_query_one($sql,$email,$password);
}

function hienuser($maTK){
    // Sửa lại câu lệnh SQL để chỉ lấy ra thông tin của người dùng có id_user bằng với $maTK
    $sql = "SELECT * FROM user WHERE id_user = ?";
    return pdo_query_one($sql, $maTK);
}
function dangky($email,$pass,$ten){
    $sql = "INSERT INTO user(email, pass, ten) VALUES (?, ?, ?)";
    return pdo_execute($sql, $email, $pass, $ten);
}
function checkdk($email){
    $sql ="SELECT * FROM user WHERE email = ?";
    return pdo_query_one($sql,$email);
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
