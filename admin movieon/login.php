<?php
session_start();
include "./dao/pdo.php";
include "./dao/user.php";

if(isset($_POST['dangnhap'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $kq=check_user($email,$pass);
    if($kq){
        $_SESSION['user']=$kq;
        if($kq['role']==2){
            header('Location: index.php?pg=home');
        }else{
            // $_SESSION['tb']="Tài khoản của bạn không đủ quyền hạn để truy cập trang quản trị";
            header('Location: login.php');
          
        }
    }else{
       $_SESSION['loi']="Tài khoản hoặc mật khẩu không chính xác";
  
    }
}
   
   
   ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form login</title>
   <link rel="stylesheet" href="layout/assets/css/login.css">
</head>
<body>
   
    <div class="wrapper">
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="form">
            <h1>Sign In</h1>
            <form action=" " method="POST">
                <input type="text" name="email" id="email" placeholder="Nhập tài khoản">
                <input type="password" name="pass" id="pass" placeholder="Nhập mất khẩu">
                <button type="submit" name="dangnhap" >Login</button>
                <div class="forgot-signup">
                    <a href="">Forfot password?</a>
                    <a href="">Sign up</a>                   
                </div>
              <?php if(isset( $_SESSION['loi'])&&( $_SESSION['loi']!="")){
                    echo "<font color='red'>". $_SESSION['loi']."</font>";
                }unset($_SESSION['loi']);
              
                // if(isset( $_SESSION['tb'])&&( $_SESSION['tb']!="")){
                //     echo "<font color='blue'>". $_SESSION['tb']."</font>";
                // }unset($_SESSION['tb']);
              
                    ?>
                 
            </form>
        </div>
    </div>
</body>
</html>