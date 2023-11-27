<?php
ob_start();
include_once "Dao/pdo.php";
include_once "Dao/genre.php";
$theloai = theloai_getAll();

include_once "Dao/movie.php";
include_once "Dao/config.php";
include_once "Dao/actor.php";
include_once "Dao/comment.php";
include_once "View/header.php";
include_once "dao/d_user.php";

if (!isset($_GET['pg'])) {
    $luotview = phim_luotxem();
    $vip = phim_vip();
    $movie = phimmoi();
    $moviehd = hanhdong();
    $movietc = tinhcam();
    $moviekd = kinhdi();
    $movierole = phim_role();

    include "View/home.php";
} else {
    switch ($_GET['pg']) {
        case 'home':
            $luotview = phim_luotxem();
            $vip = phim_vip();
            $movie = phimmoi();
            $moviehd = hanhdong();
            $movietc = tinhcam();
            $moviekd = kinhdi();
            $movierole = phim_role();

            include_once "View/home.php";

            break;
        case 'genre':
            $tencungtheloai = phimcungtheloai_ten($_GET["id"]);
            $cacphimcungloai = phimcungtheloai_all($_GET["id"]);
            $theloailuotxem = phimcungtheloai_luotxem($_GET["id"]);

            include_once "View/genre.php";
            break;

        case 'about':
            include_once "View/about.php";
            break;

        case 'contact':
            include_once "View/contact.php";
            break;

        case 'detail':

            $chitiet = chitietphim($_GET["id"]);
            $cungtheloai = phimcungtheloai($chitiet["tentl"], $chitiet["id_phim"]);
            include_once "View/movie-detail.php";
            break;


            include_once "View/movie-detail.php";
            break;

        case 'watch':
            if ($_GET["tap"]) {
                $xuatphim = xuat_phimtap($_GET["id"], $_GET["tap"]);
            } else {
                $xuatphim = xuatphim($_GET["id"]);
            }

            $binhluan = binhluan($_GET["id"]);
            $dienvien = dienvien($_GET["id"]);
            $tap = xuat_tap($_GET["id"]);


            include_once "View/watch-video.php";
            break;

        case 'user':
            if (!isset($_SESSION['user'])) {
                $_SESSION['loi'] = 'bạn cần đăng nhập để hiển thị thông tin tài khoản';
                header('Location:?pg=dangnhap');
                return;
            }
            $maTK = $_SESSION['user']['id_user'];
            // Lấy ra thông tin của người dùng đã đăng nhập
            $hienthi = hienuser($maTK);
            // Lấy ra giá trị của trạng thái VIP
            $role = $hienthi['role'];
            // Sử dụng switch-case để hiển thị tên trạng thái
            switch ($role) {
                case 0:
                    $ten_role = "Chưa đăng ký";
                    break;
                case 1:
                    $ten_role = "Đã đăng ký";
                    break;
                case 2:
                    $ten_role = "<a href='' class='text'>admin</a>";
                    break;
                default:
                    $ten_role = "Không xác định";
                    break;
            }

            include_once "View/user.php";
            break;

        case 'bosuutap':
            include_once "View/collection.php";
            break;

        case 'lichsu':
            include_once "View/history.php";
            break;
        case 'dangnhap':
            if (isset($_POST['email']) && isset($_POST['pass'])) {
                $kq = dangnhap($_POST['email'], $_POST['pass']);
                if ($kq) {
                    $_SESSION['user'] = $kq;
                    header('Location: ?pg=home');
                } else {
                    $_SESSION['loi'] = 'Đăng nhập không thành công';
                }
            }
            include_once "View/login.php";
            break;
        case 'dangxuat':
            unset($_SESSION['user']);
            header('Location:?pg=home');
            break;
        case 'dangky':
            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $ten = $_POST['ten'];
                $pass = $_POST['pass'];
                $check = checkdk($email);
                if ($check) {
                    $_SESSION['loi'] = 'email của bạn đã tồn tại';
                } else {
                    dangky($email, $pass, $ten);
                    // Sau khi đăng ký thành công, đăng nhập ngay lập tức
                    $_SESSION['user'] = dangnhap($email, $pass);
                    header('Location: ?pg=home');
                }
            }
            include_once "view/signup.php";
            break;

        case 'login':
            include_once "View/login.php";
            break;

        case 'signup':
            include_once "View/signup.php";
            break;
        case 'search':
            $tim = tim_phim($_POST["search"]);
            include_once "View/search.php";
            break;

        default:
            include_once "View/home.php";
            break;
    }
}
include_once "View/footer.php";
ob_end_flush();
