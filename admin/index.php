<?php
   session_start();
   include "../Dao/pdo.php";
   include "../Dao/theloai.php";
   include "../Dao/dienvien.php";
   include "../Dao/user.php";
   include "../Dao/thong-ke.php";
   include "../Dao/phim.php";
   include "../Dao/binh-luan.php";
   include "../Dao/goi.php";
   // if(isset($_SESSION['user'])&& $_SESSION['user']==2){
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
               include "view/header.php";
                  include "view/home.php";
               break;
            case 'movietype':
               $dstl=danhmuc_all();
               include "view/header.php";
               include "view/movietype.php";
               break;
                      // chức năng thêm sửa xóa loại phim
                     case 'movietype_add':
                        if(isset($_POST['btnadd'])){
                           $name=$_POST['name'];
                           $mota=$_POST['mota'];
                           $kq=movietype_checkName($name);
                           if($kq){
                              $loi="Tên loại phim bạn nhập đã tồn tại vui lòng nhập lại!";
                           }else{
                           movietype_insert($name,$mota);
                           $thongbaotheloaiadd="Bạn đã thêm thể loại mới thành công!";
                           }
                        }
                        include "view/header.php";
                        include "view/movietype_add.php";
                        break;
                     case 'movietype_update':
                        $id=$_GET['id'];
                        if(isset($_POST['btnupdate'])){
                           $name=$_POST['name'];
                           $mota=$_POST['mota'];
                           $kq=movietype_checkName($name);
                           if($kq){
                              $loi="Tên loại phim bạn nhập đã tồn tại vui lòng nhập lại!";
                           }else{
                        movietype_update($id, $name,$mota);                
                        $thongbaotheloaiedit="Bạn đã sửa thể loại phim thành công";
                        }
                        }
                        $dstlud= movietype_select_by_id($id);
                        include "view/header.php";
                           include "view/movietype_update.php";
                              break;
                     case 'delmovietype':
                        if(isset($_GET['id'])&&($_GET['id'])>0){
                           $id=$_GET['id'];
                           movietype_delete($id);
                        }
                        
                        header('Location:index.php?pg=movietype');
                      break;
                       // chức năng thêm sửa xóa loại phim
           
            case 'movie':
               $dsMovie=movie_all();
               include "view/header.php";
               include "view/movie.php";
               break;
                  case 'movie_add':
                     if(isset($_POST['btnadd'])){
                        $name=$_POST['name'];
                        $namsx=$_POST['namsx'];
                        $mota=$_POST['mota'];
                        $img=$_FILES['img']['name'];
                        $kq=movie_checkName($name);
                        if($kq){
                           $loi="Phim bạn nhập  đã tồn tại vui lòng nhập lại phim";
                        }else{
                           movie_insert($name,$namsx,$mota,$img);
                           $target_dir = "images/movie/";
                           $target_file = $target_dir . basename($_FILES["img"]["name"]);
                           move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);             
                           $tbMovieAdd="Bạn đã thêm phim thành công vào danh sách phim!";
                        }
                     }
                     include "view/header.php";
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
                           $kq=movie_checkName($name);
                           if($kq){
                              $loi="Phim bạn nhập  đã tồn tại vui lòng nhập lại phim";
                           }else{     
                              
                              movie_update($id,$name,$namsx,$luotxem,$trangthai,$mota,$img);
                              $target_dir = "images/movie/";
                              $target_file = $target_dir . basename($_FILES["img"]["name"]);
                              move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);             
                              $tbMovieEdit="Bạn đã sửa thông tin phim thành công thành công!";
                           }
                        }
                       $movie_getId= movie_select_by_id($id);
                        }
                        include "view/header.php";
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
                           header('Location:index.php?pg=movie');
                        break;
                  case 'movie_search':
                              if(isset($_POST['keyword'])){
                                 header("Location: index.php?pg=movie_search&keyword=".$_POST['keyword']."");
                              }
                              $page = 1;
                              if(isset($_GET['page'])){
                                 $page=$_GET['page'];
                              }
                              $sotrang=ceil(movie_Pagination($_GET['keyword'])/8);
                              $kq=movie_search($_GET['keyword'],$page);
                              include "view/header.php";
                              include "view/movie_search.php";
                              break;
            case 'actor':
              $dsdv= dienvien_all();
              include "view/header.php";
               include "view/actor.php";
               break;
               //chức năng thêm xóa sửa diễn viên
            case 'actor_add':
                  if(isset($_POST['btnadd'])){
                     //lấy dữ liệu về
                     $name=$_POST['name'];
                     $img=$_FILES['img']['name'];
                     //insert into
                     $kq=dienvien_checkName($name);
                     if($kq){
                        $actor="Diễn viên đã tồn tại ";
                     }else{
                        
                        dienvien_insert($name,$img);
                        //upload hình ảnh
                        $target_dir = "images/actor/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                        $thongbaoactoradd="Bạn đã thêm diễn viên  mới thành công thành công!";
                     }
                  }
                  include "view/header.php";
                  include "view/actor_add.php";
                  break;
            case 'actor_update':
                        $id=$_GET['id'];
                        if(isset($_POST['btnupdate'])){
                           $name=$_POST['name'];
                           $img=$_FILES['img']['name'];
                           $kq=dienvien_checkName($name);
                           if($kq){
                              $actor2="Tên diễn viên đã tồn tại";
                           }else{
   
                              dienvien_update($id, $name,$img);  
                              $target_dir = "images/actor/";
                              $target_file = $target_dir . basename($_FILES["img"]["name"]);
                              move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);             
                              $thongbaoactoredit="Bạn đã sửa thông tin diễn viên thành công!";
                           }
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
                              include "view/header.php";
                              header('Location: index.php?pg=actor');
                              break;
                   //chức năng thêm xóa sửa diễn viên
            case 'users':
              $dsur= user_select_all();
              include "view/header.php";
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
                        $target_dir = "images/user/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);             
                       $tbUserEdit="Bạn đã sửa thông tin người dùng thành công!";
                     }
                  }
                  include "view/header.php";
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
                    header('Location:index.php?pg=users');
                      break;
            case 'package':
               $dsgoi=goi_all();
               include "view/header.php";
               include "view/package.php";
               break;
                case 'package_add':
                  if(isset($_POST['btnadd'])){
                     $name=$_POST['name'];
                     $giatri=$_POST['giatri'];
                     $noidung=$_POST['noidung'];
                     $kq=goi_checkName($name);
                     if($kq){
                        $loipackage="Tên gói bạn nhập đã tồn tại vui lòng nhập lại!";
                     }else{
                        goi_insert($name,$giatri,$noidung);
                     $thongbaopackageadd="Bạn đã thêm gói mới thành công!";
                     }
                  }
   
                  include "view/header.php";
                  include "view/package_add.php";
                  break;
                  case 'package_edit':
                     if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        if(isset($_POST['btnedit'])){
                           $name=$_POST['name'];
                           $giatri=$_POST['giatri'];
                           $noidung=$_POST['noidung'];
                           $kqgoi=goi_checkName($name);
                           if($kqgoi){
                              $loipackage2="Tên gói bạn nhập đã tồn tại vui lòng nhập lại!";
                           }else{
                              goi_update($id,$name,$giatri,$noidung);
                           $thongbaopackageedit="Bạn đã sửa gói mới thành công!";
                           }
                        }
                       $dsgoiedit= goi_select_by_id($id);
                     }
                     include "view/header.php";
                     include "view/package_edit.php";
                     break;
                     case 'delpackage':
                        $id=$_GET['id'];
                        goi_delete($id);
                        header('Location:index.php?pg=package');
                        break;
            case 'comment':
              
               $dsbl=ds_binhluan();
               include "view/header.php";
               include "view/comment.php";
               break;
            case 'delcomment':
                     if(isset($_GET['id'])&&($_GET['id'])>0){
                        $id=$_GET['id'];
                     binh_luan_delete($id);
                     }
                     header('Location:index.php?pg=comment');
                     break;
   
            case 'logout':
              unset($_SESSION['user']);
              header('Location: login.php');
            default:
               break;
         }
         include "view/footer.php";
      } else{
         header('Location: index.php?pg=home');
      }
      
   
   // }
  
   
?>