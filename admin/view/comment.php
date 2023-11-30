<div class="main-content">
   <h3 class="title-page">
      Danh sách bình luận 
   </h3>

   <table id="example" class="table table-striped" style="width:100%">
      <thead>
         <tr>
            <th>Tên người dùng</th>
            <th>Nội dung bình luận</th>
            <th>Tên phim</th>
            <th>Ngày bình luận</th>
            <th>Chức năng</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach( $dsbl as $bl):?>
         <tr>
            <td><?=$bl['ten_user']?></td>
            <td><?=$bl['noidung']?></td>
            <td><?=$bl['ten']?></td>
            <td><?=$bl['ngaybl']?></td>
            <td>
            <button onclick="delcm(<?=$bl['id_binhluan']?>)" class="btn btn-danger" ><i class="fa-solid fa-trash"></i> Xóa</button>
            </td>
         </tr>
               <?php  endforeach;?>
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
          function delcm(id) {
            var kq = confirm("Bạn có chắc muốn xóa bình luận này không ? ");
            if(kq){
              window.location = 'index.php?pg=delcomment&id='+id;
            }
          }
</script>