<div class="main-content">
   <h3 class="title-page">
      Thể loại phim
   </h3>
   <div class="d-flex justify-content-end">
      <a href="index.php?pg=movietype_add" class="btn btn-primary mb-2">Thêm loại phim</a>
   </div>
   <table id="example" class="table table-striped" style="width:100%">
      <thead>
         <tr>
           
            <th>Tên loại</th>
            <th>Mô tả</th>
            <th>Chức năng</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach($dstl as $dm):?>
         <tr>
          
            <td><?=$dm['tentl']?></td>
            <td><?=$dm['mota']?></td>
            <td>
               <a href="index.php?pg=movietype_update&id=<?=$dm['id_loai']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
               <button onclick="delmovietype(<?=$dm['id_loai']?>)" class="btn btn-danger" ><i class="fa-solid fa-trash"></i> Xóa</button>
               <!-- <a href="index.php?pg=delmovietype&id=<?=$dm['id_loai']?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a> -->
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
          function delmovietype(id) {
            var kq = confirm("Bạn có muốn xóa thể loại phim  này không ? ");
            if(kq){
              window.location = 'index.php?pg=delmovietype&id='+id;
            }
          }
</script>