<div class="main-content">
    <h3 class="title-page">
        Danh sách gói
    </h3>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>

                <th>Tên User</th>
                <th>Ngày đăng ký</th>
                <th>Ngày hết hạng</th>
                <th>Giá trị</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tkgoivip as $ds) : ?>
                <tr>

                    <td><?= $ds['ten_user'] ?></td>
                    <td><?= $ds['ngaydk'] ?></td>
                    <td><?= $ds['ngayhethan'] ?></td>
                    <td><?= $ds['giatri'] ?></td>
                    <td>
                        <button onclick="delpackage(<?= $ds['id_giaodich'] ?>)" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</button>
                    </td>
                </tr>
            <?php endforeach; ?>
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
        if (kq) {
            window.location = 'index.php?pg=deluserPackage&id=' + id;
        }
    }
</script>