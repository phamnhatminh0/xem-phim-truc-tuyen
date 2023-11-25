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
            <th>id_loai</th>
            <th>Tên phim</th>
            <th>Mô tả</th>
            <th>Salary</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach($dstl as $dm):?>
         <tr>
            <td><?=$dm['id_loai']?></td>
            <td><?=$dm['ten']?></td>
            <td><?=$dm['mota']?></td>
            <td>
               <a href="index.php?pg=movietype_update&id=<?=$dm['id_loai']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
               <button onclick="delmovietype(<?=$dm['id_loai']?>)" class="btn btn-danger" ><i class="fa-solid fa-trash"></i> Xóa</button>
               <!-- <a href="index.php?pg=delmovietype&id=<?=$dm['id_loai']?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a> -->
            </td>
         </tr>
        <?php endforeach;?>
      </tbody>
      <tfoot>
         <tr>
            <th>id_loai</th>
            <th>Tên phimn</th>
            <th>Mô tả</th>
            <th>Salary</th>
         </tr>
      </tfoot>
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