<div class="main-content">
   <h3 class="title-page">
      Sửa gói
   <?php if(isset($thongbaopackageedit)): ?>
            <div class="alert alert-success">
                  <?= $thongbaopackageedit?>
            </div>
   <?php endif; unset($thongbaopackageedit); ?>
   <?php if(isset($loipackage2)): ?>
               <div class="alert alert-danger">
                     <?= $loipackage2?>
               </div>
   <?php endif; unset($loipackage2); ?>
   <div class="box500">
      <form class="addPro" action="" method="POST">

         <div class="form-group">
            <label for="name">Tên gói:</label>
            <input type="text" class="form-control" value="<?= $dsgoiedit['ten_goi']?>" name="name" id="name" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Giá trị:</label>
            <input type="text" class="form-control" value="<?= $dsgoiedit['giatri']?>" name="giatri" id="giatri" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Nội dung:</label>
            <input type="text" class="form-control" value="<?= $dsgoiedit['noidung']?>" name="noidung" id="noidung" placeholder="">
         </div>

         <div class="form-group">
            <button type="submit" name="btnedit" class="btn btn-primary">Sửa </button>
         </div>
         
      </form>
   </div>
</div>