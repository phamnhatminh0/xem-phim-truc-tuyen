<div class="main-content">
   <h3 class="title-page">
      Thêm diễn viên
   </h3>
   <?php if(isset($thongbaoactoradd)): ?>
      <div class="alert alert-success">
            <?=$thongbaoactoradd?>
      </div>
   <?php endif; unset($thongbaoactoradd); ?>
   <?php if(isset($actor)): ?>
               <div class="alert alert-danger">
                     <?= $actor?>
               </div>
   <?php endif; unset($actor); ?>
   <div class="box500">
      <form class="addPro" action="" method="POST" enctype="multipart/form-data">

         <div class="form-group">
            <label for="name">Tên diễn viên:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên danh mục">
         </div>
         <div class="form-group">
            <label for="name">thêm ảnh:</label>
            <input type="file" class="form-control" name="img" id="img" placeholder="Nhập tên danh mục">
         </div>

         <div class="form-group">
            <button type="submit" onclick="return check_form()" name="btnadd" class="btn btn-primary">Thêm </button>
         </div>
        
      </form>
   </div>
</div>
<script>
  function check_form(){
        var ten = document.getElementById("name");
        if(ten.value==""){
           alert("Bạn chưa nhập tên  !");
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