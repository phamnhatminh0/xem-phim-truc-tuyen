<div class="main-content">
   <h3 class="title-page">
      Thêm danh mục
   </h3>
   <?php if(isset($tbMovieAdd)): ?>
   <div class="alert alert-success">
         <?= $tbMovieAdd?>
   </div>
   <?php endif; unset($tbMovieAdd); ?>
   <?php if(isset($loi)): ?>
               <div class="alert alert-danger">
                     <?= $loi?>
               </div>
   <?php endif; unset($loi); ?>
   <div class="box500">
      <form class="addPro" action="" method="POST" enctype="multipart/form-data">

         <div class="form-group">
            <label for="name">Tên phim:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Năm sản xuất:</label>
            <input type="number" class="form-control" name="namsx" id="namsx" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Tập phim:</label>
            <input type="number" class="form-control" name="tap" id="tap" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">video:</label>
            <input type="text" class="form-control" name="video" id="video" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Mô tả:</label>
            <textarea class="form-control" name="mota" id="mota" cols="10" rows="3"></textarea>
         </div>
         <div class="form-group">
            <label for="name">Chọn hình ảnh:</label>
            <input type="file" class="form-control" name="img" id="img" placeholder="">
         </div>

         <div class="form-group">
            <button type="submit" onclick="return check_form()" name="btnadd" class="btn btn-primary">Thêm danh mục</button>
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