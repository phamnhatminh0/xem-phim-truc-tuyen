<div class="main-content">
   <h3 class="title-page">
      Sửa user
   </h3>
   <?php if (isset($tbUserEdit)) : ?>
      <div class="alert alert-warning">
         <?= $tbUserEdit ?>
      </div>
   <?php endif;
   unset($tbUserEdit); ?>
   <div class="box500">
      <form class="addPro" action="" method="POST" enctype="multipart/form-data">

         <div class="form-group">
            <label for="name">Tên user:</label>
            <input type="text" class="form-control" value="<?= $uptk['ten_user'] ?>" name="name" id="name" placeholder="Nhập tên danh mục">
         </div>
         <div class="form-group">
            <label for="name"> pass:</label>
            <input type="text" class="form-control" value="<?= $uptk['pass'] ?>" name="pass" id="pass" placeholder="Nhập tên danh mục">
         </div>
         <div class="form-group">
            <label for="name">email:</label>
            <input type="text" class="form-control" value="<?= $uptk['email'] ?>" name="email" id="email" placeholder="Nhập tên danh mục">
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
            <label for="name">thêm ảnh:</label>
            <input type="file" class="form-control" name="img" id="img" placeholder="Nhập tên danh mục">
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