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
            <button type="submit" name="btnupdate" class="btn btn-primary">Sửa </button>
         </div>
         <?php
            if(isset($tb)&&($tb!="")){ echo $tb;}
         ?>
      </form>
   </div>
</div>