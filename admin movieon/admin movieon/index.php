<?php

   include "./dao/pdo.php";
   include "./dao/theloai.php";
   include "./dao/dienvien.php";
   include "view/header.php";
   include "./dao/user.php";
   include "./dao/thong-ke.php";
   include "./dao/phim.php";
   if(isset($_GET['pg'])){
      switch ($_GET['pg']) {
         case 'home':
         $tkflim=thongkephim();
         $tkloai= thongkeloai();
         $tkView=thongkeView();
         $tkUser=thongkeUser();
         $dsflim= flim_all(6);
         $dsflimNamsx= flim_namsx(8);
         $dsUser=user_thongke(5);
         $dsTheLoai=movietype_stt(7);
            include "view/home.php";
            break;
         case 'movietype':
            $dstl=danhmuc_all();
            include "view/movietype.php";
            break;
                   // chức năng thêm sửa xóa loại phim
                  case 'movietype_add':
                     if(isset($_POST['btnadd'])){
                        $name=$_POST['name'];
                        $mota=$_POST['mota'];
                        movietype_insert($name,$mota);
                        $tb="Bạn đã thêm thành công!";
                     }
                     include "view/movietype_add.php";
                     break;
                        case 'movietype_update':
                           $id=$_GET['id'];
                           if(isset($_POST['btnupdate'])){
                              $name=$_POST['name'];
                              $mota=$_POST['mota'];
                           movietype_update($id, $name,$mota);                
                              $tb="Bạn đã sửa thành công!";
                           }
                        $dstlud= movietype_select_by_id($id);
                           include "view/movietype_update.php";
                           break;
                              case 'delmovietype':
                                 $id=$_GET['id'];
                                 movietype_delete($id);
                                 $dstl=danhmuc_all();
                                 include "view/movietype.php";
                   break;
                    // chức năng thêm sửa xóa loại phim
        
         case 'movie':
            $dsMovie=movie_all();
            include "view/movie.php";
            break;
               case 'movie_add':
                  if(isset($_POST['btnadd'])){
                     $name=$_POST['name'];
                     $namsx=$_POST['namsx'];
                     $luotxem=$_POST['luotxem'];
                     $trangthai=$_POST['trangthai'];
                     $mota=$_POST['mota'];
                     $img=$_FILES['img']['name'];
                     movie_insert($name,$namsx,$luotxem,$trangthai,$mota,$img);
                     $target_dir = "upload/movie/";
                     $target_file = $target_dir . basename($_FILES["img"]["name"]);
                     move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);             
                     $tbMovieAdd="Bạn đã thêm phim thành công vào danh sách phim!";
                  }
                  include "view/movie_add.php";
                  break;
                  case 'movie_update':
                     if(isset($_GET['id'])&&($_GET['id'])>0){
                        $id=$_GET['id'];
                           if(isset($_POST['btnupdate'])){
                        $name=$_POST['name'];
                        $namsx=$_POST['namsx'];
                        $luotxem=$_POST['luotxem'];
                        $trangthai=$_POST['trangthai'];
                        $mota=$_POST['mota'];
                        $img=$_FILES['img']['name'];
                        movie_update($id,$name,$namsx,$luotxem,$trangthai,$mota,$img);
                        $target_dir = "upload/movie/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);             
                        $tbMovieEdit="Bạn đã sửa thông tin phim thành công thành công!";
                     }
                    $movie_getId= movie_select_by_id($id);
                     }
                     include "view/movie_update.php";
                     break;
                     case 'delmovie':
                        if(isset($_GET['id'])&&($_GET['id'])>0){
                           $id=$_GET['id'];
                           $img="upload/movie/".movie_get_img($id);
                           if(is_file($img)){
                              unlink($img);
                           } 
                           try {
                              //code...
                              movie_delete($id);
                              } catch (\Throwable $th) {
                                 //throw $th;
                              }
                        }
                        $dsMovie=movie_all();
                     include "view/movie.php";
                     break;
                        case 'movie_search':
                           $kq=movie_search($_POST['keyword']);
                           include "view/movie_search.php";
                           break;
         case 'actor':
           $dsdv= dienvien_all();
            include "view/actor.php";
            break;
            //chức năng thêm xóa sửa diễn viên
            case 'actor_add':
               if(isset($_POST['btnadd'])){
                  //lấy dữ liệu về
                  $name=$_POST['name'];
                  $img=$_FILES['img']['name'];
                  //insert into
                  dienvien_insert($name,$img);
                  //upload hình ảnh
                  $target_dir = "upload/actor/";
                  $target_file = $target_dir . basename($_FILES["img"]["name"]);
                  move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                  $thongbaoactoradd="Bạn đã thêm diễn viên  mới thành công thành công!";
               }
               include "view/actor_add.php";
               break;
                  case 'actor_update':
                     $id=$_GET['id'];
                     if(isset($_POST['btnupdate'])){
                        $name=$_POST['name'];
                        $img=$_FILES['img']['name'];
                        dienvien_update($id, $name,$img);  
                        $target_dir = "upload/actor/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);             
                        $thongbaoactoredit="Bạn đã sửa thông tin diễn viên thành công!";
                     }
                  $dsdvud= dienvien_select_by_id($id);
                     include "view/actor_update.php";
                     break;
                        case 'delactor':
                           if(isset($_GET['id'])&&($_GET['id'])>0){
                              $id=$_GET['id'];
                              
                           
                              $img="upload/actor/".get_img($id);
                              if(is_file($img)){
                                 unlink($img);
                              } 
                              try {
                                 //code...
                                 dienvien_delete($id);
                              } catch (\Throwable $th) {
                                 //throw $th;
                              }
                           }
                           $dsdv= dienvien_all();
                           include "view/actor.php";
                           break;
                //chức năng thêm xóa sửa diễn viên
         case 'users':
           $dsur= user_select_all();
            include "view/users.php";
            break;
            case 'users_update':
               if(isset($_GET['id'])&&($_GET['id'])>0){
                     $id=$_GET['id'];
                  $uptk=user_select_by_id($id);
                  if(isset($_POST['btnupdate'])){
                     $name=$_POST['name'];
                     $pass=$_POST['pass'];
                     $email=$_POST['email'];
                     $role=$_POST['role'];
                     $img=$_FILES['img']['name'];
                     user_update($name,$pass,$email,$role,$img,$id);
                     $target_dir = "upload/user/";
                     $target_file = $target_dir . basename($_FILES["img"]["name"]);
                     move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);             
                    $tbUserEdit="Bạn đã sửa thông tin người dùng thành công!";
                  }
               }
                include "view/users_update.php";
                break;
                case 'delusers':
                  if(isset($_GET['id'])&&($_GET['id'])>0){
                     $id=$_GET['id'];
                     $img="upload/user/".user_get_img($id);
                     if(is_file($img)){
                        unlink($img);
                     } 
                     try {
                        //code...
                        user_delete($id);
                     
                     } catch (\Throwable $th) {
                        //throw $th;
                     }
                  }
                  $dsur= user_select_all();
                   include "view/users.php";
                   break;
         case 'package':
            include "view/package.php";
            break;
         case 'comment':
            include "view/comment.php";
            break;

         default:
            break;
      }
   }
   else{
      header('Location: index.php?pg=home');
   }

   include "view/footer.php";
?>