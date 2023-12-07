<div class="main-content">
   <h3 class="title-page">
      Danh sách người dùng
   </h3>

   <table id="example" class="table table-striped" style="width:100%">
      <thead>
         <tr>
            <th>Tên User</th>
            <th>Quyền</th>
            <th>Email</th>
            <th>Ảnh</th>
            <th>Chức năng</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($dsur as $ur) : ?>
            <tr>
               <td><?= $ur['ten_user'] ?></td>
               <td>
                  <?php
                  switch ($ur['role']) {
                     case 0:
                        echo 'Khách hàng';
                        break;
                     case 1:
                        echo 'VIP';
                        break;
                     case 2:
                        echo 'Admin';
                        break;
                     default:
                        echo 'Không xác định';
                        break;
                  }
                  ?>
               </td>

               <td><?= $ur['email'] ?></td>
               <td><img src="../upload/images/user/<?= $ur['img_user'] ?>" class="rounded-2" style="width: 100px; height: 100px;" alt=""></td>
               <td>
                  <a href="index.php?pg=users_update&id=<?= $ur['id_user'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                  <button onclick="delusers(<?= $ur['id_user'] ?>)" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</button>
               </td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>
</div>
</div>
</div>
<script src="assets/js/main.js"></script>
<script>
   new DataTable('#example');
</script>
<script>
   function delusers(id) {
      var kq = confirm("Bạn có chắc muốn xóa người dùng này không ? ");
      if (kq) {
         window.location = 'index.php?pg=delusers&id=' + id;
      }
   }
</script>