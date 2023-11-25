<div class="main-content">
   <h3 class="title-page">
      Thêm danh mục
   </h3>
   <?php if(isset($tbMovieAdd)): ?>
   <div class="alert alert-success">
         <?= $tbMovieAdd?>
   </div>
   <?php endif; unset($tbMovieAdd); ?>
   <div class="box500">
      <form class="addPro" action="" method="POST" enctype="multipart/form-data">

         <div class="form-group">
            <label for="name">Tên phim:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Năm sản xuất:</label>
            <input type="text" class="form-control" name="namsx" id="namsx" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Lượt xem:</label>
            <input type="text" class="form-control" name="luotxem" id="luotxem" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Mô tả:</label>
            <input type="text" class="form-control" name="mota" id="mota" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">trạng thái:</label>
            <input type="text" class="form-control" name="trangthai" id="trangthai" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Chọn hình ảnh:</label>
            <input type="file" class="form-control" name="img" id="img" placeholder="">
         </div>

         <div class="form-group">
            <button type="submit" name="btnadd" class="btn btn-primary">Thêm danh mục</button>
         </div>
         <?php
            if(isset($tb)&&($tb!="")){ echo $tb;}
         ?>
      </form>
   </div>
</div>