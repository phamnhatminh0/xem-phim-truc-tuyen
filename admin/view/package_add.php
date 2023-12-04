<div class="main-content">
   <h3 class="title-page">
      Thêm gói
   <?php if(isset($thongbaopackageadd)): ?>
            <div class="alert alert-success">
                  <?= $thongbaopackageadd?>
            </div>
   <?php endif; unset($thongbaopackageadd); ?>
   <?php if(isset($loipackage)): ?>
               <div class="alert alert-danger">
                     <?= $loipackage?>
               </div>
   <?php endif; unset($loipackage); ?>
   <div class="box500">
      <form class="addPro" action="" method="POST">

         <div class="form-group">
            <label for="name">Tên gói:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Giá trị:</label>
            <input type="number" class="form-control" name="giatri" id="giatri" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Nội dung:</label>
            <textarea class="form-control" name="noidung" id="noidung" cols="30" rows="5"></textarea>
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
            alert("Bạn cần nhập tên gói");
            ten.focus();
            return false;
        }
        var input = document.getElementById("name").value;
      var check = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/;
        if(check.test(input)){
            alert("Tên gói bạn nhập có chứa ký tự đặc biệt!");
            ten.focus();
            return false;
        }
        var giatri = document.getElementById("giatri");
        if(giatri.value==""){
            alert("Bạn cần nhập giá trị");
            giatri.focus();
            return false;
        } 
    }
</script>