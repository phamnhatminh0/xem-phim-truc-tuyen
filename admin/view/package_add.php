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
            <input type="text" class="form-control" name="giatri" id="giatri" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Nội dung:</label>
            <input type="text" class="form-control" name="noidung" id="noidung" placeholder="">
         </div>

         <div class="form-group">
            <button type="submit" name="btnadd" class="btn btn-primary">Thêm </button>
         </div>
         
      </form>
   </div>
</div>