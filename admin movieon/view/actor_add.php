<div class="main-content">
   <h3 class="title-page">
      Thêm diễn viên
   </h3>
   <?php if(isset($thongbaoactoradd)): ?>
      <div class="alert alert-success">
            <?=$thongbaoactoradd?>
      </div>
   <?php endif; unset($thongbaoactoradd); ?>
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
            <button type="submit" name="btnadd" class="btn btn-primary">Thêm </button>
         </div>
        
      </form>
   </div>
</div>