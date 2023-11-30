<div class="main-content">
   <h3 class="title-page">
      kết quả tìm kiếm với từ khóa: "<?=$_GET['keyword']?>"
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
   <!-- Pagination -->
   <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item <?=($page<=1)?'disabled':''?> ">
      <a class="page-link" href="index.php?pg=movie_search&keyword=<?=$_GET['keyword']?>&page=<?=$page-1?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php for($i=1;$i<=$sotrang;$i++):?>
    <li class="page-item <?=($page==$i)?'active':''?>"><a class="page-link" href="index.php?pg=movie_search&keyword=<?=$_GET['keyword']?>&page=<?=$i?>"><?=$i?></a></li>
     <?php endfor;?> 
    <li class="page-item <?=($page>=$sotrang)?'disabled':''?> ">
      <a class="page-link" href="index.php?pg=movie_search&keyword=<?=$_GET['keyword']?>&page=<?=$page+1?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

   <!-- Pagination -->
</div>

<script src="assets/js/main.js"></script>
<script>
new DataTable('#example');
</script>