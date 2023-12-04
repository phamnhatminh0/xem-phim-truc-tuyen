<div class="main-content">
   <h3 class="title-page">
      Danh sách phim
   </h3>
   <div class="d-flex justify-content-center">
      <form action="index.php?pg=movie_search" method="POST">
         <div class="input-group">
            <input type="text" name="keyword" id="keyword" placeholder="Nhập tên phim cần tìm" style="width:500px;padding:5px;">
            <button class="btn btn-primary" type="submit" id="search"><i class="fa-solid fa-magnifying-glass"></i></button>
         </div>
      </form>
   </div>
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
         <?php foreach( $dsMovie as $ds):?>
         <tr>
            <td><?=$ds['ten']?></td>
            <td><?=$ds['namsx']?></td>
            <td><img src="images/movie/<?=$ds['img']?>" class="rounded-2" style="width: 100px; height: 100px;" alt=""></td>
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
   </table>
</div>
</div>
</div>
<script src="assets/js/main.js"></script>
<script>
new DataTable('#example');
</script>
<script>
          function delmovie(id) {
            var kq = confirm("Bạn có muốn xóa  phim  này không ? ");
            if(kq){
               
              window.location = 'index.php?pg=delmovie&id='+id;
            }
          }
</script>