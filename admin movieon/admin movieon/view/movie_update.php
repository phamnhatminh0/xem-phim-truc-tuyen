<div class="main-content">
   <h3 class="title-page">
      Sửa phim
   </h3>
   <?php if(isset($tbMovieEdit)): ?>
   <div class="alert alert-warning">
         <?= $tbMovieEdit?>
   </div>
   <?php endif; unset($tbMovieEdit); ?>
   <div class="box500">
      <form class="addPro" action="" method="POST" enctype="multipart/form-data">

         <div class="form-group">
            <label for="name">Tên phim:</label>
            <input type="text" class="form-control" value="<?=$movie_getId['ten']?>" name="name" id="name" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Năm sản xuất:</label>
            <input type="text" class="form-control" value="<?=$movie_getId['namsx']?>" name="namsx" id="namsx" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Lượt xem:</label>
            <input type="text" class="form-control" value="<?=$movie_getId['luotxem']?>" name="luotxem" id="luotxem" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Mô tả:</label>
            <input type="text" class="form-control" value="<?=$movie_getId['mota']?>" name="mota" id="mota" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">trangthai:</label>
            <select class="form-select" name="trangthai" id="trangthai">
                <option value="0"  <?=($movie_getId['trangthai']==0)?'selected':''?>>0</option>
                <option value="1"  <?=($movie_getId['trangthai']==1)?'selected':''?>>1</option>
                <option value="2"  <?=($movie_getId['trangthai']==2)?'selected':''?>>2</option>
                <option value="3"  <?=($movie_getId['trangthai']==2)?'selected':''?>>3</option>
              </select>
         </div>
         <div class="form-group">
            <label for="name">Chọn hình ảnh:</label>
            <input type="file" class="form-control" name="img" id="img" placeholder="">
         </div>

         <div class="form-group">
            <button type="submit" name="btnupdate" class="btn btn-primary">Sửa</button>
         </div>
         <?php
            if(isset($tb)&&($tb!="")){ echo $tb;}
         ?>
      </form>
   </div>
</div>