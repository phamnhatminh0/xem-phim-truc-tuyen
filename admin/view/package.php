<div class="main-content">
   <h3 class="title-page">
      Danh sách gói
   </h3>
   <div class="d-flex justify-content-end">
      <a href="index.php?pg=package_add" class="btn btn-primary mb-2">Thêm gói</a>
   </div>
   <table id="example" class="table table-striped" style="width:100%">
      <thead>
         <tr>
        
            <th>Giá trị</th>
            <th>Nội dung</th>
            <th>Tên gói</th>
            <th>Chức năng</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach($dsgoi as $ds):?>
         <tr>
         
            <td><?=$ds['giatri']?></td>
            <td><?=$ds['noidung']?></td>
            <td><?=$ds['ten_goi']?></td>
            <td>
               <a href="index.php?pg=package_edit&id=<?=$ds['id_goi']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
               <button onclick="delpackage(<?=$ds['id_goi']?>)" class="btn btn-danger" ><i class="fa-solid fa-trash"></i> Xóa</button>
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
          function delpackage(id) {
            var kq = confirm("Bạn có chắc muốn xóa gói  này không ? ");
            if(kq){
              window.location = 'index.php?pg=delpackage&id='+id;
            }
          }
</script>