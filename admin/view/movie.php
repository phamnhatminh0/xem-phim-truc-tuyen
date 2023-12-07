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
        <th>Tên phim</th>
        <th>Năm sản xuất</th>
        <th>Ảnh</th>
        <th>Trạng thái</th>
        <th>Lượt xem</th>
        <th>Mô tả</th>
        <th>Tập phim</th>
        <th>Chức năng</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($dsMovie as $ds) : ?>
        <tr>
          <td><?= $ds['ten'] ?></td>
          <td><?= $ds['namsx'] ?></td>
          <?php
          if ($ds['trangthai'] == 1) {
            echo '<td><img src="../upload/images/Banner/' . $ds['img'] . '" class="rounded-2" style="width: 100px; height: 100px;" alt=""></td>';
          } else {
            echo '<td><img src="../upload/images/phim/' . $ds['img'] . '" class="rounded-2" style="width: 100px; height: 100px;" alt=""></td>';
          }
          ?>
          <td>
            <?php
            switch ($ds['trangthai']) {
              case 0:
                echo 'Phim';
                break;
              case 1:
                echo 'Sắp chiếu';
                break;
              case 2:
                echo 'Độc quyền';
                break;
              default:
                echo 'Không xác định';
                break;
            }
            ?>

          </td>
          <td><?= $ds['luotxem'] ?></td>
          <td><?= $ds['mota'] ?></td>
          <td><?= $ds['tapphim'] ?></td>

          <td>
            <a href="index.php?pg=movie_update&id=<?= $ds['id_phim'] ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
            <button onclick="delmovie(<?= $ds['id_phim'] ?>)" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</button>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <!-- Pagination -->
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item <?= ($page <= 1) ? 'disabled' : '' ?> ">
        <a class="page-link" href="index.php?pg=movie&page=<?= $page - 1 ?>" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <?php for ($i = 1; $i <= $sotrang2; $i++) : ?>
        <li class="page-item <?= ($page == $i) ? 'active' : '' ?>"><a class="page-link" href="index.php?pg=movie&page=<?= $i ?>"><?= $i ?></a></li>
      <?php endfor; ?>
      <li class="page-item <?= ($page >= $sotrang2) ? 'disabled' : '' ?> ">
        <a class="page-link" href="index.php?pg=movie&page=<?= $page + 1 ?>" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Pagination -->
  <!-- <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav> -->
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
    if (kq) {

      window.location = 'index.php?pg=delmovie&id=' + id;
    }
  }
</script>