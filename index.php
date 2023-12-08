<?php
session_start();
ob_start();
include_once "Dao/pdo.php";
include_once "Dao/genre.php";
$theloai = theloai_getAll();
include_once "Dao/goi.php";
$goivip = goi_all();
include_once "Dao/movie.php";
include_once "Dao/config.php";
include_once "Dao/actor.php";
include_once "Dao/comment.php";
include_once "View/header.php";
include_once "Dao/d_user.php";
include_once "Dao/history.php";
include_once "Dao/favorite.php";

if (!isset($_GET['pg'])) {
    $luotview = phim_luotxem();
    $vip = phim_vip();
    $movie = phimmoi();
    $moviehd = hanhdong();
    $movietc = tinhcam();
    $moviekd = kinhdi();
    $movierole = phim_role();

    // Kiểm tra xem biến $_SESSION['user'] có tồn tại và có giá trị hay không
    if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        $popup = $_SESSION['user']['id_user'];
        $anhien = hienuser($popup);
        // Gán giá trị mặc định cho biến $role là 0 nếu biến $anhien không có giá trị hoặc không có chỉ mục 'role'
        $role = $anhien['role'] ?? 0;
    } else {
        // Nếu biến $_SESSION['user'] không tồn tại hoặc không có giá trị, gán giá trị mặc định cho các biến $popup và $role là 0
        $popup = 0;
        $role = 0;
    }

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
            // Kiểm tra xem biến $_SESSION['user'] có tồn tại và có giá trị hay không
            if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                $popup = $_SESSION['user']['id_user'];
                $anhien = hienuser($popup);
                // Gán giá trị mặc định cho biến $role là 0 nếu biến $anhien không có giá trị hoặc không có chỉ mục 'role'
                $role = $anhien['role'] ?? 0;
            } else {
                // Nếu biến $_SESSION['user'] không tồn tại hoặc không có giá trị, gán giá trị mặc định cho các biến $popup và $role là 0
                $popup = 0;
                $role = 0;
            }
            include_once "View/home.php";
            break;

        case 'genre':
            $kq=gettheloai($_GET["id"]);
            if(isset($_GET["id"]) && $_GET["id"]>0 && is_numeric($_GET["id"]) && $kq!=null){
            $tencungtheloai = phimcungtheloai_ten($_GET["id"]);
            $cacphimcungloai = phimcungtheloai_all($_GET["id"]);
            $tims = phimcungtheloai_all_sap($_GET["id"]);
            }else {
                header('Location:?pg=home');
            }
            include_once "View/genre.php";
            break;
        case 'genrechinh':
            $phimtheloai1 = phimtheloai1();
            $phimtheloai2 = phimtheloai2();
            $phimtheloai3 = phimtheloai3();
            $phimtheloai4 = phimtheloai4();
            $phimtheloai5 = phimtheloai5();
            $phimtheloai6 = phimtheloai6();
            $phimtheloai7 = phimtheloai7();
            $phimtheloai8 = phimtheloai8();
            include_once "View/genrechinh.php";
            break;
        case 'genrenew':
            $phimmoicapnhat = phimmoicapnhat();
            $tims = phimmoicapnhat_sap();
            include_once "View/genrenew.php";
            break;
        case 'genrevip' :
                $phimvip = phimvip();
                $tims = phimvip_sap();
                include_once "View/genrevip.php";
                break;
        case 'about':
            $tongphim = movie_count();
            $tongtheloai = theloai_count();
            $tongTVDK = TVDK_count();
            $luotxem = luotxem_SUM();
            include_once "View/about.php";
            break;

        case 'contact':
            include_once "View/contact.php";
            break;

        case 'detail':
            $tap = xuat_tap($_GET["id"]);
            $theloai= theloai_getphim($_GET["id"]);
            $chitiet = chitietphim($_GET["id"]);
           if(isset($_GET["id"]) && $_GET["id"]>0 && is_numeric($_GET["id"]) && $chitiet["id_phim"]!=null ){
          
             if ($chitiet["trangthai"]==2 && $_SESSION["user"]["role"]==0 ) {
                if(!$_SESSION["user"]){
                    header('Location:?pg=dangnhap');
                }else{
                    header('Location:?pg=home');
                }
            }
            $cungtheloai = phimcungtheloai($chitiet["tentl"], $chitiet["id_phim"]);
            if($_SESSION["user"]){
            $kq=checkyeuthich($_GET["id"],($_SESSION["user"]["id_user"]));
            }
            if (isset($_POST["submit"]) && !$kq) {
                if($_SESSION["user"]){
                yeuthich($_GET["id"],$_SESSION["user"]["id_user"]);
            }else{
                header('Location:?pg=dangnhap');
            }
        }
    }else {
        header('Location:?pg=home');
    }
            include_once "View/movie-detail.php";
            break;

        case 'watch':
            $xuatphim = xuat_phimtap($_GET["id"], $_GET["tap"]);
            if(isset($_GET["id"]) && $_GET["id"]>0 && isset($_GET["tap"]) && $_GET["tap"]>0 &&  is_numeric($_GET["id"]) && is_numeric($_GET["tap"]) &&   $xuatphim["id_phim"]!=null && $xuatphim["id_tap"]!=null ){
            $binhluan = binhluan($_GET["id"]);
            $dienvien = dienvien($_GET["id"]);
            $tap = xuat_tap($_GET["id"]);
           
            if(isset($_POST["submit"])){
                if($_SESSION["user"]){
                them_bl($_SESSION["user"]["id_user"],$_GET["id"],$_POST["thembl"]);
                header('Location:?pg=watch&id='.$_GET['id'].'&tap='.$_GET["tap"]);
            }else{
                header('Location:?pg=dangnhap');
            }
               
            }
        }else {
            header('Location:?pg=home');
        }
      

            include_once "View/watch-video.php";

            break;


        case 'them':
            if ($_SESSION["user"]) {
                $kqls = check($_GET["tap"], ($_SESSION["user"]["id_user"]));

                if (!$kqls) {
                    lichsu($_GET["id"], $_SESSION["user"]["id_user"], $_GET["tap"]);
                }
            }
            luotxem($_GET["id"]);

            header('Location:?pg=watch&id=' . $_GET['id'] . '&tap=' . $_GET['tap']);
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
                    $ten_role = "<a href='?pg=admin' class='text'>admin</a>";
                    break;
                default:
                    $ten_role = "Không xác định";
                    break;
            }

            include_once "View/user.php";
            break;
        case 'edit_user':
            if (!isset($_SESSION['user'])) {
                $_SESSION['loi'] = 'Bạn cần đăng nhập để chỉnh sửa thông tin tài khoản';
                header('Location:?pg=dangnhap');
                return;
            }
            $maTK = $_SESSION['user']['id_user'];
            // Lấy ra thông tin của người dùng đã đăng nhập
            $hienthi = hienuser($maTK);

            if (isset($_POST['submit'])) {
                $ten_user = $_POST['ten_user'];
                $img_user = $_FILES['img_user'];

                // Kiểm tra xem Tên tài khoản có trống rỗng không
                if (empty($ten_user)) {
                    $_SESSION['loi'] = 'Tên tài khoản không được để trống';
                } else {
                    // Xử lý việc tải lên tệp
                    if ($img_user['error'] === 0) {
                        $anhuser = "Upload/images/user/";
                        $user_file = $anhuser . basename($img_user["name"]);
                        move_uploaded_file($img_user["tmp_name"], $user_file);
                        // Xóa tệp ảnh cũ
                        if (file_exists($anhuser . $hienthi["img_user"])) {
                            // Kiểm tra xem tệp có phải là avatar.png hay không
                            if ($hienthi["img_user"] != "avatar.png") {
                                // Nếu không phải, xóa tệp
                                unlink($anhuser . $hienthi["img_user"]);
                            }
                        }
                        edit_User($maTK, $ten_user, $img_user["name"]);
                        $_SESSION['user']['img_user'] = $img_user["name"]; // Cập nhật hình ảnh trong session
                        $_SESSION['loi'] = 'Thông tin tài khoản đã được cập nhật';
                    } else {
                        edit_User($maTK, $ten_user, $hienthi["img_user"]);
                        $_SESSION['loi'] = 'Thông tin tài khoản đã được cập nhật';
                    }
                    header('Location:?pg=user');
                    return;
                }
            }

            include_once "View/edit_user.php";
            break;


        case 'bosuutap':
            $maTK = $_SESSION['user']['id_user'];
            // Lấy ra thông tin của người dùng đã đăng nhập
            $hienthi = hienuser($maTK);

            $kqyt=getyt($_SESSION["user"]["id_user"]);
            include_once "View/collection.php";

            break;

        case 'lichsu':
            $maTK = $_SESSION['user']['id_user'];
            // Lấy ra thông tin của người dùng đã đăng nhập
            $hienthi = hienuser($maTK);

            $getls= getls($_SESSION["user"]["id_user"]);
            include_once "View/history.php";
            break;
        case 'dangnhap':
            if ($_SESSION['dagui'] == 1) {
                echo "<script type='text/javascript'>alert('Mật khẩu của bạn đã được gửi. Vui lòng kiểm tra email và đổi mật khẩu.');</script>";
                unset($_SESSION['dagui']);
            }

            if (isset($_POST['email']) && isset($_POST['pass'])) {
                $email = $_POST['email'];

                // Gọi hàm kiểm tra email hợp lệ
                $valid_email = check_email($email);

                // Nếu email không hợp lệ, gán giá trị cho biến $_SESSION['loi']
                if (!$valid_email) {
                    $_SESSION['loi'] = 'Mail của bạn không đúng cú pháp';
                } else {
                    // Nếu email hợp lệ, kiểm tra email đã tồn tại hay chưa
                    $kq = dangnhap($email, $_POST['pass']);
                    if ($kq) {
                        $_SESSION['user'] = $kq;
                        header('Location: ?pg=home');
                    } else {
                        $_SESSION['loi'] = 'Đăng nhập không thành công';
                    }
                }
            }

            include_once "View/login.php";
            break;
        case 'Forgotpassword':
            $kq = checkdk($_POST['email']);
            if ($kq) {
                $_SESSION['gmail'] = $kq;
                header('Location:PHPMailer/index.php');
            } else {
                $_SESSION['lổi'] = "email không tồn tại";
            }
            include_once "View/Forgotpassword.php";
            break;
        case 'dangxuat':
            unset($_SESSION['user']);
            header('Location:?pg=home');
            break;
        case 'dangky':
            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $ten_user = $_POST['ten_user'];
                $pass = $_POST['pass'];
                // Gọi hàm kiểm tra email hợp lệ
                $valid_email = check_email($email);
                // Nếu email không hợp lệ, gán giá trị cho biến $_SESSION['loi']
                if (!$valid_email) {
                    $_SESSION['loi'] = 'Mail của bạn không đúng cú pháp';
                } else {
                    // Nếu email hợp lệ, kiểm tra email đã tồn tại hay chưa
                    $check = checkdk($email);
                    if ($check) {
                        $_SESSION['loi'] = 'Mail của bạn đã tồn tại';
                    } else {
                        // Nếu email chưa tồn tại, thực hiện đăng ký
                        dangky($email, $pass, $ten_user);
                        // Sau khi đăng ký thành công, đăng nhập ngay lập tức
                        $_SESSION['user'] = dangnhap($email, $pass);
                        header('Location: ?pg=home');
                    }
                }
            }
            include_once "View/signup.php";
            break;
        case 'doimatkhau':
            if (!isset($_SESSION['user'])) {
                $_SESSION['loi'] = 'Bạn cần đăng nhập để chỉnh sửa thông tin tài khoản';
                header('Location:?pg=dangnhap');
                return;
            }
            $maTK = $_SESSION['user']['id_user'];
            // Lấy ra thông tin của người dùng đã đăng nhập
            $hienthi = hienuser($maTK);

            if (isset($_POST['submit'])) {
                $pass = $_POST['pass'];
                $mkmoi = $_POST['mkmoi'];
                $nlmk = $_POST['nlmk'];

                // Kiểm tra xem các trường có trống rỗng không
                if (empty($pass) || empty($mkmoi) || empty($nlmk)) {
                    $_SESSION['loi'] = 'Vui lòng nhập đầy đủ thông tin mật khẩu cũ, mật khẩu mới và nhập lại mật khẩu mới';
                } else {
                    $checkPass = checkmk($pass);
                    if ($checkPass) {
                        if ($mkmoi === $nlmk) {
                            // Passwords match, update the password
                            doiMatKhau($maTK, $mkmoi);
                            $_SESSION['loi'] = 'Đổi mật khẩu thành công';
                            header('Location:?pg=user');
                            return;
                        } else {
                            $_SESSION['loi'] = 'Mật khẩu mới và nhập lại mật khẩu mới không giống nhau';
                        }
                    } else {
                        $_SESSION['loi'] = 'Bạn đã nhập sai mật khẩu';
                    }
                }
            }

            include_once "View/changePassword.php";
            break;


        case 'search':
            if(!empty($_POST["search"])){
            $search = addslashes($_POST["search"]); // Thêm dấu gạch chéo vào trước các ký tự đặc biệt trong chuỗi tìm kiếm
            $tim = tim_phim($search); // Tìm phim với từ khóa đã được xử lý
            $tims = tim_phimsap($search); // Tìm sắp xếp với từ khóa a-z
            }else{
                header('Location: ?pg=home'); 
            }
            include_once "View/search.php";
            break;

        case 'admin':
            header('Location: admin/index.php');
            break;

        default:
            include_once "View/home.php";
            break;
    }
}
include_once "View/footer.php";
ob_end_flush();
