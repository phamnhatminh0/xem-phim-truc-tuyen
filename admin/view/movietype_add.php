<div class="main-content">
   <h3 class="title-page">
      Thêm danh mục
   </h3>
   <?php if(isset($thongbaotheloaiadd)): ?>
            <div class="alert alert-success">
                  <?= $thongbaotheloaiadd?>
            </div>
   <?php endif; unset($thongbaotheloaiadd); ?>
   <?php if(isset($loi)): ?>
               <div class="alert alert-danger">
                     <?= $loi?>
               </div>
   <?php endif; unset($loi); ?>
   <div class="box500">
      <form class="addPro" action="" method="POST">

         <div class="form-group">
            <label for="name">Tên phim:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="">
         </div>
         <div class="form-group">
            <label for="name">Mô tả:</label>
            <input type="text" class="form-control" name="mota" id="mota" placeholder="">
         </div>

         <div class="form-group">
            <button type="submit" name="btnadd" class="btn btn-primary">Thêm </button>
         </div>
         <?php
            if(isset($tb)&&($tb!="")){ echo $tb;}
         ?>
      </form>
   </div>
</div>