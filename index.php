<?php
include_once "Dao/pdo.php";
include_once "View/header.php";

if (!isset($_GET['pg'])) {
   
    include "View/home.php";
} else {
    switch ($_GET['pg']) {
        case 'home':
            include_once "View/home.php";
           
            break;
        case 'genre':
            include_once "View/genre.php";
            break;

        case 'about':
            include_once "View/about.php";
            break;

        case 'contact':
            include_once "View/contact.php";
            break;

        case 'detail':
            include_once "View/movie-detail.php";
            break;

        case 'watch':
            include_once "View/watch-movie.php";
            break;

        default:
            include_once "View/home.php";
            break;
    }
}
include_once "View/footer.php";
