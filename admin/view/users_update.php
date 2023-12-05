<div class="main-content">
   <h3 class="title-page">
      Sửa user
   </h3>
   <?php if(isset($tbUserEdit)): ?>
               <div class="alert alert-warning">
                     <?= $tbUserEdit?>
               </div>
   <?php endif; unset($tbUserEdit); ?>
   <div class="box500">
      <form class="addPro" action="" method="POST" enctype="multipart/form-data">

         <label for="name">Tên user:</label><br>
         <label for="name" class="form-control"><?= $uptk['ten_user'] ?></label>
         <div class="form-group">
            <div class="form-group">
               <label for="ngay">Ngày bắt đầu:</label><br>
               <label for="ngay" class="form-control">
                  <?= empty($uptk['ngaydk']) ? date('Y-m-d') : $uptk['ngaydk'] ?>
               </label>
            </div>
            <div class="form-group">
               <label for="ngaykt">Ngày kết thúc:</label>
               <input type="date" class="form-control" name="ngayhethan" id="ngaykt" value="<?= $uptk['ngayhethan'] ?>">
            </div>

            <div class="form-group">
               <label for="name">role:</label>
               <select class="form-select" name="role" id="role">
                  <option value="0" <?= ($uptk['role'] == 0) ? 'selected' : '' ?>>khách hàng</option>
                  <option value="1" <?= ($uptk['role'] == 1) ? 'selected' : '' ?>>khách hàng vip</option>
                  <option value="2" <?= ($uptk['role'] == 2) ? 'selected' : '' ?>>admin</option>
               </select>
            </div>
            <div class="form-group">
               <button type="submit" name="btnupdate" class="btn btn-primary">Sửa </button>
            </div>
            <?php
            if (isset($tb) && ($tb != "")) {
               echo $tb;
            }
            ?>
      </form>
   </div>
</div>