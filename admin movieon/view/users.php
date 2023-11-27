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
         <?php  foreach($dsur as $ur):?>
         <tr>
            <td><?=$ur['ten_user']?></td>
            <td><?=$ur['role']?></td>
            <td><?=$ur['pass']?></td>
            <td><?=$ur['email']?></td>
            <td><img src="upload/user/<?=$ur['img_user']?>" class="rounded-2" style="width: 100px; height: 100px;" alt=""></td>
            <td>
               <a href="index.php?pg=users_update&id=<?=$ur['id_user']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
               <button onclick="delusers(<?=$ur['id_user']?>)" class="btn btn-danger" ><i class="fa-solid fa-trash"></i> Xóa</button>
            </td>
         </tr>
         <?php endforeach;?>
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