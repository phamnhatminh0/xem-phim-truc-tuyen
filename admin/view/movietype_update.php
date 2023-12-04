<div class="main-content">
   <h3 class="title-page">
      Thêm loại
   </h3>
   <?php if(isset($thongbaotheloaiedit)): ?>
                        <div class="alert alert-warning">
                            <?= $thongbaotheloaiedit?>
                        </div>
   <?php endif; unset($thongbaotheloaiedit); ?>
   <?php if(isset($loi)): ?>
               <div class="alert alert-danger">
                     <?= $loi?>
               </div>
   <?php endif; unset($loi); ?>
   <div class="box500">
      <form class="addPro" action="" method="POST">

         <div class="form-group">
            <label for="name">Tên phim:</label>
            <input type="text" class="form-control" value="<?=$dstlud['tentl']?>"  name="name" id="name" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Mô tả:</label>
            <input type="text" class="form-control" value="<?=$dstlud['mota']?>" name="mota" id="mota" placeholder="">
         </div>

         <div class="form-group">
            <button type="submit" onclick="return check_form()" name="btnupdate" class="btn btn-primary">Sửa </button>
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
            alert("Bạn cần nhập thể loại phim");
            ten.focus();
            return false;
        }
        var input = document.getElementById("name").value;
      var check = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/;
        if(check.test(input)){
            alert("Tên loại phim bạn nhập có chứa ký tự đặc biệt!");
            ten.focus();
            return false;
        }
 
    }
</script>