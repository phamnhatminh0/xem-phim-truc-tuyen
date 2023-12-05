<div class="main-content">
   <h3 class="title-page">
      Sửa phim
   </h3>
   <?php if(isset($tbMovieEdit)): ?>
   <div class="alert alert-warning">
         <?= $tbMovieEdit?>
   </div>
   <?php endif; unset($tbMovieEdit); ?>
   <?php if(isset($loi)): ?>
               <div class="alert alert-danger">
                     <?= $loi?>
               </div>
   <?php endif; unset($loi); ?>
   <div class="box500">
      <form class="addPro" action="" method="POST" enctype="multipart/form-data">

         <div class="form-group">
            <label for="name">Tên phim:</label>
            <input type="text" class="form-control" value="<?=$movie_getId['ten']?>" name="name" id="name" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Năm sản xuất:</label>
            <input type="number" class="form-control" value="<?=$movie_getId['namsx']?>" name="namsx" id="namsx" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Lượt xem:</label>
            <input type="text" class="form-control" value="<?=$movie_getId['luotxem']?>" name="luotxem" id="luotxem" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Mô tả:</label>
            <textarea class="form-control" name="mota" value="<?=$movie_getId['mota']?>"  id="mota" cols="10" rows="3"></textarea>
         </div>
         <div class="form-group">
            <label for="name">Tập:</label>
            <input type="text" class="form-control" value="<?=$movie_getId['tapphim']?>" name="tap" id="tap" placeholder="">
         </div> <div class="form-group">
            <label for="name">Video:</label>
            <input type="text" class="form-control" value="<?=$movie_getId['video']?>" name="video" id="video" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">trangthai:</label>
            <select class="form-select" name="trangthai" id="trangthai">
                <option value="0"  <?=($movie_getId['trangthai']==0)?'selected':''?>>0</option>
                <option value="1"  <?=($movie_getId['trangthai']==1)?'selected':''?>>1</option>
                <option value="2"  <?=($movie_getId['trangthai']==2)?'selected':''?>>2</option>
                <option value="3"  <?=($movie_getId['trangthai']==2)?'selected':''?>>3</option>
              </select>
         </div>
         <div class="form-group">
            <label for="name">Chọn hình ảnh:</label>
            <input type="file" class="form-control" name="img" id="img" placeholder="">
         </div>

         <div class="form-group">
            <button type="submit" onclick="return check_form()" name="btnupdate" class="btn btn-primary">Sửa</button>
         </div>
         <?php
            if(isset($tb)&&($tb!="")){ echo $tb;}
         ?>
      </form>
   </div>
</div>
<script>
  function check_form(){
        var ten = document.getElementById("name");
        if(ten.value==""){
            alert("Bạn cần nhập tên phim");
            ten.focus();
            return false;
        }
        var input = document.getElementById("name").value;
         var check = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/;
        if(check.test(input)){
            alert("Tên phim bạn nhập có chứa ký tự đặc biệt!");
            ten.focus();
            return false;
        }
        var namsx = document.getElementById("namsx");
        if(namsx.value==""){
            alert("Bạn cần nhập năm sản xuất");
            namsx.focus();
            return false;
        } 
        var img = document.getElementById("img");
        if(img.value==""){
            alert("Bạn cần thêm hình");
            ten.focus();
            return false;
        }
    }
</script>