<div class="main-content">
   <h3 class="title-page">
      Sửa thông tin diễn viên
   </h3>
   <div class="box500">
      <form class="addPro" action="" method="POST" enctype="multipart/form-data">

         <div class="form-group">
            <label for="name">Tên diễn viên:</label>
            <input type="text" class="form-control" value="<?=$dsdvud['ten']?>" name="name" id="name" placeholder="Nhập tên diễn viên">
         </div>
         <div class="form-group">
            <label for="name">thêm ảnh:</label>
            <input type="file" class="form-control" name="img" id="img" placeholder="">
         </div>

         <div class="form-group">
            <button type="submit" name="btnupdate" class="btn btn-primary">Sửa </button>
         </div>
         <?php if(isset($thongbaoactoredit)): ?>
                        <div class="alert alert-warning">
                            <?= $thongbaoactoredit?>
                        </div>
          <?php endif; unset($thongbaoactoredit); ?>
      </form>
   </div>
</div>