<div class="main-content">
   <h3 class="title-page">
      Danh sách người dùng
   </h3>
   
   <table id="example" class="table table-striped" style="width:100%">
      <thead>
         <tr>
            <th>name</th>
            <th>role</th>
            <th>pass</th>
            <th>email</th>
            <th>img</th>
            <th>Chức năng</th>
         </tr>
      </thead>
      <tbody>
      <?php foreach ($dsur as $ur) : ?>
            <tr>
               <td><?= $ur['ten_user'] ?></td>
               <td><?= $ur['role'] ?></td>
               <td><?= $ur['ngaydk'] ? date_format(date_create($ur['ngaydk']), 'd/m/Y') : '' ?></td>
               <td><?= $ur['ngayhethan'] ? date_format(date_create($ur['ngayhethan']), 'd/m/Y') : '' ?></td>
               <td>
                  <?php
                  if ($ur['ngaydk'] && $ur['ngayhethan']) {
                     $ngaydk = date_create($ur['ngaydk']);
                     $ngayhethan = date_create($ur['ngayhethan']);
                     if ($ngaydk > $ngayhethan) {
                        echo '0 ngày';
                     } else {
                        $so_ngay_con_lai = date_diff($ngaydk, $ngayhethan)->format('%a');
                        echo $so_ngay_con_lai . ' ngày';
                     }
                  } else {
                     echo '0 ngày';
                  }

                  ?>
               </td>

               <td><?= $ur['email'] ?></td>
               <td><img src="../Upload/images/user/<?= $ur['img_user'] ?>" class="rounded-2" style="width: 100px; height: 100px;" alt=""></td>
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
            if(kq){
              window.location = 'index.php?pg=delusers&id='+id;
            }
          }
</script>