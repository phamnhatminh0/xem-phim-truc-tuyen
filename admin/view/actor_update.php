<div class="main-content">
   <h3 class="title-page">
      Sửa thông tin diễn viên
   </h3>
   <?php if(isset($thongbaoactoredit)): ?>
               <div class="alert alert-warning">
                     <?= $thongbaoactoredit?>
               </div>
   <?php endif; unset($thongbaoactoredit); ?>
   <?php if(isset($actor2)): ?>
      <div class="alert alert-danger">
            <?= $actor2?>
      </div>
   <?php endif; unset($actor2); ?>
   <div class="box500">
      <form class="addPro" action="" method="POST" enctype="multipart/form-data">

         <div class="form-group">
            <label for="name">Tên diễn viên:</label>
            <input type="text" class="form-control" value="<?=$dsdvud['ten_dv']?>" name="name" id="name" placeholder="Nhập tên diễn viên">
         </div>
         <div class="form-group">
            <label for="name">thêm ảnh:</label>
            <input type="file" class="form-control" name="img" id="img" placeholder="">
         </div>

         <div class="form-group">
            <button type="submit" onclick="return check_form()" name="btnupdate" class="btn btn-primary">Sửa </button>
         </div>

      </form>
   </div>
</div>
<script>
  function check_form(){
        var ten = document.getElementById("name");
        if(ten.value==""){
            alert("Bạn cần nhập tên diễn viên");
            ten.focus();
            return false;
        }
        var input = document.getElementById("name").value;
          var check = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/;
        if(check.test(input)){
            alert("Tên diễn viên bạn nhập có chứa ký tự đặc biệt!");
            ten.focus();
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