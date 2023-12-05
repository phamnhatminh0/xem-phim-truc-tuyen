<div class="main-content">
   <h3 class="title-page">
      Danh sách diễn viên
   </h3>
   <div class="d-flex justify-content-end">
      <a href="index.php?pg=actor_add" class="btn btn-primary mb-2">Thêm diễn viên</a>
   </div>
   <table id="example" class="table table-striped" style="width:100%">
      <thead>
         <tr>
           
            <th>Tên diễn viên</th>
            <th>ảnh</th>
            <th>Chức năng</th>
         </tr>
      </thead>
      <tbody>
      <?php foreach($dsdv as $dv):?>
         <tr>
           
            <td><?=$dv['ten_dv']?></td>
            <td><img src="images/actor/<?=$dv['img_dv']?>" class="rounded-2" style="width: 100px; height: 100px;" alt=""></td>
            <td>
               <a href="index.php?pg=actor_update&id=<?=$dv['id_dienvien']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
               <button onclick="delactor(<?=$dv['id_dienvien']?>)" class="btn btn-danger" ><i class="fa-solid fa-trash"></i> Xóa</button>
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
          function delactor(id) {
            var kq = confirm("Bạn có chắc muốn xóa diễn viên này không ? ");
            if(kq){
              window.location = 'index.php?pg=delactor&id='+id;
            }
          }
</script>