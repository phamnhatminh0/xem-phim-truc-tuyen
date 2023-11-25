<div class="main-content">
   <h3 class="title-page">
      kết quả tìm kiếm với từ khóa "<?=$_POST['keyword']?>"
   </h3>
   <div class="d-flex justify-content-end">
      <a href="index.php?pg=movie_add" class="btn btn-primary mb-2">Thêm phim</a>
   </div>
   <table id="example" class="table table-striped" style="width:100%">
      <thead>
         <tr>
         <th>Name</th>
         <th>Năm sản xuất</th>
         <th>img</th>
         <th>trạng thái</th>
         <th>lượt xem</th>
         <th>Mô tả</th>
         <th>Chức năng</th>
         </tr>
      </thead>
      <tbody>
      <?php foreach( $kq as $ds):?>
         <tr>
            <td><?=$ds['ten']?></td>
            <td><?=$ds['namsx']?></td>
            <td><img src="upload/movie/<?=$ds['img']?>" class="rounded-2" style="width: 100px; height: 100px;" alt=""></td>
            <td><?=$ds['trangthai']?></td>
            <td><?=$ds['luotxem']?></td>
            <td><?=$ds['mota']?></td>
            <td>
               <a href="index.php?pg=movie_update&id=<?=$ds['id_phim']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
               <button onclick="delmovie(<?=$ds['id_phim']?>)" class="btn btn-danger" ><i class="fa-solid fa-trash"></i> Xóa</button>
            </td>
         </tr>
            <?php endforeach;?>
      </tbody>
      <tfoot>
         <tr>
         <th>Name</th>
         <th>Năm sản xuất</th>
         <th>img</th>
         <th>trạng thái</th>
         <th>lượt xem</th>
         <th>Mô tả</th>
         <th>Chức năng</th>
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