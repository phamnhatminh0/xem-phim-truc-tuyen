<?php
include_once "Dao/pdo.php";
include_once "Dao/genre.php";
$theloai=theloai_getAll();

include_once "Dao/movie.php";
include_once "Dao/config.php";
include_once "Dao/actor.php";
include_once "Dao/comment.php";
include_once "View/header.php";

if (!isset($_GET['pg'])) {
   
            $movie=phimmoi();
            $moviehd=hanhdong();
            $movielx=phim_luotxem();

    include "View/home.php";
} else {
    switch ($_GET['pg']) {
        case 'home':
            $movie=phimmoi();
            $moviehd=hanhdong();
            $movielx=phim_luotxem();
        
            include_once "View/home.php";

            break;
        case 'genre':
             $tencungtheloai=phimcungtheloai_ten($_GET["id"]);
            $cacphimcungloai=phimcungtheloai_all($_GET["id"]);
            $theloailuotxem= phimcungtheloai_luotxem($_GET["id"]);

            include_once "View/genre.php";
            break;

        case 'about':
            include_once "View/about.php";
            break;

        case 'contact':
            include_once "View/contact.php";
            break;

        case 'detail':

            $chitiet=chitietphim($_GET["id"]);
            $cungtheloai= phimcungtheloai($chitiet["tentl"],$chitiet["id_phim"]);
            include_once "View/movie-detail.php";
            break;


            include_once "View/movie-detail.php";
            break;

        case 'watch':
             if($_GET["tap"]){
                $xuatphim=xuat_phimtap($_GET["id"],$_GET["tap"]);
             }else{
                $xuatphim=xuatphim($_GET["id"]);
             }
           
            $binhluan=binhluan($_GET["id"]);
            $dienvien=dienvien($_GET["id"]);
            $tap=xuat_tap($_GET["id"]);
           
         
            include_once "View/watch-video.php";
            break;

        case 'user':
            include_once "View/user.php";
            break;

        case 'bosuutap':
            include_once "View/collection.php";
            break;

        case 'lichsu':
            include_once "View/history.php";
            break;
            case 'admin':
                include_once "adminmovieon/index.php";
                break;

        default:
            include_once "View/home.php";
            break;
    }
}
include_once "View/footer.php";
