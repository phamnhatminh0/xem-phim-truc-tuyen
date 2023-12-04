<?php session_start(); ?>
<?php
// $db_host = 'localhost';
// $db_user = 'root';
// $db_password = '';
// $db_name = 'mailer';
// $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
// if (!$conn) {
//     echo "Lỗi kết nối!!";
// }
include 'dao/pdo.php';
// $conn->query("set names 'utf8'");
date_default_timezone_set('Asia/Ho_Chi_Minh');

// $site = $conn->query("SELECT * FROM setting")->fetch_array();
// $site_favicon = $site['site_favicon'];
// $site_admin = $site['site_name_admin'];
// $site_logo = $site['site_logo'];
// $site_gmail = $site['site_gmail'];
// $site_pass = $site['site_pass'];
include_once('PHPMailer/class.smtp.php');
include_once('PHPMailer/PHPMailerAutoload.php');
include_once('PHPMailer/class.phpmailer.php');

function sendCSM($mail_nhan, $ten_nhan, $chu_de, $noi_dung, $bcc)
{
    global $site_gmail, $site_pass; 
    $bcc = 'Movieon';
    $mail = new PHPMailer();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = "html";
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sieutromsskid@gmail.com'; // Gmail người gửi
    $mail->Password = 'jszu xigo xqax kmjf'; // Mật khẩu
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('sieutromsskid@gmail.com', 'Mailer');
    $mail->addAddress($mail_nhan, $ten_nhan);
    // $mail->addReplyTo($site_gmail, $bcc);
    $mail->isHTML(true);
    $mail->Subject = $chu_de;
    $mail->Body    = $noi_dung;
    $mail->CharSet = 'UTF-8';
    $send = $mail->send();
    return $send;
}
function random($string, $int)
{
    return substr(str_shuffle($string), 0, $int);
}
function check_img($img)
{
    $filename = $_FILES[$img]['name'];
    $ext = explode(".", $filename);
    $ext = end($ext);
    $valid_ext = array("png", "jpeg", "jpg", "PNG", "JPEG", "JPG", "gif", "GIF");
    if (in_array($ext, $valid_ext)) {
        return true;
    }
}
function format_cash($price)
{
    return str_replace(",", ".", number_format($price));
}
function check_string($data)
{
    return str_replace(array('<', "'", '>', '?', '/', "\\", '--', 'eval(', '<php'), array('', '', '', '', '', '', '', '', ''), htmlspecialchars(addslashes(strip_tags($data))));
}
function XoaDauCach($text)
{
    return trim(preg_replace('/\s+/', ' ', $text));
}

function check_username($data)
{
    if (preg_match('/^[a-zA-Z0-9_-]{3,16}$/', $data, $matches)) {
        return True;
    } else {
        return False;
    }
}

function check_email($data)
{
    if (preg_match('/^.+@.+$/', $data, $matches)) {
        return True;
    } else {
        return False;
    }
}
function check_phone($data)
{
    if (preg_match('/^\+?(\d.*){3,}$/', $data, $matches)) {
        return True;
    } else {
        return False;
    }
}
if(isset($_SESSION['username']))
{ 
    $my_username = $_SESSION['username'];
    $user = $conn->query("SELECT * FROM users WHERE username = '$my_username' ")->fetch_array();
    $level = $user['level'];
}

?>